<!-- VIEW: EVALUACIÓN DE COMPETENCIAS (HU-10, HU-11) -->
<div class="view-content" id="view-evaluar-instructor">

  <div class="welcome-card-header">
    <div style="display: flex; align-items: center; gap: 14px;">
      <div class="kpi-icon-wrapper" style="background: rgba(255,255,255,0.15); color: #FFFFFF; font-size: 24px;">
        <i data-lucide="clipboard-check"></i>
      </div>
      <div>
        <h1>Evaluación de Competencias</h1>
        <p>Evalúa el desempeño de tus aprendices por competencias del programa de formación.</p>
      </div>
    </div>
  </div>

  <!-- Apprentice selector + action header -->
  <div class="card" style="padding: 24px; margin-bottom: 24px;">
    <div style="display:flex;gap:16px;flex-wrap:wrap;align-items:flex-end;">
      <div class="form-group" style="flex:1;min-width:200px;margin-bottom:0;">
        <label class="form-label" for="evalAprendiz">Seleccionar Aprendiz</label>
        <select id="evalAprendiz" class="form-control" onchange="loadEvaluation(this.value)">
          <option value="">Seleccionar aprendiz...</option>
          <option value="carlos">Carlos Guerrero - CC 1.062.345.678</option>
          <option value="laura">Laura Martínez - CC 1.048.912.345</option>
          <option value="jhon">Jhon Pérez - CC 1.072.567.890</option>
          <option value="sara">Sara Ramírez - CC 1.055.678.901</option>
        </select>
      </div>
      <div class="form-group" style="flex:1;min-width:180px;margin-bottom:0;">
        <label class="form-label" for="evalPeriodo">Período de Evaluación</label>
        <select id="evalPeriodo" class="form-control">
          <option>1er Período (Mar–Jun 2026)</option>
          <option>2do Período (Jun–Sep 2026)</option>
        </select>
      </div>
      <div style="display:flex;gap:8px;">
        <button class="btn btn-ghost btn-sm" onclick="showToast('Guardando borrador...','info')">
          <i data-lucide="save"></i> Guardar Borrador
        </button>
        <button class="btn btn-primary btn-sm" onclick="submitEvaluation()">
          <i data-lucide="send"></i> Enviar Evaluación
        </button>
      </div>
    </div>
  </div>

  <!-- Empty state when no apprentice selected -->
  <div id="evalEmptyState" class="empty-state">
    <i data-lucide="clipboard"></i>
    <h3>Selecciona un aprendiz</h3>
    <p>Elige un aprendiz del selector de arriba para cargar su formato de evaluación por competencias.</p>
  </div>

  <!-- Evaluation form (hidden until apprentice selected) -->
  <div id="evalFormContainer" style="display:none;">

    <!-- Apprentice info banner -->
    <div class="alert alert-info" style="margin-bottom:24px;">
      <i data-lucide="user"></i>
      <div>
        <div class="alert-title" id="evalBannerName">Carlos Guerrero</div>
        <div style="font-size:12px;">Ficha: 2885678 · Programa: Análisis y Desarrollo de Software · Empresa: TechCorp S.A.S.</div>
      </div>
      <span class="badge badge-success">En proceso</span>
    </div>

    <form id="evaluationForm" novalidate onsubmit="event.preventDefault(); submitEvaluation();">

      <!-- Competencias grid -->
      <div class="card" style="padding:24px;margin-bottom:24px;">
        <h3 style="font-size:15px;margin-bottom:4px;">Competencias del Programa</h3>
        <p style="font-size:12px;color:var(--text-muted);margin-bottom:20px;">Califica cada competencia en escala 1–5, donde: 1=Insuficiente · 2=Básico · 3=Satisfactorio · 4=Bueno · 5=Excelente</p>

        <div style="display:flex;flex-direction:column;gap:16px;" id="competenciesGrid">

          <!-- Competencia 1 -->
          <div class="competencia-item" style="background:var(--bg-secondary);border-radius:10px;padding:16px;">
            <div style="display:flex;justify-content:space-between;align-items:flex-start;margin-bottom:12px;gap:12px;flex-wrap:wrap;">
              <div style="flex:1;">
                <p style="font-weight:600;font-size:13px;margin-bottom:4px;">220501096 - Gestionar los recursos informáticos</p>
                <p style="font-size:11px;color:var(--text-muted);">Resultado de aprendizaje: Gestionar los requerimientos del cliente en base a la metodología seleccionada.</p>
              </div>
              <div style="display:flex;gap:6px;">
                <span onclick="setGrade(this,1,'comp1')" class="grade-btn" data-active="false" title="1 - Insuficiente">1</span>
                <span onclick="setGrade(this,2,'comp1')" class="grade-btn" data-active="false" title="2 - Básico">2</span>
                <span onclick="setGrade(this,3,'comp1')" class="grade-btn grade-btn-active" data-active="true" title="3 - Satisfactorio">3</span>
                <span onclick="setGrade(this,4,'comp1')" class="grade-btn" data-active="false" title="4 - Bueno">4</span>
                <span onclick="setGrade(this,5,'comp1')" class="grade-btn" data-active="false" title="5 - Excelente">5</span>
              </div>
            </div>
            <textarea class="form-control" rows="2" placeholder="Observaciones sobre esta competencia (opcional)..." style="font-size:12px;"></textarea>
          </div>

          <!-- Competencia 2 -->
          <div class="competencia-item" style="background:var(--bg-secondary);border-radius:10px;padding:16px;">
            <div style="display:flex;justify-content:space-between;align-items:flex-start;margin-bottom:12px;gap:12px;flex-wrap:wrap;">
              <div style="flex:1;">
                <p style="font-weight:600;font-size:13px;margin-bottom:4px;">220501093 - Construir componentes de software</p>
                <p style="font-size:11px;color:var(--text-muted);">Resultado de aprendizaje: Construir los componentes de software de acuerdo con el diseño y los requisitos del cliente.</p>
              </div>
              <div style="display:flex;gap:6px;">
                <span onclick="setGrade(this,1,'comp2')" class="grade-btn" data-active="false" title="1">1</span>
                <span onclick="setGrade(this,2,'comp2')" class="grade-btn" data-active="false" title="2">2</span>
                <span onclick="setGrade(this,3,'comp2')" class="grade-btn" data-active="false" title="3">3</span>
                <span onclick="setGrade(this,4,'comp2')" class="grade-btn grade-btn-active" data-active="true" title="4">4</span>
                <span onclick="setGrade(this,5,'comp2')" class="grade-btn" data-active="false" title="5">5</span>
              </div>
            </div>
            <textarea class="form-control" rows="2" placeholder="Observaciones sobre esta competencia (opcional)..." style="font-size:12px;"></textarea>
          </div>

          <!-- Competencia 3 -->
          <div class="competencia-item" style="background:var(--bg-secondary);border-radius:10px;padding:16px;">
            <div style="display:flex;justify-content:space-between;align-items:flex-start;margin-bottom:12px;gap:12px;flex-wrap:wrap;">
              <div style="flex:1;">
                <p style="font-weight:600;font-size:13px;margin-bottom:4px;">220501094 - Desarrollar la interfaz de usuario</p>
                <p style="font-size:11px;color:var(--text-muted);">Resultado de aprendizaje: Desarrollar la interfaz de usuario teniendo en cuenta los requisitos de usabilidad.</p>
              </div>
              <div style="display:flex;gap:6px;">
                <span onclick="setGrade(this,1,'comp3')" class="grade-btn" data-active="false" title="1">1</span>
                <span onclick="setGrade(this,2,'comp3')" class="grade-btn" data-active="false" title="2">2</span>
                <span onclick="setGrade(this,3,'comp3')" class="grade-btn" data-active="false" title="3">3</span>
                <span onclick="setGrade(this,4,'comp3')" class="grade-btn" data-active="false" title="4">4</span>
                <span onclick="setGrade(this,5,'comp3')" class="grade-btn grade-btn-active" data-active="true" title="5">5</span>
              </div>
            </div>
            <textarea class="form-control" rows="2" placeholder="Observaciones sobre esta competencia (opcional)..." style="font-size:12px;"></textarea>
          </div>

          <!-- Competencia 4 -->
          <div class="competencia-item" style="background:var(--bg-secondary);border-radius:10px;padding:16px;">
            <div style="display:flex;justify-content:space-between;align-items:flex-start;margin-bottom:12px;gap:12px;flex-wrap:wrap;">
              <div style="flex:1;">
                <p style="font-weight:600;font-size:13px;margin-bottom:4px;">220501097 - Aplicar herramientas de control de versiones</p>
                <p style="font-size:11px;color:var(--text-muted);">Resultado de aprendizaje: Implementar control de versiones en proyectos de software usando herramientas estándar.</p>
              </div>
              <div style="display:flex;gap:6px;">
                <span onclick="setGrade(this,1,'comp4')" class="grade-btn" data-active="false" title="1">1</span>
                <span onclick="setGrade(this,2,'comp4')" class="grade-btn" data-active="false" title="2">2</span>
                <span onclick="setGrade(this,3,'comp4')" class="grade-btn grade-btn-active" data-active="true" title="3">3</span>
                <span onclick="setGrade(this,4,'comp4')" class="grade-btn" data-active="false" title="4">4</span>
                <span onclick="setGrade(this,5,'comp4')" class="grade-btn" data-active="false" title="5">5</span>
              </div>
            </div>
            <textarea class="form-control" rows="2" placeholder="Observaciones sobre esta competencia (opcional)..." style="font-size:12px;"></textarea>
          </div>

        </div>
      </div>

      <!-- Nota General -->
      <div class="card" style="padding:24px;margin-bottom:24px;">
        <h3 style="font-size:15px;margin-bottom:16px;">Concepto General del Desempeño</h3>
        <div class="grid-2" style="margin-bottom:16px;">
          <div class="form-group">
            <label class="form-label" for="generalNote">Nota Final (1.0 – 5.0) *</label>
            <input type="number" id="generalNote" class="form-control" min="1" max="5" step="0.1" placeholder="4.0" required>
            <span class="form-error-text" id="generalNoteError">Ingrese una nota entre 1.0 y 5.0.</span>
          </div>
          <div class="form-group">
            <label class="form-label" for="conceptoGeneral">Concepto General *</label>
            <select id="conceptoGeneral" class="form-control" required>
              <option value="">Seleccionar...</option>
              <option value="excelente">Excelente</option>
              <option value="bueno">Bueno</option>
              <option value="satisfactorio">Satisfactorio</option>
              <option value="insuficiente">Insuficiente</option>
            </select>
            <span class="form-error-text" id="conceptoError">Seleccione el concepto general.</span>
          </div>
        </div>
        <div class="form-group">
          <label class="form-label" for="evalComentario">Comentario Final *</label>
          <textarea id="evalComentario" class="form-control" rows="4" placeholder="Resuma el desempeño general del aprendiz en su empresa..." required></textarea>
          <span class="form-error-text" id="comentarioError">El comentario final es obligatorio.</span>
        </div>
        <div class="form-group">
          <label class="form-label" for="recomienda">¿Recomienda para certificación?</label>
          <div style="display:flex;gap:16px;margin-top:8px;">
            <label style="display:flex;align-items:center;gap:6px;cursor:pointer;">
              <input type="radio" name="recomienda" value="si"> Sí, recomienda
            </label>
            <label style="display:flex;align-items:center;gap:6px;cursor:pointer;">
              <input type="radio" name="recomienda" value="no"> No recomienda
            </label>
            <label style="display:flex;align-items:center;gap:6px;cursor:pointer;">
              <input type="radio" name="recomienda" value="condicional"> Condicional
            </label>
          </div>
        </div>
      </div>

    </form>

    <!-- Confirmation modal trigger zone -->
    <div style="display:flex;justify-content:flex-end;gap:12px;">
      <button class="btn btn-ghost" onclick="showToast('Borrador guardado.','info')">
        <i data-lucide="save"></i> Guardar Borrador
      </button>
      <button class="btn btn-primary" onclick="openModal('modalConfirmEval')">
        <i data-lucide="send"></i> Enviar Evaluación Final
      </button>
    </div>
  </div>

  <!-- MODAL: CONFIRMAR ENVÍO -->
  <div class="modal-overlay" id="modalConfirmEval">
    <div class="modal-container" style="max-width:440px;">
      <div class="modal-header">
        <h3>Confirmar Envío</h3>
        <button class="modal-close" onclick="closeModal('modalConfirmEval')"><i data-lucide="x"></i></button>
      </div>
      <div class="modal-body">
        <div class="alert alert-warning" style="margin-bottom:16px;">
          <i data-lucide="alert-triangle"></i>
          <div>Una vez enviada, la evaluación no podrá ser modificada. ¿Desea continuar?</div>
        </div>
        <p style="font-size:13px;color:var(--text-muted);">La evaluación será notificada al aprendiz y al coordinador del programa.</p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-ghost" onclick="closeModal('modalConfirmEval')">Revisar más</button>
        <button class="btn btn-primary" onclick="confirmSendEval()"><i data-lucide="check-circle"></i> Confirmar y Enviar</button>
      </div>
    </div>
  </div>

</div>

<style>
.grade-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 34px;
  height: 34px;
  border-radius: 8px;
  border: 2px solid var(--border-color);
  background: var(--bg-card);
  color: var(--text-secondary);
  font-size: 13px;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.15s ease;
  user-select: none;
}
.grade-btn:hover {
  border-color: var(--primary);
  color: var(--primary);
}
.grade-btn-active, .grade-btn[data-active="true"] {
  background: var(--primary);
  border-color: var(--primary);
  color: #ffffff;
}
</style>

<script>
const evalData = {};

function setGrade(el, grade, compId) {
  const siblings = el.parentElement.querySelectorAll('.grade-btn');
  siblings.forEach(btn => {
    btn.classList.remove('grade-btn-active');
    btn.dataset.active = 'false';
  });
  el.classList.add('grade-btn-active');
  el.dataset.active = 'true';
  evalData[compId] = grade;
}

function loadEvaluation(aprendiz) {
  const emptyState = document.getElementById('evalEmptyState');
  const formContainer = document.getElementById('evalFormContainer');
  const banner = document.getElementById('evalBannerName');
  
  if (!aprendiz) {
    emptyState.style.display = 'flex';
    formContainer.style.display = 'none';
    return;
  }
  
  const names = {
    carlos: 'Carlos Guerrero',
    laura: 'Laura Martínez',
    jhon: 'Jhon Pérez',
    sara: 'Sara Ramírez'
  };
  
  banner.textContent = names[aprendiz] || aprendiz;
  emptyState.style.display = 'none';
  formContainer.style.display = 'block';
  showToast(`Cargando evaluación de ${names[aprendiz]}...`, 'info');
}

function submitEvaluation() {
  const nota = parseFloat(document.getElementById('generalNote').value);
  const concepto = document.getElementById('conceptoGeneral').value;
  const comentario = document.getElementById('evalComentario').value.trim();
  let valid = true;

  if (isNaN(nota) || nota < 1 || nota > 5) {
    document.getElementById('generalNoteError').style.display = 'block';
    valid = false;
  } else document.getElementById('generalNoteError').style.display = 'none';

  if (!concepto) {
    document.getElementById('conceptoError').style.display = 'block';
    valid = false;
  } else document.getElementById('conceptoError').style.display = 'none';

  if (!comentario) {
    document.getElementById('comentarioError').style.display = 'block';
    valid = false;
  } else document.getElementById('comentarioError').style.display = 'none';

  if (!valid) { showToast('Complete todos los campos requeridos.', 'error'); return; }
  openModal('modalConfirmEval');
}

function confirmSendEval() {
  showToast('Evaluación enviada exitosamente. El aprendiz y coordinador han sido notificados.', 'success');
  closeModal('modalConfirmEval');
  document.getElementById('evaluationForm').reset();
  document.getElementById('evalAprendiz').value = '';
  document.getElementById('evalEmptyState').style.display = 'flex';
  document.getElementById('evalFormContainer').style.display = 'none';
}
</script>
