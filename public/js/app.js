/* ==========================================================================
   EtapaPro SENA - Unified Premium Vanilla JS
   ========================================================================== */

document.addEventListener('DOMContentLoaded', () => {
  // Initialize lucide icons
  if (window.lucide) {
    window.lucide.createIcons();
  }

  // --- GLOBAL VARIABLES & STATE ---
  let currentRole = 'aprendiz'; // Default role

  // --- ROUTING / SCREEN SYSTEM ---
  function navigateTo(viewId) {
    const screens = document.querySelectorAll('.view-content');
    let targetScreen = document.getElementById(viewId);
    
    if (!targetScreen) return;

    screens.forEach(screen => {
      screen.classList.remove('active');
    });

    targetScreen.classList.add('active');

    // Toggle auth-layout class to hide sidebar and header on auth views
    const appContainer = document.querySelector('.app-container');
    if (appContainer) {
      if (['view-login'].includes(viewId)) {
        appContainer.classList.add('auth-layout');
      } else {
        appContainer.classList.remove('auth-layout');
      }
    }

    // Sync active state in sidebars
    const navLinks = document.querySelectorAll('.sidebar-menu .menu-item');
    navLinks.forEach(link => {
      link.classList.remove('active');
      if (link.getAttribute('data-view') === viewId) {
        link.classList.add('active');
      }
    });

    // Close notifications panel
    const notifPanel = document.getElementById('notifPanel');
    if (notifPanel) notifPanel.classList.remove('show');
  }

  // Expose navigateTo globally so inline onclick attributes work
  window.navigateTo = navigateTo;

  // Bind navigation to sidebar items
  document.querySelectorAll('.sidebar-menu').forEach(menu => {
    menu.addEventListener('click', (e) => {
      const menuItem = e.target.closest('.menu-item');
      if (menuItem) {
        const viewId = menuItem.getAttribute('data-view');
        if (viewId) {
          e.preventDefault();
          navigateTo(viewId);
        }
      }
    });
  });

  // --- SIMULATOR: ROLE SELECTOR ---
  const roleSelect = document.getElementById('roleSelect');
  if (roleSelect) {
    roleSelect.addEventListener('change', (e) => {
      const selected = e.target.value;
      setRole(selected);
    });
  }

  function setRole(role, shouldNavigate = true) {
    currentRole = role;
    
    // Update sidebar profiles
    const sidebarAvatar = document.querySelector('.sidebar-footer .user-avatar');
    const sidebarName = document.querySelector('.sidebar-footer .user-info h4');
    const sidebarRoleText = document.querySelector('.sidebar-footer .user-info span');

    const headerAvatar = document.querySelector('.top-header .user-avatar');
    const headerName = document.querySelector('.top-header .user-info h4');
    const headerRoleText = document.querySelector('.top-header .user-info span');

    // Define role profiles
    const profiles = {
      aprendiz: { name: 'Carlos A. Guerrero', roleText: 'Aprendiz · ADSO', avatar: 'CG', defaultView: 'view-dashboard-aprendiz' },
      instructor: { name: 'Ing. María Rodríguez', roleText: 'Instructor Seguimiento', avatar: 'MR', defaultView: 'view-dashboard-instructor' },
      coordinador: { name: 'Aarón J. Cadena', roleText: 'Coordinador Académico', avatar: 'AC', defaultView: 'view-dashboard-coordinador' }
    };

    const profile = profiles[role] || profiles.aprendiz;

    // Apply profiles text
    if (sidebarAvatar) sidebarAvatar.textContent = profile.avatar;
    if (sidebarName) sidebarName.textContent = profile.name;
    if (sidebarRoleText) sidebarRoleText.textContent = profile.roleText;

    if (headerAvatar) headerAvatar.textContent = profile.avatar;
    if (headerName) headerName.textContent = profile.name;
    if (headerRoleText) headerRoleText.textContent = profile.roleText;

    // Show/hide menu items based on roles
    document.querySelectorAll('.sidebar-menu .menu-item').forEach(item => {
      const allowedRoles = item.getAttribute('data-roles');
      if (allowedRoles) {
        if (allowedRoles.includes(role)) {
          item.style.display = 'block';
        } else {
          item.style.display = 'none';
        }
      } else {
        item.style.display = 'block'; // Common items
      }
    });

    // Navigate to role default dashboard
    if (shouldNavigate) {
      navigateTo(profile.defaultView);
      showToast(`Rol cambiado a: ${profile.name}`, 'info');
    }
  }

  // --- TOAST NOTIFICATIONS SYSTEM ---
  window.showToast = function(message, type = 'success') {
    let container = document.querySelector('.toast-container');
    if (!container) {
      container = document.createElement('div');
      container.className = 'toast-container';
      document.body.appendChild(container);
    }

    const toast = document.createElement('div');
    toast.className = `toast ${type}`;
    
    // Choose icon based on type
    let iconName = 'check-circle';
    if (type === 'warning') iconName = 'alert-triangle';
    if (type === 'error') iconName = 'alert-circle';
    if (type === 'info') iconName = 'info';

    toast.innerHTML = `
      <i data-lucide="${iconName}"></i>
      <span>${message}</span>
    `;
    container.appendChild(toast);
    
    if (window.lucide) {
      window.lucide.createIcons();
    }

    // Auto remove toast after 3.5s
    setTimeout(() => {
      toast.style.animation = 'toastOut 0.3s forwards';
      setTimeout(() => toast.remove(), 300);
    }, 3500);
  };

  // --- MODALS ENGINE ---
  window.openModal = function(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
      modal.classList.add('show');
      modal.setAttribute('aria-hidden', 'false');
    }
  };

  window.closeModal = function(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
      modal.classList.remove('show');
      modal.setAttribute('aria-hidden', 'true');
    }
  };

  // Close modals when clicking close buttons
  document.body.addEventListener('click', (e) => {
    const btn = e.target.closest('.modal-close, .btn-close-modal');
    if (btn) {
      const modal = btn.closest('.modal-overlay');
      if (modal) {
        closeModal(modal.id);
      }
    }
    
    // Close modal when clicking on the overlay backdrop
    if (e.target.classList.contains('modal-overlay')) {
      closeModal(e.target.id);
    }
  });

  // --- DRAG & DROP ZONE (DROPZONE) ---
  const dropzones = document.querySelectorAll('.dropzone');
  dropzones.forEach(zone => {
    const input = zone.querySelector('input[type="file"]');
    
    zone.addEventListener('click', () => input.click());

    // Highlight on drag over
    ['dragenter', 'dragover'].forEach(eventName => {
      zone.addEventListener(eventName, (e) => {
        e.preventDefault();
        zone.style.borderColor = 'var(--primary)';
        zone.style.backgroundColor = 'var(--bg-glass-hover)';
      }, false);
    });

    ['dragleave', 'drop'].forEach(eventName => {
      zone.addEventListener(eventName, (e) => {
        e.preventDefault();
        zone.style.borderColor = 'var(--border-color)';
        zone.style.backgroundColor = 'var(--bg-primary)';
      }, false);
    });

    zone.addEventListener('drop', (e) => {
      const dt = e.dataTransfer;
      const files = dt.files;
      if (files.length) {
        input.files = files;
        validateAndShowFile(zone, files[0]);
      }
    });

    input.addEventListener('change', () => {
      if (input.files.length) {
        validateAndShowFile(zone, input.files[0]);
      }
    });
  });

  function validateAndShowFile(zone, file) {
    const allowedExtensions = ['.pdf', '.docx', '.jpg', '.png'];
    const maxBytes = 10 * 1024 * 1024; // 10MB
    const ext = file.name.substring(file.name.lastIndexOf('.')).toLowerCase();

    // Check extension
    if (!allowedExtensions.includes(ext)) {
      showToast('Formato no permitido. Solo se aceptan PDF, DOCX, JPG o PNG.', 'error');
      zone.querySelector('input[type="file"]').value = '';
      return;
    }

    // Check size
    if (file.size > maxBytes) {
      showToast('El archivo excede el tamaño máximo permitido (10 MB).', 'error');
      zone.querySelector('input[type="file"]').value = '';
      return;
    }

    // Render Preview
    zone.innerHTML = `
      <i data-lucide="file-check" style="color: var(--primary)"></i>
      <p class="dropzone-title" style="color: var(--primary)">${file.name}</p>
      <p class="dropzone-sub">${(file.size / 1024 / 1024).toFixed(2)} MB · Listo para cargar</p>
      <span style="font-size: 10px; color: var(--text-muted);">Haz clic para cambiar de archivo</span>
      <input type="file" accept=".pdf,.doc,.docx,.jpg,.png" style="display: none;">
    `;
    
    // Bind click trigger again for replaced input
    const newInput = zone.querySelector('input[type="file"]');
    newInput.addEventListener('change', () => {
      if (newInput.files.length) {
        validateAndShowFile(zone, newInput.files[0]);
      }
    });

    if (window.lucide) {
      window.lucide.createIcons();
    }
  }

  // --- FLOATING CHATBOT SIMULATION ---
  const chatTrigger = document.getElementById('chatTrigger');
  const chatWindow = document.getElementById('chatWindow');
  const chatClose = document.getElementById('chatClose');
  const chatInput = document.getElementById('chatInput');
  const chatSend = document.getElementById('chatSend');
  const chatMessages = document.getElementById('chatMessages');

  if (chatTrigger) {
    chatTrigger.addEventListener('click', () => {
      chatWindow.classList.toggle('show');
      if (chatWindow.classList.contains('show')) {
        chatMessages.scrollTop = chatMessages.scrollHeight;
        chatInput.focus();
      }
    });
  }

  if (chatClose) {
    chatClose.addEventListener('click', () => {
      chatWindow.classList.remove('show');
    });
  }

  if (chatSend) {
    chatSend.addEventListener('click', sendChatMessage);
  }

  if (chatInput) {
    chatInput.addEventListener('keydown', (e) => {
      if (e.key === 'Enter') {
        e.preventDefault();
        sendChatMessage();
      }
    });
  }

  // Quick replies mapping
  window.sendQuickReply = function(questionText) {
    if (chatInput) {
      chatInput.value = questionText;
      sendChatMessage();
    }
  };

  const botResponses = {
    bitacora: 'Las bitácoras quincenales deben entregarse en los primeros 3 días hábiles tras finalizar la quincena. Tienes hasta un máximo de 6 bitácoras durante tu etapa productiva.',
    documentos: 'Los documentos clave a cargar en la carpeta digital son: Contrato de Aprendizaje, Plan de Trabajo Concertado, Seguro Estudiantil ARL y Formato F123.',
    seguimiento: 'Debes completar 2 seguimientos obligatorios (parcial y final) con tu instructor asignado para poder certificar tu etapa productiva.',
    default: 'Entendido. Te recomiendo validar esta duda con tu instructor asignado o revisar el reglamento de etapa productiva del SENA.'
  };

  function sendChatMessage() {
    const text = chatInput.value.trim();
    if (!text) return;

    // User Message
    appendBubble('user', text);
    chatInput.value = '';

    // Show bot typing indicator
    const typing = document.createElement('div');
    typing.className = 'chat-bubble bot skeleton';
    typing.style.padding = '8px 12px';
    typing.style.width = '60px';
    typing.style.height = '30px';
    typing.id = 'botTyping';
    chatMessages.appendChild(typing);
    chatMessages.scrollTop = chatMessages.scrollHeight;

    // Bot Response after 1s delay
    setTimeout(() => {
      const typingEl = document.getElementById('botTyping');
      if (typingEl) typingEl.remove();

      let reply = botResponses.default;
      const lower = text.toLowerCase();
      if (lower.includes('bitacora') || lower.includes('bitácora')) reply = botResponses.bitacora;
      else if (lower.includes('documento') || lower.includes('carpeta') || lower.includes('arl')) reply = botResponses.documentos;
      else if (lower.includes('seguimiento') || lower.includes('cita')) reply = botResponses.seguimiento;

      appendBubble('bot', reply);
    }, 1200);
  }

  function appendBubble(role, message) {
    const bubble = document.createElement('div');
    bubble.className = `chat-bubble ${role}`;
    bubble.innerHTML = message;
    chatMessages.appendChild(bubble);
    chatMessages.scrollTop = chatMessages.scrollHeight;
  }

  // --- NOTIFICATIONS PANEL ---
  const notifBtn = document.getElementById('notifBtn');
  const notifPanel = document.getElementById('notifPanel');

  if (notifBtn && notifPanel) {
    notifBtn.addEventListener('click', (e) => {
      e.stopPropagation();
      notifPanel.classList.toggle('show');
    });

    document.addEventListener('click', (e) => {
      if (!notifPanel.contains(e.target) && !notifBtn.contains(e.target)) {
        notifPanel.classList.remove('show');
      }
    });
  }

  // Mark all notifications as read
  window.markAllNotificationsRead = function() {
    document.querySelectorAll('.db-notif-item--unread').forEach(item => {
      item.classList.remove('db-notif-item--unread');
    });
    const dot = document.querySelector('.notif-badge-dot');
    if (dot) dot.style.display = 'none';
    showToast('Todas las notificaciones marcadas como leídas.', 'success');
  };

  // --- THEME ENGINE: LIGHT / DARK ---
  const themeToggle = document.getElementById('themeToggle');
  if (themeToggle) {
    themeToggle.addEventListener('click', () => {
      const activeTheme = document.documentElement.getAttribute('data-theme');
      const newTheme = activeTheme === 'dark' ? 'light' : 'dark';
      document.documentElement.setAttribute('data-theme', newTheme);
      
      const icon = themeToggle.querySelector('i');
      if (icon) {
        if (newTheme === 'dark') {
          icon.setAttribute('data-lucide', 'sun');
        } else {
          icon.setAttribute('data-lucide', 'moon');
        }
        if (window.lucide) window.lucide.createIcons();
      }
      showToast(`Modo ${newTheme === 'dark' ? 'Oscuro' : 'Claro'} activado`, 'info');
    });
  }

  // --- PASSWORD STRENGTH STYLES (HU-03 / HU-07) ---
  window.checkPasswordStrength = function(pass, barId, labelId) {
    const bar = document.getElementById(barId);
    const label = document.getElementById(labelId);
    
    if (!bar || !label) return;

    bar.style.height = '6px';
    bar.style.borderRadius = '4px';
    bar.style.transition = 'width 0.3s ease';

    if (pass.length === 0) {
      bar.style.width = '0%';
      label.textContent = '';
      return;
    }

    if (pass.length < 8) {
      bar.style.width = '25%';
      bar.style.backgroundColor = 'var(--status-error)';
      label.textContent = 'Fortaleza: Débil (mínimo 8 caracteres)';
      label.style.color = 'var(--status-error)';
      return;
    }

    // Rule check: letters and numbers
    const hasLetters = /[a-zA-Z]/.test(pass);
    const hasNumbers = /[0-9]/.test(pass);
    const hasSpecial = /[!@#$%^&*(),.?":{}|<>]/.test(pass);

    if (!hasLetters || !hasNumbers) {
      bar.style.width = '50%';
      bar.style.backgroundColor = 'var(--status-warning)';
      label.textContent = 'Fortaleza: Regular (debe incluir letras y números)';
      label.style.color = 'var(--status-warning)';
      return;
    }

    if (hasSpecial) {
      bar.style.width = '100%';
      bar.style.backgroundColor = 'var(--status-success)';
      label.textContent = 'Fortaleza: Muy Fuerte';
      label.style.color = 'var(--status-success)';
    } else {
      bar.style.width = '75%';
      bar.style.backgroundColor = 'var(--primary)';
      label.textContent = 'Fortaleza: Buena';
      label.style.color = 'var(--primary)';
    }
  };

  // --- FORM VALIDATOR ENGINE ---
  window.validateForm = function(formId) {
    const form = document.getElementById(formId);
    if (!form) return false;

    let isValid = true;
    const requiredInputs = form.querySelectorAll('.form-control[required]');

    requiredInputs.forEach(input => {
      // Clear errors
      input.classList.remove('is-invalid');
      const errorText = input.parentNode.querySelector('.form-error-text');
      if (errorText) errorText.style.display = 'none';

      // Check empty
      if (!input.value.trim()) {
        isValid = false;
        input.classList.add('is-invalid');
        if (errorText) {
          errorText.textContent = 'Este campo es obligatorio.';
          errorText.style.display = 'block';
        }
      }

      // Check institutional email
      if (input.type === 'email' && input.value.trim()) {
        const value = input.value.trim().toLowerCase();
        if (!value.endsWith('@sena.edu.co') && !value.endsWith('@misena.edu.co')) {
          isValid = false;
          input.classList.add('is-invalid');
          if (errorText) {
            errorText.textContent = 'Debe usar un correo institucional (@sena.edu.co o @misena.edu.co).';
            errorText.style.display = 'block';
          }
        }
      }
    });

    return isValid;
  };

  // --- SIMULATION LOGIC: FORMS TRIGGER ---
  // Login form submit
  const loginForm = document.getElementById('loginForm');
  if (loginForm) {
    loginForm.addEventListener('submit', (e) => {
      e.preventDefault();
      if (validateForm('loginForm')) {
        const email = document.getElementById('email').value.trim();
        const role = email.includes('instructor') ? 'instructor' : (email.includes('coor') ? 'coordinador' : 'aprendiz');
        sessionStorage.setItem('etapapro_role', role);
        showToast(`Sesión iniciada como ${email}`, 'success');
        setTimeout(() => {
          setRole(role);
        }, 800);
      }
    });
  }

  // Cerrar sesión limpia sessionStorage
  window.logoutSession = function() {
    sessionStorage.removeItem('etapapro_role');
  };

  // Returns the default dashboard view for the currently active role
  window.getDashboardView = function() {
    const role = sessionStorage.getItem('etapapro_role') || document.getElementById('roleSelect')?.value || 'aprendiz';
    if (role === 'instructor') return 'view-dashboard-instructor';
    if (role === 'coordinador') return 'view-dashboard-coordinador';
    return 'view-dashboard-aprendiz';
  };

  // Apply default roles settings on load
  const savedRole = sessionStorage.getItem('etapapro_role');
  if (savedRole) {
    setRole(savedRole, true);
  } else {
    setRole('aprendiz', false);
    navigateTo('view-login');
  }
});
