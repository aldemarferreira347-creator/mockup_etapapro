<?php
/**
 * EtapaPro SENA - Consolidated Frontend Entry Point
 * 
 * Este archivo actúa como contenedor unificado de todas las vistas del frontend
 * para poder simular y verificar la navegación dinámica, modo oscuro, chatbots y roles
 * antes de la integración definitiva en el controlador PHP MVC nativo.
 */

// 1. Cargar la cabecera común y la barra de navegación lateral
include __DIR__ . '/views/layouts/header.php';

// 2. Incluir todas las vistas modulares del sistema (el enrutador JS las gestiona con .active)
include __DIR__ . '/views/auth/login.php';
include __DIR__ . '/views/auth/recover.php';
include __DIR__ . '/views/auth/reset.php';

include __DIR__ . '/views/usuarios/perfil.php';
include __DIR__ . '/views/usuarios/gestion.php';

include __DIR__ . '/views/aprendices/dashboard.php';
include __DIR__ . '/views/aprendices/bitacoras.php';
include __DIR__ . '/views/aprendices/carpeta.php';

include __DIR__ . '/views/instructores/dashboard.php';
include __DIR__ . '/views/instructores/agenda.php';
include __DIR__ . '/views/instructores/evaluar.php';
include __DIR__ . '/views/instructores/revision.php';

include __DIR__ . '/views/coordinador/dashboard.php';
include __DIR__ . '/views/coordinador/solicitudes.php';
include __DIR__ . '/views/coordinador/auditoria.php';

include __DIR__ . '/views/reportes/reportes.php';

// 4. Vistas nuevas: notificaciones, chatbot, seguimientos, empresas, registro aprendiz
include __DIR__ . '/views/notificaciones/notificaciones.php';
include __DIR__ . '/views/chatbot/chatbot.php';
include __DIR__ . '/views/aprendices/seguimientos.php';
include __DIR__ . '/views/aprendices/registro.php';
include __DIR__ . '/views/empresas/gestion.php';

// 3. Cargar el pie de página, chatbot y scripts unificados
include __DIR__ . '/views/layouts/footer.php';
?>
