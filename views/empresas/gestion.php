<!-- VIEW: GESTIÓN DE EMPRESAS (HU-13) -->
<div class="view-content" id="view-gestion-empresas">

  <div class="welcome-card-header">
    <div style="display:flex;align-items:center;gap:14px;">
      <div class="kpi-icon-wrapper" style="background:rgba(255,255,255,0.15);color:#fff;font-size:24px;">
        <i data-lucide="building-2"></i>
      </div>
      <div>
        <h1>Gestión de Empresas Vinculadas</h1>
        <p>Administra las empresas que participan en el proceso de etapa productiva del SENA Regional Cauca.</p>
      </div>
    </div>
  </div>

  <!-- Breadcrumbs -->
  <ul class="breadcrumbs">
    <li><a href="#" onclick="navigateTo('view-dashboard-coordinador')">Inicio</a></li>
    <li>Empresas</li>
  </ul>

  <!-- KPIs -->
  <div class="grid-4">
    <div class="kpi-card">
      <div class="kpi-icon-wrapper" style="background:rgba(57,169,0,0.12);color:var(--primary);"><i data-lucide="building-2"></i></div>
      <div class="kpi-info"><span class="kpi-label">Total Empresas</span><span class="kpi-value">42</span></div>
    </div>
    <div class="kpi-card">
      <div class="kpi-icon-wrapper" style="background:rgba(16,185,129,0.12);color:var(--status-success);"><i data-lucide="check-circle"></i></div>
      <div class="kpi-info"><span class="kpi-label">Activas</span><span class="kpi-value">38</span></div>
    </div>
    <div class="kpi-card">
      <div class="kpi-icon-wrapper" style="background:rgba(239,68,68,0.12);color:var(--status-error);"><i data-lucide="x-circle"></i></div>
      <div class="kpi-info"><span class="kpi-label">Inactivas</span><span class="kpi-value">4</span></div>
    </div>
    <div class="kpi-card">
      <div class="kpi-icon-wrapper" style="background:rgba(59,130,246,0.12);color:var(--status-info);"><i data-lucide="users"></i></div>
      <div class="kpi-info"><span class="kpi-label">Aprendices vinculados</span><span class="kpi-value">148</span></div>
    </div>
  </div>

  <!-- Toolbar -->
  <div class="card" style="padding:20px;margin-bottom:20px;">
    <div style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:12px;">
      <div style="display:flex;gap:10px;flex-wrap:wrap;flex:1;">
        <div class="search-box" style="width:280px;">
          <i data-lucide="search" style="width:16px;height:16px;color:var(--text-muted);flex-shrink:0;"></i>
          <input type="search" id="empresaSearch" placeholder="Buscar por nombre, NIT, representante..." oninput="filtrarEmpresas()">
        </div>
        <select class="form-control" id="empresaEstadoFilter" style="width:160px;" onchange="filtrarEmpresas()">
          <option value="">Todos los estados</option>
          <option value="Activa">Activas</option>
          <option value="Inactiva">Inactivas</option>
        </select>
      </div>
      <button class="btn btn-primary" onclick="openModal('modalCrearEmpresa')">
        <i data-lucide="plus"></i> Nueva Empresa
      </button>
    </div>
  </div>

  <!-- Tabla -->
  <div class="card" style="padding:20px;">
    <div class="table-wrapper">
      <table class="table" id="empresasTable">
        <thead>
          <tr>
            <th>Empresa / NIT</th>
            <th>Representante Legal</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Aprendices</th>
            <th>Estado</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody id="empresasBody">
          <tr data-estado="Activa">
            <td>
              <div style="font-weight:600;font-size:13px;">TechCorp S.A.S.</div>
              <div style="font-size:11px;color:var(--text-muted);">NIT: 900.452.123-1</div>
            </td>
            <td style="font-size:13px;">Ing. David Torres</td>
            <td style="font-size:13px;">3157892345</td>
            <td style="font-size:12px;">dtorres@techcorp.com.co</td>
            <td><span class="badge badge-success">5 activos</span></td>
            <td>
              <div class="toggle on" onclick="toggleEmpresa(this,'TechCorp S.A.S.')">
                <div class="toggle-handle"></div>
              </div>
            </td>
            <td>
              <div style="display:flex;gap:4px;">
                <button class="btn btn-ghost btn-sm btn-icon" title="Ver detalle" onclick="verEmpresa('TechCorp S.A.S.','900.452.123-1','Ing. David Torres','dtorres@techcorp.com.co','3157892345','Cra 5 # 12-34, Popayán','Activa')"><i data-lucide="eye" style="width:14px;"></i></button>
                <button class="btn btn-ghost btn-sm btn-icon" title="Editar" onclick="editarEmpresa('TechCorp S.A.S.','900.452.123-1','Ing. David Torres','dtorres@techcorp.com.co','3157892345','Cra 5 # 12-34, Popayán','Popayán','Activa')"><i data-lucide="edit-2" style="width:14px;"></i></button>
              </div>
            </td>
          </tr>
          <tr data-estado="Activa">
            <td>
              <div style="font-weight:600;font-size:13px;">DigitalPyme SAS</div>
              <div style="font-size:11px;color:var(--text-muted);">NIT: 901.234.567-4</div>
            </td>
            <td style="font-size:13px;">Lda. Sandra Ruiz</td>
            <td style="font-size:13px;">3124561890</td>
            <td style="font-size:12px;">sruiz@digitalpyme.co</td>
            <td><span class="badge badge-success">3 activos</span></td>
            <td>
              <div class="toggle on" onclick="toggleEmpresa(this,'DigitalPyme SAS')">
                <div class="toggle-handle"></div>
              </div>
            </td>
            <td>
              <div style="display:flex;gap:4px;">
                <button class="btn btn-ghost btn-sm btn-icon" title="Ver detalle" onclick="verEmpresa('DigitalPyme SAS','901.234.567-4','Lda. Sandra Ruiz','sruiz@digitalpyme.co','3124561890','Cl 15 # 7-20, Popayán','Activa')"><i data-lucide="eye" style="width:14px;"></i></button>
                <button class="btn btn-ghost btn-sm btn-icon" title="Editar" onclick="editarEmpresa('DigitalPyme SAS','901.234.567-4','Lda. Sandra Ruiz','sruiz@digitalpyme.co','3124561890','Cl 15 # 7-20, Popayán','Popayán','Activa')"><i data-lucide="edit-2" style="width:14px;"></i></button>
              </div>
            </td>
          </tr>
          <tr data-estado="Activa">
            <td>
              <div style="font-weight:600;font-size:13px;">Tecnisoft S.A.S.</div>
              <div style="font-size:11px;color:var(--text-muted);">NIT: 800.765.432-9</div>
            </td>
            <td style="font-size:13px;">Cr. Luis Bermúdez</td>
            <td style="font-size:13px;">3101239876</td>
            <td style="font-size:12px;">lbermudez@tecnisoft.co</td>
            <td><span class="badge badge-success">4 activos</span></td>
            <td>
              <div class="toggle on" onclick="toggleEmpresa(this,'Tecnisoft S.A.S.')">
                <div class="toggle-handle"></div>
              </div>
            </td>
            <td>
              <div style="display:flex;gap:4px;">
                <button class="btn btn-ghost btn-sm btn-icon" title="Ver detalle" onclick="verEmpresa('Tecnisoft S.A.S.','800.765.432-9','Cr. Luis Bermúdez','lbermudez@tecnisoft.co','3101239876','Av. Panamericana # 45-12','Activa')"><i data-lucide="eye" style="width:14px;"></i></button>
                <button class="btn btn-ghost btn-sm btn-icon" title="Editar" onclick="editarEmpresa('Tecnisoft S.A.S.','800.765.432-9','Cr. Luis Bermúdez','lbermudez@tecnisoft.co','3101239876','Av. Panamericana # 45-12','Popayán','Activa')"><i data-lucide="edit-2" style="width:14px;"></i></button>
              </div>
            </td>
          </tr>
          <tr data-estado="Inactiva" style="opacity:0.65;">
            <td>
              <div style="font-weight:600;font-size:13px;">Innova Digital</div>
              <div style="font-size:11px;color:var(--text-muted);">NIT: 900.111.222-3</div>
            </td>
            <td style="font-size:13px;">Dr. Camilo Ríos</td>
            <td style="font-size:13px;">3168901234</td>
            <td style="font-size:12px;">crios@innovadigital.co</td>
            <td><span class="badge badge-secondary">1 vinculado</span></td>
            <td>
              <div class="toggle off" onclick="toggleEmpresa(this,'Innova Digital')">
                <div class="toggle-handle"></div>
              </div>
            </td>
            <td>
              <div style="display:flex;gap:4px;">
                <button class="btn btn-ghost btn-sm btn-icon" title="Ver detalle" onclick="verEmpresa('Innova Digital','900.111.222-3','Dr. Camilo Ríos','crios@innovadigital.co','3168901234','Cl 20 # 3-45, Popayán','Inactiva')"><i data-lucide="eye" style="width:14px;"></i></button>
                <button class="btn btn-ghost btn-sm btn-icon" title="Editar" onclick="editarEmpresa('Innova Digital','900.111.222-3','Dr. Camilo Ríos','crios@innovadigital.co','3168901234','Cl 20 # 3-45, Popayán','Popayán','Inactiva')"><i data-lucide="edit-2" style="width:14px;"></i></button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Estado vacío -->
    <div id="empresasEmpty" class="empty-state" style="display:none;">
      <i data-lucide="search-x"></i>
      <h3>Sin resultados</h3>
      <p>No se encontraron empresas con esos criterios de búsqueda.</p>
      <button class="btn btn-primary btn-sm" onclick="limpiarFiltrosEmpresas()">Limpiar filtros</button>
    </div>

    <!-- Paginación -->
    <div class="pagination" style="margin-top:16px;">
      <span style="font-size:12px;color:var(--text-muted);">Mostrando 4 de 42 empresas</span>
      <div class="pagination-pages">
        <button class="page-btn active">1</button>
        <button class="page-btn" onclick="showToast('Página 2','info')">2</button>
        <button class="page-btn" onclick="showToast('Página 3','info')">3</button>
        <span style="padding:0 6px;align-self:center;color:var(--text-muted);">...</span>
        <button class="page-btn" onclick="showToast('Última página','info')">9</button>
        <button class="page-btn" onclick="showToast('Página siguiente','info')"><i data-lucide="chevron-right" style="width:14px;"></i></button>
      </div>
    </div>
  </div>

  <!-- ── MODAL CREAR EMPRESA ── -->
  <div class="modal-overlay" id="modalCrearEmpresa">
    <div class="modal-container" style="max-width:580px;">
      <div class="modal-header">
        <h3><i data-lucide="building-2" style="width:18px;height:18px;margin-right:8px;vertical-align:middle;"></i>Registrar Nueva Empresa</h3>
        <button class="modal-close" onclick="closeModal('modalCrearEmpresa')"><i data-lucide="x"></i></button>
      </div>
      <div class="modal-body">
        <form id="crearEmpresaForm" novalidate onsubmit="event.preventDefault(); submitCrearEmpresa();">
          <div class="grid-2">
            <div class="form-group">
              <label class="form-label" for="ceNit">NIT *</label>
              <input type="text" id="ceNit" class="form-control" placeholder="900.123.456-7" required>
              <span class="form-error-text">El NIT es obligatorio.</span>
            </div>
            <div class="form-group">
              <label class="form-label" for="ceRazon">Razón Social *</label>
              <input type="text" id="ceRazon" class="form-control" placeholder="Ej: Empresa S.A.S." required>
              <span class="form-error-text">La razón social es obligatoria.</span>
            </div>
            <div class="form-group">
              <label class="form-label" for="ceRepresentante">Representante Legal *</label>
              <input type="text" id="ceRepresentante" class="form-control" placeholder="Nombre completo" required>
              <span class="form-error-text">El representante es obligatorio.</span>
            </div>
            <div class="form-group">
              <label class="form-label" for="ceTelefono">Teléfono *</label>
              <input type="tel" id="ceTelefono" class="form-control" placeholder="3100000000" required>
              <span class="form-error-text">El teléfono es obligatorio.</span>
            </div>
            <div class="form-group">
              <label class="form-label" for="ceCorreo">Correo Empresarial *</label>
              <input type="email" id="ceCorreo" class="form-control" placeholder="contacto@empresa.com" required>
              <span class="form-error-text">El correo es obligatorio.</span>
            </div>
            <div class="form-group">
              <label class="form-label" for="ceCiudad">Ciudad *</label>
              <input type="text" id="ceCiudad" class="form-control" placeholder="Ej: Popayán" required>
              <span class="form-error-text">La ciudad es obligatoria.</span>
            </div>
            <div class="form-group" style="grid-column:1/-1;">
              <label class="form-label" for="ceDireccion">Dirección *</label>
              <input type="text" id="ceDireccion" class="form-control" placeholder="Cra 5 # 12-34, Barrio..." required>
              <span class="form-error-text">La dirección es obligatoria.</span>
            </div>
            <div class="form-group">
              <label class="form-label" for="ceEstado">Estado *</label>
              <select id="ceEstado" class="form-control" required>
                <option value="Activa">Activa</option>
                <option value="Inactiva">Inactiva</option>
              </select>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-ghost" onclick="closeModal('modalCrearEmpresa')">Cancelar</button>
        <button type="submit" form="crearEmpresaForm" class="btn btn-primary"><i data-lucide="save"></i> Registrar Empresa</button>
      </div>
    </div>
  </div>

  <!-- ── MODAL EDITAR EMPRESA ── -->
  <div class="modal-overlay" id="modalEditarEmpresa">
    <div class="modal-container" style="max-width:580px;">
      <div class="modal-header">
        <h3><i data-lucide="edit-2" style="width:18px;height:18px;margin-right:8px;vertical-align:middle;"></i>Editar Empresa</h3>
        <button class="modal-close" onclick="closeModal('modalEditarEmpresa')"><i data-lucide="x"></i></button>
      </div>
      <div class="modal-body">
        <form id="editarEmpresaForm" novalidate onsubmit="event.preventDefault(); submitEditarEmpresa();">
          <div class="grid-2">
            <div class="form-group">
              <label class="form-label" for="eeNit">NIT *</label>
              <input type="text" id="eeNit" class="form-control" required>
              <span class="form-error-text">El NIT es obligatorio.</span>
            </div>
            <div class="form-group">
              <label class="form-label" for="eeRazon">Razón Social *</label>
              <input type="text" id="eeRazon" class="form-control" required>
              <span class="form-error-text">La razón social es obligatoria.</span>
            </div>
            <div class="form-group">
              <label class="form-label" for="eeRepresentante">Representante Legal *</label>
              <input type="text" id="eeRepresentante" class="form-control" required>
              <span class="form-error-text">El representante es obligatorio.</span>
            </div>
            <div class="form-group">
              <label class="form-label" for="eeTelefono">Teléfono *</label>
              <input type="tel" id="eeTelefono" class="form-control" required>
              <span class="form-error-text">El teléfono es obligatorio.</span>
            </div>
            <div class="form-group">
              <label class="form-label" for="eeCorreo">Correo Empresarial *</label>
              <input type="email" id="eeCorreo" class="form-control" required>
              <span class="form-error-text">El correo es obligatorio.</span>
            </div>
            <div class="form-group">
              <label class="form-label" for="eeCiudad">Ciudad *</label>
              <input type="text" id="eeCiudad" class="form-control" required>
              <span class="form-error-text">La ciudad es obligatoria.</span>
            </div>
            <div class="form-group" style="grid-column:1/-1;">
              <label class="form-label" for="eeDireccion">Dirección *</label>
              <input type="text" id="eeDireccion" class="form-control" required>
              <span class="form-error-text">La dirección es obligatoria.</span>
            </div>
            <div class="form-group">
              <label class="form-label" for="eeEstado">Estado *</label>
              <select id="eeEstado" class="form-control" required>
                <option value="Activa">Activa</option>
                <option value="Inactiva">Inactiva</option>
              </select>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-ghost" onclick="closeModal('modalEditarEmpresa')">Cancelar</button>
        <button type="submit" form="editarEmpresaForm" class="btn btn-primary"><i data-lucide="save"></i> Guardar Cambios</button>
      </div>
    </div>
  </div>

  <!-- ── MODAL VER EMPRESA ── -->
  <div class="modal-overlay" id="modalVerEmpresa">
    <div class="modal-container" style="max-width:540px;">
      <div class="modal-header">
        <h3><i data-lucide="building-2" style="width:18px;height:18px;margin-right:8px;vertical-align:middle;color:var(--primary);"></i>Detalle de la Empresa</h3>
        <button class="modal-close" onclick="closeModal('modalVerEmpresa')"><i data-lucide="x"></i></button>
      </div>
      <div class="modal-body">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:14px;margin-bottom:20px;font-size:13px;">
          <div><p style="color:var(--text-muted);font-size:11px;margin-bottom:3px;">Razón Social</p><p id="veRazon" style="font-weight:700;"></p></div>
          <div><p style="color:var(--text-muted);font-size:11px;margin-bottom:3px;">NIT</p><p id="veNit" style="font-weight:600;"></p></div>
          <div><p style="color:var(--text-muted);font-size:11px;margin-bottom:3px;">Representante</p><p id="veRepresentante" style="font-weight:600;"></p></div>
          <div><p style="color:var(--text-muted);font-size:11px;margin-bottom:3px;">Teléfono</p><p id="veTelefono" style="font-weight:600;"></p></div>
          <div><p style="color:var(--text-muted);font-size:11px;margin-bottom:3px;">Correo</p><p id="veCorreo" style="font-weight:600;"></p></div>
          <div><p style="color:var(--text-muted);font-size:11px;margin-bottom:3px;">Estado</p><p id="veEstadoBadge"></p></div>
          <div style="grid-column:1/-1;"><p style="color:var(--text-muted);font-size:11px;margin-bottom:3px;">Dirección</p><p id="veDireccion" style="font-weight:600;"></p></div>
        </div>
        <p class="section-title">Aprendices Vinculados</p>
        <div id="veAprendices" style="display:flex;flex-direction:column;gap:8px;font-size:12.5px;">
          <div style="display:flex;justify-content:space-between;padding:8px 12px;background:var(--bg-primary);border-radius:var(--r-sm);">
            <span>Carlos Guerrero · ADSO</span><span class="badge badge-success">En proceso</span>
          </div>
          <div style="display:flex;justify-content:space-between;padding:8px 12px;background:var(--bg-primary);border-radius:var(--r-sm);">
            <span>Sara Ramírez · ADSO</span><span class="badge badge-success">En proceso</span>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-ghost" onclick="closeModal('modalVerEmpresa')">Cerrar</button>
      </div>
    </div>
  </div>

</div>

<script>
function filtrarEmpresas() {
  const q     = document.getElementById('empresaSearch').value.toLowerCase();
  const estado= document.getElementById('empresaEstadoFilter').value;
  const rows  = document.querySelectorAll('#empresasBody tr');
  let vis = 0;
  rows.forEach(row => {
    const txt = row.textContent.toLowerCase();
    const rowEstado = row.dataset.estado || '';
    const matchQ = txt.includes(q);
    const matchE = !estado || rowEstado === estado;
    row.style.display = matchQ && matchE ? '' : 'none';
    if (matchQ && matchE) vis++;
  });
  document.getElementById('empresasEmpty').style.display = vis === 0 ? 'flex' : 'none';
}

function limpiarFiltrosEmpresas() {
  document.getElementById('empresaSearch').value = '';
  document.getElementById('empresaEstadoFilter').value = '';
  filtrarEmpresas();
}

function toggleEmpresa(el, name) {
  const on = el.classList.contains('on');
  el.classList.toggle('on', !on);
  el.classList.toggle('off', on);
  const row = el.closest('tr');
  row.style.opacity = on ? '0.65' : '1';
  showToast((on ? 'Empresa ' + name + ' desactivada.' : 'Empresa ' + name + ' activada.'), on ? 'warning' : 'success');
}

function verEmpresa(razon, nit, rep, correo, tel, dir, estado) {
  document.getElementById('veRazon').textContent = razon;
  document.getElementById('veNit').textContent   = nit;
  document.getElementById('veRepresentante').textContent = rep;
  document.getElementById('veTelefono').textContent = tel;
  document.getElementById('veCorreo').textContent   = correo;
  document.getElementById('veDireccion').textContent = dir;
  const badge = document.getElementById('veEstadoBadge');
  badge.innerHTML = estado === 'Activa'
    ? '<span class="badge badge-success">Activa</span>'
    : '<span class="badge badge-danger">Inactiva</span>';
  openModal('modalVerEmpresa');
}

function editarEmpresa(razon, nit, rep, correo, tel, dir, ciudad, estado) {
  document.getElementById('eeRazon').value         = razon;
  document.getElementById('eeNit').value           = nit;
  document.getElementById('eeRepresentante').value = rep;
  document.getElementById('eeCorreo').value        = correo;
  document.getElementById('eeTelefono').value      = tel;
  document.getElementById('eeDireccion').value     = dir;
  document.getElementById('eeCiudad').value        = ciudad || '';
  document.getElementById('eeEstado').value        = estado;
  openModal('modalEditarEmpresa');
}

function submitCrearEmpresa() {
  if (!validateForm('crearEmpresaForm')) {
    showToast('Complete todos los campos obligatorios.', 'error');
    return;
  }
  const razon = document.getElementById('ceRazon').value.trim();
  showToast('Empresa "' + razon + '" registrada exitosamente.', 'success');
  closeModal('modalCrearEmpresa');
  document.getElementById('crearEmpresaForm').reset();
}

function submitEditarEmpresa() {
  if (!validateForm('editarEmpresaForm')) {
    showToast('Complete todos los campos obligatorios.', 'error');
    return;
  }
  const razon = document.getElementById('eeRazon').value.trim();
  showToast('Empresa "' + razon + '" actualizada exitosamente.', 'success');
  closeModal('modalEditarEmpresa');
}
</script>
