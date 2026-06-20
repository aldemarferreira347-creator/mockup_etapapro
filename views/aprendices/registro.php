<!-- VIEW: REGISTRO DE APRENDIZ (HU-08) -->
<div class="view-content" id="view-registro-aprendiz">

  <div class="welcome-card-header">
    <div style="display:flex;align-items:center;gap:14px;">
      <div class="kpi-icon-wrapper" style="background:rgba(255,255,255,0.15);color:#fff;font-size:24px;">
        <i data-lucide="user-plus"></i>
      </div>
      <div>
        <h1>Registro de Nuevo Aprendiz</h1>
        <p>Completa todos los campos para vincular un aprendiz al sistema de seguimiento de etapa productiva.</p>
      </div>
    </div>
  </div>

  <!-- Breadcrumbs -->
  <ul class="breadcrumbs">
    <li><a href="#" onclick="navigateTo('view-dashboard-coordinador')">Inicio</a></li>
    <li><a href="#" onclick="navigateTo('view-dashboard-coordinador')">Aprendices</a></li>
    <li>Registro</li>
  </ul>

  <form id="registroAprendizForm" novalidate onsubmit="event.preventDefault(); submitRegistroAprendiz();">

    <!-- SECCIÓN 1: Datos Personales -->
    <div class="card" style="padding:24px;margin-bottom:20px;">
      <p class="form-section-title"><i data-lucide="user"></i> Datos Personales</p>
      <div class="grid-2">
        <div class="form-group">
          <label class="form-label" for="regNombres">Nombres *</label>
          <input type="text" id="regNombres" class="form-control" placeholder="Ej: Carlos Andrés" required>
          <span class="form-error-text">Los nombres son obligatorios.</span>
        </div>
        <div class="form-group">
          <label class="form-label" for="regApellidos">Apellidos *</label>
          <input type="text" id="regApellidos" class="form-control" placeholder="Ej: Guerrero López" required>
          <span class="form-error-text">Los apellidos son obligatorios.</span>
        </div>
        <div class="form-group">
          <label class="form-label" for="regTipoDoc">Tipo de Documento *</label>
          <select id="regTipoDoc" class="form-control" required>
            <option value="">Seleccionar...</option>
            <option value="CC">Cédula de Ciudadanía (CC)</option>
            <option value="CE">Cédula de Extranjería (CE)</option>
            <option value="TI">Tarjeta de Identidad (TI)</option>
            <option value="PA">Pasaporte (PA)</option>
          </select>
          <span class="form-error-text">Seleccione el tipo de documento.</span>
        </div>
        <div class="form-group">
          <label class="form-label" for="regNumDoc">Número de Documento *</label>
          <input type="text" id="regNumDoc" class="form-control" placeholder="Ej: 1075872451" required>
          <span class="form-error-text">El número de documento es obligatorio.</span>
        </div>
        <div class="form-group">
          <label class="form-label" for="regFechaNac">Fecha de Nacimiento *</label>
          <input type="date" id="regFechaNac" class="form-control" required>
          <span class="form-error-text">La fecha de nacimiento es obligatoria.</span>
        </div>
        <div class="form-group">
          <label class="form-label" for="regTelefono">Teléfono Móvil *</label>
          <input type="tel" id="regTelefono" class="form-control" placeholder="Ej: 3142287650" required>
          <span class="form-error-text">El teléfono es obligatorio.</span>
        </div>
        <div class="form-group" style="grid-column:1/-1;">
          <label class="form-label" for="regCorreo">Correo Institucional *</label>
          <input type="email" id="regCorreo" class="form-control" placeholder="aprendiz@misena.edu.co" required>
          <span class="form-error-text">Ingrese un correo institucional válido (@misena.edu.co o @sena.edu.co).</span>
          <span class="form-hint">Use correo @misena.edu.co para aprendices o @sena.edu.co para funcionarios.</span>
        </div>
      </div>
    </div>

    <!-- SECCIÓN 2: Información Académica -->
    <div class="card" style="padding:24px;margin-bottom:20px;">
      <p class="form-section-title"><i data-lucide="graduation-cap"></i> Información Académica</p>
      <div class="grid-2">
        <div class="form-group">
          <label class="form-label" for="regPrograma">Programa de Formación *</label>
          <select id="regPrograma" class="form-control" required>
            <option value="">Seleccionar programa...</option>
            <option value="ADSO">Análisis y Desarrollo de Software (ADSO)</option>
            <option value="SGSST">Seguridad y Salud en el Trabajo (SGSST)</option>
            <option value="CONT">Contabilidad y Finanzas</option>
            <option value="REDES">Mantenimiento de Redes</option>
            <option value="ELEC">Electrónica</option>
          </select>
          <span class="form-error-text">Seleccione el programa de formación.</span>
        </div>
        <div class="form-group">
          <label class="form-label" for="regFicha">Número de Ficha *</label>
          <input type="text" id="regFicha" class="form-control" placeholder="Ej: 2879344" required>
          <span class="form-error-text">El número de ficha es obligatorio.</span>
        </div>
        <div class="form-group">
          <label class="form-label" for="regCentro">Centro de Formación *</label>
          <select id="regCentro" class="form-control" required>
            <option value="">Seleccionar centro...</option>
            <option value="CTPI">Centro de Teleinformática y Producción Industrial (CTPI)</option>
            <option value="CAG">Centro Agropecuario de Buga</option>
            <option value="CIAL">Centro Industrial y de Aviación</option>
          </select>
          <span class="form-error-text">Seleccione el centro de formación.</span>
        </div>
        <div class="form-group">
          <label class="form-label" for="regEstado">Estado del Proceso *</label>
          <select id="regEstado" class="form-control" required>
            <option value="">Seleccionar estado...</option>
            <option value="induccion">En Inducción</option>
            <option value="proceso">En Proceso</option>
            <option value="certificar">Por Certificar</option>
            <option value="certificado">Certificado</option>
            <option value="suspendido">Suspendido</option>
          </select>
          <span class="form-error-text">Seleccione el estado del proceso.</span>
        </div>
      </div>
    </div>

    <!-- SECCIÓN 3: Información Empresarial -->
    <div class="card" style="padding:24px;margin-bottom:24px;">
      <p class="form-section-title"><i data-lucide="building-2"></i> Información Empresarial</p>
      <div class="grid-2">
        <div class="form-group">
          <label class="form-label" for="regEmpresa">Empresa Vinculada *</label>
          <select id="regEmpresa" class="form-control" required>
            <option value="">Seleccionar empresa...</option>
            <option value="techcorp">TechCorp S.A.S.</option>
            <option value="digitalpyme">DigitalPyme SAS</option>
            <option value="innova">Innova Digital</option>
            <option value="tecnisoft">Tecnisoft S.A.S.</option>
            <option value="otra">Otra (registrar nueva)</option>
          </select>
          <span class="form-error-text">Seleccione la empresa vinculada.</span>
        </div>
        <div class="form-group">
          <label class="form-label" for="regCargo">Cargo / Rol en la Empresa *</label>
          <input type="text" id="regCargo" class="form-control" placeholder="Ej: Desarrollador Frontend" required>
          <span class="form-error-text">El cargo es obligatorio.</span>
        </div>
        <div class="form-group">
          <label class="form-label" for="regFechaInicio">Fecha de Inicio de Etapa *</label>
          <input type="date" id="regFechaInicio" class="form-control" required>
          <span class="form-error-text">La fecha de inicio es obligatoria.</span>
        </div>
        <div class="form-group">
          <label class="form-label" for="regInstructor">Instructor Asignado *</label>
          <select id="regInstructor" class="form-control" required>
            <option value="">Seleccionar instructor...</option>
            <option value="maria">Ing. María Rodríguez</option>
            <option value="felipe">Ing. Felipe Muñoz</option>
            <option value="clara">Ing. Clara Gómez</option>
          </select>
          <span class="form-error-text">Seleccione el instructor asignado.</span>
        </div>
        <div class="form-group" style="grid-column:1/-1;">
          <label class="form-label" for="regObservaciones">Observaciones Iniciales</label>
          <textarea id="regObservaciones" class="form-control" rows="3" placeholder="Anotaciones relevantes sobre el aprendiz o su proceso..."></textarea>
        </div>
      </div>
    </div>

    <!-- Acciones -->
    <div style="display:flex;justify-content:flex-end;gap:12px;margin-bottom:32px;">
      <button type="button" class="btn btn-ghost" onclick="navigateTo('view-dashboard-coordinador')">
        <i data-lucide="x"></i> Cancelar
      </button>
      <button type="submit" class="btn btn-primary">
        <i data-lucide="user-check"></i> Registrar Aprendiz
      </button>
    </div>

  </form>

  <!-- MODAL: CONFIRMACIÓN -->
  <div class="modal-overlay" id="modalConfirmRegistro">
    <div class="modal-container" style="max-width:480px;">
      <div class="modal-header">
        <h3><i data-lucide="user-check" style="width:18px;height:18px;margin-right:8px;vertical-align:middle;color:var(--primary);"></i>Confirmar Registro</h3>
        <button class="modal-close" onclick="closeModal('modalConfirmRegistro')"><i data-lucide="x"></i></button>
      </div>
      <div class="modal-body">
        <div class="alert alert-success" style="margin-bottom:16px;">
          <i data-lucide="check-circle"></i>
          <div>
            <div class="alert-title" id="confirmNombreAprendiz">Carlos Andrés Guerrero López</div>
            <div style="font-size:12px;">Listo para ser registrado en el sistema EtapaPro.</div>
          </div>
        </div>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:12px;font-size:13px;">
          <div>
            <p style="color:var(--text-muted);font-size:11px;margin-bottom:2px;">Documento</p>
            <p id="confirmDoc" style="font-weight:600;">CC 1075872451</p>
          </div>
          <div>
            <p style="color:var(--text-muted);font-size:11px;margin-bottom:2px;">Programa</p>
            <p id="confirmPrograma" style="font-weight:600;">ADSO</p>
          </div>
          <div>
            <p style="color:var(--text-muted);font-size:11px;margin-bottom:2px;">Empresa</p>
            <p id="confirmEmpresa" style="font-weight:600;">TechCorp S.A.S.</p>
          </div>
          <div>
            <p style="color:var(--text-muted);font-size:11px;margin-bottom:2px;">Instructor</p>
            <p id="confirmInstructor" style="font-weight:600;">Ing. María Rodríguez</p>
          </div>
        </div>
        <p style="font-size:12px;color:var(--text-muted);margin-top:16px;">Se enviará un correo de bienvenida con las credenciales de acceso al aprendiz.</p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-ghost" onclick="closeModal('modalConfirmRegistro')">Revisar datos</button>
        <button class="btn btn-primary" onclick="confirmarRegistro()">
          <i data-lucide="check"></i> Confirmar y Registrar
        </button>
      </div>
    </div>
  </div>

</div>

<script>
function submitRegistroAprendiz() {
  if (!validateForm('registroAprendizForm')) {
    showToast('Complete todos los campos obligatorios.', 'error');
    return;
  }
  const nombres   = document.getElementById('regNombres').value.trim();
  const apellidos = document.getElementById('regApellidos').value.trim();
  const tipoDoc   = document.getElementById('regTipoDoc').value;
  const numDoc    = document.getElementById('regNumDoc').value.trim();
  const progSelect= document.getElementById('regPrograma');
  const empSelect = document.getElementById('regEmpresa');
  const instSelect= document.getElementById('regInstructor');

  document.getElementById('confirmNombreAprendiz').textContent = nombres + ' ' + apellidos;
  document.getElementById('confirmDoc').textContent  = tipoDoc + ' ' + numDoc;
  document.getElementById('confirmPrograma').textContent = progSelect.options[progSelect.selectedIndex].text.split('(')[0].trim();
  document.getElementById('confirmEmpresa').textContent  = empSelect.options[empSelect.selectedIndex].text;
  document.getElementById('confirmInstructor').textContent = instSelect.options[instSelect.selectedIndex].text;

  openModal('modalConfirmRegistro');
}

function confirmarRegistro() {
  const nombres   = document.getElementById('regNombres').value.trim();
  const apellidos = document.getElementById('regApellidos').value.trim();
  showToast('Aprendiz ' + nombres + ' ' + apellidos + ' registrado exitosamente. Credenciales enviadas por correo.', 'success');
  closeModal('modalConfirmRegistro');
  document.getElementById('registroAprendizForm').reset();
}
</script>
