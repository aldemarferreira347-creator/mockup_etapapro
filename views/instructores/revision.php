<!-- VIEW: BANDEJA DE REVISIÓN (HU-12, HU-13, HU-14) -->
<div class="view-content" id="view-revision-instructor">

  <div class="welcome-card-header">
    <div style="display: flex; align-items: center; gap: 14px;">
      <div class="kpi-icon-wrapper" style="background: rgba(255,255,255,0.15); color: #FFFFFF; font-size: 24px;">
        <i data-lucide="file-search"></i>
      </div>
      <div>
        <h1>Bandeja de Revisión</h1>
        <p>Revisa, aprueba o rechaza bitácoras y documentos de tus aprendices asignados.</p>
      </div>
    </div>
  </div>

  <!-- Stats row -->
  <div class="grid-4" style="margin-bottom:24px;">
    <div class="kpi-card">
      <div class="kpi-icon-wrapper" style="background:rgba(245,158,11,0.12);color:var(--status-warning);">
        <i data-lucide="clock"></i>
      </div>
      <div class="kpi-info">
        <span class="kpi-label">Pendientes de Revisión</span>
        <span class="kpi-value">5</span>
      </div>
    </div>
    <div class="kpi-card">
      <div class="kpi-icon-wrapper" style="background:rgba(57,169,0,0.12);color:var(--primary);">
        <i data-lucide="check-circle"></i>
      </div>
      <div class="kpi-info">
        <span class="kpi-label">Aprobados Hoy</span>
        <span class="kpi-value">2</span>
      </div>
    </div>
    <div class="kpi-card">
      <div class="kpi-icon-wrapper" style="background:rgba(239,68,68,0.12);color:var(--status-danger);">
        <i data-lucide="x-circle"></i>
      </div>
      <div class="kpi-info">
        <span class="kpi-label">Rechazados Hoy</span>
        <span class="kpi-value">1</span>
      </div>
    </div>
    <div class="kpi-card">
      <div class="kpi-icon-wrapper" style="background:rgba(14,165,233,0.12);color:var(--status-info);">
        <i data-lucide="file-text"></i>
      </div>
      <div class="kpi-info">
        <span class="kpi-label">Total Mes</span>
        <span class="kpi-value">18</span>
      </div>
    </div>
  </div>

  <!-- Tabs -->
  <div style="display:flex;gap:0;margin-bottom:24px;border-bottom:2px solid var(--border-color);">
    <button class="revision-tab revision-tab-active" onclick="switchRevisionTab('bitacoras', this)" id="tabBitacoras">
      <i data-lucide="file-clock" style="width:14px;height:14px;"></i> Bitácoras
      <span class="badge badge-warning" style="margin-left:6px;font-size:10px;">3</span>
    </button>
    <button class="revision-tab" onclick="switchRevisionTab('documentos', this)" id="tabDocumentos">
      <i data-lucide="folder" style="width:14px;height:14px;"></i> Documentos
      <span class="badge badge-warning" style="margin-left:6px;font-size:10px;">2</span>
    </button>
    <button class="revision-tab" onclick="switchRevisionTab('historial', this)" id="tabHistorial">
      <i data-lucide="history" style="width:14px;height:14px;"></i> Historial
    </button>
  </div>

  <!-- TAB: BITÁCORAS -->
  <div id="revTabBitacoras">
    <div class="card" style="padding:24px;">
      <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:20px;flex-wrap:wrap;gap:12px;">
        <h3 style="font-size:15px;">Bitácoras por Revisar</h3>
        <div class="header-search" style="position:static;background:var(--bg-secondary);border-radius:8px;padding:6px 12px;width:220px;">
          <i data-lucide="search" style="width:16px;height:16px;color:var(--text-muted);"></i>
          <input type="search" placeholder="Buscar..." style="border:none;background:transparent;outline:none;font-size:13px;color:var(--text-primary);">
        </div>
      </div>

      <div style="display:flex;flex-direction:column;gap:12px;">

        <div class="revision-item" style="background:var(--bg-secondary);border-radius:10px;padding:16px;border-left:4px solid var(--status-warning);">
          <div style="display:flex;justify-content:space-between;align-items:flex-start;gap:12px;flex-wrap:wrap;">
            <div style="flex:1;">
              <div style="display:flex;align-items:center;gap:8px;margin-bottom:6px;">
                <span class="badge badge-warning">Pendiente</span>
                <span style="font-weight:700;font-size:13px;">Bitácora N° 3 — Carlos Guerrero</span>
              </div>
              <div style="font-size:12px;color:var(--text-muted);display:flex;gap:16px;flex-wrap:wrap;">
                <span><i data-lucide="calendar" style="width:12px;height:12px;vertical-align:middle;"></i> Período: 16/04/2026 — 30/04/2026</span>
                <span><i data-lucide="clock" style="width:12px;height:12px;vertical-align:middle;"></i> Enviado: 30/04/2026 · 08:15 AM</span>
                <span><i data-lucide="file" style="width:12px;height:12px;vertical-align:middle;"></i> Bitacora3_Guerrero.pdf · 342 KB</span>
              </div>
            </div>
            <div style="display:flex;gap:8px;">
              <button class="btn btn-ghost btn-sm" onclick="previewDoc('Bitacora3_Guerrero.pdf')" title="Ver documento">
                <i data-lucide="eye"></i>
              </button>
              <button class="btn btn-primary btn-sm" onclick="openReviewModal('Bitácora N° 3','Carlos Guerrero','bitacora3')" title="Revisar">
                <i data-lucide="clipboard-edit"></i> Revisar
              </button>
            </div>
          </div>
        </div>

        <div class="revision-item" style="background:var(--bg-secondary);border-radius:10px;padding:16px;border-left:4px solid var(--status-warning);">
          <div style="display:flex;justify-content:space-between;align-items:flex-start;gap:12px;flex-wrap:wrap;">
            <div style="flex:1;">
              <div style="display:flex;align-items:center;gap:8px;margin-bottom:6px;">
                <span class="badge badge-warning">Pendiente</span>
                <span style="font-weight:700;font-size:13px;">Bitácora N° 2 — Jhon Pérez</span>
              </div>
              <div style="font-size:12px;color:var(--text-muted);display:flex;gap:16px;flex-wrap:wrap;">
                <span><i data-lucide="calendar" style="width:12px;height:12px;vertical-align:middle;"></i> Período: 01/04/2026 — 15/04/2026</span>
                <span><i data-lucide="clock" style="width:12px;height:12px;vertical-align:middle;"></i> Enviado: 16/04/2026 · 03:22 PM</span>
                <span><i data-lucide="file" style="width:12px;height:12px;vertical-align:middle;"></i> Bitacora2_Perez.pdf · 218 KB</span>
              </div>
            </div>
            <div style="display:flex;gap:8px;">
              <button class="btn btn-ghost btn-sm" onclick="previewDoc('Bitacora2_Perez.pdf')" title="Ver documento">
                <i data-lucide="eye"></i>
              </button>
              <button class="btn btn-primary btn-sm" onclick="openReviewModal('Bitácora N° 2','Jhon Pérez','bitacora2p')" title="Revisar">
                <i data-lucide="clipboard-edit"></i> Revisar
              </button>
            </div>
          </div>
        </div>

        <div class="revision-item" style="background:var(--bg-secondary);border-radius:10px;padding:16px;border-left:4px solid var(--status-danger);">
          <div style="display:flex;justify-content:space-between;align-items:flex-start;gap:12px;flex-wrap:wrap;">
            <div style="flex:1;">
              <div style="display:flex;align-items:center;gap:8px;margin-bottom:6px;">
                <span class="badge badge-danger">Vencido</span>
                <span style="font-weight:700;font-size:13px;">Bitácora N° 1 — Laura Martínez</span>
              </div>
              <div style="font-size:12px;color:var(--text-muted);display:flex;gap:16px;flex-wrap:wrap;">
                <span><i data-lucide="calendar" style="width:12px;height:12px;vertical-align:middle;"></i> Período: 15/03/2026 — 30/03/2026</span>
                <span><i data-lucide="clock" style="width:12px;height:12px;vertical-align:middle;"></i> Enviado: 02/05/2026 · 09:00 AM <strong style="color:var(--status-danger);">(tarde)</strong></span>
                <span><i data-lucide="file" style="width:12px;height:12px;vertical-align:middle;"></i> Bitacora1_Martinez.pdf · 156 KB</span>
              </div>
            </div>
            <div style="display:flex;gap:8px;">
              <button class="btn btn-ghost btn-sm" onclick="previewDoc('Bitacora1_Martinez.pdf')" title="Ver documento">
                <i data-lucide="eye"></i>
              </button>
              <button class="btn btn-primary btn-sm" onclick="openReviewModal('Bitácora N° 1','Laura Martínez','bitacora1m')" title="Revisar">
                <i data-lucide="clipboard-edit"></i> Revisar
              </button>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- TAB: DOCUMENTOS -->
  <div id="revTabDocumentos" style="display:none;">
    <div class="card" style="padding:24px;">
      <h3 style="font-size:15px;margin-bottom:20px;">Documentos por Revisar</h3>
      <div style="display:flex;flex-direction:column;gap:12px;">

        <div style="background:var(--bg-secondary);border-radius:10px;padding:16px;border-left:4px solid var(--status-warning);">
          <div style="display:flex;justify-content:space-between;align-items:flex-start;gap:12px;flex-wrap:wrap;">
            <div style="flex:1;">
              <div style="display:flex;align-items:center;gap:8px;margin-bottom:6px;">
                <span class="badge badge-warning">Pendiente</span>
                <span style="font-weight:700;font-size:13px;">Carta de Presentación — Jhon Pérez</span>
              </div>
              <div style="font-size:12px;color:var(--text-muted);">
                Subido: 05/04/2026 · Carta_Presentacion_Perez.pdf · 88 KB
              </div>
            </div>
            <div style="display:flex;gap:8px;">
              <button class="btn btn-ghost btn-sm" onclick="previewDoc('Carta_Presentacion_Perez.pdf')" title="Ver">
                <i data-lucide="eye"></i>
              </button>
              <button class="btn btn-primary btn-sm" onclick="openReviewModal('Carta de Presentación','Jhon Pérez','docCartaP')" title="Revisar">
                <i data-lucide="clipboard-edit"></i> Revisar
              </button>
            </div>
          </div>
        </div>

        <div style="background:var(--bg-secondary);border-radius:10px;padding:16px;border-left:4px solid var(--status-warning);">
          <div style="display:flex;justify-content:space-between;align-items:flex-start;gap:12px;flex-wrap:wrap;">
            <div style="flex:1;">
              <div style="display:flex;align-items:center;gap:8px;margin-bottom:6px;">
                <span class="badge badge-warning">Pendiente</span>
                <span style="font-weight:700;font-size:13px;">Afiliación ARL — Laura Martínez</span>
              </div>
              <div style="font-size:12px;color:var(--text-muted);">
                Subido: 07/04/2026 · ARL_Martinez_2026.pdf · 203 KB
              </div>
            </div>
            <div style="display:flex;gap:8px;">
              <button class="btn btn-ghost btn-sm" onclick="previewDoc('ARL_Martinez_2026.pdf')" title="Ver">
                <i data-lucide="eye"></i>
              </button>
              <button class="btn btn-primary btn-sm" onclick="openReviewModal('Afiliación ARL','Laura Martínez','docArlM')" title="Revisar">
                <i data-lucide="clipboard-edit"></i> Revisar
              </button>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- TAB: HISTORIAL -->
  <div id="revTabHistorial" style="display:none;">
    <div class="card" style="padding:24px;">
      <h3 style="font-size:15px;margin-bottom:20px;">Historial de Revisiones</h3>
      <div class="table-wrapper">
        <table class="table" style="font-size:12px;">
          <thead>
            <tr>
              <th>Documento</th>
              <th>Aprendiz</th>
              <th>Tipo</th>
              <th>Fecha Revisión</th>
              <th>Decisión</th>
              <th>Comentario</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Bitácora N° 1</td>
              <td>Carlos Guerrero</td>
              <td>Bitácora</td>
              <td>02/04/2026</td>
              <td><span class="badge badge-success">Aprobada</span></td>
              <td style="max-width:200px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="Excelente trabajo en la descripción técnica.">Excelente trabajo en la descripción técnica.</td>
            </tr>
            <tr>
              <td>Bitácora N° 2</td>
              <td>Carlos Guerrero</td>
              <td>Bitácora</td>
              <td>16/04/2026</td>
              <td><span class="badge badge-success">Aprobada</span></td>
              <td style="max-width:200px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="Cumple con todos los requisitos del formato.">Cumple con todos los requisitos.</td>
            </tr>
            <tr>
              <td>Carta de Presentación</td>
              <td>Carlos Guerrero</td>
              <td>Documento</td>
              <td>07/04/2026</td>
              <td><span class="badge badge-danger">Rechazada</span></td>
              <td style="max-width:200px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="Falta firma y sello de la empresa.">Falta firma y sello de la empresa.</td>
            </tr>
            <tr>
              <td>Aval de Empresa</td>
              <td>Sara Ramírez</td>
              <td>Documento</td>
              <td>30/03/2026</td>
              <td><span class="badge badge-success">Aprobado</span></td>
              <td style="max-width:200px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="Documento completo y vigente.">Documento completo y vigente.</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- MODAL: REVISAR DOCUMENTO -->
  <div class="modal-overlay" id="modalReview">
    <div class="modal-container" style="max-width:520px;">
      <div class="modal-header">
        <h3><i data-lucide="clipboard-edit" style="width:18px;height:18px;margin-right:8px;vertical-align:middle;"></i>Revisar Documento</h3>
        <button class="modal-close" onclick="closeModal('modalReview')"><i data-lucide="x"></i></button>
      </div>
      <div class="modal-body">
        <div class="alert alert-info" style="margin-bottom:16px;">
          <i data-lucide="file"></i>
          <div>
            <div class="alert-title" id="reviewDocTitle">Bitácora N° 3</div>
            <div style="font-size:12px;">Aprendiz: <strong id="reviewAprendizName">Carlos Guerrero</strong></div>
          </div>
          <button class="btn btn-ghost btn-sm" onclick="previewDoc('documento.pdf')"><i data-lucide="external-link"></i></button>
        </div>

        <form id="reviewForm" novalidate onsubmit="event.preventDefault();">
          <div class="form-group">
            <label class="form-label" for="reviewDecision">Decisión *</label>
            <div style="display:flex;gap:12px;">
              <label style="display:flex;align-items:center;gap:8px;cursor:pointer;flex:1;background:var(--bg-secondary);border-radius:8px;padding:12px;border:2px solid transparent;" id="approveLabel">
                <input type="radio" name="reviewDecision" id="decisionApprove" value="aprobar" onchange="toggleReviewDecision('aprobar')">
                <i data-lucide="check-circle" style="color:var(--status-success);width:18px;height:18px;"></i>
                <span style="font-size:13px;font-weight:600;">Aprobar</span>
              </label>
              <label style="display:flex;align-items:center;gap:8px;cursor:pointer;flex:1;background:var(--bg-secondary);border-radius:8px;padding:12px;border:2px solid transparent;" id="rejectLabel">
                <input type="radio" name="reviewDecision" id="decisionReject" value="rechazar" onchange="toggleReviewDecision('rechazar')">
                <i data-lucide="x-circle" style="color:var(--status-danger);width:18px;height:18px;"></i>
                <span style="font-size:13px;font-weight:600;">Rechazar</span>
              </label>
            </div>
            <span class="form-error-text" id="reviewDecisionError">Seleccione una decisión.</span>
          </div>

          <div class="form-group">
            <label class="form-label" for="reviewComment">
              Comentario <span id="reviewCommentRequired" style="color:var(--status-danger);display:none;">* (obligatorio al rechazar)</span>
            </label>
            <textarea id="reviewComment" class="form-control" rows="4" placeholder="Escriba observaciones, retroalimentación o motivo del rechazo..."></textarea>
            <span class="form-error-text" id="reviewCommentError">El comentario es obligatorio cuando se rechaza un documento.</span>
          </div>

          <div class="form-group" id="reviewGradeGroup" style="display:none;">
            <label class="form-label" for="reviewGrade">Calificación (solo bitácoras)</label>
            <input type="number" id="reviewGrade" class="form-control" min="1" max="5" step="0.1" placeholder="4.0">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-ghost" onclick="closeModal('modalReview')">Cancelar</button>
        <button class="btn btn-primary" onclick="submitReview()"><i data-lucide="check"></i> Confirmar Decisión</button>
      </div>
    </div>
  </div>

</div>

<style>
.revision-tab {
  padding: 10px 20px;
  border: none;
  background: transparent;
  font-size: 13px;
  font-weight: 600;
  color: var(--text-muted);
  cursor: pointer;
  border-bottom: 2px solid transparent;
  margin-bottom: -2px;
  display: flex;
  align-items: center;
  gap: 6px;
  transition: all 0.15s ease;
}
.revision-tab:hover { color: var(--primary); }
.revision-tab-active { color: var(--primary); border-bottom-color: var(--primary); }
</style>

<script>
let currentReviewId = '';
let currentDecision = '';

function switchRevisionTab(tab, btn) {
  document.querySelectorAll('.revision-tab').forEach(t => t.classList.remove('revision-tab-active'));
  btn.classList.add('revision-tab-active');
  document.getElementById('revTabBitacoras').style.display = tab === 'bitacoras' ? 'block' : 'none';
  document.getElementById('revTabDocumentos').style.display = tab === 'documentos' ? 'block' : 'none';
  document.getElementById('revTabHistorial').style.display = tab === 'historial' ? 'block' : 'none';
}

function openReviewModal(docTitle, aprendiz, docId) {
  document.getElementById('reviewDocTitle').textContent = docTitle;
  document.getElementById('reviewAprendizName').textContent = aprendiz;
  currentReviewId = docId;
  // Show grade field for bitacoras
  document.getElementById('reviewGradeGroup').style.display = docId.startsWith('bitacora') ? 'block' : 'none';
  // Reset form
  document.getElementById('reviewForm').reset();
  document.getElementById('reviewDecisionError').style.display = 'none';
  document.getElementById('reviewCommentError').style.display = 'none';
  document.getElementById('reviewCommentRequired').style.display = 'none';
  document.getElementById('approveLabel').style.borderColor = 'transparent';
  document.getElementById('rejectLabel').style.borderColor = 'transparent';
  currentDecision = '';
  openModal('modalReview');
}

function toggleReviewDecision(decision) {
  currentDecision = decision;
  document.getElementById('approveLabel').style.borderColor = decision === 'aprobar' ? 'var(--status-success)' : 'transparent';
  document.getElementById('rejectLabel').style.borderColor = decision === 'rechazar' ? 'var(--status-danger)' : 'transparent';
  document.getElementById('reviewCommentRequired').style.display = decision === 'rechazar' ? 'inline' : 'none';
}

function submitReview() {
  if (!currentDecision) {
    document.getElementById('reviewDecisionError').style.display = 'block';
    showToast('Debe seleccionar una decisión.', 'error');
    return;
  }
  document.getElementById('reviewDecisionError').style.display = 'none';

  const comment = document.getElementById('reviewComment').value.trim();
  if (currentDecision === 'rechazar' && !comment) {
    document.getElementById('reviewCommentError').style.display = 'block';
    showToast('El comentario es obligatorio al rechazar.', 'error');
    return;
  }
  document.getElementById('reviewCommentError').style.display = 'none';

  const actionText = currentDecision === 'aprobar' ? 'aprobado' : 'rechazado';
  const toastType = currentDecision === 'aprobar' ? 'success' : 'warning';
  showToast(`Documento ${actionText} exitosamente. El aprendiz ha sido notificado.`, toastType);
  closeModal('modalReview');
}

function previewDoc(name) {
  showToast(`Abriendo vista previa de ${name}...`, 'info');
}
</script>
