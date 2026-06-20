<!DOCTYPE html>
<html lang="es" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EtapaPro SENA - Sistema de Seguimiento</title>
  <meta name="description" content="Sistema de Gestión y Acompañamiento Documental de Etapa Productiva - SENA Cauca">
  
  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>
  
  <!-- Consolidated Stylesheet -->
  <link rel="stylesheet" href="/public/css/style.css">
  <!-- Additions & Component Extensions -->
  <link rel="stylesheet" href="/public/css/additions.css">
</head>
<body>
  <div class="app-container">
    
    <!-- Navigation Sidebar will be included here -->
    <?php if (file_exists(__DIR__ . '/sidebar.php')) { include __DIR__ . '/sidebar.php'; } ?>
    
    <div class="main-wrapper">
      
      <!-- TOP HEADER NAVBAR -->
      <header class="top-header">
        <div class="header-search">
          <i data-lucide="search"></i>
          <input type="search" placeholder="Buscar aprendiz, ficha, novedad..." aria-label="Buscador global">
        </div>
        
        <div class="header-actions">
          <!-- Role selector simulator -->
          <div class="role-selector-container">
            <label for="roleSelect">Simulador:</label>
            <select id="roleSelect" class="role-select">
              <option value="aprendiz" selected>Aprendiz</option>
              <option value="instructor">Instructor</option>
              <option value="coordinador">Coordinador</option>
            </select>
          </div>
          
          <!-- Theme toggle -->
          <button class="theme-toggle" id="themeToggle" title="Cambiar tema (Claro/Oscuro)">
            <i data-lucide="moon"></i>
          </button>
          
          <!-- Notification bell -->
          <button class="notifications-btn" id="notifBtn" aria-label="Ver notificaciones">
            <i data-lucide="bell"></i>
            <span class="notif-badge-dot"></span>
          </button>
          
          <!-- User info -->
          <div class="sidebar-user">
            <div class="user-avatar">CG</div>
            <div class="user-info">
              <h4>Carlos Guerrero</h4>
              <span>Aprendiz · ADSO</span>
            </div>
          </div>
        </div>

        <!-- NOTIFICATIONS DROPDOWN PANEL (HU-23) -->
        <div class="chatbot-window" id="notifPanel" style="height: 380px; bottom: auto; top: 80px; right: 32px;">
          <div class="chatbot-header">
            <div class="chatbot-avatar"><i data-lucide="bell"></i></div>
            <div class="chatbot-info">
              <h4>Centro de Notificaciones</h4>
              <span>Novedades del proceso</span>
            </div>
            <button class="chatbot-close" onclick="document.getElementById('notifPanel').classList.remove('show')">
              <i data-lucide="x"></i>
            </button>
          </div>
          <div class="chatbot-messages" style="background: var(--bg-card); gap: 8px;">
            <div class="alert alert-success db-notif-item--unread" style="margin: 0; padding: 10px;">
              <i data-lucide="check-circle"></i>
              <div>
                <div class="alert-title">Bitácora N° 4 Aprobada</div>
                <div style="font-size: 11px;">Calificada por instructora Ing. Rodríguez. Hace 10 min.</div>
              </div>
            </div>
            <div class="alert alert-warning db-notif-item--unread" style="margin: 0; padding: 10px;">
              <i data-lucide="alert-triangle"></i>
              <div>
                <div class="alert-title">Vencimiento Próximo</div>
                <div style="font-size: 11px;">Bitácora N° 5 vence en 3 días (10 de Junio). Hace 2h.</div>
              </div>
            </div>
            <div class="alert alert-danger db-notif-item--unread" style="margin: 0; padding: 10px;">
              <i data-lucide="alert-circle"></i>
              <div>
                <div class="alert-title">Documento Pendiente</div>
                <div style="font-size: 11px;">El Aval de la Empresa requiere actualización. Hace 4h.</div>
              </div>
            </div>
          </div>
          <div style="padding: 10px; text-align: center; border-top: 1px solid var(--border-color); background: var(--bg-primary);">
            <button class="btn btn-primary btn-sm" style="width: 100%;" onclick="markAllNotificationsRead()">
              <i data-lucide="check-check"></i> Marcar todas como leídas
            </button>
          </div>
        </div>
      </header>
