<!-- VIEW: BITACORAS APRENDIZ (HU-16) -->
<div class="view-content" id="view-bitacoras-aprendiz">
  
  <div class="welcome-card-header">
    <div style="display: flex; align-items: center; gap: 14px;">
      <div class="kpi-icon-wrapper" style="background: rgba(255,255,255,0.15); color: #FFFFFF; font-size: 24px;">
        <i data-lucide="file-check-2"></i>
      </div>
      <div>
        <h1>Mis Bitácoras Quincenales</h1>
        <p>Registra y consulta tus bitácoras obligatorias. Debes entregar un total de 6 bitácoras para completar tu etapa productiva.</p>
      </div>
    </div>
  </div>

  <!-- Progress and Submission trigger header -->
  <div class="card" style="margin-bottom: 24px; padding: 24px;">
    <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px;">
      <div style="flex: 1; min-width: 250px;">
        <h3 style="font-size: 15px; margin-bottom: 6px;">Progreso de Entregas</h3>
        <p style="font-size: 13px; color: var(--text-muted); margin-bottom: 12px;">Llevas 4 de 6 bitácoras obligatorias aprobadas.</p>
        
        <div style="display: flex; align-items: center; gap: 10px;">
          <div style="flex: 1; background: var(--border-color); border-radius: 4px; height: 8px; overflow: hidden;">
            <div style="width: 67%; height: 100%; background: var(--primary);"></div>
          </div>
          <span style="font-size: 13px; font-weight: 700; color: var(--primary);">67%</span>
        </div>
      </div>
      
      <div style="text-align: right;">
        <button class="btn btn-primary" onclick="openUploadBitacoraModal()"><i data-lucide="plus"></i> Nueva Bitácora</button>
        <span style="display: block; font-size: 11px; color: var(--text-muted); margin-top: 6px;">Límite de entregas: 6 bitácoras</span>
      </div>
    </div>
  </div>

  <!-- Grid list (6 bitacoras) -->
  <div class="grid-3" id="bitacorasGrid">
    
    <!-- Bitácora 1 (Aprobada) -->
    <div class="card" style="border-top: 4px solid var(--status-success);">
      <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
        <span style="font-weight: 700; font-size: 14px;">Bitácora N° 1</span>
        <span class="badge badge-success">Aprobada</span>
      </div>
      <div style="font-size: 12.5px; color: var(--text-muted); display: flex; flex-direction: column; gap: 6px; margin-bottom: 16px;">
        <span>📅 Periodo: 15/03/2026 — 30/03/2026</span>
        <span>⏱️ Enviado: 30/03/2026 · 10:45 AM</span>
        <span>👤 Instructor: Ing. María Rodríguez</span>
      </div>
      <div style="display: flex; gap: 8px;">
        <button class="btn btn-ghost btn-sm" style="flex: 1;" onclick="showToast('Descargando archivo Bitacora1.pdf...', 'info')"><i data-lucide="eye"></i> Ver</button>
        <button class="btn btn-ghost btn-sm" style="flex: 1;" disabled><i data-lucide="edit"></i> Editar</button>
      </div>
    </div>

    <!-- Bitácora 2 (Aprobada) -->
    <div class="card" style="border-top: 4px solid var(--status-success);">
      <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
        <span style="font-weight: 700; font-size: 14px;">Bitácora N° 2</span>
        <span class="badge badge-success">Aprobada</span>
      </div>
      <div style="font-size: 12.5px; color: var(--text-muted); display: flex; flex-direction: column; gap: 6px; margin-bottom: 16px;">
        <span>📅 Periodo: 01/04/2026 — 15/04/2026</span>
        <span>⏱️ Enviado: 15/04/2026 · 04:30 PM</span>
        <span>👤 Instructor: Ing. María Rodríguez</span>
      </div>
      <div style="display: flex; gap: 8px;">
        <button class="btn btn-ghost btn-sm" style="flex: 1;" onclick="showToast('Descargando archivo Bitacora2.pdf...', 'info')"><i data-lucide="eye"></i> Ver</button>
        <button class="btn btn-ghost btn-sm" style="flex: 1;" disabled><i data-lucide="edit"></i> Editar</button>
      </div>
    </div>

    <!-- Bitácora 3 (En revisión) -->
    <div class="card" style="border-top: 4px solid var(--status-info);">
      <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
        <span style="font-weight: 700; font-size: 14px;">Bitácora N° 3</span>
        <span class="badge badge-info">En revisión</span>
      </div>
      <div style="font-size: 12.5px; color: var(--text-muted); display: flex; flex-direction: column; gap: 6px; margin-bottom: 16px;">
        <span>📅 Periodo: 16/04/2026 — 30/04/2026</span>
        <span>⏱️ Enviado: 30/04/2026 · 08:15 AM</span>
        <span>👤 En espera de firma de instructora</span>
      </div>
      <div style="display: flex; gap: 8px;">
        <button class="btn btn-ghost btn-sm" style="flex: 1;" onclick="showToast('Descargando archivo Bitacora3.pdf...', 'info')"><i data-lucide="eye"></i> Ver</button>
        <button class="btn btn-ghost btn-sm" style="flex: 1;" disabled><i data-lucide="edit"></i> Editar</button>
      </div>
    </div>

    <!-- Bitácora 4 (Aprobada) -->
    <div class="card" style="border-top: 4px solid var(--status-success);">
      <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
        <span style="font-weight: 700; font-size: 14px;">Bitácora N° 4</span>
        <span class="badge badge-success">Aprobada</span>
      </div>
      <div style="font-size: 12.5px; color: var(--text-muted); display: flex; flex-direction: column; gap: 6px; margin-bottom: 16px;">
        <span>📅 Periodo: 01/05/2026 — 15/05/2026</span>
        <span>⏱️ Enviado: 15/05/2026 · 09:20 AM</span>
        <span>👤 Instructor: Ing. María Rodríguez</span>
      </div>
      <div style="display: flex; gap: 8px;">
        <button class="btn btn-ghost btn-sm" style="flex: 1;" onclick="showToast('Descargando archivo Bitacora4.pdf...', 'info')"><i data-lucide="eye"></i> Ver</button>
        <button class="btn btn-ghost btn-sm" style="flex: 1;" disabled><i data-lucide="edit"></i> Editar</button>
      </div>
    </div>

    <!-- Bitácora 5 (Borrador / Pendiente de entrega) -->
    <div class="card" style="border-top: 4px solid var(--status-warning);">
      <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
        <span style="font-weight: 700; font-size: 14px;">Bitácora N° 5</span>
        <span class="badge badge-warning">Borrador</span>
      </div>
      <div style="font-size: 12.5px; color: var(--text-muted); display: flex; flex-direction: column; gap: 6px; margin-bottom: 16px;">
        <span>📅 Periodo: 16/05/2026 — 30/05/2026</span>
        <span>⏱️ Vence: 15/06/2026 (Próximo)</span>
        <span>📂 Archivo: No cargado</span>
      </div>
      <div style="display: flex; gap: 8px;">
        <button class="btn btn-ghost btn-sm" style="flex: 1;" disabled><i data-lucide="eye"></i> Ver</button>
        <button class="btn btn-primary btn-sm" style="flex: 1;" onclick="openUploadSpecificBitacora(5, '16/05/2026 — 30/05/2026')"><i data-lucide="upload"></i> Cargar</button>
      </div>
    </div>

    <!-- Bitácora 6 (Pendiente) -->
    <div class="card" style="border-top: 4px solid var(--secondary);">
      <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
        <span style="font-weight: 700; font-size: 14px;">Bitácora N° 6</span>
        <span class="badge badge-secondary">Pendiente</span>
      </div>
      <div style="font-size: 12.5px; color: var(--text-muted); display: flex; flex-direction: column; gap: 6px; margin-bottom: 16px;">
        <span>📅 Periodo: 01/06/2026 — 15/06/2026</span>
        <span>⏱️ Vence: 30/06/2026</span>
        <span>📂 Archivo: No cargado</span>
      </div>
      <div style="display: flex; gap: 8px;">
        <button class="btn btn-ghost btn-sm" style="flex: 1;" disabled><i data-lucide="eye"></i> Ver</button>
        <button class="btn btn-primary btn-sm" style="flex: 1;" onclick="openUploadSpecificBitacora(6, '01/06/2026 — 15/06/2026')"><i data-lucide="upload"></i> Cargar</button>
      </div>
    </div>

  </div>

  <!-- MODAL: CARGAR BITÁCORA (HU-16.1 & HU-16.2) -->
  <div class="modal-overlay" id="modalUploadBitacora">
    <div class="modal-container">
      <div class="modal-header">
        <h3>📄 Subir Bitácora Quincenal</h3>
        <button class="modal-close"><i data-lucide="x"></i></button>
      </div>
      <div class="modal-body">
        <form id="uploadBitacoraForm" novalidate onsubmit="event.preventDefault(); submitBitacora();">
          <div class="form-group">
            <label class="form-label" for="bitSelect">Seleccionar Bitácora</label>
            <select id="bitSelect" class="form-control" onchange="changeBitPeriod(this.value)">
              <option value="5">Bitácora N° 5 (16/05/2026 — 30/05/2026)</option>
              <option value="6">Bitácora N° 6 (01/06/2026 — 15/06/2026)</option>
            </select>
          </div>
          
          <div class="form-group">
            <label class="form-label" for="bitPeriod">Período de Ejecución</label>
            <input type="text" id="bitPeriod" class="form-control" value="16 de Mayo — 30 de Mayo de 2026" readonly style="opacity: 0.8;">
          </div>

          <!-- Drag and Drop Dropzone -->
          <div class="form-group">
            <label class="form-label">Archivo PDF / Word de la Bitácora</label>
            <div class="dropzone" id="bitacoraDropzone">
              <i data-lucide="cloud-upload"></i>
              <p class="dropzone-title">Arrastra tu bitácora aquí</p>
              <p class="dropzone-sub">o haz clic para seleccionar (PDF, DOCX hasta 10MB)</p>
              <input type="file" id="bitFile" accept=".pdf,.docx" style="display: none;" required>
            </div>
            <span class="form-error-text" id="bitFileError">Debe seleccionar un archivo válido.</span>
          </div>

          <div class="form-group">
            <label class="form-label" for="bitObs">Observaciones para el instructor (Opcional)</label>
            <textarea id="bitObs" class="form-control" rows="3" placeholder="Comentarios sobre el desarrollo técnico de estas dos semanas..."></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-ghost btn-close-modal" onclick="closeModal('modalUploadBitacora')">Cancelar</button>
        <button type="submit" form="uploadBitacoraForm" class="btn btn-primary"><i data-lucide="send"></i> Enviar Bitácora</button>
      </div>
    </div>
  </div>

</div>

<script>
function openUploadBitacoraModal() {
  openModal('modalUploadBitacora');
}

function openUploadSpecificBitacora(num, period) {
  document.getElementById('bitSelect').value = num;
  changeBitPeriod(num);
  openModal('modalUploadBitacora');
}

function changeBitPeriod(num) {
  const periodField = document.getElementById('bitPeriod');
  if (num === '5') {
    periodField.value = '16 de Mayo — 30 de Mayo de 2026';
  } else {
    periodField.value = '01 de Junio — 15 de Junio de 2026';
  }
}

function submitBitacora() {
  const fileInput = document.getElementById('bitFile');
  const errorText = document.getElementById('bitFileError');
  
  if (!fileInput.files.length) {
    errorText.style.display = 'block';
    showToast('Debe adjuntar un archivo antes de enviar la bitácora.', 'error');
    return;
  }
  
  errorText.style.display = 'none';
  showToast('Bitácora quincenal enviada exitosamente para revisión.', 'success');
  closeModal('modalUploadBitacora');
  document.getElementById('uploadBitacoraForm').reset();
  
  // Reset dropzone
  const dz = document.getElementById('bitacoraDropzone');
  dz.innerHTML = `
    <i data-lucide="cloud-upload"></i>
    <p class="dropzone-title">Arrastra tu bitácora aquí</p>
    <p class="dropzone-sub">o haz clic para seleccionar (PDF, DOCX hasta 10MB)</p>
    <input type="file" id="bitFile" accept=".pdf,.docx" style="display: none;" required>
  `;
  if (window.lucide) window.lucide.createIcons();
}
</script>
