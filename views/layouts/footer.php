    </div><!-- /.main-wrapper -->
  </div><!-- /.app-container -->

  <!-- FLOATING CHATBOT VIRTUAL ASSISTANT (HU-26) -->
  <button class="chatbot-trigger" id="chatTrigger" title="Abrir Asistente Virtual" aria-label="Asistente virtual">
    <i data-lucide="message-square"></i>
  </button>

  <div class="chatbot-window" id="chatWindow">
    <div class="chatbot-header">
      <div class="chatbot-avatar"><i data-lucide="bot"></i></div>
      <div class="chatbot-info">
        <h4>EtapaBot · Asistente SENA</h4>
        <span>En línea · Responde al instante</span>
      </div>
      <button class="chatbot-close" id="chatClose" aria-label="Cerrar chat">
        <i data-lucide="x"></i>
      </button>
    </div>
    
    <!-- Messages list -->
    <div class="chatbot-messages" id="chatMessages">
      <div class="chat-bubble bot">
        ¡Hola! 👋 Soy <strong>EtapaBot</strong>, tu asistente virtual del sistema de Etapa Productiva.<br><br>
        Puedo orientarte sobre bitácoras, documentos, seguimientos de práctica y más. ¿Cuál es tu duda hoy?
      </div>
    </div>
    
    <!-- Quick recommendations -->
    <div style="padding: 10px; display: flex; flex-wrap: wrap; gap: 6px; border-top: 1px solid var(--border-color); background: var(--bg-primary);">
      <button class="btn btn-ghost btn-sm" onclick="sendQuickReply('¿Cuándo se entregan las bitácoras?')">Entrega bitácoras</button>
      <button class="btn btn-ghost btn-sm" onclick="sendQuickReply('¿Qué documentos necesito?')">Documentos</button>
      <button class="btn btn-ghost btn-sm" onclick="sendQuickReply('¿Cómo agendo un seguimiento?')">Seguimientos</button>
    </div>

    <!-- Message input -->
    <div class="chatbot-input-area">
      <input type="text" class="chatbot-input" id="chatInput" placeholder="Escribe tu mensaje..." aria-label="Texto de mensaje">
      <button class="chatbot-send" id="chatSend" aria-label="Enviar mensaje">
        <i data-lucide="send"></i>
      </button>
    </div>
  </div>

  <!-- MODAL GLOBAL: Logout Confirm -->
  <div class="modal-overlay" id="modalLogoutConfirm">
    <div class="modal-container" style="max-width:420px;">
      <div class="modal-header">
        <h3><i data-lucide="log-out" style="width:18px;height:18px;margin-right:8px;vertical-align:middle;color:var(--status-error);"></i>Cerrar Sesión</h3>
        <button class="modal-close" onclick="closeModal('modalLogoutConfirm')"><i data-lucide="x"></i></button>
      </div>
      <div class="modal-body" style="text-align:center;padding:32px 24px;">
        <div class="logout-modal-icon">
          <i data-lucide="log-out" style="width:30px;height:30px;"></i>
        </div>
        <p style="font-size:15px;font-weight:700;margin-bottom:8px;">¿Deseas cerrar sesión?</p>
        <p style="font-size:13px;color:var(--text-muted);line-height:1.6;">Tu sesión será terminada y deberás ingresar nuevamente con tus credenciales institucionales.</p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-ghost" onclick="closeModal('modalLogoutConfirm')">Cancelar</button>
        <button class="btn btn-danger" onclick="closeModal('modalLogoutConfirm'); navigateTo('view-login');">
          <i data-lucide="log-out"></i> Sí, cerrar sesión
        </button>
      </div>
    </div>
  </div>

  <!-- Main Consolidated JS Script -->
  <script src="/public/js/app.js"></script>

  <!-- Additional global helpers -->
  <script>
    // Show/hide password toggle (global)
    function togglePassField(id, btn) {
      const input = document.getElementById(id);
      if (!input) return;
      const icon = btn.querySelector('i');
      if (input.type === 'password') {
        input.type = 'text';
        if (icon) icon.setAttribute('data-lucide', 'eye-off');
      } else {
        input.type = 'password';
        if (icon) icon.setAttribute('data-lucide', 'eye');
      }
      if (window.lucide) window.lucide.createIcons();
    }
    // Alias for login view togglePass
    function togglePass(id, btn) { togglePassField(id, btn); }
  </script>
</body>
</html>
