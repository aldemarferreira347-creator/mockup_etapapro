<!-- MAIN NAVIGATION SIDEBAR -->
<aside class="sidebar">
  <div class="sidebar-header">
    <div class="logo-icon">
      <i data-lucide="graduation-cap"></i>
    </div>
    <div class="logo-text">
      <h2>EtapaPro</h2>
      <span>SENA · Regional Cauca</span>
    </div>
  </div>
  
  <ul class="sidebar-menu">
    <li class="menu-title">Principal</li>
    
    <!-- Aprendiz Section -->
    <li class="menu-item active" data-view="view-dashboard-aprendiz" data-roles="aprendiz">
      <a href="#"><i data-lucide="layout-dashboard"></i><span>Inicio</span></a>
    </li>
    <li class="menu-item" data-view="view-bitacoras-aprendiz" data-roles="aprendiz">
      <a href="#"><i data-lucide="file-check-2"></i><span>Mis Bitácoras</span><span class="menu-badge">4/6</span></a>
    </li>
    <li class="menu-item" data-view="view-carpeta-aprendiz" data-roles="aprendiz">
      <a href="#"><i data-lucide="folder-open"></i><span>Carpeta Digital</span></a>
    </li>
    <li class="menu-item" data-view="view-seguimientos-aprendiz" data-roles="aprendiz">
      <a href="#"><i data-lucide="calendar-check"></i><span>Seguimientos</span></a>
    </li>
    
    <!-- Instructor Section -->
    <li class="menu-item" data-view="view-dashboard-instructor" data-roles="instructor">
      <a href="#"><i data-lucide="users"></i><span>Mis Aprendices</span></a>
    </li>
    <li class="menu-item" data-view="view-agenda-instructor" data-roles="instructor">
      <a href="#"><i data-lucide="calendar"></i><span>Agenda y Citas</span></a>
    </li>
    <li class="menu-item" data-view="view-revision-instructor" data-roles="instructor">
      <a href="#"><i data-lucide="file-signature"></i><span>Revisiones</span><span class="menu-badge">3</span></a>
    </li>

    <!-- Coordinador Section -->
    <li class="menu-item" data-view="view-dashboard-coordinador" data-roles="coordinador">
      <a href="#"><i data-lucide="bar-chart-3"></i><span>Inicio Coordinación</span></a>
    </li>
    <li class="menu-item" data-view="view-solicitudes-coordinador" data-roles="coordinador">
      <a href="#"><i data-lucide="user-check"></i><span>Asignaciones</span></a>
    </li>
    <li class="menu-item" data-view="view-gestion-usuarios" data-roles="coordinador">
      <a href="#"><i data-lucide="shield-check"></i><span>Usuarios y Roles</span></a>
    </li>
    <li class="menu-item" data-view="view-reportes" data-roles="coordinador">
      <a href="#"><i data-lucide="trending-up"></i><span>Reportes</span></a>
    </li>
    <li class="menu-item" data-view="view-auditoria" data-roles="coordinador">
      <a href="#"><i data-lucide="history"></i><span>Auditoría</span></a>
    </li>

    <!-- Common Settings -->
    <li class="menu-title">Cuenta</li>
    <li class="menu-item" data-view="view-perfil-usuario">
      <a href="#"><i data-lucide="user-circle"></i><span>Mi Perfil</span></a>
    </li>
    <li class="menu-item" data-view="view-notificaciones" data-roles="aprendiz,instructor,coordinador">
      <a href="#"><i data-lucide="bell"></i><span>Notificaciones</span><span class="menu-badge">3</span></a>
    </li>
    <li class="menu-item" data-view="view-chatbot" data-roles="aprendiz,instructor,coordinador">
      <a href="#"><i data-lucide="bot"></i><span>Asistente Virtual</span></a>
    </li>
    <li class="menu-item" data-view="view-gestion-empresas" data-roles="coordinador">
      <a href="#"><i data-lucide="building-2"></i><span>Empresas</span></a>
    </li>
    <li class="menu-item" data-view="view-registro-aprendiz" data-roles="coordinador">
      <a href="#"><i data-lucide="user-plus"></i><span>Registrar Aprendiz</span></a>
    </li>
  </ul>
  
  <div class="sidebar-footer">
    <div class="sidebar-user">
      <div class="user-avatar">CG</div>
      <div class="user-info">
        <h4>Carlos Guerrero</h4>
        <span>Aprendiz ADSO</span>
      </div>
    </div>
    <button class="logout-btn" onclick="openModal('modalLogoutConfirm')" aria-label="Cerrar sesión">
      <i data-lucide="log-out"></i>
      <span>Cerrar sesión</span>
    </button>
  </div>
</aside>
