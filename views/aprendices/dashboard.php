<!-- VIEW: DASHBOARD APRENDIZ (HU-09, HU-20) -->
<div class="view-content" id="view-dashboard-aprendiz">
  
  <!-- Welcome Banner (Progreso General Ring) -->
  <section class="welcome-card-header" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 20px;">
    <div style="flex: 1; min-width: 280px;">
      <span class="badge" style="background: rgba(255,255,255,0.2); color:#FFFFFF; margin-bottom: 12px; border: 1px solid rgba(255,255,255,0.3);">
        <i data-lucide="award" style="width: 14px;"></i> Etapa Productiva 2026
      </span>
      <h1>¡Vas por muy buen camino, Carlos!</h1>
      <p style="margin-top: 6px;">
        Has completado y enviado <strong>4 de las 6 bitácoras</strong> obligatorias. Tu progreso general de etapa productiva va en el <strong>67%</strong>. Sigue así para certificarte pronto.
      </p>
      <div style="display: flex; gap: 12px; margin-top: 16px;">
        <button class="btn btn-primary" onclick="navigateTo('view-carpeta-aprendiz')"><i data-lucide="folder-open"></i> Ver Carpeta Digital</button>
        <button class="btn btn-ghost" style="color: #FFFFFF; border-color: rgba(255,255,255,0.4);" onclick="navigateTo('view-bitacoras-aprendiz')"><i data-lucide="file-plus"></i> Nueva Bitácora</button>
      </div>
    </div>
    
    <!-- Circular SVG Progress Ring -->
    <div style="position: relative; width: 120px; height: 120px; flex-shrink: 0; display: flex; align-items: center; justify-content: center;">
      <svg viewBox="0 0 100 100" style="width: 100%; height: 100%; transform: rotate(-90deg);">
        <circle cx="50" cy="50" r="42" fill="none" stroke="rgba(255,255,255,0.15)" stroke-width="8" />
        <circle cx="50" cy="50" r="42" fill="none" stroke="var(--accent)" stroke-width="8" stroke-dasharray="263.89" stroke-dashoffset="87.08" stroke-linecap="round" />
      </svg>
      <div style="position: absolute; text-align: center; color: #FFFFFF;">
        <div style="font-size: 22px; font-weight: 800; font-family: var(--font-headings);">67%</div>
        <div style="font-size: 9px; opacity: 0.8; text-transform: uppercase;">Progreso</div>
      </div>
    </div>
  </section>

  <!-- Grids -->
  <div class="grid-1-380">
    
    <!-- LEFT COLUMN: Timeline & Alternatives -->
    <div style="display: flex; flex-direction: column; gap: 20px;">
      
      <!-- Timeline Phase Process -->
      <div class="card">
        <h3 class="card-title">Fases del Proceso Formativo</h3>
        
        <!-- Timeline vertical list -->
        <div style="display: flex; justify-content: space-between; align-items: center; position: relative; margin-top: 24px; padding: 0 10px;">
          
          <div style="position: absolute; top: 15px; left: 10%; right: 10%; height: 3px; background-color: var(--border-color); z-index: 1;">
            <div style="width: 50%; height: 100%; background-color: var(--primary);"></div>
          </div>
          
          <!-- Phase 1: Done -->
          <div style="position: relative; z-index: 2; text-align: center; width: 20%;">
            <div style="width: 32px; height: 32px; border-radius: 50%; background-color: var(--primary); color: #FFFFFF; display: flex; align-items: center; justify-content: center; margin: 0 auto 8px; font-size: 14px;">
              <i data-lucide="check" style="width:16px;"></i>
            </div>
            <span style="font-size: 11.5px; font-weight: 700;">Inicio</span>
          </div>

          <!-- Phase 2: Active -->
          <div style="position: relative; z-index: 2; text-align: center; width: 20%;">
            <div style="width: 32px; height: 32px; border-radius: 50%; background-color: var(--primary); color: #FFFFFF; display: flex; align-items: center; justify-content: center; margin: 0 auto 8px; border: 3px solid var(--bg-card); box-shadow: 0 0 0 3px var(--primary); font-size: 14px;">
              <span style="width: 10px; height: 10px; border-radius: 50%; background-color: #FFFFFF;"></span>
            </div>
            <span style="font-size: 11.5px; font-weight: 700; color: var(--primary)">Seguimiento</span>
          </div>

          <!-- Phase 3: Pending -->
          <div style="position: relative; z-index: 2; text-align: center; width: 20%;">
            <div style="width: 32px; height: 32px; border-radius: 50%; background-color: var(--bg-primary); border: 2px solid var(--border-color); color: var(--text-muted); display: flex; align-items: center; justify-content: center; margin: 0 auto 8px; font-size: 14px;">
              3
            </div>
            <span style="font-size: 11.5px; font-weight: 500; color: var(--text-muted)">Evaluación</span>
          </div>

          <!-- Phase 4: Pending -->
          <div style="position: relative; z-index: 2; text-align: center; width: 20%;">
            <div style="width: 32px; height: 32px; border-radius: 50%; background-color: var(--bg-primary); border: 2px solid var(--border-color); color: var(--text-muted); display: flex; align-items: center; justify-content: center; margin: 0 auto 8px; font-size: 14px;">
              4
            </div>
            <span style="font-size: 11.5px; font-weight: 500; color: var(--text-muted)">Certificación</span>
          </div>
        </div>
      </div>

      <!-- Alternatives Grid (HU-09) -->
      <div class="card">
        <h3 class="card-title">Alternativas de Etapa Productiva disponibles</h3>
        <p style="font-size: 12.5px; color: var(--text-muted); margin-bottom: 16px;">
          Consulta los requisitos y documentos solicitados según la modalidad de práctica que desees registrar.
        </p>
        
        <div class="grid-2">
          <!-- Alt 1 -->
          <div class="card" style="border-left: 4px solid var(--primary); padding: 16px; cursor: pointer;" onclick="openAlternativeModal('Contrato de Aprendizaje', 'Modalidad de patrocinio directo de una empresa autorizada, brindando apoyo de sostenimiento y cobertura ARL.', '1. Carta de presentación firmada por Coordinación.<br>2. Copia de documento.<br>3. Convenio de patrocinio aprobado.')">
            <h4 style="font-size: 14px; margin-bottom: 4px;">Contrato de Aprendizaje</h4>
            <span style="font-size: 11.5px; color: var(--text-muted);">Recomendada &middot; Patrocinio mensual</span>
          </div>
          <!-- Alt 2 -->
          <div class="card" style="border-left: 4px solid var(--status-info); padding: 16px; cursor: pointer;" onclick="openAlternativeModal('Pasantía / Prácticas', 'Apoyo a entidades estatales o sin fines de lucro en actividades acordes al programa.', '1. Solicitud formal de pasantía.<br>2. Plan de trabajo concertado.<br>3. Afiliación a ARL.')">
            <h4 style="font-size: 14px; margin-bottom: 4px;">Pasantías Institucionales</h4>
            <span style="font-size: 11.5px; color: var(--text-muted);">Entidades estatales &middot; Certificación directa</span>
          </div>
          <!-- Alt 3 -->
          <div class="card" style="border-left: 4px solid var(--status-warning); padding: 16px; cursor: pointer;" onclick="openAlternativeModal('Proyecto Productivo', 'Diseño y ejecución de una iniciativa empresarial propia o de innovación tecnológica.', '1. Propuesta de proyecto aprobada por instructor técnico.<br>2. Cronograma de actividades quincenales.')">
            <h4 style="font-size: 14px; margin-bottom: 4px;">Proyecto Productivo</h4>
            <span style="font-size: 11.5px; color: var(--text-muted);">Innovación &middot; Emprendimiento</span>
          </div>
          <!-- Alt 4 -->
          <div class="card" style="border-left: 4px solid var(--secondary); padding: 16px; cursor: pointer;" onclick="openAlternativeModal('Vínculo Laboral', 'Homologación de labores actuales del aprendiz que coinciden con las competencias de formación.', '1. Certificación laboral con funciones detalladas.<br>2. Copia de contrato laboral vigente.')">
            <h4 style="font-size: 14px; margin-bottom: 4px;">Vínculo Laboral</h4>
            <span style="font-size: 11.5px; color: var(--text-muted);">Homologación directa &middot; Trabajador activo</span>
          </div>
        </div>
      </div>

    </div>

    <!-- RIGHT COLUMN: APPOINTMENTS & CONTACTS -->
    <div style="display: flex; flex-direction: column; gap: 20px;">
      <!-- Next Appointment (HU-20) -->
      <div class="card" style="border-top: 4px solid var(--status-warning);">
        <div class="card-title">
          <span>Próximo Seguimiento</span>
          <span class="badge badge-warning">En 5 días</span>
        </div>
        
        <div style="display: flex; gap: 14px; margin-bottom: 16px; background-color: var(--bg-primary); padding: 12px; border-radius: var(--r-sm);">
          <div style="width: 48px; height: 50px; background-color: var(--bg-card); border: 1.5px solid var(--border-color); border-radius: 8px; display: flex; flex-direction: column; align-items: center; justify-content: center; font-family: var(--font-headings); font-weight: 700;">
            <span style="font-size: 10px; color: var(--text-muted); text-transform: uppercase;">JUN</span>
            <span style="font-size: 20px; line-height: 1; color: var(--secondary);">12</span>
          </div>
          <div style="font-size: 12.5px;">
            <div style="font-weight: 700;">Seguimiento Concertado N° 3</div>
            <div style="color: var(--text-muted); margin-top: 2px;"><i data-lucide="clock" style="width:12px; vertical-align: middle;"></i> 10:00 AM — 11:30 AM</div>
            <div style="color: var(--text-muted); margin-top: 2px;"><i data-lucide="video" style="width:12px; vertical-align: middle;"></i> Teams (Virtual)</div>
          </div>
        </div>

        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 18px;">
          <div class="user-avatar" style="background-color: var(--secondary); color:#FFFFFF;">MR</div>
          <div style="font-size: 12.5px;">
            <div style="font-weight: 700;">Ing. María Rodríguez</div>
            <div style="color: var(--text-muted); font-size: 11px;">Instructora de Seguimiento</div>
          </div>
        </div>

        <div style="display: flex; gap: 8px;">
          <button class="btn btn-primary btn-sm" style="flex: 1;" onclick="showToast('Abriendo enlace de Microsoft Teams...', 'info')">
            <i data-lucide="video"></i> Unirse a reunión
          </button>
          <button class="btn btn-ghost btn-sm" style="flex: 1;" onclick="requestReschedule()">
            <i data-lucide="calendar"></i> Reprogramar
          </button>
        </div>
      </div>

      <!-- Solicitar instructor (HU-11) -->
      <div class="card" style="border-top: 4px solid var(--status-info);">
        <div class="card-title" style="margin-bottom:10px;">
          <span>Instructor de Seguimiento</span>
          <span class="badge badge-success">Asignado</span>
        </div>
        <div style="display:flex;align-items:center;gap:10px;margin-bottom:14px;">
          <div class="user-avatar" style="background-color:var(--secondary);color:#fff;">MR</div>
          <div style="font-size:12.5px;">
            <div style="font-weight:700;">Ing. María Rodríguez</div>
            <div style="color:var(--text-muted);font-size:11px;">mrodriguez@sena.edu.co</div>
          </div>
        </div>
        <button class="btn btn-ghost btn-sm" style="width:100%;" onclick="openModal('modalSolicitarInstructor')">
          <i data-lucide="user-plus"></i> Solicitar cambio de instructor
        </button>
      </div>

      <!-- Quick stats/Help -->
      <div class="card" style="background-color: var(--bg-card);">
        <h3 class="card-title" style="margin-bottom: 10px;">¿Necesitas ayuda?</h3>
        <p style="font-size: 12px; color: var(--text-muted); line-height: 1.5; margin-bottom: 12px;">
          Consulta directamente a nuestro asistente interactivo o ponte en contacto con soporte técnico del sistema.
        </p>
        <button class="btn btn-secondary btn-sm" style="width: 100%;" onclick="document.getElementById('chatTrigger').click()">
          <i data-lucide="bot"></i> Hablar con EtapaBot
        </button>
      </div>
    </div>
  </div>

  <!-- MODAL: SOLICITAR INSTRUCTOR (HU-11) -->
  <div class="modal-overlay" id="modalSolicitarInstructor">
    <div class="modal-container" style="max-width:480px;">
      <div class="modal-header">
        <h3><i data-lucide="user-plus" style="width:18px;height:18px;margin-right:8px;vertical-align:middle;color:var(--status-info);"></i>Solicitar Cambio de Instructor</h3>
        <button class="modal-close" onclick="closeModal('modalSolicitarInstructor')"><i data-lucide="x"></i></button>
      </div>
      <div class="modal-body">
        <form id="solicitarInstructorForm" novalidate onsubmit="event.preventDefault(); submitSolicitarInstructor();">
          <div class="form-group">
            <label class="form-label" for="siMotivo">Motivo de la solicitud <span style="color:var(--status-error)">*</span></label>
            <select id="siMotivo" class="form-control" required>
              <option value="">Seleccionar motivo...</option>
              <option value="disponibilidad">Dificultad de disponibilidad horaria</option>
              <option value="area">El área del instructor no coincide con mi proyecto</option>
              <option value="comunicacion">Problemas de comunicación</option>
              <option value="otro">Otro motivo</option>
            </select>
            <span class="form-error-text">Seleccione un motivo.</span>
          </div>
          <div class="form-group">
            <label class="form-label" for="siDetalle">Descripción detallada <span style="color:var(--status-error)">*</span></label>
            <textarea id="siDetalle" class="form-control" rows="4" placeholder="Explique brevemente la situación para que el coordinador pueda evaluar la solicitud..." required></textarea>
            <span class="form-error-text">La descripción es obligatoria.</span>
          </div>
          <div class="alert alert-warning" style="margin-top:4px;">
            <i data-lucide="alert-triangle"></i>
            <div style="font-size:12px;">El coordinador evaluará tu solicitud y te notificará la decisión en un plazo de 3 días hábiles.</div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-ghost" onclick="closeModal('modalSolicitarInstructor')">Cancelar</button>
        <button class="btn btn-primary" onclick="submitSolicitarInstructor()"><i data-lucide="send"></i> Enviar Solicitud</button>
      </div>
    </div>
  </div>

  <!-- MODAL: ALTERNATIVES DETAIL (HU-09.3) -->
  <div class="modal-overlay" id="modalAltDetail">
    <div class="modal-container">
      <div class="modal-header">
        <h3 id="altDetailTitle">Contrato de Aprendizaje</h3>
        <button class="modal-close" onclick="closeModal('modalAltDetail')"><i data-lucide="x"></i></button>
      </div>
      <div class="modal-body">
        <p id="altDetailDesc" style="font-size: 13.5px; line-height: 1.5; margin-bottom: 16px; color: var(--text-main);"></p>
        
        <h4 style="font-size: 13px; margin-bottom: 8px;"><i data-lucide="folder-check" style="width:14px; vertical-align: middle; color: var(--primary)"></i> Documentos Requeridos:</h4>
        <div id="altDetailDocs" style="background-color: var(--bg-primary); padding: 12px; border-radius: var(--r-sm); font-size: 12.5px; line-height: 1.6; color: var(--text-main);"></div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary btn-sm" onclick="closeModal('modalAltDetail')">Cerrar</button>
      </div>
    </div>
  </div>

</div>

<script>
function openAlternativeModal(title, desc, docs) {
  document.getElementById('altDetailTitle').textContent = title;
  document.getElementById('altDetailDesc').textContent = desc;
  document.getElementById('altDetailDocs').innerHTML = docs;
  openModal('modalAltDetail');
}

function requestReschedule() {
  showToast('Solicitud de reprogramación de cita enviada a la instructora.', 'success');
}

function submitSolicitarInstructor() {
  if (!validateForm('solicitarInstructorForm')) {
    showToast('Complete todos los campos obligatorios.', 'error');
    return;
  }
  closeModal('modalSolicitarInstructor');
  document.getElementById('solicitarInstructorForm').reset();
  showToast('Solicitud de cambio de instructor enviada al coordinador. Te notificaremos la decisión en 3 días hábiles.', 'success');
}
</script>
