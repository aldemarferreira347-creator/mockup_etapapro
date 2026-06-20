<!-- VIEW: DASHBOARD INSTRUCTOR (HU-06, HU-07) -->
<div class="view-content" id="view-dashboard-instructor">

  <div class="welcome-card-header">
    <div style="display: flex; align-items: center; gap: 14px;">
      <div class="kpi-icon-wrapper" style="background: rgba(255,255,255,0.15); color: #FFFFFF; font-size: 24px;">
        <i data-lucide="users"></i>
      </div>
      <div>
        <h1>Panel del Instructor</h1>
        <p>Ing. María Rodríguez · Bienvenida de vuelta. Tienes 3 bitácoras pendientes de revisión.</p>
      </div>
    </div>
  </div>

  <!-- KPIs -->
  <div class="grid-4" style="margin-bottom: 24px;">
    <div class="kpi-card">
      <div class="kpi-icon-wrapper" style="background: rgba(57,169,0,0.12); color: var(--primary);">
        <i data-lucide="users"></i>
      </div>
      <div class="kpi-info">
        <span class="kpi-label">Aprendices Asignados</span>
        <span class="kpi-value">12</span>
      </div>
    </div>
    <div class="kpi-card">
      <div class="kpi-icon-wrapper" style="background: rgba(245,158,11,0.12); color: var(--status-warning);">
        <i data-lucide="file-clock"></i>
      </div>
      <div class="kpi-info">
        <span class="kpi-label">Bitácoras por Revisar</span>
        <span class="kpi-value">3</span>
      </div>
    </div>
    <div class="kpi-card">
      <div class="kpi-icon-wrapper" style="background: rgba(14,165,233,0.12); color: var(--status-info);">
        <i data-lucide="calendar-check"></i>
      </div>
      <div class="kpi-info">
        <span class="kpi-label">Visitas Programadas</span>
        <span class="kpi-value">5</span>
      </div>
    </div>
    <div class="kpi-card">
      <div class="kpi-icon-wrapper" style="background: rgba(239,68,68,0.12); color: var(--status-danger);">
        <i data-lucide="alert-triangle"></i>
      </div>
      <div class="kpi-info">
        <span class="kpi-label">En Riesgo</span>
        <span class="kpi-value">2</span>
      </div>
    </div>
  </div>

  <!-- Apprentices table -->
  <div class="card" style="padding: 24px;">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; flex-wrap: wrap; gap: 12px;">
      <h3 style="font-size: 15px;">Mis Aprendices</h3>
      <div style="display: flex; gap: 10px; flex-wrap: wrap; align-items: center;">
        <!-- Search -->
        <div class="header-search" style="position:static;background:var(--bg-secondary);border-radius:8px;padding:6px 12px;width:220px;">
          <i data-lucide="search" style="width:16px;height:16px;color:var(--text-muted);"></i>
          <input type="search" placeholder="Buscar aprendiz..." id="apprenticeSearch" style="border:none;background:transparent;outline:none;font-size:13px;color:var(--text-primary);" oninput="filterApprentices(this.value)">
        </div>
        <!-- State filter -->
        <select class="form-control" id="stateFilter" style="width:160px;font-size:13px;" onchange="filterByState(this.value)">
          <option value="">Todos los estados</option>
          <option value="activo">En proceso</option>
          <option value="riesgo">En riesgo</option>
          <option value="pendiente">Documentación pendiente</option>
          <option value="finalizado">Finalizado</option>
        </select>
      </div>
    </div>

    <div class="table-wrapper">
      <table class="table" id="apprenticesTable">
        <thead>
          <tr>
            <th>Aprendiz</th>
            <th>Ficha</th>
            <th>Empresa</th>
            <th>Progreso</th>
            <th>Estado</th>
            <th>Última Bitácora</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody id="apprenticesBody">
          <tr data-state="activo">
            <td>
              <div style="display:flex;align-items:center;gap:10px;">
                <div class="user-avatar" style="width:34px;height:34px;font-size:12px;">CG</div>
                <div>
                  <div style="font-weight:600;font-size:13px;">Carlos Guerrero</div>
                  <div style="font-size:11px;color:var(--text-muted);">CC: 1.062.345.678</div>
                </div>
              </div>
            </td>
            <td><span style="font-size:12px;">2885678 · ADSO</span></td>
            <td><span style="font-size:12px;">TechCorp S.A.S.</span></td>
            <td>
              <div style="display:flex;align-items:center;gap:8px;">
                <div style="flex:1;background:var(--border-color);border-radius:4px;height:6px;overflow:hidden;min-width:80px;">
                  <div style="width:67%;height:100%;background:var(--primary);"></div>
                </div>
                <span style="font-size:12px;font-weight:700;color:var(--primary);">67%</span>
              </div>
            </td>
            <td><span class="badge badge-success">En proceso</span></td>
            <td><span style="font-size:12px;">15/05/2026</span></td>
            <td>
              <div style="display:flex;gap:6px;">
                <button class="btn btn-ghost btn-sm" onclick="navigateTo('view-revision-instructor')" title="Revisar bitácoras"><i data-lucide="file-search"></i></button>
                <button class="btn btn-ghost btn-sm" onclick="navigateTo('view-agenda-instructor')" title="Programar visita"><i data-lucide="calendar-plus"></i></button>
                <button class="btn btn-ghost btn-sm" onclick="openApprenticeSummary('Carlos Guerrero')" title="Ver resumen"><i data-lucide="eye"></i></button>
              </div>
            </td>
          </tr>
          <tr data-state="riesgo">
            <td>
              <div style="display:flex;align-items:center;gap:10px;">
                <div class="user-avatar" style="width:34px;height:34px;font-size:12px;background:var(--status-danger);">LM</div>
                <div>
                  <div style="font-weight:600;font-size:13px;">Laura Martínez</div>
                  <div style="font-size:11px;color:var(--text-muted);">CC: 1.048.912.345</div>
                </div>
              </div>
            </td>
            <td><span style="font-size:12px;">2885678 · ADSO</span></td>
            <td><span style="font-size:12px;">Innova Digital</span></td>
            <td>
              <div style="display:flex;align-items:center;gap:8px;">
                <div style="flex:1;background:var(--border-color);border-radius:4px;height:6px;overflow:hidden;min-width:80px;">
                  <div style="width:33%;height:100%;background:var(--status-danger);"></div>
                </div>
                <span style="font-size:12px;font-weight:700;color:var(--status-danger);">33%</span>
              </div>
            </td>
            <td><span class="badge badge-danger">En riesgo</span></td>
            <td><span style="font-size:12px;color:var(--status-danger);">25/04/2026</span></td>
            <td>
              <div style="display:flex;gap:6px;">
                <button class="btn btn-ghost btn-sm" onclick="navigateTo('view-revision-instructor')" title="Revisar bitácoras"><i data-lucide="file-search"></i></button>
                <button class="btn btn-ghost btn-sm" onclick="navigateTo('view-agenda-instructor')" title="Programar visita"><i data-lucide="calendar-plus"></i></button>
                <button class="btn btn-ghost btn-sm" onclick="openApprenticeSummary('Laura Martínez')" title="Ver resumen"><i data-lucide="eye"></i></button>
              </div>
            </td>
          </tr>
          <tr data-state="pendiente">
            <td>
              <div style="display:flex;align-items:center;gap:10px;">
                <div class="user-avatar" style="width:34px;height:34px;font-size:12px;background:var(--status-warning);">JP</div>
                <div>
                  <div style="font-weight:600;font-size:13px;">Jhon Pérez</div>
                  <div style="font-size:11px;color:var(--text-muted);">CC: 1.072.567.890</div>
                </div>
              </div>
            </td>
            <td><span style="font-size:12px;">2931245 · SGSST</span></td>
            <td><span style="font-size:12px;">Constructora Norte</span></td>
            <td>
              <div style="display:flex;align-items:center;gap:8px;">
                <div style="flex:1;background:var(--border-color);border-radius:4px;height:6px;overflow:hidden;min-width:80px;">
                  <div style="width:50%;height:100%;background:var(--status-warning);"></div>
                </div>
                <span style="font-size:12px;font-weight:700;color:var(--status-warning);">50%</span>
              </div>
            </td>
            <td><span class="badge badge-warning">Doc. Pendiente</span></td>
            <td><span style="font-size:12px;">01/05/2026</span></td>
            <td>
              <div style="display:flex;gap:6px;">
                <button class="btn btn-ghost btn-sm" onclick="navigateTo('view-revision-instructor')" title="Revisar bitácoras"><i data-lucide="file-search"></i></button>
                <button class="btn btn-ghost btn-sm" onclick="navigateTo('view-agenda-instructor')" title="Programar visita"><i data-lucide="calendar-plus"></i></button>
                <button class="btn btn-ghost btn-sm" onclick="openApprenticeSummary('Jhon Pérez')" title="Ver resumen"><i data-lucide="eye"></i></button>
              </div>
            </td>
          </tr>
          <tr data-state="activo">
            <td>
              <div style="display:flex;align-items:center;gap:10px;">
                <div class="user-avatar" style="width:34px;height:34px;font-size:12px;background:#8b5cf6;">SR</div>
                <div>
                  <div style="font-weight:600;font-size:13px;">Sara Ramírez</div>
                  <div style="font-size:11px;color:var(--text-muted);">CC: 1.055.678.901</div>
                </div>
              </div>
            </td>
            <td><span style="font-size:12px;">2885678 · ADSO</span></td>
            <td><span style="font-size:12px;">DigitalPyme SAS</span></td>
            <td>
              <div style="display:flex;align-items:center;gap:8px;">
                <div style="flex:1;background:var(--border-color);border-radius:4px;height:6px;overflow:hidden;min-width:80px;">
                  <div style="width:83%;height:100%;background:var(--primary);"></div>
                </div>
                <span style="font-size:12px;font-weight:700;color:var(--primary);">83%</span>
              </div>
            </td>
            <td><span class="badge badge-success">En proceso</span></td>
            <td><span style="font-size:12px;">10/06/2026</span></td>
            <td>
              <div style="display:flex;gap:6px;">
                <button class="btn btn-ghost btn-sm" onclick="navigateTo('view-revision-instructor')" title="Revisar bitácoras"><i data-lucide="file-search"></i></button>
                <button class="btn btn-ghost btn-sm" onclick="navigateTo('view-agenda-instructor')" title="Programar visita"><i data-lucide="calendar-plus"></i></button>
                <button class="btn btn-ghost btn-sm" onclick="openApprenticeSummary('Sara Ramírez')" title="Ver resumen"><i data-lucide="eye"></i></button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <div id="apprenticesEmptyState" class="empty-state" style="display:none;">
      <i data-lucide="search-x"></i>
      <h3>Sin resultados</h3>
      <p>No se encontraron aprendices con esos criterios.</p>
    </div>

    <!-- Paginación -->
    <div class="pagination" style="margin-top:16px;">
      <div style="display:flex;align-items:center;gap:10px;">
        <span style="font-size:12px;color:var(--text-muted);">Mostrar</span>
        <select class="form-control" style="width:70px;padding:6px 8px;font-size:12px;" onchange="showToast('Mostrando '+this.value+' registros','info')">
          <option selected>10</option><option>25</option><option>50</option>
        </select>
        <span style="font-size:12px;color:var(--text-muted);">· Mostrando 1–4 de 12 aprendices</span>
      </div>
      <div class="pagination-pages">
        <button class="page-btn active">1</button>
        <button class="page-btn" onclick="showToast('Página 2','info')">2</button>
        <button class="page-btn" onclick="showToast('Siguiente','info')"><i data-lucide="chevron-right" style="width:13px;height:13px;"></i></button>
      </div>
    </div>
  </div>

  <!-- MODAL: RESUMEN DE APRENDIZ -->
  <div class="modal-overlay" id="modalApprenticeSummary">
    <div class="modal-container" style="max-width: 560px;">
      <div class="modal-header">
        <h3><i data-lucide="user" style="width:18px;height:18px;margin-right:8px;vertical-align:middle;"></i>Resumen del Aprendiz</h3>
        <button class="modal-close" onclick="closeModal('modalApprenticeSummary')"><i data-lucide="x"></i></button>
      </div>
      <div class="modal-body">
        <div style="display:flex;align-items:center;gap:14px;margin-bottom:20px;padding-bottom:16px;border-bottom:1px solid var(--border-color);">
          <div class="user-avatar" style="width:50px;height:50px;font-size:18px;" id="summaryAvatar">CG</div>
          <div>
            <h4 id="summaryName">Carlos Guerrero</h4>
            <p style="font-size:12px;color:var(--text-muted);">CC: 1.062.345.678 · Ficha: 2885678 · ADSO</p>
            <span class="badge badge-success">En proceso</span>
          </div>
        </div>
        <div class="grid-2" style="margin-bottom:16px;">
          <div>
            <p style="font-size:12px;color:var(--text-muted);margin-bottom:4px;">Empresa</p>
            <p style="font-size:13px;font-weight:600;">TechCorp S.A.S.</p>
          </div>
          <div>
            <p style="font-size:12px;color:var(--text-muted);margin-bottom:4px;">Jefe Inmediato</p>
            <p style="font-size:13px;font-weight:600;">Ing. David Torres</p>
          </div>
          <div>
            <p style="font-size:12px;color:var(--text-muted);margin-bottom:4px;">Inicio Etapa</p>
            <p style="font-size:13px;font-weight:600;">15/03/2026</p>
          </div>
          <div>
            <p style="font-size:12px;color:var(--text-muted);margin-bottom:4px;">Fin Estimado</p>
            <p style="font-size:13px;font-weight:600;">30/09/2026</p>
          </div>
        </div>
        <div>
          <p style="font-size:12px;color:var(--text-muted);margin-bottom:8px;">Bitácoras Entregadas</p>
          <div style="display:flex;gap:6px;flex-wrap:wrap;">
            <span class="badge badge-success">B1 ✓</span>
            <span class="badge badge-success">B2 ✓</span>
            <span class="badge badge-info">B3 🔍</span>
            <span class="badge badge-success">B4 ✓</span>
            <span class="badge badge-warning">B5 ⏳</span>
            <span class="badge badge-secondary">B6 —</span>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-ghost" onclick="closeModal('modalApprenticeSummary')">Cerrar</button>
        <button class="btn btn-primary" onclick="navigateTo('view-evaluar-instructor'); closeModal('modalApprenticeSummary');">
          <i data-lucide="clipboard-check"></i> Evaluar Competencias
        </button>
      </div>
    </div>
  </div>

</div>

<script>
function filterApprentices(query) {
  const rows = document.querySelectorAll('#apprenticesBody tr');
  const q = query.toLowerCase();
  let visible = 0;
  rows.forEach(row => {
    const match = row.textContent.toLowerCase().includes(q);
    row.style.display = match ? '' : 'none';
    if (match) visible++;
  });
  document.getElementById('apprenticesEmptyState').style.display = visible === 0 ? 'flex' : 'none';
}

function filterByState(state) {
  const rows = document.querySelectorAll('#apprenticesBody tr');
  let visible = 0;
  rows.forEach(row => {
    const match = !state || row.dataset.state === state;
    row.style.display = match ? '' : 'none';
    if (match) visible++;
  });
  document.getElementById('apprenticesEmptyState').style.display = visible === 0 ? 'flex' : 'none';
}

function openApprenticeSummary(name) {
  const initials = name.split(' ').map(n => n[0]).join('').substring(0,2).toUpperCase();
  document.getElementById('summaryAvatar').textContent = initials;
  document.getElementById('summaryName').textContent = name;
  openModal('modalApprenticeSummary');
}
</script>
