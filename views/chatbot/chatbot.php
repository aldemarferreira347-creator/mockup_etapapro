<!-- VIEW: CHATBOT / ASISTENTE VIRTUAL (HU-26) -->
<div class="view-content" id="view-chatbot">

  <div class="welcome-card-header">
    <div style="display:flex;align-items:center;gap:14px;">
      <div class="kpi-icon-wrapper" style="background:rgba(255,255,255,0.15);color:#fff;font-size:24px;">
        <i data-lucide="bot"></i>
      </div>
      <div>
        <h1>Asistente Virtual EtapaBot</h1>
        <p>Resuelve tus dudas sobre bitácoras, seguimientos, documentos y proceso de etapa productiva SENA.</p>
      </div>
    </div>
  </div>

  <!-- Breadcrumbs -->
  <ul class="breadcrumbs">
    <li><a href="#" onclick="navigateTo(getDashboardView())">Inicio</a></li>
    <li>Asistente Virtual</li>
  </ul>

  <!-- Chat layout -->
  <div class="chat-layout">

    <!-- SIDEBAR: Historial de conversaciones -->
    <div class="chat-sidebar">
      <div class="chat-sidebar-head">
        <span style="font-size:13px;font-weight:700;">Conversaciones</span>
        <button class="btn btn-primary btn-sm btn-icon" title="Nueva conversación" onclick="newChatConversation()" style="border-radius:50%;">
          <i data-lucide="plus" style="width:14px;"></i>
        </button>
      </div>

      <div class="chat-sidebar-search">
        <div class="search-box">
          <i data-lucide="search" style="width:14px;height:14px;color:var(--text-muted);flex-shrink:0;"></i>
          <input type="search" placeholder="Buscar conversación...">
        </div>
      </div>

      <div class="chat-convos">
        <div class="chat-convo active">
          <div class="chat-convo-icon"><i data-lucide="bot" style="width:16px;"></i></div>
          <div class="chat-convo-body">
            <div class="chat-convo-name">Bitácoras y formatos</div>
            <div class="chat-convo-preview">¿Cuándo debo entregar mi bitácora?</div>
          </div>
          <span class="chat-convo-time">Ahora</span>
        </div>
        <div class="chat-convo" onclick="showToast('Cargando conversación...','info')">
          <div class="chat-convo-icon"><i data-lucide="bot" style="width:16px;"></i></div>
          <div class="chat-convo-body">
            <div class="chat-convo-name">Contrato de aprendizaje</div>
            <div class="chat-convo-preview">¿Qué documentos necesito?</div>
          </div>
          <span class="chat-convo-time">Ayer</span>
        </div>
        <div class="chat-convo" onclick="showToast('Cargando conversación...','info')">
          <div class="chat-convo-icon"><i data-lucide="bot" style="width:16px;"></i></div>
          <div class="chat-convo-body">
            <div class="chat-convo-name">Seguimientos</div>
            <div class="chat-convo-preview">¿Cuántos seguimientos necesito?</div>
          </div>
          <span class="chat-convo-time">Lun</span>
        </div>
        <div class="chat-convo" onclick="showToast('Cargando conversación...','info')">
          <div class="chat-convo-icon"><i data-lucide="bot" style="width:16px;"></i></div>
          <div class="chat-convo-body">
            <div class="chat-convo-name">Subsidio SENA</div>
            <div class="chat-convo-preview">¿Cuándo se paga el apoyo?</div>
          </div>
          <span class="chat-convo-time">Sáb</span>
        </div>
      </div>
    </div>

    <!-- VENTANA DE CHAT -->
    <div class="chat-window">

      <!-- Header del chat -->
      <div class="chat-header">
        <div class="chat-bot-avatar"><i data-lucide="bot" style="width:20px;"></i></div>
        <div style="flex:1;">
          <div class="chat-bot-name">EtapaBot · Asistente SENA</div>
          <div class="chat-bot-status">
            <span class="chat-status-dot"></span>
            En línea · Responde en segundos
          </div>
        </div>
        <div class="chat-header-actions">
          <button class="chat-icon-btn" title="Limpiar chat" onclick="openModal('modalLimpiarChat')">
            <i data-lucide="trash-2" style="width:15px;"></i>
          </button>
          <button class="chat-icon-btn" title="Exportar conversación" onclick="exportarChat()">
            <i data-lucide="download" style="width:15px;"></i>
          </button>
        </div>
      </div>

      <!-- Mensajes -->
      <div class="chat-messages-area" id="chatbotMessages" role="log" aria-live="polite">

        <div class="chat-date-divider">Hoy, 19 de Junio 2026</div>

        <!-- Saludo bot -->
        <div class="chat-msg">
          <div class="chat-msg-av bot"><i data-lucide="bot" style="width:15px;"></i></div>
          <div class="chat-bubble-wrap">
            <div class="chat-bubble bot">
              ¡Hola Carlos! 👋 Soy <strong>EtapaBot</strong>, tu asistente virtual del sistema EtapaPro SENA.<br><br>
              Puedo ayudarte con información sobre <strong>bitácoras, seguimientos, contratos de aprendizaje, documentos requeridos</strong> y más. ¿En qué te puedo ayudar hoy?
            </div>
            <span class="chat-bubble-time">09:00 AM</span>
          </div>
        </div>

        <!-- Usuario -->
        <div class="chat-msg user">
          <div class="chat-msg-av user">CG</div>
          <div class="chat-bubble-wrap">
            <div class="chat-bubble user">¿Cuándo debo entregar mi bitácora quincenal?</div>
            <span class="chat-bubble-time">09:02 AM</span>
          </div>
        </div>

        <!-- Bot respuesta -->
        <div class="chat-msg">
          <div class="chat-msg-av bot"><i data-lucide="bot" style="width:15px;"></i></div>
          <div class="chat-bubble-wrap">
            <div class="chat-bubble bot">
              Las <strong>bitácoras quincenales</strong> deben entregarse dentro de los primeros <strong>3 días hábiles</strong> después de finalizar cada quincena.<br><br>
              Para tu caso, deberías entregar la <strong>Bitácora N° 5</strong> (período 16–30 de Mayo) cuanto antes desde la sección <em>"Mis Bitácoras"</em>. ¿Necesitas más información?
            </div>
            <span class="chat-bubble-time">09:02 AM</span>
          </div>
        </div>

        <!-- Indicador typing (oculto por defecto) -->
        <div class="chat-msg" id="chatTypingIndicator" style="display:none;">
          <div class="chat-msg-av bot"><i data-lucide="bot" style="width:15px;"></i></div>
          <div class="chat-typing">
            <span></span><span></span><span></span>
          </div>
        </div>

      </div>

      <!-- Respuestas rápidas -->
      <div class="chat-quick-replies">
        <span class="chat-quick-label">Frecuentes:</span>
        <button class="btn btn-ghost btn-sm" onclick="sendQuickChatMsg('¿Cuántos seguimientos necesito completar?')">¿Cuántos seguimientos?</button>
        <button class="btn btn-ghost btn-sm" onclick="sendQuickChatMsg('¿Qué documentos debo subir a la carpeta digital?')">Documentos</button>
        <button class="btn btn-ghost btn-sm" onclick="sendQuickChatMsg('¿Cuándo se paga el apoyo de sostenimiento?')">Apoyo sostenimiento</button>
        <button class="btn btn-ghost btn-sm" onclick="sendQuickChatMsg('¿Cómo reporto una novedad en la empresa?')">Reportar novedad</button>
      </div>

      <!-- Input de mensaje -->
      <div class="chat-input-area">
        <div class="chat-input-row">
          <button class="chat-tool-btn" title="Adjuntar archivo">
            <i data-lucide="paperclip" style="width:15px;"></i>
          </button>
          <textarea class="chat-textarea" id="chatbotInput"
            placeholder="Escribe tu pregunta aquí…"
            rows="1"
            aria-label="Escribir mensaje"
            onkeydown="handleChatKey(event)"
            oninput="autoresizeChatInput(this)"></textarea>
          <button class="chat-send-btn" title="Enviar" onclick="sendChatbotMessage()">
            <i data-lucide="send" style="width:15px;"></i>
          </button>
        </div>
      </div>

    </div>
  </div>

  <!-- MODAL: LIMPIAR CHAT -->
  <div class="modal-overlay" id="modalLimpiarChat">
    <div class="modal-container" style="max-width:400px;">
      <div class="modal-header">
        <h3><i data-lucide="trash-2" style="width:18px;height:18px;margin-right:8px;vertical-align:middle;color:var(--status-error);"></i>Limpiar conversación</h3>
        <button class="modal-close" onclick="closeModal('modalLimpiarChat')"><i data-lucide="x"></i></button>
      </div>
      <div class="modal-body">
        <p style="font-size:13.5px;color:var(--text-main);line-height:1.6;">¿Deseas eliminar todos los mensajes de esta conversación? Esta acción no se puede deshacer.</p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-ghost" onclick="closeModal('modalLimpiarChat')">Cancelar</button>
        <button class="btn btn-danger" onclick="limpiarChatConfirmado()"><i data-lucide="trash-2"></i> Sí, limpiar</button>
      </div>
    </div>
  </div>

</div>

<script>
// ─── RESPUESTAS DEL BOT ───────────────────────────────────────────────────────
const chatBotResponses = {
  default: 'Entendido. Te recomiendo consultar con tu instructor asignado o revisar el reglamento de etapa productiva del SENA para más información precisa sobre este tema.',
  seguimiento: 'Para el proceso de etapa productiva en ADSO necesitas completar <strong>3 seguimientos</strong> obligatorios con tu instructor SENA: el primero al inicio, el parcial a los 2 meses y el final. Cada uno debe ser registrado en el sistema.',
  documentos: 'Los documentos obligatorios en tu carpeta digital son:<br>1. Contrato de Aprendizaje<br>2. Aval de la empresa<br>3. ARL (seguro)<br>4. Bitácoras quincenales<br>5. Acta de inicio<br>6. Evaluaciones del instructor.',
  bitacora: 'Las bitácoras quincenales deben entregarse en los primeros <strong>3 días hábiles</strong> tras finalizar cada quincena. Tienes hasta 6 bitácoras durante tu etapa productiva. Se suben desde el módulo <em>"Mis Bitácoras"</em>.',
  apoyo: 'El apoyo de sostenimiento SENA se paga de forma <strong>mensual</strong> mediante transferencia bancaria, equivalente al salario mínimo legal vigente (SMLV). Si hay retrasos, comunícate con la coordinación de tu regional.',
  novedad: 'Para reportar una novedad (cambio de empresa, jefe, sede, horario, etc.):<br>1. Ingresa a tu perfil o carpeta digital<br>2. Busca la sección "Reportar Novedad"<br>3. Describe la situación<br>4. Espera aprobación del instructor.'
};

function getBotAnswer(text) {
  const t = text.toLowerCase();
  if (t.includes('seguimiento') || t.includes('visita'))                            return chatBotResponses.seguimiento;
  if (t.includes('document') || t.includes('carpeta') || t.includes('arl'))        return chatBotResponses.documentos;
  if (t.includes('bitacora') || t.includes('bitácora') || t.includes('entregar'))  return chatBotResponses.bitacora;
  if (t.includes('apoyo') || t.includes('sostenimiento') || t.includes('pago'))    return chatBotResponses.apoyo;
  if (t.includes('novedad') || t.includes('reporte') || t.includes('empresa'))     return chatBotResponses.novedad;
  return chatBotResponses.default;
}

function sendChatbotMessage() {
  const input = document.getElementById('chatbotInput');
  const text  = input.value.trim();
  if (!text) return;

  appendChatMsg('user', text);
  input.value = '';
  input.style.height = 'auto';

  // Mostrar typing
  const typing = document.getElementById('chatTypingIndicator');
  typing.style.display = 'flex';
  scrollChatBottom();

  setTimeout(() => {
    typing.style.display = 'none';
    appendChatMsg('bot', getBotAnswer(text));
  }, 1100 + Math.random() * 600);
}

function sendQuickChatMsg(text) {
  document.getElementById('chatbotInput').value = text;
  sendChatbotMessage();
}

function appendChatMsg(role, html) {
  const container = document.getElementById('chatbotMessages');
  const typing    = document.getElementById('chatTypingIndicator');
  const time = new Date().toLocaleTimeString('es-CO', { hour: '2-digit', minute: '2-digit' });
  const wrap = document.createElement('div');
  wrap.className = 'chat-msg' + (role === 'user' ? ' user' : '');
  if (role === 'bot') {
    wrap.innerHTML = `
      <div class="chat-msg-av bot"><i data-lucide="bot" style="width:15px;"></i></div>
      <div class="chat-bubble-wrap">
        <div class="chat-bubble bot">${html}</div>
        <span class="chat-bubble-time">${time}</span>
      </div>`;
  } else {
    wrap.innerHTML = `
      <div class="chat-msg-av user">CG</div>
      <div class="chat-bubble-wrap">
        <div class="chat-bubble user">${html}</div>
        <span class="chat-bubble-time">${time}</span>
      </div>`;
  }
  container.insertBefore(wrap, typing);
  if (window.lucide) window.lucide.createIcons();
  scrollChatBottom();
}

function scrollChatBottom() {
  const c = document.getElementById('chatbotMessages');
  c.scrollTop = c.scrollHeight;
}

function handleChatKey(e) {
  if (e.key === 'Enter' && !e.shiftKey) { e.preventDefault(); sendChatbotMessage(); }
}

function autoresizeChatInput(el) {
  el.style.height = 'auto';
  el.style.height = Math.min(el.scrollHeight, 100) + 'px';
}

function limpiarChatConfirmado() {
  const container = document.getElementById('chatbotMessages');
  const typing    = document.getElementById('chatTypingIndicator');
  // Eliminar todos los hijos excepto el indicador de typing
  while (container.firstChild && container.firstChild !== typing) {
    container.removeChild(container.firstChild);
  }
  closeModal('modalLimpiarChat');
  appendChatMsg('bot', '¡Hola de nuevo! 👋 Conversación limpiada. ¿En qué te puedo ayudar?');
  showToast('Conversación eliminada.', 'success');
}

function newChatConversation() {
  limpiarChatConfirmado();
  showToast('Nueva conversación iniciada.', 'info');
}

function exportarChat() {
  const msgs = document.querySelectorAll('#chatbotMessages .chat-bubble');
  let txt = 'EtapaBot — Conversación exportada\n' + '='.repeat(40) + '\n\n';
  msgs.forEach(b => {
    const role = b.classList.contains('user') ? 'Tú' : 'EtapaBot';
    txt += role + ': ' + b.innerText + '\n\n';
  });
  const blob = new Blob([txt], { type: 'text/plain' });
  const url  = URL.createObjectURL(blob);
  const a    = document.createElement('a');
  a.href = url; a.download = 'EtapaBot_Conversacion.txt';
  a.click();
  URL.revokeObjectURL(url);
  showToast('Conversación exportada correctamente.', 'success');
}

scrollChatBottom();
</script>
