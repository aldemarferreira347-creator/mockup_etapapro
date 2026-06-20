<!-- VIEW: PERFIL (HU-07) -->
<div class="view-content" id="view-perfil-usuario">
  
  <div class="welcome-card-header">
    <div style="display: flex; align-items: center; gap: 14px;">
      <div class="kpi-icon-wrapper" style="background: rgba(255,255,255,0.15); color: #FFFFFF; font-size: 24px;">
        <i data-lucide="user-circle"></i>
      </div>
      <div>
        <h1>Configuración de Mi Perfil</h1>
        <p>Actualiza tu información personal, foto de perfil, dirección de contacto y cambia tu contraseña de seguridad.</p>
      </div>
    </div>
  </div>

  <!-- Breadcrumbs -->
  <ul class="breadcrumbs">
    <li><a href="#" onclick="navigateTo(getDashboardView())">Inicio</a></li>
    <li>Mi Perfil</li>
  </ul>

  <div class="grid-1-380">
    <!-- LEFT PANEL: PERSONAL SUMMARY STATS -->
    <div style="display: flex; flex-direction: column; gap: 20px;">
      <!-- Profile Details Card -->
      <div class="card" style="text-align: center; padding: 32px 24px;">
        <div style="position: relative; width: 100px; height: 100px; margin: 0 auto 16px;">
          <div class="user-avatar" style="width: 100%; height: 100%; font-size: 36px; border: 4px solid var(--border-color);">CG</div>
          <button class="btn btn-primary btn-icon" style="position: absolute; bottom: 0; right: 0; width: 32px; height: 32px;" title="Cambiar foto de perfil" onclick="document.getElementById('profilePhotoInput').click()">
            <i data-lucide="camera" style="width: 16px; height: 16px;"></i>
          </button>
          <input type="file" id="profilePhotoInput" accept=".jpg,.png" style="display: none;" onchange="handleProfilePhoto(this)">
        </div>
        
        <h2 style="font-size: 18px; margin-bottom: 4px;">Carlos Andrés Guerrero López</h2>
        <span class="badge badge-success" style="margin-bottom: 16px;">Aprendiz Activo</span>
        
        <div style="text-align: left; border-top: 1px solid var(--border-color); padding-top: 16px; display: flex; flex-direction: column; gap: 12px; font-size: 13px;">
          <div style="display: flex; justify-content: space-between;">
            <span style="color: var(--text-muted);"><i data-lucide="hash" style="width: 14px; height: 14px; vertical-align: middle; margin-right: 4px;"></i> Ficha</span>
            <span style="font-weight: 700;">2879344 (ADSO)</span>
          </div>
          <div style="display: flex; justify-content: space-between;">
            <span style="color: var(--text-muted);"><i data-lucide="building" style="width: 14px; height: 14px; vertical-align: middle; margin-right: 4px;"></i> Empresa</span>
            <span style="font-weight: 700;">Tecnisoft S.A.S.</span>
          </div>
          <div style="display: flex; justify-content: space-between;">
            <span style="color: var(--text-muted);"><i data-lucide="user" style="width: 14px; height: 14px; vertical-align: middle; margin-right: 4px;"></i> Instructor</span>
            <span style="font-weight: 700;">Ing. María Rodríguez</span>
          </div>
          <div style="display: flex; justify-content: space-between;">
            <span style="color: var(--text-muted);"><i data-lucide="clock" style="width: 14px; height: 14px; vertical-align: middle; margin-right: 4px;"></i> Horas etapa</span>
            <span style="font-weight: 700;">480 / 880 hrs</span>
          </div>
        </div>
      </div>

      <!-- Quick Progress -->
      <div class="card">
        <h3 class="card-title" style="margin-bottom: 12px;">Progreso de Etapa Productiva</h3>
        <div style="margin-bottom: 12px;">
          <div style="display: flex; justify-content: space-between; font-size: 12px; margin-bottom: 4px;">
            <span>Semanas transcurridas</span>
            <span style="font-weight: 600;">55%</span>
          </div>
          <div style="background: var(--border-color); border-radius: 4px; height: 6px; overflow: hidden;">
            <div style="width: 55%; height: 100%; background: var(--primary);"></div>
          </div>
        </div>
        <div>
          <div style="display: flex; justify-content: space-between; font-size: 12px; margin-bottom: 4px;">
            <span>Bitácoras aprobadas</span>
            <span style="font-weight: 600;">67%</span>
          </div>
          <div style="background: var(--border-color); border-radius: 4px; height: 6px; overflow: hidden;">
            <div style="width: 67%; height: 100%; background: var(--accent);"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- RIGHT PANEL: EDIT FORMS -->
    <div style="display: flex; flex-direction: column; gap: 20px;">
      <!-- Personal Data Form -->
      <div class="card">
        <h3 class="card-title" style="border-bottom: 1px solid var(--border-color); padding-bottom: 12px; margin-bottom: 16px;">Datos Personales</h3>
        <form id="personalForm" onsubmit="event.preventDefault(); savePersonalData();">
          <div class="grid-2">
            <div class="form-group">
              <label class="form-label" for="profileNames">Nombres</label>
              <input type="text" id="profileNames" class="form-control" value="Carlos Andrés" required>
            </div>
            <div class="form-group">
              <label class="form-label" for="profileLastnames">Apellidos</label>
              <input type="text" id="profileLastnames" class="form-control" value="Guerrero López" required>
            </div>
          </div>
          <div class="grid-2">
            <div class="form-group">
              <label class="form-label" for="profileTipoDoc">Tipo de Documento</label>
              <select id="profileTipoDoc" class="form-control">
                <option value="CC" selected>Cédula de Ciudadanía (CC)</option>
                <option value="CE">Cédula de Extranjería (CE)</option>
                <option value="TI">Tarjeta de Identidad (TI)</option>
              </select>
            </div>
            <div class="form-group">
              <label class="form-label" for="profileDoc">Número de documento</label>
              <input type="text" id="profileDoc" class="form-control" value="1075872451" readonly style="opacity: 0.75;">
              <span class="form-hint">El documento no puede ser modificado.</span>
            </div>
            <div class="form-group">
              <label class="form-label" for="profilePhone">Teléfono móvil</label>
              <input type="tel" id="profilePhone" class="form-control" value="3142287650" required>
            </div>
            <div class="form-group">
              <label class="form-label" for="profileBirthdate">Fecha de Nacimiento</label>
              <input type="date" id="profileBirthdate" class="form-control" value="2000-03-15">
            </div>
          </div>
          
          <div style="display: flex; justify-content: flex-end; gap: 10px; margin-top: 10px;">
            <button type="button" class="btn btn-ghost">Cancelar</button>
            <button type="submit" class="btn btn-primary"><i data-lucide="save"></i> Guardar Cambios</button>
          </div>
        </form>
      </div>

      <!-- Dirección y Contacto -->
      <div class="card">
        <h3 class="card-title" style="border-bottom: 1px solid var(--border-color); padding-bottom: 12px; margin-bottom: 16px;">Dirección y Contacto</h3>
        <form id="addressForm" onsubmit="event.preventDefault(); saveAddressData();">
          <div class="grid-2">
            <div class="form-group" style="grid-column:1/-1;">
              <label class="form-label" for="profileDireccion">Dirección de Residencia</label>
              <input type="text" id="profileDireccion" class="form-control" value="Cra 5 # 7-23, Popayán" placeholder="Cra / Cll # ##-##">
            </div>
            <div class="form-group">
              <label class="form-label" for="profileCiudad">Ciudad</label>
              <input type="text" id="profileCiudad" class="form-control" value="Popayán">
            </div>
            <div class="form-group">
              <label class="form-label" for="profileDpto">Departamento</label>
              <input type="text" id="profileDpto" class="form-control" value="Cauca">
            </div>
            <div class="form-group">
              <label class="form-label" for="profileEps">EPS</label>
              <select id="profileEps" class="form-control">
                <option>Sura</option>
                <option>Nueva EPS</option>
                <option selected>Coomeva</option>
                <option>Compensar</option>
                <option>Salud Total</option>
              </select>
            </div>
          </div>
          <div style="display:flex;justify-content:flex-end;gap:10px;margin-top:10px;">
            <button type="button" class="btn btn-ghost">Cancelar</button>
            <button type="submit" class="btn btn-primary"><i data-lucide="save"></i> Guardar Cambios</button>
          </div>
        </form>
      </div>

      <!-- Security Password Form -->
      <div class="card">
        <h3 class="card-title" style="border-bottom: 1px solid var(--border-color); padding-bottom: 12px; margin-bottom: 16px;">Seguridad de la Cuenta</h3>
        <form id="passwordForm" novalidate onsubmit="event.preventDefault(); savePasswordData();">
          <div class="form-group">
            <label class="form-label" for="currentPass">Contraseña actual</label>
            <div style="position:relative;">
              <input type="password" id="currentPass" class="form-control" placeholder="••••••••" required style="padding-right:40px;">
              <button type="button" class="pass-toggle" onclick="togglePassField('currentPass',this)" tabindex="-1" style="position:absolute;right:12px;top:50%;transform:translateY(-50%);background:none;border:none;cursor:pointer;color:var(--text-muted);padding:0;display:flex;align-items:center;">
                <i data-lucide="eye" style="width:16px;height:16px;"></i>
              </button>
            </div>
            <span class="form-error-text">La contraseña actual es obligatoria.</span>
          </div>
          
          <div class="grid-2">
            <div class="form-group">
              <label class="form-label" for="newProfilePass">Nueva contraseña</label>
              <div style="position:relative;">
                <input type="password" id="newProfilePass" class="form-control" placeholder="••••••••" required style="padding-right:40px;" oninput="checkPasswordStrength(this.value, 'profileStrengthBar', 'profileStrengthLabel')">
                <button type="button" class="pass-toggle" onclick="togglePassField('newProfilePass',this)" tabindex="-1" style="position:absolute;right:12px;top:50%;transform:translateY(-50%);background:none;border:none;cursor:pointer;color:var(--text-muted);padding:0;display:flex;align-items:center;">
                  <i data-lucide="eye" style="width:16px;height:16px;"></i>
                </button>
              </div>
              <div id="profileStrengthBar" style="width: 0%; height: 0; margin-top: 6px; transition: width 0.3s ease;"></div>
              <span class="form-hint" id="profileStrengthLabel">Debe incluir letras, números y mínimo 8 caracteres.</span>
            </div>
            <div class="form-group">
              <label class="form-label" for="confirmProfilePass">Confirmar nueva contraseña</label>
              <div style="position:relative;">
                <input type="password" id="confirmProfilePass" class="form-control" placeholder="••••••••" required style="padding-right:40px;">
                <button type="button" class="pass-toggle" onclick="togglePassField('confirmProfilePass',this)" tabindex="-1" style="position:absolute;right:12px;top:50%;transform:translateY(-50%);background:none;border:none;cursor:pointer;color:var(--text-muted);padding:0;display:flex;align-items:center;">
                  <i data-lucide="eye" style="width:16px;height:16px;"></i>
                </button>
              </div>
              <span class="form-error-text">Las contraseñas deben coincidir.</span>
            </div>
          </div>

          <div style="display: flex; justify-content: flex-end; gap: 10px; margin-top: 10px;">
            <button type="button" class="btn btn-ghost">Cancelar</button>
            <button type="submit" class="btn btn-secondary"><i data-lucide="lock"></i> Actualizar Contraseña</button>
          </div>
        </form>
      </div>
    </div>
  </div>


</div>

<script>
function handleProfilePhoto(input) {
  if (input.files && input.files[0]) {
    const file = input.files[0];
    const ext = file.name.substring(file.name.lastIndexOf('.')).toLowerCase();
    
    // Check format (HU-07 Scenario 7.4)
    if (ext !== '.jpg' && ext !== '.png') {
      showToast('Formato no permitido. Solo se aceptan imágenes JPG o PNG.', 'error');
      return;
    }
    
    showToast('Foto de perfil cargada correctamente.', 'success');
  }
}

function savePersonalData() {
  if (validateForm('personalForm')) {
    showToast('Datos personales actualizados exitosamente.', 'success');
  }
}

function saveAddressData() {
  showToast('Dirección y contacto actualizados exitosamente.', 'success');
}

function savePasswordData() {
  if (validateForm('passwordForm')) {
    const newPass = document.getElementById('newProfilePass').value;
    const confirmPass = document.getElementById('confirmProfilePass').value;

    if (newPass.length < 8 || !/[a-zA-Z]/.test(newPass) || !/[0-9]/.test(newPass)) {
      showToast('La nueva contraseña no cumple con los requisitos de seguridad.', 'error');
      return;
    }

    if (newPass !== confirmPass) {
      showToast('La nueva contraseña y su confirmación no coinciden.', 'error');
      return;
    }

    // Success (HU-07 Scenario 7.2)
    showToast('Contraseña de seguridad actualizada correctamente.', 'success');
    document.getElementById('passwordForm').reset();
    checkPasswordStrength('', 'profileStrengthBar', 'profileStrengthLabel');
  }
}

function togglePassField(fieldId, btn) {
  const input = document.getElementById(fieldId);
  const icon = btn.querySelector('i');
  if (input.type === 'password') {
    input.type = 'text';
    icon.setAttribute('data-lucide', 'eye-off');
  } else {
    input.type = 'password';
    icon.setAttribute('data-lucide', 'eye');
  }
  if (window.lucide) lucide.createIcons();
}
</script>
