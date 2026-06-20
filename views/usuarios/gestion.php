<!-- VIEW: GESTION USUARIOS & ROLES (HU-04, HU-05, HU-06) -->
<div class="view-content" id="view-gestion-usuarios">
  
  <div class="welcome-card-header">
    <div style="display: flex; align-items: center; gap: 14px;">
      <div class="kpi-icon-wrapper" style="background: rgba(255,255,255,0.15); color: #FFFFFF; font-size: 24px;">
        <i data-lucide="shield-check"></i>
      </div>
      <div>
        <h1>Gestión de Usuarios, Roles y Permisos</h1>
        <p>Registra nuevos usuarios institucionales, edita perfiles, activa/desactiva cuentas y configura la matriz de permisos por roles.</p>
      </div>
    </div>
  </div>

  <!-- Breadcrumbs -->
  <ul class="breadcrumbs">
    <li><a href="#" onclick="navigateTo('view-dashboard-coordinador')">Inicio</a></li>
    <li>Usuarios y Roles</li>
  </ul>

  <!-- KPIs -->
  <div class="kpi-grid">
    <div class="card kpi-card blue">
      <div class="kpi-details">
        <h3>Total Usuarios</h3>
        <div class="number">315</div>
      </div>
      <div class="kpi-icon-wrapper"><i data-lucide="users"></i></div>
    </div>
    <div class="card kpi-card green">
      <div class="kpi-details">
        <h3>Instructores</h3>
        <div class="number">18</div>
      </div>
      <div class="kpi-icon-wrapper"><i data-lucide="user-cog"></i></div>
    </div>
    <div class="card kpi-card yellow">
      <div class="kpi-details">
        <h3>Coordinadores</h3>
        <div class="number">4</div>
      </div>
      <div class="kpi-icon-wrapper"><i data-lucide="award"></i></div>
    </div>
    <div class="card kpi-card red">
      <div class="kpi-details">
        <h3>Administradores</h3>
        <div class="number">2</div>
      </div>
      <div class="kpi-icon-wrapper"><i data-lucide="key"></i></div>
    </div>
  </div>

  <div class="grid-1-380" style="margin-bottom: 24px;">
    <!-- LEFT: Users grid list -->
    <div class="card" style="padding: 20px;">
      <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; flex-wrap: wrap; gap: 10px;">
        <div style="display: flex; gap: 10px; flex: 1;">
          <input type="search" placeholder="🔍 Buscar por nombre, correo..." class="form-control" style="width: 250px; background-color: var(--bg-primary);">
          <select class="form-control" style="width: 140px; background-color: var(--bg-primary);">
            <option value="">Todos los Roles</option>
            <option>Coordinador</option>
            <option>Instructor</option>
            <option>Aprendiz</option>
          </select>
        </div>
        <button class="btn btn-primary" onclick="openModal('modalCreateUser')">
          <i data-lucide="plus"></i> Crear Usuario
        </button>
      </div>

      <div class="table-responsive">
        <table class="modern-table">
          <thead>
            <tr>
              <th>Usuario</th>
              <th>Documento</th>
              <th>Rol</th>
              <th>Estado</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div style="font-weight: 600;">Ing. María Rodríguez</div>
                <div style="font-size: 11.5px; color: var(--text-muted);">mrodriguez@sena.edu.co</div>
              </td>
              <td>1004523910</td>
              <td><span class="badge badge-info">Instructor</span></td>
              <td>
                <!-- Toggle switch active/inactive (HU-06) -->
                <div class="toggle on" onclick="toggleUserStatus(this, 'Ing. María Rodríguez')">
                  <div class="toggle-handle"></div>
                </div>
              </td>
              <td>
                <button class="btn btn-ghost btn-sm btn-icon" title="Editar Usuario" onclick="openEditUserModal('Ing. María','Rodríguez','mrodriguez@sena.edu.co','Instructor','Activo')"><i data-lucide="edit-2" style="width:14px;"></i></button>
              </td>
            </tr>
            <tr>
              <td>
                <div style="font-weight: 600;">Aarón Josué Cadena</div>
                <div style="font-size: 11.5px; color: var(--text-muted);">acadena@sena.edu.co</div>
              </td>
              <td>84920401</td>
              <td><span class="badge badge-warning">Coordinador</span></td>
              <td>
                <div class="toggle on" onclick="toggleUserStatus(this, 'Aarón Josué Cadena')">
                  <div class="toggle-handle"></div>
                </div>
              </td>
              <td>
                <button class="btn btn-ghost btn-sm btn-icon" title="Editar Usuario" onclick="openEditUserModal('Aarón Josué','Cadena','acadena@sena.edu.co','Coordinador','Activo')"><i data-lucide="edit-2" style="width:14px;"></i></button>
              </td>
            </tr>
            <tr>
              <td>
                <div style="font-weight: 600;">Carlos Guerrero</div>
                <div style="font-size: 11.5px; color: var(--text-muted);">cguerrero@misena.edu.co</div>
              </td>
              <td>1075872451</td>
              <td><span class="badge badge-success">Aprendiz</span></td>
              <td>
                <div class="toggle on" onclick="toggleUserStatus(this, 'Carlos Guerrero')">
                  <div class="toggle-handle"></div>
                </div>
              </td>
              <td>
                <button class="btn btn-ghost btn-sm btn-icon" title="Editar Usuario" onclick="openEditUserModal('Carlos','Guerrero','cguerrero@misena.edu.co','Aprendiz','Activo')"><i data-lucide="edit-2" style="width:14px;"></i></button>
              </td>
            </tr>
            <tr style="opacity: 0.65;">
              <td>
                <div style="font-weight: 600;">Jaime Andrés Méndez</div>
                <div style="font-size: 11.5px; color: var(--text-muted);">jamendez@sena.edu.co</div>
              </td>
              <td>12040012</td>
              <td><span class="badge badge-secondary">Administrador</span></td>
              <td>
                <!-- Deactivated state -->
                <div class="toggle off" onclick="toggleUserStatus(this, 'Jaime Andrés Méndez')">
                  <div class="toggle-handle"></div>
                </div>
              </td>
              <td>
                <button class="btn btn-ghost btn-sm btn-icon" title="Editar Usuario" onclick="openEditUserModal('Jaime Andrés','Méndez','jamendez@sena.edu.co','Administrador','Inactivo')"><i data-lucide="edit-2" style="width:14px;"></i></button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Paginación tabla usuarios -->
      <div class="pagination" style="margin-top:16px;">
        <div style="display:flex;align-items:center;gap:10px;">
          <span style="font-size:12px;color:var(--text-muted);">Mostrar</span>
          <select class="form-control" style="width:70px;padding:6px 8px;font-size:12px;" onchange="showToast('Mostrando '+this.value+' registros','info')">
            <option selected>10</option><option>25</option><option>50</option>
          </select>
          <span style="font-size:12px;color:var(--text-muted);">· Mostrando 1–4 de 315 usuarios</span>
        </div>
        <div class="pagination-pages">
          <button class="page-btn active">1</button>
          <button class="page-btn" onclick="showToast('Página 2','info')">2</button>
          <button class="page-btn" onclick="showToast('Página 3','info')">3</button>
          <span style="padding:0 4px;align-self:center;color:var(--text-muted);">...</span>
          <button class="page-btn" onclick="showToast('Última','info')">32</button>
          <button class="page-btn" onclick="showToast('Siguiente','info')"><i data-lucide="chevron-right" style="width:13px;height:13px;"></i></button>
        </div>
      </div>
    </div>

    <!-- RIGHT: Roles Matrix -->
    <div class="card" style="padding: 20px;">
      <h3 class="card-title" style="border-bottom: 1px solid var(--border-color); padding-bottom: 12px; margin-bottom: 16px;">
        Matriz de Permisos
      </h3>
      <p style="font-size: 12px; color: var(--text-muted); margin-bottom: 16px;">
        Configuración de privilegios de lectura y escritura del sistema por rol administrativo.
      </p>

      <div style="display: flex; flex-direction: column; gap: 14px;">
        <div style="border-bottom: 1px solid var(--border-color); padding-bottom: 8px;">
          <h4 style="font-size: 13px; margin-bottom: 6px;">Rol Seleccionado: <span id="matrixRoleName" style="color: var(--primary)">Coordinador</span></h4>
          <select class="form-control" style="background-color: var(--bg-primary);" onchange="document.getElementById('matrixRoleName').textContent = this.value; selectMatrixRole(this.value);">
            <option>Coordinador</option>
            <option>Instructor</option>
            <option>Aprendiz</option>
            <option>Administrador</option>
          </select>
        </div>

        <div style="display: flex; flex-direction: column; gap: 10px; font-size: 12.5px;">
          <div style="display: flex; justify-content: space-between; align-items: center;">
            <span>📁 Cargar Documentos</span>
            <input type="checkbox" checked class="form-control" style="width: 18px; height: 18px;">
          </div>
          <div style="display: flex; justify-content: space-between; align-items: center;">
            <span>✍️ Evaluar Aprendices</span>
            <input type="checkbox" checked class="form-control" style="width: 18px; height: 18px;">
          </div>
          <div style="display: flex; justify-content: space-between; align-items: center;">
            <span>📅 Programar Visitas</span>
            <input type="checkbox" checked class="form-control" style="width: 18px; height: 18px;">
          </div>
          <div style="display: flex; justify-content: space-between; align-items: center;">
            <span>👤 Crear Usuarios</span>
            <input type="checkbox" class="form-control" style="width: 18px; height: 18px;" id="permCreateUser">
          </div>
          <div style="display: flex; justify-content: space-between; align-items: center;">
            <span>📊 Generar Reportes</span>
            <input type="checkbox" checked class="form-control" style="width: 18px; height: 18px;">
          </div>
          <div style="display: flex; justify-content: space-between; align-items: center;">
            <span>🔧 Configurar Sistema</span>
            <input type="checkbox" class="form-control" style="width: 18px; height: 18px;" id="permConfigSystem">
          </div>
        </div>

        <button class="btn btn-secondary btn-sm" style="margin-top: 10px;" onclick="showToast('Permisos actualizados en base de datos.', 'success')">
          <i data-lucide="save"></i> Aplicar Cambios
        </button>
      </div>
    </div>
  </div>

  <!-- MODAL: EDIT USER (HU-05) -->
  <div class="modal-overlay" id="modalEditUser">
    <div class="modal-container">
      <div class="modal-header">
        <h3><i data-lucide="edit-2" style="width:18px;height:18px;color:var(--primary);vertical-align:middle;margin-right:8px;"></i>Editar Usuario</h3>
        <button class="modal-close" onclick="closeModal('modalEditUser')"><i data-lucide="x"></i></button>
      </div>
      <div class="modal-body">
        <form id="editUserForm" novalidate onsubmit="event.preventDefault(); submitEditUser();">
          <div class="grid-2">
            <div class="form-group">
              <label class="form-label" for="eu_nombres">Nombres <span style="color:var(--status-error)">*</span></label>
              <input type="text" id="eu_nombres" class="form-control" placeholder="Nombres" required>
              <span class="form-error-text">Los nombres son obligatorios.</span>
            </div>
            <div class="form-group">
              <label class="form-label" for="eu_apellidos">Apellidos <span style="color:var(--status-error)">*</span></label>
              <input type="text" id="eu_apellidos" class="form-control" placeholder="Apellidos" required>
              <span class="form-error-text">Los apellidos son obligatorios.</span>
            </div>
          </div>
          <div class="form-group">
            <label class="form-label" for="eu_correo">Correo Institucional <span style="color:var(--status-error)">*</span></label>
            <input type="email" id="eu_correo" class="form-control" placeholder="usuario@sena.edu.co" required>
            <span class="form-error-text">El correo institucional es obligatorio.</span>
          </div>
          <div class="grid-2">
            <div class="form-group">
              <label class="form-label" for="eu_rol">Rol <span style="color:var(--status-error)">*</span></label>
              <select id="eu_rol" class="form-control" required>
                <option value="">Seleccionar rol...</option>
                <option value="Coordinador">Coordinador</option>
                <option value="Instructor">Instructor</option>
                <option value="Aprendiz">Aprendiz</option>
                <option value="Administrador">Administrador</option>
              </select>
              <span class="form-error-text">Selecciona un rol válido.</span>
            </div>
            <div class="form-group">
              <label class="form-label" for="eu_estado">Estado <span style="color:var(--status-error)">*</span></label>
              <select id="eu_estado" class="form-control" required>
                <option value="Activo">Activo</option>
                <option value="Inactivo">Inactivo</option>
              </select>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-ghost" onclick="closeModal('modalEditUser')">Cancelar</button>
        <button type="submit" form="editUserForm" class="btn btn-primary"><i data-lucide="save"></i> Guardar Cambios</button>
      </div>
    </div>
  </div>

  <!-- MODAL: CREATE USER (HU-04) -->
  <div class="modal-overlay" id="modalCreateUser">
    <div class="modal-container">
      <div class="modal-header">
        <h3>👤 Registrar Nuevo Usuario</h3>
        <button class="modal-close"><i data-lucide="x"></i></button>
      </div>
      <div class="modal-body">
        <form id="createUserForm" novalidate onsubmit="event.preventDefault(); submitCreateUser();">
          <div class="form-group">
            <label class="form-label" for="newUserName">Nombre completo</label>
            <input type="text" id="newUserName" class="form-control" placeholder="Ej: Juan Mora" required>
            <span class="form-error-text">El nombre completo es obligatorio.</span>
          </div>

          <div class="form-group">
            <label class="form-label" for="newUserEmail">Correo institucional</label>
            <input type="email" id="newUserEmail" class="form-control" placeholder="usuario@sena.edu.co" required>
            <span class="form-error-text">El correo es obligatorio y debe ser institucional.</span>
          </div>

          <div class="grid-2">
            <div class="form-group">
              <label class="form-label" for="newUserDoc">N° Documento</label>
              <input type="text" id="newUserDoc" class="form-control" placeholder="1002345678" required>
              <span class="form-error-text">El número de documento es obligatorio.</span>
            </div>
            <div class="form-group">
              <label class="form-label" for="newUserRole">Rol asignado</label>
              <select id="newUserRole" class="form-control" required>
                <option value="">Selecciona...</option>
                <option>Coordinador</option>
                <option>Instructor</option>
                <option>Aprendiz</option>
              </select>
              <span class="form-error-text">Debe seleccionar un rol válido.</span>
            </div>
            <div class="form-group">
              <label class="form-label" for="newUserPass">Contraseña temporal <span style="color:var(--status-error)">*</span></label>
              <input type="password" id="newUserPass" class="form-control" placeholder="Mín. 8 caracteres" required
                oninput="checkPasswordStrength(this.value,'newUserPassBar','newUserPassLabel')">
              <div id="newUserPassBar" style="width:0%;height:0;margin-top:6px;transition:width 0.3s ease;"></div>
              <span class="form-hint" id="newUserPassLabel">Letras, números y mínimo 8 caracteres.</span>
              <span class="form-error-text">La contraseña temporal es obligatoria.</span>
            </div>
            <div class="form-group">
              <label class="form-label" for="newUserPassConfirm">Confirmar contraseña <span style="color:var(--status-error)">*</span></label>
              <input type="password" id="newUserPassConfirm" class="form-control" placeholder="Repite la contraseña" required>
              <span class="form-error-text">La confirmación de contraseña es obligatoria.</span>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-ghost btn-close-modal" onclick="closeModal('modalCreateUser')">Cancelar</button>
        <button type="submit" form="createUserForm" class="btn btn-primary"><i data-lucide="save"></i> Registrar Usuario</button>
      </div>
    </div>
  </div>

</div>

<script>
function toggleUserStatus(toggleElement, userName) {
  // Prevent Coordinador from deactivating themselves (HU-06.3)
  if (userName === 'Aarón Josué Cadena') {
    showToast('No puede desactivar su propia cuenta.', 'error');
    return;
  }

  const isCurrentlyOn = toggleElement.classList.contains('on');
  if (isCurrentlyOn) {
    toggleElement.classList.remove('on');
    toggleElement.classList.add('off');
    showToast(`Cuenta de ${userName} desactivada. Acceso restringido.`, 'warning');
  } else {
    toggleElement.classList.remove('off');
    toggleElement.classList.add('on');
    showToast(`Cuenta de ${userName} activada. Acceso restablecido.`, 'success');
  }
}

function selectMatrixRole(role) {
  const permCreateUser = document.getElementById('permCreateUser');
  const permConfigSystem = document.getElementById('permConfigSystem');

  if (role === 'Administrador') {
    permCreateUser.checked = true;
    permConfigSystem.checked = true;
  } else if (role === 'Coordinador') {
    permCreateUser.checked = true;
    permConfigSystem.checked = false;
  } else {
    permCreateUser.checked = false;
    permConfigSystem.checked = false;
  }
}

function submitCreateUser() {
  if (!validateForm('createUserForm')) {
    showToast('Complete todos los campos obligatorios.', 'error');
    return;
  }
  const pass = document.getElementById('newUserPass').value;
  const passConfirm = document.getElementById('newUserPassConfirm').value;
  if (pass.length < 8 || !/[a-zA-Z]/.test(pass) || !/[0-9]/.test(pass)) {
    showToast('La contraseña temporal no cumple los requisitos de seguridad.', 'error');
    return;
  }
  if (pass !== passConfirm) {
    showToast('Las contraseñas no coinciden.', 'error');
    return;
  }
  const name = document.getElementById('newUserName').value.trim();
  showToast(`Usuario ${name} registrado correctamente. Credenciales enviadas por correo.`, 'success');
  closeModal('modalCreateUser');
  document.getElementById('createUserForm').reset();
  checkPasswordStrength('', 'newUserPassBar', 'newUserPassLabel');
}

// HU-05: Edición de usuarios
function openEditUserModal(nombres, apellidos, correo, rol, estado) {
  document.getElementById('eu_nombres').value = nombres || '';
  document.getElementById('eu_apellidos').value = apellidos || '';
  document.getElementById('eu_correo').value = correo || '';
  document.getElementById('eu_rol').value = rol || '';
  document.getElementById('eu_estado').value = estado || 'Activo';
  // Limpiar validaciones previas
  document.querySelectorAll('#editUserForm .form-control').forEach(el => el.classList.remove('is-invalid'));
  document.querySelectorAll('#editUserForm .form-error-text').forEach(el => el.style.display = 'none');
  openModal('modalEditUser');
}

function submitEditUser() {
  if (!validateForm('editUserForm')) {
    showToast('Complete todos los campos obligatorios.', 'error');
    return;
  }
  const nombres = document.getElementById('eu_nombres').value.trim();
  const apellidos = document.getElementById('eu_apellidos').value.trim();
  const rol = document.getElementById('eu_rol').value;
  const estado = document.getElementById('eu_estado').value;
  showToast(`Usuario ${nombres} ${apellidos} actualizado correctamente. Rol: ${rol} · Estado: ${estado}.`, 'success');
  closeModal('modalEditUser');
}
</script>

