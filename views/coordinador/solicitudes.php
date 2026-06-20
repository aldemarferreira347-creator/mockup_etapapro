<!-- VIEW: ASIGNACIONES Y SOLICITUDES COORDINADOR (HU-21, HU-22) -->
<div class="view-content" id="view-solicitudes-coordinador">

  <div class="welcome-card-header">
    <div style="display: flex; align-items: center; gap: 14px;">
      <div class="kpi-icon-wrapper" style="background: rgba(255,255,255,0.15); color: #FFFFFF; font-size: 24px;">
        <i data-lucide="user-plus"></i>
      </div>
      <div>
        <h1>Asignaciones y Solicitudes</h1>
        <p>Asigna instructores de seguimiento a aprendices que inician etapa productiva y aprueba solicitudes de cambio.</p>
      </div>
    </div>
  </div>

  <!-- Tabs -->
  <div style="display:flex;gap:0;margin-bottom:24px;border-bottom:2px solid var(--border-color);">
    <button class="revision-tab revision-tab-active" onclick="switchSolicitudesTab('pendientes', this)" id="tabPendientes">
      <i data-lucide="clock" style="width:14px;height:14px;"></i> Por Asignar
      <span class="badge badge-warning" style="margin-left:6px;font-size:10px;">3</span>
    </button>
    <button class="revision-tab" onclick="switchSolicitudesTab('novedades', this)" id="tabNovedades">
      <i data-lucide="alert-triangle" style="width:14px;height:14px;"></i> Novedades y Cambios
      <span class="badge badge-warning" style="margin-left:6px;font-size:10px;">2</span>
    </button>
    <button class="revision-tab" onclick="switchSolicitudesTab('instructores', this)" id="tabInstructoresList">
      <i data-lucide="users" style="width:14px;height:14px;"></i> Carga de Instructores
    </button>
  </div>

  <!-- TAB: PENDIENTES DE ASIGNACIÓN -->
  <div id="solTabPendientes">
    <div class="card" style="padding:24px;">
      <h3 style="font-size:15px; margin-bottom:16px;">Aprendices sin Instructor Asignado</h3>
      <div style="display:flex; flex-direction:column; gap:16px;">

        <!-- Request 1 -->
        <div class="revision-item" style="background:var(--bg-secondary); border-radius:10px; padding:20px; border-left:4px solid var(--primary);">
          <div style="display:flex; justify-content:space-between; align-items:flex-start; gap:16px; flex-wrap:wrap;">
            <div style="flex:1; min-width:250px;">
              <div style="display:flex; align-items:center; gap:8px; margin-bottom:8px;">
                <span class="badge badge-primary">Nueva Solicitud</span>
                <span style="font-weight:700; font-size:14px;">Andrés Felipe Muñoz</span>
              </div>
              <div style="font-size:12.5px; color:var(--text-muted); display:flex; flex-direction:column; gap:4px;">
                <span>👤 Ficha: 2885678 · ADSO</span>
                <span>📅 Fecha Registro: 10/06/2026</span>
                <span>🏢 Empresa: Soluciones Web Popayán</span>
                <span>💼 Alternativa: Contrato de Aprendizaje</span>
              </div>
            </div>
            <div style="display:flex; align-items:center; gap:12px;">
              <div class="form-group" style="margin-bottom:0; width:220px;">
                <select class="form-control" style="font-size:12.5px;" id="assignInst1">
                  <option value="">Seleccionar Instructor...</option>
                  <option value="maria">Ing. María Rodríguez (12 asignados)</option>
                  <option value="felipe">Ing. Felipe Muñoz (8 asignados)</option>
                  <option value="clara">Ing. Clara Gómez (15 asignados)</option>
                </select>
              </div>
              <button class="btn btn-primary btn-sm" onclick="assignInstructor('Andrés Felipe Muñoz', 'assignInst1')">
                <i data-lucide="user-check"></i> Asignar
              </button>
            </div>
          </div>
        </div>

        <!-- Request 2 -->
        <div class="revision-item" style="background:var(--bg-secondary); border-radius:10px; padding:20px; border-left:4px solid var(--primary);">
          <div style="display:flex; justify-content:space-between; align-items:flex-start; gap:16px; flex-wrap:wrap;">
            <div style="flex:1; min-width:250px;">
              <div style="display:flex; align-items:center; gap:8px; margin-bottom:8px;">
                <span class="badge badge-primary">Nueva Solicitud</span>
                <span style="font-weight:700; font-size:14px;">Milena Alexandra Paz</span>
              </div>
              <div style="font-size:12.5px; color:var(--text-muted); display:flex; flex-direction:column; gap:4px;">
                <span>👤 Ficha: 2931245 · SGSST</span>
                <span>📅 Fecha Registro: 12/06/2026</span>
                <span>🏢 Empresa: Hospital San José</span>
                <span>💼 Alternativa: Pasantía</span>
              </div>
            </div>
            <div style="display:flex; align-items:center; gap:12px;">
              <div class="form-group" style="margin-bottom:0; width:220px;">
                <select class="form-control" style="font-size:12.5px;" id="assignInst2">
                  <option value="">Seleccionar Instructor...</option>
                  <option value="maria">Ing. María Rodríguez (12 asignados)</option>
                  <option value="felipe">Ing. Felipe Muñoz (8 asignados)</option>
                  <option value="clara">Ing. Clara Gómez (15 asignados)</option>
                </select>
              </div>
              <button class="btn btn-primary btn-sm" onclick="assignInstructor('Milena Alexandra Paz', 'assignInst2')">
                <i data-lucide="user-check"></i> Asignar
              </button>
            </div>
          </div>
        </div>

        <!-- Request 3 -->
        <div class="revision-item" style="background:var(--bg-secondary); border-radius:10px; padding:20px; border-left:4px solid var(--primary);">
          <div style="display:flex; justify-content:space-between; align-items:flex-start; gap:16px; flex-wrap:wrap;">
            <div style="flex:1; min-width:250px;">
              <div style="display:flex; align-items:center; gap:8px; margin-bottom:8px;">
                <span class="badge badge-primary">Nueva Solicitud</span>
                <span style="font-weight:700; font-size:14px;">Daniel Fernando Cobo</span>
              </div>
              <div style="font-size:12.5px; color:var(--text-muted); display:flex; flex-direction:column; gap:4px;">
                <span>👤 Ficha: 2885678 · ADSO</span>
                <span>📅 Fecha Registro: 14/06/2026</span>
                <span>🏢 Empresa: SENA CTPI</span>
                <span>💼 Alternativa: Proyecto Productivo</span>
              </div>
            </div>
            <div style="display:flex; align-items:center; gap:12px;">
              <div class="form-group" style="margin-bottom:0; width:220px;">
                <select class="form-control" style="font-size:12.5px;" id="assignInst3">
                  <option value="">Seleccionar Instructor...</option>
                  <option value="maria">Ing. María Rodríguez (12 asignados)</option>
                  <option value="felipe">Ing. Felipe Muñoz (8 asignados)</option>
                  <option value="clara">Ing. Clara Gómez (15 asignados)</option>
                </select>
              </div>
              <button class="btn btn-primary btn-sm" onclick="assignInstructor('Daniel Fernando Cobo', 'assignInst3')">
                <i data-lucide="user-check"></i> Asignar
              </button>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- TAB: NOVEDADES Y SOLICITUDES DE CAMBIO -->
  <div id="solTabNovedades" style="display:none;">
    <div class="card" style="padding:24px;">
      <h3 style="font-size:15px; margin-bottom:16px;">Novedades y Solicitudes de Cambio</h3>
      <div style="display:flex; flex-direction:column; gap:16px;">

        <!-- Novedad 1 -->
        <div class="revision-item" style="background:var(--bg-secondary); border-radius:10px; padding:20px; border-left:4px solid var(--status-warning);">
          <div style="display:flex; justify-content:space-between; align-items:flex-start; gap:16px; flex-wrap:wrap;">
            <div style="flex:1;">
              <div style="display:flex; align-items:center; gap:8px; margin-bottom:8px;">
                <span class="badge badge-warning">Cambio de Alternativa</span>
                <span style="font-weight:700; font-size:14px;">Carlos Guerrero</span>
              </div>
              <p style="font-size:12.5px; margin-bottom:8px; color:var(--text-secondary);">
                "Solicito cambio de alternativa de Pasantía a Contrato de Aprendizaje debido a que la empresa me ofreció patrocinio formal."
              </p>
              <div style="font-size:11px; color:var(--text-muted); display:flex; gap:16px;">
                <span>📅 Enviado: 09/06/2026</span>
                <span>👤 Instructor actual: Ing. María Rodríguez</span>
              </div>
            </div>
            <div style="display:flex; gap:8px;">
              <button class="btn btn-ghost btn-sm" onclick="showToast('Abriendo acta soporte de Carlos...','info')" title="Ver Soporte">
                <i data-lucide="file-text"></i> Soporte
              </button>
              <button class="btn btn-primary btn-sm" onclick="openNoveltyModal('Carlos Guerrero', 'Cambio de Alternativa')">
                <i data-lucide="check-square"></i> Resolver
              </button>
            </div>
          </div>
        </div>

        <!-- Novedad 2 -->
        <div class="revision-item" style="background:var(--bg-secondary); border-radius:10px; padding:20px; border-left:4px solid var(--status-danger);">
          <div style="display:flex; justify-content:space-between; align-items:flex-start; gap:16px; flex-wrap:wrap;">
            <div style="flex:1;">
              <div style="display:flex; align-items:center; gap:8px; margin-bottom:8px;">
                <span class="badge badge-danger">Deserción / Cancelación</span>
                <span style="font-weight:700; font-size:14px;">Laura Martínez</span>
              </div>
              <p style="font-size:12.5px; margin-bottom:8px; color:var(--text-secondary);">
                "Reporte de inasistencia recurrente y abandono del puesto de trabajo en la empresa Innova Digital. Se remite a comité técnico."
              </p>
              <div style="font-size:11px; color:var(--text-muted); display:flex; gap:16px;">
                <span>📅 Reportado por: Ing. María Rodríguez (Instructor)</span>
                <span>📅 Fecha Reporte: 14/06/2026</span>
              </div>
            </div>
            <div style="display:flex; gap:8px;">
              <button class="btn btn-ghost btn-sm" style="color:var(--status-danger);" onclick="showToast('Abriendo bitácora de seguimiento de Laura...','info')" title="Ver Bitácora de Visitas">
                <i data-lucide="eye"></i> Historial Visitas
              </button>
              <button class="btn btn-primary btn-sm" onclick="openNoveltyModal('Laura Martínez', 'Deserción / Cancelación')">
                <i data-lucide="check-square"></i> Resolver
              </button>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- TAB: CARGA DE INSTRUCTORES -->
  <div id="solTabInstructores" style="display:none;">
    <div class="card" style="padding:24px;">
      <h3 style="font-size:15px; margin-bottom:16px;">Disponibilidad y Asignación de Instructores</h3>
      <div class="table-wrapper">
        <table class="table" style="font-size:12.5px;">
          <thead>
            <tr>
              <th>Instructor</th>
              <th>Especialidad</th>
              <th>Aprendices Asignados</th>
              <th>Capacidad Máxima</th>
              <th>Estado</th>
              <th>Acción</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Ing. María Rodríguez</td>
              <td>Software / ADSO</td>
              <td>12</td>
              <td>15</td>
              <td><span class="badge badge-success">Disponible</span></td>
              <td><button class="btn btn-ghost btn-sm" onclick="showToast('Ver ficha detallada de María...','info')"><i data-lucide="eye"></i></button></td>
            </tr>
            <tr>
              <td>Ing. Felipe Muñoz</td>
              <td>SGSST / Ambiental</td>
              <td>8</td>
              <td>15</td>
              <td><span class="badge badge-success">Disponible</span></td>
              <td><button class="btn btn-ghost btn-sm" onclick="showToast('Ver ficha detallada de Felipe...','info')"><i data-lucide="eye"></i></button></td>
            </tr>
            <tr>
              <td>Ing. Clara Gómez</td>
              <td>Software / Redes</td>
              <td>15</td>
              <td>15</td>
              <td><span class="badge badge-danger">Límite Alcanzado</span></td>
              <td><button class="btn btn-ghost btn-sm" disabled><i data-lucide="eye"></i></button></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- MODAL: RESOLVER NOVEDAD -->
  <div class="modal-overlay" id="modalResolveNovelty">
    <div class="modal-container" style="max-width:480px;">
      <div class="modal-header">
        <h3><i data-lucide="check-square" style="width:18px;height:18px;margin-right:8px;vertical-align:middle;color:var(--primary);"></i>Resolver Novedad / Solicitud</h3>
        <button class="modal-close" onclick="closeModal('modalResolveNovelty')"><i data-lucide="x"></i></button>
      </div>
      <div class="modal-body">
        <p style="font-size:13px;color:var(--text-muted);margin-bottom:8px;">Aprendiz: <strong id="noveltyAprendiz">Carlos Guerrero</strong></p>
        <p style="font-size:13px;color:var(--text-muted);margin-bottom:16px;">Tipo: <strong id="noveltyType">Cambio de Alternativa</strong></p>
        
        <form id="resolveNoveltyForm" novalidate onsubmit="event.preventDefault(); submitNoveltyResolution();">
          <div class="form-group">
            <label class="form-label" for="noveltyAction">Resolución *</label>
            <select id="noveltyAction" class="form-control" required>
              <option value="Aprobada">Aprobar Solicitud</option>
              <option value="Rechazada">Rechazar Solicitud</option>
              <option value="Remitida a Comité">Remitir a Comité Técnico</option>
            </select>
          </div>

          <div class="form-group">
            <label class="form-label" for="noveltyNotes">Justificación Técnico-Pedagógica *</label>
            <textarea id="noveltyNotes" class="form-control" rows="4" placeholder="Escriba la justificación o condiciones de la resolución..." required></textarea>
            <span class="form-error-text" id="noveltyNotesError">La justificación es obligatoria para registrar la resolución.</span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-ghost" onclick="closeModal('modalResolveNovelty')">Cancelar</button>
        <button type="submit" form="resolveNoveltyForm" class="btn btn-primary"><i data-lucide="save"></i> Registrar Resolución</button>
      </div>
    </div>
  </div>

</div>

<script>
function switchSolicitudesTab(tab, btn) {
  document.querySelectorAll('.revision-tab').forEach(t => t.classList.remove('revision-tab-active'));
  btn.classList.add('revision-tab-active');
  document.getElementById('solTabPendientes').style.display = tab === 'pendientes' ? 'block' : 'none';
  document.getElementById('solTabNovedades').style.display = tab === 'novedades' ? 'block' : 'none';
  document.getElementById('solTabInstructores').style.display = tab === 'instructores' ? 'block' : 'none';
}

function assignInstructor(aprendiz, selectId) {
  const select = document.getElementById(selectId);
  if (!select.value) {
    showToast('Debe seleccionar un instructor válido para asignar.', 'error');
    return;
  }
  const instructorName = select.options[select.selectedIndex].text;
  showToast(`Instructor ${instructorName} asignado correctamente a ${aprendiz}.`, 'success');
  
  // Visual simulation: hide or disable the row
  select.closest('.revision-item').style.opacity = '0.5';
  select.disabled = true;
  select.closest('.revision-item').querySelector('.btn').disabled = true;
}

function openNoveltyModal(aprendiz, type) {
  document.getElementById('noveltyAprendiz').textContent = aprendiz;
  document.getElementById('noveltyType').textContent = type;
  document.getElementById('noveltyNotes').value = '';
  document.getElementById('noveltyNotesError').style.display = 'none';
  openModal('modalResolveNovelty');
}

function submitNoveltyResolution() {
  const notes = document.getElementById('noveltyNotes').value.trim();
  const action = document.getElementById('noveltyAction').value;
  const name = document.getElementById('noveltyAprendiz').textContent;
  
  if (!notes) {
    document.getElementById('noveltyNotesError').style.display = 'block';
    showToast('Debe escribir una justificación.', 'error');
    return;
  }
  document.getElementById('noveltyNotesError').style.display = 'none';
  
  showToast(`Solicitud de ${name} resuelta como: "${action}"`, 'success');
  closeModal('modalResolveNovelty');
}
</script>
