<!-- VIEW: CARPETA DIGITAL APRENDIZ (HU-17, HU-18) -->
<div class="view-content" id="view-carpeta-aprendiz">

  <div class="welcome-card-header">
    <div style="display: flex; align-items: center; gap: 14px;">
      <div class="kpi-icon-wrapper" style="background: rgba(255,255,255,0.15); color: #FFFFFF; font-size: 24px;">
        <i data-lucide="folder-open"></i>
      </div>
      <div>
        <h1>Mi Carpeta Digital</h1>
        <p>Documentos requeridos para tu proceso de etapa productiva. Sube, consulta y gestiona cada archivo.</p>
      </div>
    </div>
  </div>

  <!-- Progress overview -->
  <div class="grid-3" style="margin-bottom: 24px;">
    <div class="kpi-card">
      <div class="kpi-icon-wrapper" style="background: rgba(57,169,0,0.12); color: var(--primary);">
        <i data-lucide="file-check"></i>
      </div>
      <div class="kpi-info">
        <span class="kpi-label">Documentos Completos</span>
        <span class="kpi-value">6</span>
      </div>
    </div>
    <div class="kpi-card">
      <div class="kpi-icon-wrapper" style="background: rgba(245,158,11,0.12); color: var(--status-warning);">
        <i data-lucide="clock"></i>
      </div>
      <div class="kpi-info">
        <span class="kpi-label">Pendientes</span>
        <span class="kpi-value">3</span>
      </div>
    </div>
    <div class="kpi-card">
      <div class="kpi-icon-wrapper" style="background: rgba(239,68,68,0.12); color: var(--status-danger);">
        <i data-lucide="alert-circle"></i>
      </div>
      <div class="kpi-info">
        <span class="kpi-label">Rechazados</span>
        <span class="kpi-value">1</span>
      </div>
    </div>
  </div>

  <!-- Upload new document -->
  <div class="card" style="margin-bottom: 24px; padding: 24px;">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
      <h3 style="font-size: 15px;">Cargar Nuevo Documento</h3>
      <span style="font-size: 12px; color: var(--text-muted);">Formatos: PDF, DOCX, JPG, PNG · Máx. 10MB</span>
    </div>
    <form id="uploadDocForm" novalidate onsubmit="event.preventDefault(); submitDoc();">
      <div class="grid-2" style="margin-bottom: 16px;">
        <div class="form-group">
          <label class="form-label" for="docType">Tipo de Documento *</label>
          <select id="docType" class="form-control" required>
            <option value="">Seleccionar tipo...</option>
            <option value="aval">Aval de la Empresa</option>
            <option value="contrato">Contrato de Aprendizaje</option>
            <option value="afiliacion">Afiliación ARL/EPS</option>
            <option value="carta">Carta de Presentación</option>
            <option value="autorizacion">Autorización de Etapa</option>
            <option value="seguro">Seguro Estudiantil</option>
            <option value="otro">Otro</option>
          </select>
          <span class="form-error-text" id="docTypeError">Seleccione el tipo de documento.</span>
        </div>
        <div class="form-group">
          <label class="form-label" for="docDesc">Descripción (Opcional)</label>
          <input type="text" id="docDesc" class="form-control" placeholder="Breve descripción del documento...">
        </div>
      </div>
      <div class="form-group">
        <div class="dropzone" id="docDropzone">
          <i data-lucide="cloud-upload"></i>
          <p class="dropzone-title">Arrastra el documento aquí</p>
          <p class="dropzone-sub">o haz clic para seleccionar (PDF, DOCX, JPG, PNG hasta 10MB)</p>
          <input type="file" id="docFile" accept=".pdf,.docx,.jpg,.jpeg,.png" style="display: none;" required>
        </div>
        <span class="form-error-text" id="docFileError">Debe seleccionar un archivo válido.</span>
      </div>
      <div style="text-align: right;">
        <button type="submit" class="btn btn-primary"><i data-lucide="upload"></i> Subir Documento</button>
      </div>
    </form>
  </div>

  <!-- Documents table -->
  <div class="card" style="padding: 24px;">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; flex-wrap: wrap; gap: 12px;">
      <h3 style="font-size: 15px;">Documentos Registrados</h3>
      <div class="header-search" style="position: static; background: var(--bg-secondary); border-radius: 8px; padding: 6px 12px; width: 260px;">
        <i data-lucide="search" style="width: 16px; height: 16px; color: var(--text-muted);"></i>
        <input type="search" placeholder="Buscar documento..." id="docSearch" style="border: none; background: transparent; outline: none; font-size: 13px; color: var(--text-primary);" oninput="filterDocs(this.value)">
      </div>
    </div>

    <div class="table-wrapper">
      <table class="table" id="docsTable">
        <thead>
          <tr>
            <th>Documento</th>
            <th>Tipo</th>
            <th>Fecha Subida</th>
            <th>Tamaño</th>
            <th>Estado</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody id="docsTableBody">
          <tr>
            <td>
              <div style="display: flex; align-items: center; gap: 8px;">
                <i data-lucide="file-text" style="color: var(--status-danger); width: 18px;"></i>
                <span style="font-weight: 500;">Aval_Empresa_SENA.pdf</span>
              </div>
            </td>
            <td><span class="badge badge-secondary">Aval de Empresa</span></td>
            <td>28/03/2026</td>
            <td>248 KB</td>
            <td><span class="badge badge-success">Aprobado</span></td>
            <td>
              <div style="display: flex; gap: 6px;">
                <button class="btn btn-ghost btn-sm" onclick="showToast('Descargando Aval_Empresa_SENA.pdf...','info')" title="Descargar">
                  <i data-lucide="download"></i>
                </button>
                <button class="btn btn-ghost btn-sm" onclick="openDocHistory('Aval_Empresa_SENA.pdf')" title="Ver historial">
                  <i data-lucide="history"></i>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div style="display: flex; align-items: center; gap: 8px;">
                <i data-lucide="file-text" style="color: var(--status-danger); width: 18px;"></i>
                <span style="font-weight: 500;">Contrato_Aprendizaje_Firmado.pdf</span>
              </div>
            </td>
            <td><span class="badge badge-secondary">Contrato</span></td>
            <td>01/04/2026</td>
            <td>512 KB</td>
            <td><span class="badge badge-success">Aprobado</span></td>
            <td>
              <div style="display: flex; gap: 6px;">
                <button class="btn btn-ghost btn-sm" onclick="showToast('Descargando Contrato...','info')" title="Descargar">
                  <i data-lucide="download"></i>
                </button>
                <button class="btn btn-ghost btn-sm" onclick="openDocHistory('Contrato_Aprendizaje.pdf')" title="Ver historial">
                  <i data-lucide="history"></i>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div style="display: flex; align-items: center; gap: 8px;">
                <i data-lucide="file-text" style="color: var(--status-danger); width: 18px;"></i>
                <span style="font-weight: 500;">Afiliacion_ARL_2026.pdf</span>
              </div>
            </td>
            <td><span class="badge badge-secondary">Afiliación ARL</span></td>
            <td>02/04/2026</td>
            <td>186 KB</td>
            <td><span class="badge badge-success">Aprobado</span></td>
            <td>
              <div style="display: flex; gap: 6px;">
                <button class="btn btn-ghost btn-sm" onclick="showToast('Descargando ARL...','info')" title="Descargar">
                  <i data-lucide="download"></i>
                </button>
                <button class="btn btn-ghost btn-sm" onclick="openDocHistory('Afiliacion_ARL_2026.pdf')" title="Ver historial">
                  <i data-lucide="history"></i>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div style="display: flex; align-items: center; gap: 8px;">
                <i data-lucide="file-text" style="color: var(--status-danger); width: 18px;"></i>
                <span style="font-weight: 500;">Carta_Presentacion_Empresa.pdf</span>
              </div>
            </td>
            <td><span class="badge badge-secondary">Carta de Presentación</span></td>
            <td>05/04/2026</td>
            <td>95 KB</td>
            <td><span class="badge badge-danger">Rechazado</span></td>
            <td>
              <div style="display: flex; gap: 6px;">
                <button class="btn btn-ghost btn-sm" onclick="openRejectionDetail()" title="Ver motivo rechazo" style="color: var(--status-danger);">
                  <i data-lucide="alert-circle"></i>
                </button>
                <button class="btn btn-primary btn-sm" onclick="openReplaceDoc('Carta_Presentacion_Empresa.pdf')" title="Reemplazar">
                  <i data-lucide="refresh-cw"></i>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div style="display: flex; align-items: center; gap: 8px;">
                <i data-lucide="file" style="color: var(--text-muted); width: 18px;"></i>
                <span style="font-weight: 500;">Seguro_Estudiantil.pdf</span>
              </div>
            </td>
            <td><span class="badge badge-secondary">Seguro Estudiantil</span></td>
            <td>—</td>
            <td>—</td>
            <td><span class="badge badge-warning">Pendiente</span></td>
            <td>
              <div style="display: flex; gap: 6px;">
                <button class="btn btn-primary btn-sm" onclick="openModal('modalUploadDocReplace'); document.getElementById('replaceDocName').textContent='Seguro_Estudiantil.pdf'" title="Subir">
                  <i data-lucide="upload"></i>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div style="display: flex; align-items: center; gap: 8px;">
                <i data-lucide="file" style="color: var(--text-muted); width: 18px;"></i>
                <span style="font-weight: 500;">Autorizacion_Etapa.pdf</span>
              </div>
            </td>
            <td><span class="badge badge-secondary">Autorización</span></td>
            <td>—</td>
            <td>—</td>
            <td><span class="badge badge-warning">Pendiente</span></td>
            <td>
              <div style="display: flex; gap: 6px;">
                <button class="btn btn-primary btn-sm" onclick="showToast('Complete primero los documentos rechazados.','warning')" title="Subir">
                  <i data-lucide="upload"></i>
                </button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Empty state (shown when filtered results are empty) -->
    <div id="docsEmptyState" class="empty-state" style="display: none;">
      <i data-lucide="search-x"></i>
      <h3>Sin resultados</h3>
      <p>No se encontraron documentos que coincidan con tu búsqueda.</p>
    </div>
  </div>

  <!-- MODAL: HISTORIAL DE DOCUMENTO -->
  <div class="modal-overlay" id="modalDocHistory">
    <div class="modal-container">
      <div class="modal-header">
        <h3><i data-lucide="history" style="width:18px;height:18px;margin-right:8px;vertical-align:middle;"></i>Historial del Documento</h3>
        <button class="modal-close" onclick="closeModal('modalDocHistory')"><i data-lucide="x"></i></button>
      </div>
      <div class="modal-body">
        <p style="font-size:13px;color:var(--text-muted);margin-bottom:16px;" id="historyDocName">Aval_Empresa_SENA.pdf</p>
        <div style="display: flex; flex-direction: column; gap: 12px;">
          <div class="alert alert-success" style="margin:0;">
            <i data-lucide="check-circle"></i>
            <div>
              <div class="alert-title">Aprobado por Instructor</div>
              <div style="font-size:11px;">Ing. María Rodríguez · 30/03/2026 · 10:45 AM</div>
            </div>
          </div>
          <div class="alert alert-info" style="margin:0;">
            <i data-lucide="send"></i>
            <div>
              <div class="alert-title">Enviado para revisión</div>
              <div style="font-size:11px;">Tú · 28/03/2026 · 09:12 AM</div>
            </div>
          </div>
          <div class="alert alert-warning" style="margin:0;">
            <i data-lucide="upload-cloud"></i>
            <div>
              <div class="alert-title">Documento cargado</div>
              <div style="font-size:11px;">Versión inicial · 28/03/2026 · 09:10 AM</div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-ghost" onclick="closeModal('modalDocHistory')">Cerrar</button>
      </div>
    </div>
  </div>

  <!-- MODAL: MOTIVO RECHAZO -->
  <div class="modal-overlay" id="modalRejectionDetail">
    <div class="modal-container">
      <div class="modal-header">
        <h3><i data-lucide="alert-circle" style="width:18px;height:18px;margin-right:8px;vertical-align:middle;color:var(--status-danger);"></i>Documento Rechazado</h3>
        <button class="modal-close" onclick="closeModal('modalRejectionDetail')"><i data-lucide="x"></i></button>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger" style="margin-bottom:16px;">
          <i data-lucide="alert-circle"></i>
          <div>
            <div class="alert-title">Carta_Presentacion_Empresa.pdf</div>
            <div style="font-size:12px;">Rechazado el 07/04/2026 por Ing. María Rodríguez</div>
          </div>
        </div>
        <div class="form-group">
          <label class="form-label">Motivo del rechazo:</label>
          <div style="background:var(--bg-secondary);border-radius:8px;padding:14px;font-size:13px;color:var(--text-secondary);border-left:3px solid var(--status-danger);">
            "La carta de presentación no contiene la firma del responsable de la empresa. Por favor, obtener la firma y el sello empresarial, y volver a cargar el documento."
          </div>
        </div>
        <div class="form-group">
          <label class="form-label">Acción requerida:</label>
          <p style="font-size:13px;color:var(--text-muted);">Descarga el documento original, obtén la firma y sello, y vuelve a cargarlo usando el botón de reemplazar.</p>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-ghost" onclick="closeModal('modalRejectionDetail')">Cancelar</button>
        <button class="btn btn-primary" onclick="closeModal('modalRejectionDetail'); openReplaceDoc('Carta_Presentacion_Empresa.pdf');">
          <i data-lucide="refresh-cw"></i> Reemplazar Documento
        </button>
      </div>
    </div>
  </div>

  <!-- MODAL: REEMPLAZAR DOCUMENTO -->
  <div class="modal-overlay" id="modalUploadDocReplace">
    <div class="modal-container">
      <div class="modal-header">
        <h3><i data-lucide="refresh-cw" style="width:18px;height:18px;margin-right:8px;vertical-align:middle;"></i>Reemplazar Documento</h3>
        <button class="modal-close" onclick="closeModal('modalUploadDocReplace')"><i data-lucide="x"></i></button>
      </div>
      <div class="modal-body">
        <p style="font-size:13px;color:var(--text-muted);margin-bottom:16px;">Reemplazando: <strong id="replaceDocName">Carta_Presentacion_Empresa.pdf</strong></p>
        <form id="replaceDocForm" novalidate onsubmit="event.preventDefault(); submitReplaceDoc();">
          <div class="form-group">
            <label class="form-label">Nuevo archivo *</label>
            <div class="dropzone" id="replaceDropzone">
              <i data-lucide="cloud-upload"></i>
              <p class="dropzone-title">Arrastra el documento corregido</p>
              <p class="dropzone-sub">PDF, DOCX, JPG, PNG · Máx. 10MB</p>
              <input type="file" id="replaceFile" accept=".pdf,.docx,.jpg,.jpeg,.png" style="display:none;" required>
            </div>
            <span class="form-error-text" id="replaceFileError">Debe seleccionar un archivo.</span>
          </div>
          <div class="form-group">
            <label class="form-label" for="replaceObs">Nota para el instructor (opcional)</label>
            <textarea id="replaceObs" class="form-control" rows="2" placeholder="Indique qué fue corregido en este documento..."></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-ghost" onclick="closeModal('modalUploadDocReplace')">Cancelar</button>
        <button type="submit" form="replaceDocForm" class="btn btn-primary"><i data-lucide="upload"></i> Subir Versión Corregida</button>
      </div>
    </div>
  </div>

</div>

<script>
function submitDoc() {
  const typeEl = document.getElementById('docType');
  const fileEl = document.getElementById('docFile');
  let valid = true;

  if (!typeEl.value) {
    document.getElementById('docTypeError').style.display = 'block';
    valid = false;
  } else {
    document.getElementById('docTypeError').style.display = 'none';
  }

  if (!fileEl.files.length) {
    document.getElementById('docFileError').style.display = 'block';
    valid = false;
  } else {
    const maxSize = 10 * 1024 * 1024;
    if (fileEl.files[0].size > maxSize) {
      document.getElementById('docFileError').textContent = 'El archivo supera el límite de 10MB.';
      document.getElementById('docFileError').style.display = 'block';
      valid = false;
    } else {
      document.getElementById('docFileError').style.display = 'none';
    }
  }

  if (!valid) { showToast('Corrija los errores antes de continuar.', 'error'); return; }
  showToast('Documento cargado exitosamente. En espera de revisión del instructor.', 'success');
  document.getElementById('uploadDocForm').reset();
  resetDropzone('docDropzone', 'docFile', '.pdf,.docx,.jpg,.jpeg,.png');
}

function openDocHistory(name) {
  document.getElementById('historyDocName').textContent = name;
  openModal('modalDocHistory');
}

function openRejectionDetail() {
  openModal('modalRejectionDetail');
}

function openReplaceDoc(name) {
  document.getElementById('replaceDocName').textContent = name;
  openModal('modalUploadDocReplace');
}

function submitReplaceDoc() {
  const fileEl = document.getElementById('replaceFile');
  if (!fileEl.files.length) {
    document.getElementById('replaceFileError').style.display = 'block';
    showToast('Debe adjuntar un archivo corregido.', 'error');
    return;
  }
  document.getElementById('replaceFileError').style.display = 'none';
  showToast('Documento reemplazado y enviado para revisión.', 'success');
  closeModal('modalUploadDocReplace');
  document.getElementById('replaceDocForm').reset();
  resetDropzone('replaceDropzone', 'replaceFile', '.pdf,.docx,.jpg,.jpeg,.png');
}

function resetDropzone(dzId, inputId, accept) {
  const dz = document.getElementById(dzId);
  dz.innerHTML = `
    <i data-lucide="cloud-upload"></i>
    <p class="dropzone-title">Arrastra el documento aquí</p>
    <p class="dropzone-sub">o haz clic para seleccionar</p>
    <input type="file" id="${inputId}" accept="${accept}" style="display:none;" required>
  `;
  if (window.lucide) window.lucide.createIcons();
}

function filterDocs(query) {
  const rows = document.querySelectorAll('#docsTableBody tr');
  const q = query.toLowerCase();
  let visibleCount = 0;
  rows.forEach(row => {
    const text = row.textContent.toLowerCase();
    if (text.includes(q)) {
      row.style.display = '';
      visibleCount++;
    } else {
      row.style.display = 'none';
    }
  });
  document.getElementById('docsEmptyState').style.display = visibleCount === 0 ? 'flex' : 'none';
}
</script>
