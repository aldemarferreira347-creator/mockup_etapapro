<!-- VIEW: NOTIFICACIONES (HU-23) -->
<div class="view-content" id="view-notificaciones">

  <div class="welcome-card-header">
    <div style="display:flex;align-items:center;gap:14px;">
      <div class="kpi-icon-wrapper" style="background:rgba(255,255,255,0.15);color:#fff;font-size:24px;">
        <i data-lucide="bell"></i>
      </div>
      <div>
        <h1>Centro de Notificaciones</h1>
        <p>Tienes <strong id="unreadCountBanner">3 notificaciones sin leer</strong> de tu proceso de etapa productiva.</p>
      </div>
    </div>
  </div>

  <!-- Breadcrumbs -->
  <ul class="breadcrumbs">
    <li><a href="#" onclick="navigateTo(getDashboardView())">Inicio</a></li>
    <li>Notificaciones</li>
  </ul>

  <!-- Toolbar -->
  <div style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:12px;margin-bottom:16px;">
    <span id="notifCountLabel" style="font-size:13px;color:var(--text-muted);">Mostrando 8 notificaciones · 3 sin leer</span>
    <button class="btn btn-ghost btn-sm" onclick="markAllRead()">
      <i data-lucide="check-check"></i> Marcar todas como leídas
    </button>
  </div>

  <!-- Filtros -->
  <div style="display:flex;gap:8px;flex-wrap:wrap;margin-bottom:24px;">
    <button class="btn btn-primary btn-sm notif-filter-btn" onclick="filterNotif(this,'all')" data-filter="all">Todas</button>
    <button class="btn btn-ghost btn-sm notif-filter-btn" onclick="filterNotif(this,'unread')" data-filter="unread">Sin leer (3)</button>
    <button class="btn btn-ghost btn-sm notif-filter-btn" onclick="filterNotif(this,'success')" data-filter="success">Aprobaciones</button>
    <button class="btn btn-ghost btn-sm notif-filter-btn" onclick="filterNotif(this,'warning')" data-filter="warning">Advertencias</button>
    <button class="btn btn-ghost btn-sm notif-filter-btn" onclick="filterNotif(this,'info')" data-filter="info">Informativas</button>
  </div>

  <!-- Lista de notificaciones -->
  <div id="notifList" style="display:flex;flex-direction:column;gap:8px;">

    <p class="notif-group-date">Hoy — Sábado, 19 de Junio 2026</p>

    <!-- Item 1 -->
    <div class="notif-item unread" data-type="success" onclick="markRead(this)">
      <div class="notif-icon green"><i data-lucide="check-circle-2"></i></div>
      <div style="flex:1;">
        <p style="font-size:13.5px;margin-bottom:4px;line-height:1.5;">
          Tu <strong>Bitácora N° 4</strong> fue <strong>aprobada</strong> por la instructora Ing. María Rodríguez. ¡Excelente trabajo!
        </p>
        <span style="font-size:11px;color:var(--text-muted);display:flex;align-items:center;gap:4px;">
          <i data-lucide="clock" style="width:12px;"></i> Hace 30 minutos
        </span>
      </div>
      <div class="notif-dot"></div>
      <div style="display:flex;gap:4px;flex-shrink:0;">
        <button class="btn btn-ghost btn-sm btn-icon" title="Marcar como leída" onclick="event.stopPropagation();markRead(this.closest('.notif-item'))"><i data-lucide="check" style="width:13px;"></i></button>
        <button class="btn btn-ghost btn-sm btn-icon" title="Eliminar" onclick="event.stopPropagation();deleteNotif(this)"><i data-lucide="x" style="width:13px;"></i></button>
      </div>
    </div>

    <!-- Item 2 -->
    <div class="notif-item unread" data-type="warning" onclick="markRead(this)">
      <div class="notif-icon amber"><i data-lucide="file-warning"></i></div>
      <div style="flex:1;">
        <p style="font-size:13.5px;margin-bottom:4px;line-height:1.5;">
          Tu <strong>Bitácora N° 5</strong> tiene vencimiento en <strong>3 días</strong> (22 de Junio). Realiza tu entrega antes de la fecha límite.
        </p>
        <span style="font-size:11px;color:var(--text-muted);display:flex;align-items:center;gap:4px;">
          <i data-lucide="clock" style="width:12px;"></i> Hace 2 horas
        </span>
      </div>
      <div class="notif-dot"></div>
      <div style="display:flex;gap:4px;flex-shrink:0;">
        <button class="btn btn-ghost btn-sm btn-icon" onclick="event.stopPropagation();markRead(this.closest('.notif-item'))"><i data-lucide="check" style="width:13px;"></i></button>
        <button class="btn btn-ghost btn-sm btn-icon" onclick="event.stopPropagation();deleteNotif(this)"><i data-lucide="x" style="width:13px;"></i></button>
      </div>
    </div>

    <!-- Item 3 -->
    <div class="notif-item unread" data-type="warning" onclick="markRead(this)">
      <div class="notif-icon red"><i data-lucide="alert-circle"></i></div>
      <div style="flex:1;">
        <p style="font-size:13.5px;margin-bottom:4px;line-height:1.5;">
          El <strong>Aval de la Empresa</strong> en tu carpeta digital está <strong>próximo a vencer</strong>. Actualiza el documento para evitar contratiempos.
        </p>
        <span style="font-size:11px;color:var(--text-muted);display:flex;align-items:center;gap:4px;">
          <i data-lucide="clock" style="width:12px;"></i> Hace 4 horas
        </span>
      </div>
      <div class="notif-dot"></div>
      <div style="display:flex;gap:4px;flex-shrink:0;">
        <button class="btn btn-ghost btn-sm btn-icon" onclick="event.stopPropagation();markRead(this.closest('.notif-item'))"><i data-lucide="check" style="width:13px;"></i></button>
        <button class="btn btn-ghost btn-sm btn-icon" onclick="event.stopPropagation();deleteNotif(this)"><i data-lucide="x" style="width:13px;"></i></button>
      </div>
    </div>

    <p class="notif-group-date">Ayer — Viernes, 18 de Junio 2026</p>

    <!-- Item 4 -->
    <div class="notif-item" data-type="info">
      <div class="notif-icon blue"><i data-lucide="calendar-check"></i></div>
      <div style="flex:1;">
        <p style="font-size:13.5px;margin-bottom:4px;line-height:1.5;">
          Tu próximo <strong>seguimiento presencial</strong> está programado para el <strong>Jueves 26 de Junio</strong> a las 10:00 AM.
        </p>
        <span style="font-size:11px;color:var(--text-muted);display:flex;align-items:center;gap:4px;">
          <i data-lucide="clock" style="width:12px;"></i> Ayer, 03:00 PM
        </span>
      </div>
      <div style="display:flex;gap:4px;flex-shrink:0;">
        <button class="btn btn-ghost btn-sm btn-icon" onclick="event.stopPropagation();deleteNotif(this)"><i data-lucide="x" style="width:13px;"></i></button>
      </div>
    </div>

    <!-- Item 5 -->
    <div class="notif-item" data-type="success">
      <div class="notif-icon green"><i data-lucide="shield-check"></i></div>
      <div style="flex:1;">
        <p style="font-size:13.5px;margin-bottom:4px;line-height:1.5;">
          Tu <strong>Contrato de Aprendizaje</strong> fue verificado y aprobado por coordinación académica. Tu proceso está activo.
        </p>
        <span style="font-size:11px;color:var(--text-muted);display:flex;align-items:center;gap:4px;">
          <i data-lucide="clock" style="width:12px;"></i> Ayer, 10:20 AM
        </span>
      </div>
      <div style="display:flex;gap:4px;flex-shrink:0;">
        <button class="btn btn-ghost btn-sm btn-icon" onclick="event.stopPropagation();deleteNotif(this)"><i data-lucide="x" style="width:13px;"></i></button>
      </div>
    </div>

    <p class="notif-group-date">Esta semana</p>

    <!-- Item 6 -->
    <div class="notif-item" data-type="info">
      <div class="notif-icon purple"><i data-lucide="bot"></i></div>
      <div style="flex:1;">
        <p style="font-size:13.5px;margin-bottom:4px;line-height:1.5;">
          El <strong>Asistente Virtual EtapaBot</strong> tiene nuevas respuestas sobre formatos de bitácoras. Consúltalo para resolver tus dudas.
        </p>
        <span style="font-size:11px;color:var(--text-muted);display:flex;align-items:center;gap:4px;">
          <i data-lucide="clock" style="width:12px;"></i> Miércoles, 17 de Jun, 11:00 AM
        </span>
      </div>
      <div style="display:flex;gap:4px;flex-shrink:0;">
        <button class="btn btn-ghost btn-sm btn-icon" onclick="event.stopPropagation();deleteNotif(this)"><i data-lucide="x" style="width:13px;"></i></button>
      </div>
    </div>

    <!-- Item 7 -->
    <div class="notif-item" data-type="success">
      <div class="notif-icon green"><i data-lucide="check-circle-2"></i></div>
      <div style="flex:1;">
        <p style="font-size:13.5px;margin-bottom:4px;line-height:1.5;">
          Tu <strong>Bitácora N° 3</strong> fue aprobada con calificación <strong>Excelente</strong> por la instructora. Sigue así.
        </p>
        <span style="font-size:11px;color:var(--text-muted);display:flex;align-items:center;gap:4px;">
          <i data-lucide="clock" style="width:12px;"></i> Martes, 16 de Jun, 04:15 PM
        </span>
      </div>
      <div style="display:flex;gap:4px;flex-shrink:0;">
        <button class="btn btn-ghost btn-sm btn-icon" onclick="event.stopPropagation();deleteNotif(this)"><i data-lucide="x" style="width:13px;"></i></button>
      </div>
    </div>

    <!-- Item 8 -->
    <div class="notif-item" data-type="info">
      <div class="notif-icon blue"><i data-lucide="info"></i></div>
      <div style="flex:1;">
        <p style="font-size:13.5px;margin-bottom:4px;line-height:1.5;">
          El sistema EtapaPro fue actualizado a la versión 1.2. Revisa las <strong>nuevas funcionalidades</strong> disponibles en el panel de inicio.
        </p>
        <span style="font-size:11px;color:var(--text-muted);display:flex;align-items:center;gap:4px;">
          <i data-lucide="clock" style="width:12px;"></i> Lunes, 15 de Jun, 09:00 AM
        </span>
      </div>
      <div style="display:flex;gap:4px;flex-shrink:0;">
        <button class="btn btn-ghost btn-sm btn-icon" onclick="event.stopPropagation();deleteNotif(this)"><i data-lucide="x" style="width:13px;"></i></button>
      </div>
    </div>

  </div>

  <!-- Estado vacío -->
  <div id="notifEmpty" class="empty-state" style="display:none;">
    <i data-lucide="bell-off"></i>
    <h3>Sin notificaciones</h3>
    <p>No hay notificaciones que coincidan con el filtro seleccionado.</p>
    <button class="btn btn-primary btn-sm" onclick="filterNotif(document.querySelector('[data-filter=all]'),'all')">Ver todas</button>
  </div>

</div>

<script>
function updateNotifCount() {
  const unread = document.querySelectorAll('#notifList .notif-item.unread').length;
  const total  = document.querySelectorAll('#notifList .notif-item').length;
  document.getElementById('notifCountLabel').textContent =
    'Mostrando ' + total + ' notificaciones · ' + unread + ' sin leer';
  const banner = document.getElementById('unreadCountBanner');
  if (banner) banner.textContent = unread + ' notificacion' + (unread === 1 ? '' : 'es') + ' sin leer';
}

function markRead(item) {
  if (!item) return;
  item.classList.remove('unread');
  const dot = item.querySelector('.notif-dot');
  if (dot) dot.remove();
  updateNotifCount();
}

function markAllRead() {
  document.querySelectorAll('#notifList .notif-item.unread').forEach(item => markRead(item));
  showToast('Todas las notificaciones marcadas como leídas.', 'success');
}

function deleteNotif(btn) {
  const item = btn.closest('.notif-item');
  if (item) {
    item.style.animation = 'fadeOut .25s forwards';
    setTimeout(() => {
      item.remove();
      updateNotifCount();
      checkEmpty();
    }, 250);
  }
}

function checkEmpty() {
  const visible = document.querySelectorAll('#notifList .notif-item:not([style*="none"])').length;
  document.getElementById('notifEmpty').style.display = visible === 0 ? 'flex' : 'none';
}

function filterNotif(btn, type) {
  // Actualizar botones
  document.querySelectorAll('.notif-filter-btn').forEach(b => {
    b.classList.remove('btn-primary');
    b.classList.add('btn-ghost');
  });
  btn.classList.remove('btn-ghost');
  btn.classList.add('btn-primary');

  // Filtrar items (ocultar separadores también cuando sea necesario)
  const items = document.querySelectorAll('#notifList .notif-item');
  let vis = 0;
  items.forEach(item => {
    let show = false;
    if (type === 'all')    show = true;
    else if (type === 'unread') show = item.classList.contains('unread');
    else show = item.dataset.type === type;
    item.style.display = show ? '' : 'none';
    if (show) vis++;
  });
  document.getElementById('notifEmpty').style.display = vis === 0 ? 'flex' : 'none';
}

// Animación de salida
const style = document.createElement('style');
style.textContent = '@keyframes fadeOut{to{opacity:0;transform:translateX(20px)}}';
document.head.appendChild(style);
</script>
