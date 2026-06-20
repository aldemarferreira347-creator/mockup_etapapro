<!-- VIEW: AUDITORÍA Y TRAZABILIDAD COORDINADOR (HU-25) -->
<div class="view-content" id="view-auditoria">

  <div class="welcome-card-header">
    <div style="display: flex; align-items: center; gap: 14px;">
      <div class="kpi-icon-wrapper" style="background: rgba(255,255,255,0.15); color: #FFFFFF; font-size: 24px;">
        <i data-lucide="shield-check"></i>
      </div>
      <div>
        <h1>Bitácora de Auditoría y Trazabilidad</h1>
        <p>Historial completo de acciones, cambios de estado, accesos y operaciones críticas realizadas en la plataforma.</p>
      </div>
    </div>
  </div>

  <!-- Filters card -->
  <div class="card" style="padding: 24px; margin-bottom: 24px;">
    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:16px; flex-wrap:wrap; gap:12px;">
      <h3 style="font-size:15px;">Filtros de Búsqueda</h3>
      <button class="btn btn-ghost btn-sm" onclick="clearAuditFilters()">Limpiar Filtros</button>
    </div>
    <div class="grid-4" style="gap:16px;">
      <div class="form-group" style="margin-bottom:0;">
        <label class="form-label" for="auditUser">Usuario / Rol</label>
        <select id="auditUser" class="form-control" onchange="filterAuditLogs()">
          <option value="">Todos...</option>
          <option value="coordinador">Coordinador (Sandra M.)</option>
          <option value="instructor">Instructor (María R.)</option>
          <option value="aprendiz">Aprendiz (Carlos G.)</option>
          <option value="administrador">Administrador</option>
        </select>
      </div>
      <div class="form-group" style="margin-bottom:0;">
        <label class="form-label" for="auditAction">Tipo de Acción</label>
        <select id="auditAction" class="form-control" onchange="filterAuditLogs()">
          <option value="">Todas...</option>
          <option value="Cambio de Estado">Cambio de Estado</option>
          <option value="Asignación">Asignación de Instructor</option>
          <option value="Aprobación">Aprobación de Bitácora</option>
          <option value="Carga de Archivo">Carga de Documento</option>
          <option value="Inicio de Sesión">Inicio de Sesión</option>
        </select>
      </div>
      <div class="form-group" style="margin-bottom:0;">
        <label class="form-label" for="auditDateStart">Fecha Inicio</label>
        <input type="date" id="auditDateStart" class="form-control" onchange="filterAuditLogs()">
      </div>
      <div class="form-group" style="margin-bottom:0;">
        <label class="form-label" for="auditDateEnd">Fecha Fin</label>
        <input type="date" id="auditDateEnd" class="form-control" onchange="filterAuditLogs()">
      </div>
    </div>
  </div>

  <!-- Logs Table -->
  <div class="card" style="padding: 24px;">
    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:20px; flex-wrap:wrap; gap:12px;">
      <h3 style="font-size:15px;">Registro de Eventos de Seguridad</h3>
      <div style="display:flex; gap:10px; flex-wrap:wrap; align-items:center;">
        <div class="header-search" style="position:static;background:var(--bg-secondary);border-radius:8px;padding:6px 12px;width:220px;">
          <i data-lucide="search" style="width:16px;height:16px;color:var(--text-muted);"></i>
          <input type="search" placeholder="Buscar en logs..." id="auditSearchInput" style="border:none;background:transparent;outline:none;font-size:13px;color:var(--text-primary);" oninput="filterAuditLogs()">
        </div>
        <button class="btn btn-primary btn-sm" onclick="exportAuditCSV()"><i data-lucide="download"></i> Exportar Logs</button>
      </div>
    </div>

    <div class="table-wrapper">
      <table class="table" style="font-size:12.5px;" id="auditTable">
        <thead>
          <tr>
            <th>Fecha / Hora</th>
            <th>Usuario</th>
            <th>Rol</th>
            <th>Operación / Acción</th>
            <th>Módulo / Entidad</th>
            <th>Detalle del Registro</th>
            <th>IP Origen</th>
          </tr>
        </thead>
        <tbody id="auditTableBody">
          <tr data-rol="coordinador" data-accion="Cambio de Estado">
            <td>14/06/2026 17:15:32</td>
            <td><strong>Sandra Muñoz</strong></td>
            <td><span class="badge badge-primary">Coordinador</span></td>
            <td>Cambio de Estado</td>
            <td>Aprendices / Procesos</td>
            <td>Cambió estado de Laura Martínez de <em>En Proceso</em> a <em>Suspendido</em>. Motivo: Comité Técnico.</td>
            <td>190.24.128.45</td>
          </tr>
          <tr data-rol="instructor" data-accion="Aprobación">
            <td>14/06/2026 16:42:10</td>
            <td><strong>María Rodríguez</strong></td>
            <td><span class="badge badge-success">Instructor</span></td>
            <td>Aprobación</td>
            <td>Bitácoras</td>
            <td>Aprobó Bitácora N° 4 de Carlos Guerrero (Calificación: 4.5).</td>
            <td>181.143.20.12</td>
          </tr>
          <tr data-rol="coordinador" data-accion="Asignación">
            <td>14/06/2026 15:20:05</td>
            <td><strong>Sandra Muñoz</strong></td>
            <td><span class="badge badge-primary">Coordinador</span></td>
            <td>Asignación de Instructor</td>
            <td>Asignaciones</td>
            <td>Asignó al instructor Felipe Muñoz al aprendiz Andrés Felipe Muñoz (Ficha ADSO).</td>
            <td>190.24.128.45</td>
          </tr>
          <tr data-rol="aprendiz" data-accion="Carga de Archivo">
            <td>14/06/2026 09:12:44</td>
            <td><strong>Carlos Guerrero</strong></td>
            <td><span class="badge badge-secondary">Aprendiz</span></td>
            <td>Carga de Documento</td>
            <td>Carpeta Digital</td>
            <td>Cargó archivo <em>Carta_Presentacion_Firmada.pdf</em>.</td>
            <td>186.116.32.90</td>
          </tr>
          <tr data-rol="administrador" data-accion="Inicio de Sesión">
            <td>14/06/2026 08:00:15</td>
            <td><strong>Admin Sistema</strong></td>
            <td><span class="badge badge-danger">Administrador</span></td>
            <td>Inicio de Sesión</td>
            <td>Autenticación</td>
            <td>Acceso exitoso al sistema.</td>
            <td>127.0.0.1</td>
          </tr>
          <tr data-rol="aprendiz" data-accion="Inicio de Sesión">
            <td>13/06/2026 18:30:12</td>
            <td><strong>Jhon Pérez</strong></td>
            <td><span class="badge badge-secondary">Aprendiz</span></td>
            <td>Inicio de Sesión</td>
            <td>Autenticación</td>
            <td>Acceso exitoso al sistema.</td>
            <td>190.142.11.23</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div id="auditEmptyState" class="empty-state" style="display:none;">
      <i data-lucide="search-x"></i>
      <h3>Sin registros coincidentes</h3>
      <p>Ajuste los filtros o la búsqueda de trazabilidad.</p>
    </div>

    <!-- Paginación -->
    <div class="pagination" style="margin-top:16px;">
      <div style="display:flex;align-items:center;gap:10px;">
        <span style="font-size:12px;color:var(--text-muted);">Mostrar</span>
        <select class="form-control" style="width:70px;padding:6px 8px;font-size:12px;" onchange="showToast('Mostrando '+this.value+' registros por página','info')">
          <option>10</option><option>25</option><option>50</option><option>100</option>
        </select>
        <span style="font-size:12px;color:var(--text-muted);">registros · Mostrando 1–6 de 284</span>
      </div>
      <div class="pagination-pages">
        <button class="page-btn active">1</button>
        <button class="page-btn" onclick="showToast('Página 2','info')">2</button>
        <button class="page-btn" onclick="showToast('Página 3','info')">3</button>
        <span style="padding:0 4px;align-self:center;color:var(--text-muted);">...</span>
        <button class="page-btn" onclick="showToast('Última página','info')">29</button>
        <button class="page-btn" onclick="showToast('Siguiente','info')"><i data-lucide="chevron-right" style="width:13px;"></i></button>
      </div>
    </div>
  </div>

</div>

<script>
function filterAuditLogs() {
  const query = document.getElementById('auditSearchInput').value.toLowerCase();
  const rol = document.getElementById('auditUser').value;
  const action = document.getElementById('auditAction').value.toLowerCase();
  
  const rows = document.querySelectorAll('#auditTableBody tr');
  let visible = 0;
  
  rows.forEach(row => {
    const text = row.textContent.toLowerCase();
    const rowRol = row.dataset.rol;
    const rowAccion = row.dataset.accion.toLowerCase();
    
    const matchesQuery = text.includes(query);
    const matchesRol = !rol || rowRol === rol;
    const matchesAccion = !action || rowAccion.includes(action);
    
    const visibleNow = matchesQuery && matchesRol && matchesAccion;
    row.style.display = visibleNow ? '' : 'none';
    if (visibleNow) visible++;
  });
  
  document.getElementById('auditEmptyState').style.display = visible === 0 ? 'flex' : 'none';
}

function clearAuditFilters() {
  document.getElementById('auditSearchInput').value = '';
  document.getElementById('auditUser').value = '';
  document.getElementById('auditAction').value = '';
  document.getElementById('auditDateStart').value = '';
  document.getElementById('auditDateEnd').value = '';
  filterAuditLogs();
  showToast('Filtros de auditoría restablecidos.', 'info');
}

function exportAuditCSV() {
  showToast('Generando reporte CSV de trazabilidad y seguridad...', 'info');
  setTimeout(() => {
    showToast('Descarga iniciada: EtapaPro_AuditLogs_2026.csv', 'success');
  }, 1200);
}
</script>
