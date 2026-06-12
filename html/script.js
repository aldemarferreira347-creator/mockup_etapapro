// ─── NAVIGATION ─────────────────────────────────────────────────────────────
document.addEventListener('DOMContentLoaded', function() {
  const navItems = document.querySelectorAll('.sidebar-nav-item');
  const screens = document.querySelectorAll('.screen');

  navItems.forEach(item => {
    item.addEventListener('click', function() {
      const screenId = this.getAttribute('data-screen');
      
      // Update active nav item
      navItems.forEach(nav => nav.classList.remove('active'));
      this.classList.add('active');
      
      // Show corresponding screen
      screens.forEach(screen => {
        screen.classList.remove('active');
        if (screen.id === screenId) {
          screen.classList.add('active');
        }
      });
    });
  });
});

// ─── TIME SLOT SELECTION (CITAS) ────────────────────────────────────────────
const timeSlots = document.querySelectorAll('.time-slot-btn');
const citaResumen = document.getElementById('cita-resumen');
const selectedHora = document.getElementById('selected-hora');

timeSlots.forEach(slot => {
  if (!slot.classList.contains('busy')) {
    slot.addEventListener('click', function() {
      // Remove selected class from all slots
      timeSlots.forEach(s => s.classList.remove('selected'));
      
      // Add selected class to clicked slot
      this.classList.add('selected');
      
      // Update resumen
      const time = this.getAttribute('data-time');
      selectedHora.textContent = time;
      citaResumen.style.display = 'block';
    });
  }
});

// ─── CALENDAR VIEW TOGGLE ───────────────────────────────────────────────────
const calendarViewBtns = document.querySelectorAll('.calendar-view-btn');
calendarViewBtns.forEach(btn => {
  btn.addEventListener('click', function() {
    calendarViewBtns.forEach(b => b.classList.remove('active'));
    this.classList.add('active');
  });
});

// ─── MODAL CREAR USUARIO ───────────────────────────────────────────────────
const btnCrearUsuario = document.getElementById('btn-crear-usuario');
const modalCrearUsuario = document.getElementById('modal-crear-usuario');
const btnCerrarModal = document.getElementById('btn-cerrar-modal');
const btnCancelarModal = document.getElementById('btn-cancelar-modal');

if (btnCrearUsuario) {
  btnCrearUsuario.addEventListener('click', function() {
    modalCrearUsuario.style.display = 'flex';
  });
}

if (btnCerrarModal) {
  btnCerrarModal.addEventListener('click', function() {
    modalCrearUsuario.style.display = 'none';
  });
}

if (btnCancelarModal) {
  btnCancelarModal.addEventListener('click', function() {
    modalCrearUsuario.style.display = 'none';
  });
}

// Close modal when clicking outside
if (modalCrearUsuario) {
  modalCrearUsuario.addEventListener('click', function(e) {
    if (e.target === modalCrearUsuario) {
      modalCrearUsuario.style.display = 'none';
    }
  });
}

// ─── ROLES SELECTION ───────────────────────────────────────────────────────
const roleButtons = document.querySelectorAll('[data-role]');
const rolSeleccionado = document.getElementById('rol-seleccionado');
const rolMatriz = document.getElementById('rol-matriz');

const rolePermissions = {
  'Administrador': [true, true, true, true, true, true],
  'Coordinador': [true, true, true, false, true, true],
  'Instructor': [false, true, true, false, true, false],
  'Aprendiz': [false, true, false, false, false, false]
};

roleButtons.forEach(btn => {
  btn.addEventListener('click', function() {
    const role = this.getAttribute('data-role');
    
    // Update active state
    roleButtons.forEach(b => {
      b.classList.remove('active');
      b.style.background = 'var(--bg)';
      b.style.border = '1px solid var(--border)';
      b.style.color = 'var(--dark)';
    });
    
    this.classList.add('active');
    this.style.background = 'var(--primary)';
    this.style.border = '1px solid var(--primary)';
    this.style.color = 'var(--white)';
    
    // Update selected role text
    if (rolSeleccionado) {
      rolSeleccionado.textContent = role;
    }
    if (rolMatriz) {
      rolMatriz.textContent = role;
    }
    
    // Update toggles based on role
    updateTogglesForRole(role);
  });
});

function updateTogglesForRole(role) {
  const permissions = rolePermissions[role] || [false, false, false, false, false, false];
  const toggles = document.querySelectorAll('.toggle');
  
  toggles.forEach((toggle, index) => {
    const permIndex = index % 6;
    const hasPermission = permissions[permIndex];
    
    toggle.classList.remove('on', 'off');
    toggle.classList.add(hasPermission ? 'on' : 'off');
  });
}

// ─── TOGGLE SWITCHES ───────────────────────────────────────────────────────
const toggles = document.querySelectorAll('.toggle');
toggles.forEach(toggle => {
  toggle.addEventListener('click', function() {
    this.classList.toggle('on');
    this.classList.toggle('off');
  });
});

// ─── RADIO BUTTONS (REPORTES) ─────────────────────────────────────────────
const radioButtons = document.querySelectorAll('input[name="tipo"]');
radioButtons.forEach(radio => {
  radio.addEventListener('change', function() {
    const labels = document.querySelectorAll('label input[name="tipo"]');
    labels.forEach(label => {
      const parentLabel = label.closest('label');
      if (label.checked) {
        parentLabel.style.background = 'var(--primary-xlight)';
        parentLabel.style.border = '1px solid var(--primary)';
        parentLabel.style.color = 'var(--primary)';
        parentLabel.style.fontWeight = '600';
      } else {
        parentLabel.style.background = 'var(--bg)';
        parentLabel.style.border = '1px solid var(--border)';
        parentLabel.style.color = 'var(--dark)';
        parentLabel.style.fontWeight = '400';
      }
    });
  });
});

// ─── STAR RATING (EVALUACION) ───────────────────────────────────────────────
const stars = document.querySelectorAll('[style*="font-size: 24px; cursor: pointer"]');
stars.forEach((star, index) => {
  star.addEventListener('click', function() {
    stars.forEach((s, i) => {
      if (i <= index) {
        s.style.color = '#F59E0B';
      } else {
        s.style.color = 'var(--border)';
      }
    });
  });
});
