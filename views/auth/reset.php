<!-- VIEW: RESET (HU-03.4 & HU-03.5) -->
<div class="view-content" id="view-reset" style="padding: 0; display: flex; align-items: center; justify-content: center; min-height: calc(100vh - 72px);">
  
  <div class="login-container" style="max-width: 500px; min-height: 0;">
    <div class="form-section" style="width: 100%; padding: 48px;">
      <div class="form-container" style="max-width: 100%;">
        <div style="margin-bottom: 24px; text-align: center;">
          <div class="logo-icon" style="margin: 0 auto 16px; width: 48px; height: 48px; font-size: 24px;">
            <i data-lucide="lock"></i>
          </div>
          <h2 style="font-size: 22px; margin-bottom: 6px;">Restablecer contraseña</h2>
          <p style="font-size: 13px; color: var(--text-muted);">Establece una nueva contraseña de acceso segura para tu cuenta.</p>
        </div>

        <form id="resetForm" novalidate onsubmit="event.preventDefault(); handleReset();">
          <div class="form-group">
            <label for="newPass" class="form-label">Nueva contraseña</label>
            <input type="password" id="newPass" class="form-control" placeholder="••••••••" required oninput="checkPasswordStrength(this.value, 'resetStrengthBar', 'resetStrengthLabel')">
            <div id="resetStrengthBar" style="width: 0%; height: 0; margin-top: 6px; transition: width 0.3s ease;"></div>
            <span class="form-hint" id="resetStrengthLabel">La contraseña debe tener mínimo 8 caracteres, incluir letras y números.</span>
          </div>

          <div class="form-group">
            <label for="confirmPass" class="form-label">Confirmar contraseña</label>
            <input type="password" id="confirmPass" class="form-control" placeholder="••••••••" required>
            <span class="form-error-text">Las contraseñas no coinciden.</span>
          </div>

          <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 8px;">
            <i data-lucide="check"></i>
            <span>Restablecer contraseña</span>
          </button>
        </form>
      </div>
    </div>
  </div>

</div>

<script>
function handleReset() {
  if (validateForm('resetForm')) {
    const newPass = document.getElementById('newPass').value;
    const confirmPass = document.getElementById('confirmPass').value;

    // Check strength
    if (newPass.length < 8 || !/[a-zA-Z]/.test(newPass) || !/[0-9]/.test(newPass)) {
      showToast('La contraseña nueva no cumple con los requisitos mínimos de seguridad.', 'error');
      return;
    }

    // Check match
    if (newPass !== confirmPass) {
      const confirmInput = document.getElementById('confirmPass');
      confirmInput.classList.add('is-invalid');
      const errText = confirmInput.parentNode.querySelector('.form-error-text');
      if (errText) {
        errText.textContent = 'Las contraseñas no coinciden.';
        errText.style.display = 'block';
      }
      showToast('Las contraseñas ingresadas no coinciden.', 'error');
      return;
    }

    // Success (HU-03 Scenario 3.4)
    showToast('Contraseña restablecida exitosamente.', 'success');
    setTimeout(() => {
      navigateTo('view-login');
    }, 1500);
  }
}
</script>
