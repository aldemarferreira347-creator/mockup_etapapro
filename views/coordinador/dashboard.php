<!-- VIEW: DASHBOARD COORDINADOR (HU-20, HU-21) -->
<div class="view-content" id="view-dashboard-coordinador">

  <div class="welcome-card-header">
    <div style="display: flex; align-items: center; gap: 14px;">
      <div class="kpi-icon-wrapper" style="background: rgba(255,255,255,0.15); color: #FFFFFF; font-size: 24px;">
        <i data-lucide="building"></i>
      </div>
      <div>
        <h1>Tablero del Coordinador</h1>
        <p>Centro de Formación Agroindustrial - Regional Cauca. Monitoreo global de etapa productiva.</p>
      </div>
    </div>
  </div>

  <!-- Global KPIs -->
  <div class="grid-4" style="margin-bottom: 24px;">
    <div class="kpi-card">
      <div class="kpi-icon-wrapper" style="background: rgba(57,169,0,0.12); color: var(--primary);">
        <i data-lucide="users"></i>
      </div>
      <div class="kpi-info">
        <span class="kpi-label">Total Aprendices</span>
        <span class="kpi-value">148</span>
      </div>
    </div>
    <div class="kpi-card">
      <div class="kpi-icon-wrapper" style="background: rgba(14,165,233,0.12); color: var(--status-info);">
        <i data-lucide="award"></i>
      </div>
      <div class="kpi-info">
        <span class="kpi-label">Por Certificar</span>
        <span class="kpi-value">15</span>
      </div>
    </div>
    <div class="kpi-card">
      <div class="kpi-icon-wrapper" style="background: rgba(245,158,11,0.12); color: var(--status-warning);">
        <i data-lucide="clock"></i>
      </div>
      <div class="kpi-info">
        <span class="kpi-label">Solicitudes Pendientes</span>
        <span class="kpi-value">6</span>
      </div>
    </div>
    <div class="kpi-card">
      <div class="kpi-icon-wrapper" style="background: rgba(239,68,68,0.12); color: var(--status-danger);">
        <i data-lucide="alert-triangle"></i>
      </div>
      <div class="kpi-info">
        <span class="kpi-label">Casos Críticos</span>
        <span class="kpi-value">4</span>
      </div>
    </div>
  </div>

  <!-- Action banner / Quick tasks -->
  <div class="card" style="padding: 24px; margin-bottom: 24px;">
    <div style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:12px;">
      <div>
        <h3 style="font-size:15px; margin-bottom:4px;">Asignaciones e Instructores</h3>
        <p style="font-size:12px; color:var(--text-muted);">Administra la carga académica de seguimiento y reasigna casos especiales.</p>
      </div>
      <div style="display:flex; gap:8px;">
        <button class="btn btn-ghost btn-sm" onclick="navigateTo('view-solicitudes-coordinador')">
          <i data-lucide="user-plus"></i> Asignar Instructores
        </button>
        <button class="btn btn-primary btn-sm" onclick="navigateTo('view-auditoria')">
          <i data-lucide="history"></i> Logs de Auditoría
        </button>
      </div>
    </div>
  </div>

  <!-- Apprentices Global Listing -->
  <div class="card" style="padding: 24px;">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; flex-wrap: wrap; gap: 12px;">
      <h3 style="font-size: 15px;">Seguimiento General de Aprendices</h3>
      <div style="display: flex; gap: 10px; flex-wrap: wrap;">
        <div class="header-search" style="position:static;background:var(--bg-secondary);border-radius:8px;padding:6px 12px;width:240px;">
          <i data-lucide="search" style="width:16px;height:16px;color:var(--text-muted);"></i>
          <input type="search" placeholder="Buscar por aprendiz, ficha..." id="coordSearch" style="border:none;background:transparent;outline:none;font-size:13px;color:var(--text-primary);" oninput="filterCoordApprentices(this.value)">
        </div>
        <select class="form-control" style="width:160px;font-size:13px;" onchange="filterCoordByStatus(this.value)">
          <option value="">Todos los Estados</option>
          <option value="En Inducción">En Inducción</option>
          <option value="En Proceso">En Proceso</option>
          <option value="Por Certificar">Por Certificar</option>
          <option value="Certificado">Certificado</option>
          <option value="Suspendido">Suspendido</option>
        </select>
      </div>
    </div>

    <div class="table-wrapper">
      <table class="table">
        <thead>
          <tr>
            <th>Aprendiz</th>
            <th>Ficha / Programa</th>
            <th>Instructor Asignado</th>
            <th>Modalidad</th>
            <th>Progreso Bitácoras</th>
            <th>Estado Proceso</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody id="coordApprenticeTableBody">
          <tr>
            <td>
              <div style="display:flex;align-items:center;gap:10px;">
                <div class="user-avatar" style="width:32px;height:32px;font-size:12px;">CG</div>
                <div>
                  <div style="font-weight:600;font-size:13px;">Carlos Guerrero</div>
                  <div style="font-size:11px;color:var(--text-muted);">CC: 1.062.345.678</div>
                </div>
              </div>
            </td>
            <td>
              <div style="font-size:12.5px;font-weight:600;">2885678</div>
              <div style="font-size:11px;color:var(--text-muted);">ADSO</div>
            </td>
            <td>
              <div style="font-size:12.5px;">Ing. María Rodríguez</div>
            </td>
            <td><span class="badge badge-secondary">Pasantía</span></td>
            <td>
              <div style="display:flex;align-items:center;gap:6px;">
                <div style="flex:1;background:var(--border-color);border-radius:4px;height:6px;width:70px;overflow:hidden;">
                  <div style="width:67%;height:100%;background:var(--primary);"></div>
                </div>
                <span style="font-size:11px;font-weight:700;">4/6</span>
              </div>
            </td>
            <td><span class="badge badge-success">En Proceso</span></td>
            <td>
              <div style="display:flex;gap:4px;">
                <button class="btn btn-ghost btn-sm" onclick="openStateModal('Carlos Guerrero', 'En Proceso')" title="Cambiar Estado"><i data-lucide="refresh-cw"></i></button>
                <button class="btn btn-ghost btn-sm" onclick="showToast('Generando ficha resumen de Carlos...','info')" title="Ficha Técnica"><i data-lucide="file-spreadsheet"></i></button>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div style="display:flex;align-items:center;gap:10px;">
                <div class="user-avatar" style="width:32px;height:32px;font-size:12px;background:#f59e0b;">LM</div>
                <div>
                  <div style="font-weight:600;font-size:13px;">Laura Martínez</div>
                  <div style="font-size:11px;color:var(--text-muted);">CC: 1.048.912.345</div>
                </div>
              </div>
            </td>
            <td>
              <div style="font-size:12.5px;font-weight:600;">2885678</div>
              <div style="font-size:11px;color:var(--text-muted);">ADSO</div>
            </td>
            <td>
              <div style="font-size:12.5px;">Ing. María Rodríguez</div>
            </td>
            <td><span class="badge badge-secondary">Vínculo Laboral</span></td>
            <td>
              <div style="display:flex;align-items:center;gap:6px;">
                <div style="flex:1;background:var(--border-color);border-radius:4px;height:6px;width:70px;overflow:hidden;">
                  <div style="width:33%;height:100%;background:var(--status-danger);"></div>
                </div>
                <span style="font-size:11px;font-weight:700;">2/6</span>
              </div>
            </td>
            <td><span class="badge badge-danger">Suspendido</span></td>
            <td>
              <div style="display:flex;gap:4px;">
                <button class="btn btn-ghost btn-sm" onclick="openStateModal('Laura Martínez', 'Suspendido')" title="Cambiar Estado"><i data-lucide="refresh-cw"></i></button>
                <button class="btn btn-ghost btn-sm" onclick="showToast('Generando ficha resumen de Laura...','info')" title="Ficha Técnica"><i data-lucide="file-spreadsheet"></i></button>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div style="display:flex;align-items:center;gap:10px;">
                <div class="user-avatar" style="width:32px;height:32px;font-size:12px;background:#10b981;">JP</div>
                <div>
                  <div style="font-weight:600;font-size:13px;">Jhon Pérez</div>
                  <div style="font-size:11px;color:var(--text-muted);">CC: 1.072.567.890</div>
                </div>
              </div>
            </td>
            <td>
              <div style="font-size:12.5px;font-weight:600;">2931245</div>
              <div style="font-size:11px;color:var(--text-muted);">SGSST</div>
            </td>
            <td>
              <div style="font-size:12.5px;">Ing. Felipe Muñoz</div>
            </td>
            <td><span class="badge badge-secondary">Proyecto Productivo</span></td>
            <td>
              <div style="display:flex;align-items:center;gap:6px;">
                <div style="flex:1;background:var(--border-color);border-radius:4px;height:6px;width:70px;overflow:hidden;">
                  <div style="width:100%;height:100%;background:var(--primary);"></div>
                </div>
                <span style="font-size:11px;font-weight:700;">6/6</span>
              </div>
            </td>
            <td><span class="badge badge-info">Por Certificar</span></td>
            <td>
              <div style="display:flex;gap:4px;">
                <button class="btn btn-ghost btn-sm" onclick="openStateModal('Jhon Pérez', 'Por Certificar')" title="Cambiar Estado"><i data-lucide="refresh-cw"></i></button>
                <button class="btn btn-ghost btn-sm" onclick="showToast('Generando ficha resumen de Jhon...','info')" title="Ficha Técnica"><i data-lucide="file-spreadsheet"></i></button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Paginación tabla aprendices -->
    <div class="pagination" style="margin-top:16px;">
      <div style="display:flex;align-items:center;gap:10px;">
        <span style="font-size:12px;color:var(--text-muted);">Mostrar</span>
        <select class="form-control" style="width:70px;padding:6px 8px;font-size:12px;" onchange="showToast('Mostrando '+this.value+' registros','info')">
          <option>10</option><option selected>25</option><option>50</option>
        </select>
        <span style="font-size:12px;color:var(--text-muted);">· Mostrando 1–3 de 148 aprendices</span>
      </div>
      <div class="pagination-pages">
        <button class="page-btn active">1</button>
        <button class="page-btn" onclick="showToast('Página 2','info')">2</button>
        <button class="page-btn" onclick="showToast('Página 3','info')">3</button>
        <span style="padding:0 4px;align-self:center;color:var(--text-muted);">...</span>
        <button class="page-btn" onclick="showToast('Última','info')">6</button>
        <button class="page-btn" onclick="showToast('Siguiente','info')"><i data-lucide="chevron-right" style="width:13px;height:13px;"></i></button>
      </div>
    </div>
  </div>

  <!-- MODAL: CAMBIAR ESTADO (HU-20.1) -->
  <div class="modal-overlay" id="modalChangeState">
    <div class="modal-container" style="max-width:480px;">
      <div class="modal-header">
        <h3><i data-lucide="refresh-cw" style="width:18px;height:18px;margin-right:8px;vertical-align:middle;color:var(--primary);"></i>Cambiar Estado del Aprendiz</h3>
        <button class="modal-close" onclick="closeModal('modalChangeState')"><i data-lucide="x"></i></button>
      </div>
      <div class="modal-body">
        <p style="font-size:13px;color:var(--text-muted);margin-bottom:16px;">Aprendiz: <strong id="stateAprendizName">Carlos Guerrero</strong></p>
        
        <form id="changeStateForm" novalidate onsubmit="event.preventDefault(); submitStateChange();">
          <div class="form-group">
            <label class="form-label" for="newStateSelect">Nuevo Estado *</label>
            <select id="newStateSelect" class="form-control" required>
              <option value="En Inducción">En Inducción</option>
              <option value="En Proceso">En Proceso</option>
              <option value="Por Certificar">Por Certificar</option>
              <option value="Certificado">Certificado</option>
              <option value="Suspendido">Suspendido</option>
            </select>
          </div>

          <div class="form-group">
            <label class="form-label" for="changeStateReason">Motivo del Cambio *</label>
            <textarea id="changeStateReason" class="form-control" rows="4" placeholder="Describa el motivo técnico o administrativo de este cambio de estado..." required></textarea>
            <span class="form-error-text" id="stateReasonError">El motivo es obligatorio para justificar el cambio de estado.</span>
          </div>

          <div class="form-group">
            <label class="form-label" for="coordActa">Acta o Documento de Soporte (Opcional)</label>
            <div class="dropzone" id="actaDropzone" style="padding:16px;">
              <i data-lucide="file-text"></i>
              <p class="dropzone-title" style="font-size:12.5px;">Cargar Acta de Comité / Soporte</p>
              <p class="dropzone-sub">PDF hasta 5MB</p>
              <input type="file" id="actaFile" accept=".pdf" style="display:none;">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-ghost" onclick="closeModal('modalChangeState')">Cancelar</button>
        <button type="submit" form="changeStateForm" class="btn btn-primary"><i data-lucide="check"></i> Registrar Cambio</button>
      </div>
    </div>
  </div>

</div>

<script>
function filterCoordApprentices(query) {
  const rows = document.querySelectorAll('#coordApprenticeTableBody tr');
  const q = query.toLowerCase();
  rows.forEach(row => {
    const text = row.textContent.toLowerCase();
    row.style.display = text.includes(q) ? '' : 'none';
  });
}

function filterCoordByStatus(status) {
  const rows = document.querySelectorAll('#coordApprenticeTableBody tr');
  const s = status.toLowerCase();
  rows.forEach(row => {
    if (!status) {
      row.style.display = '';
      return;
    }
    const text = row.textContent.toLowerCase();
    row.style.display = text.includes(s) ? '' : 'none';
  });
}

function openStateModal(name, currentState) {
  document.getElementById('stateAprendizName').textContent = name;
  document.getElementById('newStateSelect').value = currentState;
  document.getElementById('changeStateReason').value = '';
  document.getElementById('stateReasonError').style.display = 'none';
  openModal('modalChangeState');
}

function submitStateChange() {
  const reason = document.getElementById('changeStateReason').value.trim();
  const state = document.getElementById('newStateSelect').value;
  const name = document.getElementById('stateAprendizName').textContent;
  
  if (!reason) {
    document.getElementById('stateReasonError').style.display = 'block';
    showToast('Debe ingresar un motivo para justificar el cambio de estado.', 'error');
    return;
  }
  document.getElementById('stateReasonError').style.display = 'none';
  
  showToast(`Estado de ${name} cambiado a "${state}" exitosamente.`, 'success');
  closeModal('modalChangeState');
}
</script>
