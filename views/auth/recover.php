<!-- VIEW: RECOVERY (HU-03.1 & HU-03.2) -->
<div class="view-content" id="view-recover" style="padding: 0; display: flex; align-items: center; justify-content: center; min-height: calc(100vh - 72px);">
  
  <div class="login-container" style="max-width: 500px; min-height: 0;">
    <div class="form-section" style="width: 100%; padding: 48px;">
      <div class="form-container" style="max-width: 100%;">
        <div style="margin-bottom: 24px; text-align: center;">
          <div class="logo-icon" style="margin: 0 auto 16px; width: 48px; height: 48px; font-size: 24px;">
            <i data-lucide="key-round"></i>
          </div>
          <h2 style="font-size: 22px; margin-bottom: 6px;">¿Olvidaste tu contraseña?</h2>
          <p style="font-size: 13px; color: var(--text-muted);">Ingresa tu correo institucional y te enviaremos un enlace de recuperación.</p>
        </div>

        <form id="recoverForm" novalidate onsubmit="event.preventDefault(); handleRecover();">
          <div class="form-group">
            <label for="recoverEmail" class="form-label">Correo institucional</label>
            <input type="email" id="recoverEmail" class="form-control" placeholder="usuario@sena.edu.co" required>
            <span class="form-error-text">El correo institucional es obligatorio.</span>
          </div>

          <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 8px;">
            <i data-lucide="send"></i>
            <span>Enviar enlace de recuperación</span>
          </button>
          
          <div style="text-align: center; margin-top: 20px;">
            <a href="#" onclick="navigateTo('view-login')" style="font-size: 13px; font-weight: 600; display: inline-flex; align-items: center; gap: 6px;">
              <i data-lucide="arrow-left" style="width: 16px; height: 16px;"></i>
              Volver al inicio de sesión
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>

</div>

<script>
function handleRecover() {
  if (validateForm('recoverForm')) {
    const email = document.getElementById('recoverEmail').value.trim();
    
    // Simulate recovery response (HU-03 Scenario 3.1 & 3.2)
    if (email === 'admin@sena.edu.co' || email === 'aprendiz@sena.edu.co' || email === 'instructor@sena.edu.co') {
      showToast('Enlace de recuperación enviado. Revisa tu bandeja de entrada.', 'success');
      setTimeout(() => {
        navigateTo('view-reset');
      }, 1000);
    } else {
      showToast('No existe una cuenta asociada a este correo electrónico.', 'error');
    }
  }
}
</script>
