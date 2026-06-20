<!-- VIEW: LOGIN (HU-01) -->
<div class="view-content active" id="view-login" style="padding: 0; display: flex; align-items: center; justify-content: center; min-height: calc(100vh - 72px);">
  
  <div class="login-container">
    <!-- Branding Section (Left Pane) -->
    <div class="branding-section">
      <div class="sidebar-header" style="border: none; margin: 0; padding: 0;">
        <div class="logo-icon">
          <i data-lucide="graduation-cap"></i>
        </div>
        <div class="logo-text">
          <h2 style="color: #FFFFFF;">SENA</h2>
          <span>Centro de Teleinformática y Prod. Industrial</span>
        </div>
      </div>
      
      <div>
        <h1 style="color: #FFFFFF; font-size: 28px; line-height: 1.25; margin-bottom: 16px;">
          Sistema de seguimiento de aprendices en etapa productiva
        </h1>
        <p style="font-size: 13.5px; color: rgba(255, 255, 255, 0.7); line-height: 1.6; margin-bottom: 32px;">
          Plataforma institucional para el acompañamiento, gestión documental y evaluación del proceso formativo de la regional Cauca.
        </p>
        
        <ul class="features-list">
          <li>
            <div class="feature-icon-wrapper"><i data-lucide="file-text"></i></div>
            <span>Gestión documental y bitácoras quincenales</span>
          </li>
          <li>
            <div class="feature-icon-wrapper"><i data-lucide="calendar"></i></div>
            <span>Agendamiento de seguimientos con instructores</span>
          </li>
          <li>
            <div class="feature-icon-wrapper"><i data-lucide="bar-chart-3"></i></div>
            <span>Reportes e historial de auditoría del sistema</span>
          </li>
        </ul>
      </div>
      
      <div style="font-size: 11px; color: rgba(255, 255, 255, 0.4); font-weight: 500;">
        Regional Cauca &middot; Versión 1.2
      </div>
    </div>

    <!-- Form Section (Right Pane) -->
    <div class="form-section">
      <div class="form-container">
        <div style="margin-bottom: 28px;">
          <h2 style="font-size: 24px; margin-bottom: 6px;">Iniciar sesión</h2>
          <p style="font-size: 13px; color: var(--text-muted);">Ingresa con tu cuenta institucional de Sofía Plus</p>
        </div>

        <form id="loginForm" novalidate>
          <div class="form-group">
            <label for="email" class="form-label">Correo electrónico institucional</label>
            <input type="email" id="email" class="form-control" placeholder="usuario@sena.edu.co" required autocomplete="username">
            <span class="form-error-text">El correo es obligatorio.</span>
          </div>

          <div class="form-group">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 6px;">
              <label for="password" class="form-label" style="margin: 0;">Contraseña</label>
              <a href="#" onclick="navigateTo('view-recover')" style="font-size: 12px; font-weight: 600;">¿Olvidaste tu contraseña?</a>
            </div>
            <div style="position:relative;">
              <input type="password" id="password" class="form-control" placeholder="••••••••" required autocomplete="current-password" style="padding-right:40px;">
              <button type="button" onclick="togglePass('password', this)" style="position:absolute;right:12px;top:50%;transform:translateY(-50%);background:none;border:none;cursor:pointer;color:var(--text-muted);padding:0;display:flex;align-items:center;" tabindex="-1" aria-label="Mostrar/ocultar contraseña"><i data-lucide="eye" style="width:16px;height:16px;"></i></button>
            </div>
            <span class="form-error-text">La contraseña es obligatoria.</span>
          </div>

          <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 10px;">
            <span>Ingresar al sistema</span>
            <i data-lucide="arrow-right"></i>
          </button>
        </form>
      </div>
    </div>
  </div>

</div>

<script>
function togglePass(id, btn) {
  const i = document.getElementById(id);
  const icon = btn.querySelector('i');
  if (i.type === 'password') {
    i.type = 'text';
    icon.setAttribute('data-lucide', 'eye-off');
  } else {
    i.type = 'password';
    icon.setAttribute('data-lucide', 'eye');
  }
  if (window.lucide) lucide.createIcons();
}
</script>