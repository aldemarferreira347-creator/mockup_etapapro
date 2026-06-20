<!-- VIEW: SEGUIMIENTOS / REVISIÓN DE BITÁCORAS (APRENDIZ) -->
<div class="view-content" id="view-seguimientos-aprendiz">

  <div class="welcome-card-header">
    <div style="display:flex;align-items:center;gap:14px;">
      <div class="kpi-icon-wrapper" style="background:rgba(255,255,255,0.15);color:#fff;font-size:24px;">
        <i data-lucide="clipboard-check"></i>
      </div>
      <div>
        <h1>Revisión de Mis Bitácoras</h1>
        <p>Consulta el estado de revisión de cada bitácora y las observaciones de tu instructor de seguimiento.</p>
      </div>
    </div>
  </div>

  <!-- Breadcrumbs -->
  <ul class="breadcrumbs">
    <li><a href="#" onclick="navigateTo(getDashboardView())">Inicio</a></li>
    <li>Revisión de Bitácoras</li>
  </ul>

  <!-- KPIs -->
  <div class="grid-4" style="margin-bottom:24px;">
    <div class="kpi-card">
      <div class="kpi-icon-wrapper" style="background:rgba(16,185,129,0.12);color:var(--status-success);"><i data-lucide="check-circle-2"></i></div>
      <div class="kpi-info"><span class="kpi-label">Aprobadas</span><span class="kpi-value">2</span></div>
    </div>
    <div class="kpi-card">
      <div class="kpi-icon-wrapper" style="background:rgba(239,68,68,0.12);color:var(--status-error);"><i data-lucide="x-circle"></i></div>
      <div class="kpi-info"><span class="kpi-label">Rechazadas</span><span class="kpi-value">2</span></div>
    </div>
    <div class="kpi-card">
      <div class="kpi-icon-wrapper" style="background:rgba(245,158,11,0.12);color:var(--status-warning);"><i data-lucide="clock"></i></div>
      <div class="kpi-info"><span class="kpi-label">En Revisión</span><span class="kpi-value">1</span></div>
    </div>
    <div class="kpi-card">
      <div class="kpi-icon-wrapper" style="background:rgba(148,163,184,0.12);color:var(--text-muted);"><i data-lucide="file-minus"></i></div>
      <div class="kpi-info"><span class="kpi-label">Sin Enviar</span><span class="kpi-value">1</span></div>
    </div>
  </div>

  <!-- Filtros -->
  <div class="card" style="padding:16px 20px;margin-bottom:20px;">
    <div style="display:flex;align-items:center;gap:10px;flex-wrap:wrap;">
      <span style="font-size:13px;color:var(--text-muted);font-weight:600;">Filtrar:</span>
      <button class="btn btn-primary btn-sm" id="filtroTodas" onclick="filtrarBitacorasRev('todas')">Todas (6)</button>
      <button class="btn btn-ghost btn-sm" id="filtroAprobadas" onclick="filtrarBitacorasRev('aprobada')">
        <i data-lucide="check-circle-2" style="width:13px;color:var(--status-success);"></i> Aprobadas
      </button>
      <button class="btn btn-ghost btn-sm" id="filtroRechazadas" onclick="filtrarBitacorasRev('rechazada')">
        <i data-lucide="x-circle" style="width:13px;color:var(--status-error);"></i> Rechazadas
      </button>
      <button class="btn btn-ghost btn-sm" id="filtroRevision" onclick="filtrarBitacorasRev('revision')">
        <i data-lucide="clock" style="width:13px;color:var(--status-warning);"></i> En Revisión
      </button>
      <button class="btn btn-ghost btn-sm" id="filtroPendiente" onclick="filtrarBitacorasRev('pendiente')">
        <i data-lucide="file-minus" style="width:13px;color:var(--text-muted);"></i> Sin Enviar
      </button>
    </div>
  </div>

  <!-- Lista de bitácoras -->
  <div id="bitacorasRevList" style="display:flex;flex-direction:column;gap:14px;">

    <!-- Bitácora 1: Aprobada -->
    <div class="card bitacora-rev-item" data-estado="aprobada" style="padding:20px;border-left:4px solid var(--status-success);">
      <div style="display:flex;justify-content:space-between;align-items:flex-start;gap:12px;flex-wrap:wrap;">
        <div style="flex:1;min-width:200px;">
          <div style="display:flex;align-items:center;gap:10px;margin-bottom:8px;">
            <span class="badge badge-success"><i data-lucide="check" style="width:11px;"></i> Aprobada</span>
            <span style="font-size:12px;color:var(--text-muted);">Revisada el 20/04/2026</span>
          </div>
          <h3 style="font-size:15px;font-weight:700;margin-bottom:4px;">Bitácora N° 1</h3>
          <p style="font-size:12.5px;color:var(--text-muted);">Período: 16/03/2026 — 31/03/2026</p>
          <div style="margin-top:12px;background:rgba(16,185,129,0.08);border:1px solid rgba(16,185,129,0.2);border-radius:var(--r-sm);padding:12px;">
            <p style="font-size:12px;font-weight:600;color:var(--status-success);margin-bottom:4px;"><i data-lucide="message-circle" style="width:12px;vertical-align:middle;"></i> Observación del instructor:</p>
            <p style="font-size:13px;color:var(--text-main);line-height:1.6;">"Bitácora completa y bien documentada. Excelente detalle de actividades técnicas realizadas. Sigue así."</p>
            <p style="font-size:11px;color:var(--text-muted);margin-top:6px;">— Ing. María Rodríguez</p>
          </div>
        </div>
        <div style="display:flex;flex-direction:column;gap:8px;align-items:flex-end;min-width:140px;">
          <div style="font-size:12px;color:var(--text-muted);text-align:right;">
            <div>Enviada: 02/04/2026</div>
            <div style="font-weight:600;color:var(--status-success);font-size:13px;margin-top:4px;">Nota: 4.5 / 5.0</div>
          </div>
          <button class="btn btn-ghost btn-sm" onclick="verDetalleBitacoraRev(1)">
            <i data-lucide="eye" style="width:13px;"></i> Ver detalle
          </button>
        </div>
      </div>
    </div>

    <!-- Bitácora 2: Aprobada -->
    <div class="card bitacora-rev-item" data-estado="aprobada" style="padding:20px;border-left:4px solid var(--status-success);">
      <div style="display:flex;justify-content:space-between;align-items:flex-start;gap:12px;flex-wrap:wrap;">
        <div style="flex:1;min-width:200px;">
          <div style="display:flex;align-items:center;gap:10px;margin-bottom:8px;">
            <span class="badge badge-success"><i data-lucide="check" style="width:11px;"></i> Aprobada</span>
            <span style="font-size:12px;color:var(--text-muted);">Revisada el 05/05/2026</span>
          </div>
          <h3 style="font-size:15px;font-weight:700;margin-bottom:4px;">Bitácora N° 2</h3>
          <p style="font-size:12.5px;color:var(--text-muted);">Período: 01/04/2026 — 15/04/2026</p>
          <div style="margin-top:12px;background:rgba(16,185,129,0.08);border:1px solid rgba(16,185,129,0.2);border-radius:var(--r-sm);padding:12px;">
            <p style="font-size:12px;font-weight:600;color:var(--status-success);margin-bottom:4px;"><i data-lucide="message-circle" style="width:12px;vertical-align:middle;"></i> Observación del instructor:</p>
            <p style="font-size:13px;color:var(--text-main);line-height:1.6;">"Cumple con todos los requisitos del formato. Se evidencia buen avance en las competencias del programa ADSO."</p>
            <p style="font-size:11px;color:var(--text-muted);margin-top:6px;">— Ing. María Rodríguez</p>
          </div>
        </div>
        <div style="display:flex;flex-direction:column;gap:8px;align-items:flex-end;min-width:140px;">
          <div style="font-size:12px;color:var(--text-muted);text-align:right;">
            <div>Enviada: 17/04/2026</div>
            <div style="font-weight:600;color:var(--status-success);font-size:13px;margin-top:4px;">Nota: 4.8 / 5.0</div>
          </div>
          <button class="btn btn-ghost btn-sm" onclick="verDetalleBitacoraRev(2)">
            <i data-lucide="eye" style="width:13px;"></i> Ver detalle
          </button>
        </div>
      </div>
    </div>

    <!-- Bitácora 3: Rechazada -->
    <div class="card bitacora-rev-item" data-estado="rechazada" style="padding:20px;border-left:4px solid var(--status-error);">
      <div style="display:flex;justify-content:space-between;align-items:flex-start;gap:12px;flex-wrap:wrap;">
        <div style="flex:1;min-width:200px;">
          <div style="display:flex;align-items:center;gap:10px;margin-bottom:8px;">
            <span class="badge badge-danger"><i data-lucide="x" style="width:11px;"></i> Rechazada</span>
            <span style="font-size:12px;color:var(--text-muted);">Revisada el 22/05/2026</span>
          </div>
          <h3 style="font-size:15px;font-weight:700;margin-bottom:4px;">Bitácora N° 3</h3>
          <p style="font-size:12.5px;color:var(--text-muted);">Período: 16/04/2026 — 30/04/2026</p>
          <div style="margin-top:12px;background:rgba(239,68,68,0.07);border:1px solid rgba(239,68,68,0.25);border-radius:var(--r-sm);padding:12px;">
            <p style="font-size:12px;font-weight:700;color:var(--status-error);margin-bottom:4px;"><i data-lucide="alert-circle" style="width:12px;vertical-align:middle;"></i> Motivo de rechazo:</p>
            <p style="font-size:13px;color:var(--text-main);line-height:1.6;">"Las actividades descritas no corresponden con las competencias del programa ADSO. Debe corregir la descripción de las tareas realizadas y ser más específico en los logros técnicos alcanzados. Revisar el formato oficial antes de reenviar."</p>
            <p style="font-size:11px;color:var(--text-muted);margin-top:6px;">— Ing. María Rodríguez</p>
          </div>
          <div class="alert alert-warning" style="margin-top:12px;padding:10px 14px;">
            <i data-lucide="refresh-cw" style="width:14px;flex-shrink:0;"></i>
            <span style="font-size:12px;">Debes corregir y reenviar esta bitácora desde <strong>Mis Bitácoras</strong>.</span>
          </div>
        </div>
        <div style="display:flex;flex-direction:column;gap:8px;align-items:flex-end;min-width:140px;">
          <div style="font-size:12px;color:var(--text-muted);text-align:right;">
            <div>Enviada: 18/05/2026</div>
            <div style="font-weight:600;color:var(--status-error);font-size:13px;margin-top:4px;">Requiere corrección</div>
          </div>
          <button class="btn btn-ghost btn-sm" onclick="verDetalleBitacoraRev(3)">
            <i data-lucide="eye" style="width:13px;"></i> Ver detalle
          </button>
          <button class="btn btn-sm" style="background:var(--status-error);color:#fff;border:none;border-radius:var(--r-sm);padding:6px 12px;cursor:pointer;font-size:12px;display:flex;align-items:center;gap:6px;" onclick="navigateTo('view-bitacoras-aprendiz')">
            <i data-lucide="upload" style="width:13px;"></i> Reenviar
          </button>
        </div>
      </div>
    </div>

    <!-- Bitácora 4: Rechazada -->
    <div class="card bitacora-rev-item" data-estado="rechazada" style="padding:20px;border-left:4px solid var(--status-error);">
      <div style="display:flex;justify-content:space-between;align-items:flex-start;gap:12px;flex-wrap:wrap;">
        <div style="flex:1;min-width:200px;">
          <div style="display:flex;align-items:center;gap:10px;margin-bottom:8px;">
            <span class="badge badge-danger"><i data-lucide="x" style="width:11px;"></i> Rechazada</span>
            <span style="font-size:12px;color:var(--text-muted);">Revisada el 10/06/2026</span>
          </div>
          <h3 style="font-size:15px;font-weight:700;margin-bottom:4px;">Bitácora N° 4</h3>
          <p style="font-size:12.5px;color:var(--text-muted);">Período: 01/05/2026 — 15/05/2026</p>
          <div style="margin-top:12px;background:rgba(239,68,68,0.07);border:1px solid rgba(239,68,68,0.25);border-radius:var(--r-sm);padding:12px;">
            <p style="font-size:12px;font-weight:700;color:var(--status-error);margin-bottom:4px;"><i data-lucide="alert-circle" style="width:12px;vertical-align:middle;"></i> Motivo de rechazo:</p>
            <p style="font-size:13px;color:var(--text-main);line-height:1.6;">"El documento no sigue la plantilla oficial SENA. Faltan las horas trabajadas, la firma del jefe inmediato y el sello de la empresa. Adicionalmente el archivo entregado está incompleto (solo 2 páginas de las 4 requeridas)."</p>
            <p style="font-size:11px;color:var(--text-muted);margin-top:6px;">— Ing. María Rodríguez</p>
          </div>
          <div class="alert alert-warning" style="margin-top:12px;padding:10px 14px;">
            <i data-lucide="refresh-cw" style="width:14px;flex-shrink:0;"></i>
            <span style="font-size:12px;">Debes corregir y reenviar esta bitácora desde <strong>Mis Bitácoras</strong>.</span>
          </div>
        </div>
        <div style="display:flex;flex-direction:column;gap:8px;align-items:flex-end;min-width:140px;">
          <div style="font-size:12px;color:var(--text-muted);text-align:right;">
            <div>Enviada: 06/06/2026</div>
            <div style="font-weight:600;color:var(--status-error);font-size:13px;margin-top:4px;">Requiere corrección</div>
          </div>
          <button class="btn btn-ghost btn-sm" onclick="verDetalleBitacoraRev(4)">
            <i data-lucide="eye" style="width:13px;"></i> Ver detalle
          </button>
          <button class="btn btn-sm" style="background:var(--status-error);color:#fff;border:none;border-radius:var(--r-sm);padding:6px 12px;cursor:pointer;font-size:12px;display:flex;align-items:center;gap:6px;" onclick="navigateTo('view-bitacoras-aprendiz')">
            <i data-lucide="upload" style="width:13px;"></i> Reenviar
          </button>
        </div>
      </div>
    </div>

    <!-- Bitácora 5: En Revisión -->
    <div class="card bitacora-rev-item" data-estado="revision" style="padding:20px;border-left:4px solid var(--status-warning);">
      <div style="display:flex;justify-content:space-between;align-items:flex-start;gap:12px;flex-wrap:wrap;">
        <div style="flex:1;min-width:200px;">
          <div style="display:flex;align-items:center;gap:10px;margin-bottom:8px;">
            <span class="badge badge-warning"><i data-lucide="clock" style="width:11px;"></i> En Revisión</span>
            <span style="font-size:12px;color:var(--text-muted);">Enviada el 17/06/2026 · Pendiente de respuesta</span>
          </div>
          <h3 style="font-size:15px;font-weight:700;margin-bottom:4px;">Bitácora N° 5</h3>
          <p style="font-size:12.5px;color:var(--text-muted);">Período: 16/05/2026 — 31/05/2026</p>
          <div style="margin-top:12px;background:rgba(245,158,11,0.08);border:1px solid rgba(245,158,11,0.25);border-radius:var(--r-sm);padding:12px;">
            <p style="font-size:13px;color:var(--text-muted);line-height:1.6;font-style:italic;">La instructora aún no ha emitido respuesta. Tiempo promedio de revisión: 3–5 días hábiles.</p>
          </div>
        </div>
        <div style="display:flex;flex-direction:column;gap:8px;align-items:flex-end;min-width:140px;">
          <div style="font-size:12px;color:var(--text-muted);text-align:right;">
            <div>Enviada: 17/06/2026</div>
            <div style="font-weight:600;color:var(--status-warning);font-size:13px;margin-top:4px;">Esperando revisión</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bitácora 6: Sin enviar -->
    <div class="card bitacora-rev-item" data-estado="pendiente" style="padding:20px;border-left:4px solid var(--border-color);opacity:0.75;">
      <div style="display:flex;justify-content:space-between;align-items:flex-start;gap:12px;flex-wrap:wrap;">
        <div style="flex:1;min-width:200px;">
          <div style="display:flex;align-items:center;gap:10px;margin-bottom:8px;">
            <span class="badge badge-secondary"><i data-lucide="file-minus" style="width:11px;"></i> Sin Enviar</span>
          </div>
          <h3 style="font-size:15px;font-weight:700;margin-bottom:4px;">Bitácora N° 6</h3>
          <p style="font-size:12.5px;color:var(--text-muted);">Período: 01/06/2026 — 15/06/2026</p>
          <div style="margin-top:12px;background:var(--bg-primary);border:1px solid var(--border-color);border-radius:var(--r-sm);padding:12px;">
            <p style="font-size:13px;color:var(--text-muted);line-height:1.6;font-style:italic;">Esta bitácora aún no ha sido enviada. La fecha límite de entrega es el <strong>23/06/2026</strong>.</p>
          </div>
        </div>
        <div style="display:flex;flex-direction:column;gap:8px;align-items:flex-end;min-width:140px;">
          <div style="font-weight:600;color:var(--text-muted);font-size:13px;">No entregada</div>
          <button class="btn btn-primary btn-sm" onclick="navigateTo('view-bitacoras-aprendiz')">
            <i data-lucide="upload" style="width:13px;"></i> Enviar ahora
          </button>
        </div>
      </div>
    </div>

  </div>

  <!-- Estado vacío -->
  <div id="bitacorasRevEmpty" class="empty-state" style="display:none;">
    <i data-lucide="search-x"></i>
    <h3>Sin resultados</h3>
    <p>No hay bitácoras con ese estado.</p>
    <button class="btn btn-ghost btn-sm" onclick="filtrarBitacorasRev('todas')">Ver todas</button>
  </div>

  <!-- MODAL: DETALLE BITÁCORA -->
  <div class="modal-overlay" id="modalDetalleBitacoraRev">
    <div class="modal-container" style="max-width:540px;">
      <div class="modal-header">
        <h3 id="mdbrTitulo">Detalle de Revisión</h3>
        <button class="modal-close" onclick="closeModal('modalDetalleBitacoraRev')"><i data-lucide="x"></i></button>
      </div>
      <div class="modal-body">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:14px;font-size:13px;margin-bottom:20px;">
          <div><p style="color:var(--text-muted);font-size:11px;margin-bottom:3px;">Período</p><p id="mdbrPeriodo" style="font-weight:600;"></p></div>
          <div><p style="color:var(--text-muted);font-size:11px;margin-bottom:3px;">Estado</p><p id="mdbrEstadoBadge"></p></div>
          <div><p style="color:var(--text-muted);font-size:11px;margin-bottom:3px;">Fecha envío</p><p id="mdbrEnvio" style="font-weight:600;"></p></div>
          <div><p style="color:var(--text-muted);font-size:11px;margin-bottom:3px;">Fecha revisión</p><p id="mdbrRevision" style="font-weight:600;"></p></div>
          <div><p style="color:var(--text-muted);font-size:11px;margin-bottom:3px;">Nota</p><p id="mdbrNota" style="font-weight:700;font-size:15px;"></p></div>
          <div><p style="color:var(--text-muted);font-size:11px;margin-bottom:3px;">Instructor</p><p id="mdbrInstructor" style="font-weight:600;"></p></div>
        </div>
        <div id="mdbrObservacionWrap">
          <p style="font-size:12px;font-weight:700;color:var(--text-muted);margin-bottom:8px;text-transform:uppercase;letter-spacing:0.05em;">Observación / Motivo</p>
          <div id="mdbrObservacion" style="background:var(--bg-primary);border-radius:var(--r-sm);padding:14px;font-size:13.5px;line-height:1.7;color:var(--text-main);border-left:3px solid var(--border-color);"></div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-ghost" onclick="closeModal('modalDetalleBitacoraRev')">Cerrar</button>
        <button class="btn btn-primary" id="mdbrReenviarBtn" style="display:none;" onclick="closeModal('modalDetalleBitacoraRev'); navigateTo('view-bitacoras-aprendiz')">
          <i data-lucide="upload"></i> Ir a reenviar
        </button>
      </div>
    </div>
  </div>

</div>

<script>
const bitacorasRevData = [
  {
    id: 1, titulo: 'Bitácora N° 1',
    periodo: '16/03/2026 — 31/03/2026',
    estado: 'aprobada', envio: '02/04/2026', revision: '20/04/2026',
    nota: '4.5 / 5.0', instructor: 'Ing. María Rodríguez',
    observacion: '"Bitácora completa y bien documentada. Excelente detalle de actividades técnicas realizadas. Sigue así."'
  },
  {
    id: 2, titulo: 'Bitácora N° 2',
    periodo: '01/04/2026 — 15/04/2026',
    estado: 'aprobada', envio: '17/04/2026', revision: '05/05/2026',
    nota: '4.8 / 5.0', instructor: 'Ing. María Rodríguez',
    observacion: '"Cumple con todos los requisitos del formato. Se evidencia buen avance en las competencias del programa ADSO."'
  },
  {
    id: 3, titulo: 'Bitácora N° 3',
    periodo: '16/04/2026 — 30/04/2026',
    estado: 'rechazada', envio: '18/05/2026', revision: '22/05/2026',
    nota: '—', instructor: 'Ing. María Rodríguez',
    observacion: '"Las actividades descritas no corresponden con las competencias del programa ADSO. Debe corregir la descripción de las tareas realizadas y ser más específico en los logros técnicos alcanzados. Revisar el formato oficial antes de reenviar."'
  },
  {
    id: 4, titulo: 'Bitácora N° 4',
    periodo: '01/05/2026 — 15/05/2026',
    estado: 'rechazada', envio: '06/06/2026', revision: '10/06/2026',
    nota: '—', instructor: 'Ing. María Rodríguez',
    observacion: '"El documento no sigue la plantilla oficial SENA. Faltan las horas trabajadas, la firma del jefe inmediato y el sello de la empresa. Adicionalmente el archivo entregado está incompleto (solo 2 páginas de las 4 requeridas)."'
  },
  {
    id: 5, titulo: 'Bitácora N° 5',
    periodo: '16/05/2026 — 31/05/2026',
    estado: 'revision', envio: '17/06/2026', revision: 'Pendiente',
    nota: '—', instructor: 'Ing. María Rodríguez',
    observacion: 'La instructora aún no ha emitido respuesta. Tiempo promedio de revisión: 3–5 días hábiles.'
  },
  {
    id: 6, titulo: 'Bitácora N° 6',
    periodo: '01/06/2026 — 15/06/2026',
    estado: 'pendiente', envio: 'No enviada', revision: '—',
    nota: '—', instructor: '—',
    observacion: 'Esta bitácora aún no ha sido enviada. La fecha límite de entrega es el 23/06/2026.'
  }
];

function filtrarBitacorasRev(estado) {
  const items = document.querySelectorAll('.bitacora-rev-item');
  let vis = 0;
  items.forEach(item => {
    const match = estado === 'todas' || item.dataset.estado === estado;
    item.style.display = match ? '' : 'none';
    if (match) vis++;
  });
  document.getElementById('bitacorasRevEmpty').style.display = vis === 0 ? 'flex' : 'none';
  document.querySelectorAll('[id^="filtro"]').forEach(b => b.classList.remove('btn-primary'));
  document.querySelectorAll('[id^="filtro"]').forEach(b => b.classList.add('btn-ghost'));
  const mapId = { todas:'filtroTodas', aprobada:'filtroAprobadas', rechazada:'filtroRechazadas', revision:'filtroRevision', pendiente:'filtroPendiente' };
  const activeBtn = document.getElementById(mapId[estado]);
  if (activeBtn) { activeBtn.classList.remove('btn-ghost'); activeBtn.classList.add('btn-primary'); }
}

function verDetalleBitacoraRev(id) {
  const d = bitacorasRevData.find(b => b.id === id);
  if (!d) return;

  document.getElementById('mdbrTitulo').textContent = 'Detalle — ' + d.titulo;
  document.getElementById('mdbrPeriodo').textContent = d.periodo;
  document.getElementById('mdbrEnvio').textContent = d.envio;
  document.getElementById('mdbrRevision').textContent = d.revision;
  document.getElementById('mdbrNota').textContent = d.nota;
  document.getElementById('mdbrInstructor').textContent = d.instructor;
  document.getElementById('mdbrObservacion').textContent = d.observacion;

  const badgeEl = document.getElementById('mdbrEstadoBadge');
  const badgeMap = {
    aprobada: '<span class="badge badge-success">Aprobada</span>',
    rechazada: '<span class="badge badge-danger">Rechazada</span>',
    revision:  '<span class="badge badge-warning">En Revisión</span>',
    pendiente: '<span class="badge badge-secondary">Sin Enviar</span>'
  };
  badgeEl.innerHTML = badgeMap[d.estado] || '';

  const borderMap = {
    aprobada: 'rgba(16,185,129,0.4)',
    rechazada: 'rgba(239,68,68,0.4)',
    revision: 'rgba(245,158,11,0.4)',
    pendiente: 'var(--border-color)'
  };
  document.getElementById('mdbrObservacion').style.borderLeftColor = borderMap[d.estado] || 'var(--border-color)';

  const reenviarBtn = document.getElementById('mdbrReenviarBtn');
  reenviarBtn.style.display = d.estado === 'rechazada' ? '' : 'none';

  openModal('modalDetalleBitacoraRev');
}
</script>
