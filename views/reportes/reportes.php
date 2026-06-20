<!-- VIEW: CONTROL Y REPORTES (HU-24) -->
<div class="view-content" id="view-reportes">

  <div class="welcome-card-header">
    <div style="display: flex; align-items: center; gap: 14px;">
      <div class="kpi-icon-wrapper" style="background: rgba(255,255,255,0.15); color: #FFFFFF; font-size: 24px;">
        <i data-lucide="bar-chart-3"></i>
      </div>
      <div>
        <h1>Módulo de Reportes y Estadísticas</h1>
        <p>Genera informes de cumplimiento, exporta listados por ficha e instructor, y visualiza estadísticas de certificación.</p>
      </div>
    </div>
  </div>

  <!-- Filters / Configuration for report generation -->
  <div class="card" style="padding: 24px; margin-bottom: 24px;">
    <h3 style="font-size: 15px; margin-bottom: 16px;">Configuración de Reportes</h3>
    <form id="reportConfigForm" novalidate onsubmit="event.preventDefault(); generateReport();">
      <div class="grid-4" style="gap: 16px; margin-bottom: 20px;">
        <div class="form-group" style="margin-bottom:0;">
          <label class="form-label" for="repFicha">Seleccionar Ficha *</label>
          <select id="repFicha" class="form-control" required>
            <option value="">Todas las Fichas...</option>
            <option value="2885678">2885678 - ADSO</option>
            <option value="2931245">2931245 - SGSST</option>
            <option value="2784512">2784512 - Contabilidad</option>
          </select>
        </div>
        <div class="form-group" style="margin-bottom:0;">
          <label class="form-label" for="repPeriod">Período Académico</label>
          <select id="repPeriod" class="form-control">
            <option value="2026-1">2026 - Trimestre I (Ene–Jun)</option>
            <option value="2026-2">2026 - Trimestre II (Jun–Dic)</option>
            <option value="2025">Año 2025 Completo</option>
          </select>
        </div>
        <div class="form-group" style="margin-bottom:0;">
          <label class="form-label" for="repInstructor">Instructor Asignado</label>
          <select id="repInstructor" class="form-control">
            <option value="">Todos los Instructores...</option>
            <option value="maria">Ing. María Rodríguez</option>
            <option value="felipe">Ing. Felipe Muñoz</option>
            <option value="clara">Ing. Clara Gómez</option>
          </select>
        </div>
        <div class="form-group" style="margin-bottom:0;">
          <label class="form-label" for="repFormat">Tipo de Reporte *</label>
          <select id="repFormat" class="form-control" required>
            <option value="cumplimiento">Índice de Cumplimiento de Bitácoras</option>
            <option value="certificacion">Estado de Certificaciones</option>
            <option value="novedades">Historial de Novedades Académicas</option>
            <option value="visitas">Seguimiento de Visitas Programadas</option>
          </select>
        </div>
      </div>
      <div style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:12px;">
        <span style="font-size:12.5px; color:var(--text-muted);">* Campos obligatorios para reportes personalizados.</span>
        <div style="display:flex; gap:8px;">
          <button type="button" class="btn btn-ghost" onclick="exportReport('excel')">
            <i data-lucide="file-spreadsheet" style="color:#10b981;"></i> Exportar a Excel
          </button>
          <button type="button" class="btn btn-ghost" onclick="exportReport('pdf')">
            <i data-lucide="file-text" style="color:#ef4444;"></i> Exportar a PDF
          </button>
          <button type="submit" class="btn btn-primary">
            <i data-lucide="play-circle"></i> Visualizar Datos
          </button>
        </div>
      </div>
    </form>
  </div>

  <!-- Preview Grid -->
  <div class="grid-2" style="gap:24px; margin-bottom:24px; align-items:start;">
    
    <!-- Report Graphic Simulation -->
    <div class="card" style="padding:24px;">
      <h3 style="font-size:15px; margin-bottom:16px;">Tasa General de Avance</h3>
      
      <div style="display:flex; flex-direction:column; gap:16px;">
        <div>
          <div style="display:flex; justify-content:space-between; font-size:12.5px; margin-bottom:6px;">
            <span>ADSO (Ficha 2885678) - Bitácoras al día</span>
            <span style="font-weight:700;">82%</span>
          </div>
          <div style="background:var(--border-color); border-radius:4px; height:8px; overflow:hidden;">
            <div style="width:82%; height:100%; background:var(--primary);"></div>
          </div>
        </div>

        <div>
          <div style="display:flex; justify-content:space-between; font-size:12.5px; margin-bottom:6px;">
            <span>SGSST (Ficha 2931245) - Bitácoras al día</span>
            <span style="font-weight:700;">64%</span>
          </div>
          <div style="background:var(--border-color); border-radius:4px; height:8px; overflow:hidden;">
            <div style="width:64%; height:100%; background:var(--status-warning);"></div>
          </div>
        </div>

        <div>
          <div style="display:flex; justify-content:space-between; font-size:12.5px; margin-bottom:6px;">
            <span>Contabilidad (Ficha 2784512) - Bitácoras al día</span>
            <span style="font-weight:700;">91%</span>
          </div>
          <div style="background:var(--border-color); border-radius:4px; height:8px; overflow:hidden;">
            <div style="width:91%; height:100%; background:var(--primary);"></div>
          </div>
        </div>
      </div>

      <div style="margin-top:24px; padding:16px; background:var(--bg-secondary); border-radius:10px; text-align:center;">
        <h4 style="font-size:13px; margin-bottom:4px;">Promedio de Cumplimiento Regional</h4>
        <span style="font-size:24px; font-weight:700; color:var(--primary);">79.0%</span>
        <p style="font-size:11px; color:var(--text-muted); margin-top:4px;">Calculado a partir de las bitácoras aprobadas sobre entregas estimadas.</p>
      </div>
    </div>

    <!-- Generated Data table preview -->
    <div class="card" style="padding:24px;">
      <h3 style="font-size:15px; margin-bottom:16px;">Vista Previa del Reporte</h3>
      
      <div class="table-wrapper" style="max-height:270px; overflow-y:auto;">
        <table class="table" style="font-size:12px;">
          <thead>
            <tr>
              <th>Ficha</th>
              <th>Entregas Requeridas</th>
              <th>Entregadas</th>
              <th>Aprobadas</th>
              <th>Rendimiento</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>2885678</td>
              <td>72</td>
              <td>59</td>
              <td>52</td>
              <td><span class="badge badge-success">Alto</span></td>
            </tr>
            <tr>
              <td>2931245</td>
              <td>48</td>
              <td>35</td>
              <td>30</td>
              <td><span class="badge badge-warning">Medio</span></td>
            </tr>
            <tr>
              <td>2784512</td>
              <td>90</td>
              <td>84</td>
              <td>82</td>
              <td><span class="badge badge-success">Alto</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>

</div>

<script>
function generateReport() {
  const format = document.getElementById('repFormat').value;
  const formatName = document.getElementById('repFormat').options[document.getElementById('repFormat').selectedIndex].text;
  
  showToast(`Generando reporte: "${formatName}"...`, 'info');
  setTimeout(() => {
    showToast('Visualización de datos actualizada con éxito.', 'success');
  }, 1000);
}

function exportReport(type) {
  const formatName = document.getElementById('repFormat').options[document.getElementById('repFormat').selectedIndex].text;
  
  if (type === 'excel') {
    showToast(`Preparando libro Excel (.xlsx) para: ${formatName}...`, 'info');
    setTimeout(() => {
      showToast('Descarga iniciada: Reporte_Cumplimiento_EtapaPro.xlsx', 'success');
    }, 1200);
  } else {
    showToast(`Compilando documento PDF (.pdf) para: ${formatName}...`, 'info');
    setTimeout(() => {
      showToast('Descarga iniciada: Reporte_Cumplimiento_EtapaPro.pdf', 'success');
    }, 1200);
  }
}
</script>
