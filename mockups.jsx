import { useState } from "react";

// ─── PALETA SENA ────────────────────────────────────────────────────────────
const C = {
  primary: "#1B6B3A",
  primaryMid: "#206B47",
  primaryLight: "#39A55F",
  primaryXLight: "#E8F5EE",
  bg: "#F0F4F8",
  white: "#FFFFFF",
  dark: "#1A2332",
  mid: "#3D4F6B",
  muted: "#6B7A99",
  border: "#D8E2EF",
  danger: "#D94F4F",
  warning: "#E8930A",
  info: "#2F80ED",
  success: "#27AE60",
};

// ─── SHARED COMPONENTS ───────────────────────────────────────────────────────
const Sidebar = ({ active, onNav }) => {
  const items = [
    { id: "dashboard", icon: "⊞", label: "Dashboard" },
    { id: "calendario", icon: "📅", label: "Calendario" },
    { id: "citas", icon: "🕐", label: "Programar Cita" },
    { id: "solicitudes", icon: "📋", label: "Solicitudes" },
    { id: "evaluacion", icon: "📊", label: "Evaluación" },
    { id: "reportes", icon: "📈", label: "Reportes" },
    { id: "usuarios", icon: "👥", label: "Usuarios" },
    { id: "roles", icon: "🔐", label: "Roles y Permisos" },
  ];
  return (
    <div style={{
      width: 220, minHeight: "100vh", background: C.primary, display: "flex",
      flexDirection: "column", fontFamily: "'Segoe UI', sans-serif", flexShrink: 0,
    }}>
      <div style={{ padding: "24px 20px 20px", borderBottom: "1px solid rgba(255,255,255,0.12)" }}>
        <div style={{ display: "flex", alignItems: "center", gap: 10 }}>
          <div style={{
            width: 36, height: 36, background: "rgba(255,255,255,0.15)",
            borderRadius: 8, display: "flex", alignItems: "center", justifyContent: "center",
            fontSize: 18,
          }}>🎓</div>
          <div>
            <div style={{ color: C.white, fontWeight: 700, fontSize: 14, lineHeight: 1.2 }}>SENA</div>
            <div style={{ color: "rgba(255,255,255,0.6)", fontSize: 10 }}>Etapa Productiva</div>
          </div>
        </div>
      </div>
      <nav style={{ flex: 1, padding: "12px 0" }}>
        {items.map(it => (
          <button key={it.id} onClick={() => onNav(it.id)} style={{
            width: "100%", display: "flex", alignItems: "center", gap: 10,
            padding: "10px 20px", background: active === it.id ? "rgba(255,255,255,0.15)" : "transparent",
            border: "none", cursor: "pointer", color: active === it.id ? C.white : "rgba(255,255,255,0.7)",
            fontSize: 13, fontWeight: active === it.id ? 600 : 400,
            borderLeft: active === it.id ? `3px solid ${C.white}` : "3px solid transparent",
            transition: "all 0.15s",
          }}>
            <span style={{ fontSize: 16 }}>{it.icon}</span>
            {it.label}
          </button>
        ))}
      </nav>
      <div style={{ padding: 16, borderTop: "1px solid rgba(255,255,255,0.12)" }}>
        <div style={{ display: "flex", alignItems: "center", gap: 8 }}>
          <div style={{
            width: 32, height: 32, borderRadius: "50%", background: C.primaryLight,
            display: "flex", alignItems: "center", justifyContent: "center",
            color: C.white, fontSize: 13, fontWeight: 700,
          }}>JA</div>
          <div>
            <div style={{ color: C.white, fontSize: 12, fontWeight: 600 }}>Jaime Méndez</div>
            <div style={{ color: "rgba(255,255,255,0.5)", fontSize: 10 }}>Administrador</div>
          </div>
        </div>
      </div>
    </div>
  );
};

const Navbar = ({ title }) => (
  <div style={{
    height: 56, background: C.white, borderBottom: `1px solid ${C.border}`,
    display: "flex", alignItems: "center", justifyContent: "space-between",
    padding: "0 24px", fontFamily: "'Segoe UI', sans-serif",
  }}>
    <div style={{ fontWeight: 600, color: C.dark, fontSize: 16 }}>{title}</div>
    <div style={{ display: "flex", alignItems: "center", gap: 16 }}>
      <div style={{
        background: C.bg, border: `1px solid ${C.border}`, borderRadius: 8,
        padding: "6px 12px", display: "flex", alignItems: "center", gap: 6,
        fontSize: 12, color: C.muted,
      }}>
        <span>🔍</span> Buscar...
      </div>
      <div style={{ position: "relative" }}>
        <span style={{ fontSize: 20 }}>🔔</span>
        <span style={{
          position: "absolute", top: -4, right: -4, width: 14, height: 14,
          background: C.danger, borderRadius: "50%", fontSize: 9,
          display: "flex", alignItems: "center", justifyContent: "center", color: C.white,
        }}>3</span>
      </div>
    </div>
  </div>
);

const Kpi = ({ icon, label, value, delta, color }) => (
  <div style={{
    background: C.white, border: `1px solid ${C.border}`, borderRadius: 12,
    padding: 20, display: "flex", flexDirection: "column", gap: 8,
    boxShadow: "0 1px 4px rgba(0,0,0,0.06)",
  }}>
    <div style={{ display: "flex", justifyContent: "space-between", alignItems: "flex-start" }}>
      <div style={{
        width: 40, height: 40, borderRadius: 10, background: color + "1A",
        display: "flex", alignItems: "center", justifyContent: "center", fontSize: 20,
      }}>{icon}</div>
      <span style={{
        fontSize: 11, fontWeight: 600, color: delta > 0 ? C.success : C.danger,
        background: delta > 0 ? "#E8F8EF" : "#FDE8E8", borderRadius: 20, padding: "2px 8px",
      }}>{delta > 0 ? "▲" : "▼"} {Math.abs(delta)}%</span>
    </div>
    <div style={{ fontSize: 28, fontWeight: 700, color: C.dark }}>{value}</div>
    <div style={{ fontSize: 12, color: C.muted }}>{label}</div>
  </div>
);

const Badge = ({ label, color, bg }) => (
  <span style={{
    fontSize: 11, fontWeight: 600, color, background: bg,
    borderRadius: 20, padding: "3px 10px",
  }}>{label}</span>
);

const Btn = ({ children, variant = "primary", onClick, small }) => {
  const styles = {
    primary: { background: C.primary, color: C.white, border: "none" },
    outline: { background: "transparent", color: C.primary, border: `1px solid ${C.primary}` },
    danger: { background: C.danger, color: C.white, border: "none" },
    ghost: { background: C.bg, color: C.mid, border: `1px solid ${C.border}` },
  };
  return (
    <button onClick={onClick} style={{
      ...styles[variant], borderRadius: 8, padding: small ? "5px 12px" : "8px 16px",
      fontSize: small ? 12 : 13, fontWeight: 600, cursor: "pointer",
      display: "inline-flex", alignItems: "center", gap: 6,
    }}>{children}</button>
  );
};

// ─── SCREENS ────────────────────────────────────────────────────────────────

const Dashboard = () => {
  const kpis = [
    { icon: "📅", label: "Seguimientos Programados", value: 42, delta: 8, color: C.primary },
    { icon: "✅", label: "Seguimientos Realizados", value: 138, delta: 12, color: C.success },
    { icon: "🎓", label: "Aprendices Activos", value: 213, delta: 5, color: C.info },
    { icon: "👨‍🏫", label: "Instructores Activos", value: 18, delta: -2, color: C.warning },
    { icon: "📝", label: "Evaluaciones Pendientes", value: 27, delta: -4, color: C.danger },
    { icon: "📊", label: "Reportes Generados", value: 64, delta: 15, color: "#8B5CF6" },
  ];
  const proxCitas = [
    { hora: "08:00", aprendiz: "María López", instructor: "Ing. Ríos", tipo: "Virtual" },
    { hora: "10:30", aprendiz: "Carlos Ruiz", instructor: "Ing. Mora", tipo: "Presencial" },
    { hora: "14:00", aprendiz: "Ana Torres", instructor: "Ing. Ríos", tipo: "Virtual" },
    { hora: "15:30", aprendiz: "Luis Pérez", instructor: "Ing. Vega", tipo: "Presencial" },
  ];
  return (
    <div style={{ fontFamily: "'Segoe UI', sans-serif", color: C.dark }}>
      <Navbar title="Dashboard Principal" />
      <div style={{ padding: 24, background: C.bg, minHeight: "calc(100vh - 56px)" }}>
        {/* KPIs */}
        <div style={{ display: "grid", gridTemplateColumns: "repeat(6,1fr)", gap: 16, marginBottom: 24 }}>
          {kpis.map((k, i) => <Kpi key={i} {...k} />)}
        </div>
        <div style={{ display: "grid", gridTemplateColumns: "2fr 1fr", gap: 16, marginBottom: 16 }}>
          {/* Chart seguimientos */}
          <div style={{ background: C.white, border: `1px solid ${C.border}`, borderRadius: 12, padding: 20, boxShadow: "0 1px 4px rgba(0,0,0,0.06)" }}>
            <div style={{ fontWeight: 600, marginBottom: 16, fontSize: 14 }}>Seguimientos por Mes</div>
            <div style={{ display: "flex", alignItems: "flex-end", gap: 8, height: 100 }}>
              {[38,52,45,61,48,70,55,63,72,58,65,80].map((v, i) => (
                <div key={i} style={{ flex: 1, display: "flex", flexDirection: "column", alignItems: "center", gap: 4 }}>
                  <div style={{ width: "100%", height: v * 1.2, background: i === 11 ? C.primary : C.primaryXLight, borderRadius: "4px 4px 0 0", border: `1px solid ${C.primaryLight}` }} />
                  <div style={{ fontSize: 9, color: C.muted }}>
                    {["E","F","M","A","M","J","J","A","S","O","N","D"][i]}
                  </div>
                </div>
              ))}
            </div>
          </div>
          {/* Donut estado aprendices */}
          <div style={{ background: C.white, border: `1px solid ${C.border}`, borderRadius: 12, padding: 20, boxShadow: "0 1px 4px rgba(0,0,0,0.06)" }}>
            <div style={{ fontWeight: 600, marginBottom: 16, fontSize: 14 }}>Estado de Aprendices</div>
            <div style={{ display: "flex", justifyContent: "center", marginBottom: 12 }}>
              <svg width="100" height="100" viewBox="0 0 100 100">
                <circle cx="50" cy="50" r="38" fill="none" stroke={C.border} strokeWidth="14" />
                <circle cx="50" cy="50" r="38" fill="none" stroke={C.primary} strokeWidth="14"
                  strokeDasharray="150 89" strokeLinecap="round" transform="rotate(-90 50 50)" />
                <circle cx="50" cy="50" r="38" fill="none" stroke={C.warning} strokeWidth="14"
                  strokeDasharray="60 179" strokeLinecap="round" transform="rotate(80 50 50)" />
                <circle cx="50" cy="50" r="38" fill="none" stroke={C.danger} strokeWidth="14"
                  strokeDasharray="29 210" strokeLinecap="round" transform="rotate(195 50 50)" />
                <text x="50" y="54" textAnchor="middle" fontSize="14" fontWeight="700" fill={C.dark}>213</text>
              </svg>
            </div>
            {[
              { color: C.primary, label: "En proceso", val: "62%" },
              { color: C.warning, label: "Por iniciar", val: "25%" },
              { color: C.danger, label: "Atrasados", val: "13%" },
            ].map((r, i) => (
              <div key={i} style={{ display: "flex", justifyContent: "space-between", alignItems: "center", marginBottom: 6 }}>
                <div style={{ display: "flex", alignItems: "center", gap: 6 }}>
                  <div style={{ width: 10, height: 10, borderRadius: 2, background: r.color }} />
                  <span style={{ fontSize: 12, color: C.mid }}>{r.label}</span>
                </div>
                <span style={{ fontSize: 12, fontWeight: 600 }}>{r.val}</span>
              </div>
            ))}
          </div>
        </div>
        <div style={{ display: "grid", gridTemplateColumns: "1fr 1fr", gap: 16 }}>
          {/* Próximas citas */}
          <div style={{ background: C.white, border: `1px solid ${C.border}`, borderRadius: 12, padding: 20, boxShadow: "0 1px 4px rgba(0,0,0,0.06)" }}>
            <div style={{ display: "flex", justifyContent: "space-between", alignItems: "center", marginBottom: 16 }}>
              <div style={{ fontWeight: 600, fontSize: 14 }}>Próximas Citas Hoy</div>
              <Btn variant="outline" small>Ver todas</Btn>
            </div>
            {proxCitas.map((c, i) => (
              <div key={i} style={{
                display: "flex", alignItems: "center", gap: 12,
                padding: "10px 0", borderBottom: i < proxCitas.length - 1 ? `1px solid ${C.border}` : "none",
              }}>
                <div style={{
                  width: 48, textAlign: "center", background: C.primaryXLight,
                  borderRadius: 8, padding: "4px 0", fontSize: 11, fontWeight: 700, color: C.primary,
                }}>{c.hora}</div>
                <div style={{ flex: 1 }}>
                  <div style={{ fontSize: 13, fontWeight: 600 }}>{c.aprendiz}</div>
                  <div style={{ fontSize: 11, color: C.muted }}>{c.instructor}</div>
                </div>
                <Badge label={c.tipo} color={c.tipo === "Virtual" ? C.info : C.success} bg={c.tipo === "Virtual" ? "#E8F2FD" : "#E8F8EF"} />
              </div>
            ))}
          </div>
          {/* Actividad reciente */}
          <div style={{ background: C.white, border: `1px solid ${C.border}`, borderRadius: 12, padding: 20, boxShadow: "0 1px 4px rgba(0,0,0,0.06)" }}>
            <div style={{ fontWeight: 600, fontSize: 14, marginBottom: 16 }}>Actividad Reciente</div>
            {[
              { icon: "✅", text: "Seguimiento completado — Juan Mora", time: "hace 10 min", color: C.success },
              { icon: "📝", text: "Nueva solicitud — Laura García", time: "hace 25 min", color: C.info },
              { icon: "⚠️", text: "Evaluación pendiente — Pedro Villa", time: "hace 1h", color: C.warning },
              { icon: "👤", text: "Usuario creado — Ing. Salcedo", time: "hace 2h", color: C.primary },
              { icon: "📊", text: "Reporte generado — Junio 2026", time: "hace 3h", color: "#8B5CF6" },
            ].map((a, i) => (
              <div key={i} style={{ display: "flex", alignItems: "flex-start", gap: 10, marginBottom: 12 }}>
                <div style={{
                  width: 32, height: 32, borderRadius: "50%", background: a.color + "1A",
                  display: "flex", alignItems: "center", justifyContent: "center", fontSize: 14, flexShrink: 0,
                }}>{a.icon}</div>
                <div>
                  <div style={{ fontSize: 12, fontWeight: 500 }}>{a.text}</div>
                  <div style={{ fontSize: 11, color: C.muted }}>{a.time}</div>
                </div>
              </div>
            ))}
          </div>
        </div>
      </div>
    </div>
  );
};

const Calendario = () => {
  const [vista, setVista] = useState("semana");
  const dias = ["Lun", "Mar", "Mié", "Jue", "Vie"];
  const fechas = [2, 3, 4, 5, 6];
  const horas = ["08:00", "09:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00"];
  const eventos = [
    { dia: 0, hora: 1, dur: 1, label: "Seguimiento — María L.", color: C.primary, tipo: "Confirmada" },
    { dia: 1, hora: 2, dur: 1, label: "Seguimiento — Carlos R.", color: C.warning, tipo: "Pendiente" },
    { dia: 2, hora: 0, dur: 2, label: "Seguimiento — Ana T.", color: C.primary, tipo: "Confirmada" },
    { dia: 3, hora: 4, dur: 1, label: "Seguimiento — Luis P.", color: C.success, tipo: "Completada" },
    { dia: 4, hora: 3, dur: 1, label: "Evaluación — Pedro V.", color: "#8B5CF6", tipo: "Confirmada" },
  ];
  return (
    <div style={{ fontFamily: "'Segoe UI', sans-serif" }}>
      <Navbar title="Calendario de Seguimientos" />
      <div style={{ display: "flex", background: C.bg, minHeight: "calc(100vh - 56px)" }}>
        <div style={{ flex: 1, padding: 20 }}>
          {/* Controles */}
          <div style={{ display: "flex", justifyContent: "space-between", alignItems: "center", marginBottom: 16 }}>
            <div style={{ display: "flex", alignItems: "center", gap: 12 }}>
              <Btn variant="ghost">◀</Btn>
              <span style={{ fontWeight: 700, fontSize: 15 }}>Junio 2026</span>
              <Btn variant="ghost">▶</Btn>
              <Btn variant="ghost" small>Hoy</Btn>
            </div>
            <div style={{ display: "flex", gap: 4, background: C.white, border: `1px solid ${C.border}`, borderRadius: 8, padding: 3 }}>
              {["día", "semana", "mes"].map(v => (
                <button key={v} onClick={() => setVista(v)} style={{
                  padding: "5px 14px", borderRadius: 6, border: "none", cursor: "pointer",
                  background: vista === v ? C.primary : "transparent",
                  color: vista === v ? C.white : C.muted, fontSize: 12, fontWeight: 600,
                }}>{v.charAt(0).toUpperCase() + v.slice(1)}</button>
              ))}
            </div>
            <Btn>+ Nuevo Seguimiento</Btn>
          </div>
          {/* Grid calendario */}
          <div style={{ background: C.white, border: `1px solid ${C.border}`, borderRadius: 12, overflow: "hidden" }}>
            {/* Header días */}
            <div style={{ display: "grid", gridTemplateColumns: "60px repeat(5,1fr)", borderBottom: `1px solid ${C.border}` }}>
              <div style={{ padding: 10 }} />
              {dias.map((d, i) => (
                <div key={i} style={{
                  padding: "10px 0", textAlign: "center", borderLeft: `1px solid ${C.border}`,
                  background: i === 2 ? C.primaryXLight : "transparent",
                }}>
                  <div style={{ fontSize: 11, color: C.muted, fontWeight: 500 }}>{d}</div>
                  <div style={{
                    fontSize: 18, fontWeight: 700,
                    color: i === 2 ? C.white : C.dark,
                    width: 32, height: 32, borderRadius: "50%",
                    background: i === 2 ? C.primary : "transparent",
                    display: "flex", alignItems: "center", justifyContent: "center", margin: "auto",
                  }}>{fechas[i]}</div>
                </div>
              ))}
            </div>
            {/* Horas */}
            {horas.map((h, hi) => (
              <div key={hi} style={{ display: "grid", gridTemplateColumns: "60px repeat(5,1fr)", borderBottom: `1px solid ${C.border}`, minHeight: 50 }}>
                <div style={{ fontSize: 10, color: C.muted, padding: "6px 8px" }}>{h}</div>
                {[0,1,2,3,4].map(di => {
                  const ev = eventos.find(e => e.dia === di && e.hora === hi);
                  return (
                    <div key={di} style={{
                      borderLeft: `1px solid ${C.border}`, padding: 3,
                      background: di === 2 ? "#FAFFFE" : "transparent",
                    }}>
                      {ev && (
                        <div style={{
                          background: ev.color, borderRadius: 6, padding: "4px 8px",
                          color: C.white, fontSize: 11, fontWeight: 600, cursor: "pointer",
                          height: ev.dur * 44, display: "flex", flexDirection: "column", justifyContent: "center",
                        }}>
                          <div>{ev.label}</div>
                          <div style={{ fontSize: 10, opacity: 0.85 }}>{ev.tipo}</div>
                        </div>
                      )}
                    </div>
                  );
                })}
              </div>
            ))}
          </div>
        </div>
        {/* Panel lateral */}
        <div style={{ width: 240, background: C.white, borderLeft: `1px solid ${C.border}`, padding: 16 }}>
          <div style={{ fontWeight: 600, fontSize: 13, marginBottom: 12 }}>Instructor Seleccionado</div>
          <div style={{ textAlign: "center", padding: 16, background: C.bg, borderRadius: 10, marginBottom: 16 }}>
            <div style={{
              width: 56, height: 56, borderRadius: "50%", background: C.primary,
              display: "flex", alignItems: "center", justifyContent: "center",
              color: C.white, fontSize: 20, fontWeight: 700, margin: "0 auto 8px",
            }}>JR</div>
            <div style={{ fontWeight: 600, fontSize: 13 }}>Ing. Juan Ríos</div>
            <div style={{ fontSize: 11, color: C.muted }}>Instructor Principal</div>
            <Badge label="Disponible" color={C.success} bg="#E8F8EF" />
          </div>
          <div style={{ fontWeight: 600, fontSize: 12, marginBottom: 8 }}>Horarios Disponibles</div>
          {["08:00–10:00", "11:00–13:00", "14:00–16:00"].map((h, i) => (
            <div key={i} style={{
              display: "flex", alignItems: "center", justifyContent: "space-between",
              padding: "8px 10px", background: C.bg, borderRadius: 8, marginBottom: 6,
            }}>
              <span style={{ fontSize: 12 }}>⏰ {h}</span>
              <Badge label="Libre" color={C.success} bg="#E8F8EF" />
            </div>
          ))}
          <div style={{ marginTop: 16 }}>
            <div style={{ fontWeight: 600, fontSize: 12, marginBottom: 8 }}>Leyenda</div>
            {[
              { color: C.primary, label: "Confirmada" },
              { color: C.warning, label: "Pendiente" },
              { color: C.success, label: "Completada" },
              { color: "#8B5CF6", label: "Evaluación" },
            ].map((l, i) => (
              <div key={i} style={{ display: "flex", alignItems: "center", gap: 8, marginBottom: 6 }}>
                <div style={{ width: 12, height: 12, borderRadius: 3, background: l.color }} />
                <span style={{ fontSize: 12 }}>{l.label}</span>
              </div>
            ))}
          </div>
        </div>
      </div>
    </div>
  );
};

const Citas = () => {
  const [sel, setSel] = useState(null);
  const slots = [
    ["08:00","08:30","09:00","09:30","10:00","10:30"],
    ["11:00","11:30","14:00","14:30","15:00","15:30"],
  ];
  const busy = ["09:00","10:30","14:30"];
  return (
    <div style={{ fontFamily: "'Segoe UI', sans-serif" }}>
      <Navbar title="Programación de Citas" />
      <div style={{ padding: 24, background: C.bg, minHeight: "calc(100vh - 56px)" }}>
        <div style={{ display: "grid", gridTemplateColumns: "1fr 380px", gap: 20 }}>
          <div style={{ background: C.white, border: `1px solid ${C.border}`, borderRadius: 12, padding: 24 }}>
            <div style={{ fontWeight: 700, fontSize: 16, marginBottom: 20 }}>Solicitar Cita de Seguimiento</div>
            <div style={{ display: "grid", gridTemplateColumns: "1fr 1fr", gap: 16, marginBottom: 20 }}>
              {[
                { label: "Instructor", type: "select", opts: ["Ing. Juan Ríos", "Ing. Ana Mora", "Ing. Carlos Vega"] },
                { label: "Modalidad", type: "select", opts: ["Virtual", "Presencial", "Telefónica"] },
                { label: "Fecha", type: "date" },
                { label: "Empresa", type: "text", ph: "Empresa patrocinadora" },
              ].map((f, i) => (
                <div key={i}>
                  <label style={{ fontSize: 12, fontWeight: 600, color: C.mid, display: "block", marginBottom: 6 }}>{f.label}</label>
                  {f.type === "select" ? (
                    <select style={{
                      width: "100%", padding: "8px 12px", border: `1px solid ${C.border}`,
                      borderRadius: 8, fontSize: 13, color: C.dark, background: C.bg,
                    }}>
                      {f.opts.map(o => <option key={o}>{o}</option>)}
                    </select>
                  ) : (
                    <input type={f.type} placeholder={f.ph} style={{
                      width: "100%", padding: "8px 12px", border: `1px solid ${C.border}`,
                      borderRadius: 8, fontSize: 13, color: C.dark, background: C.bg, boxSizing: "border-box",
                    }} />
                  )}
                </div>
              ))}
            </div>
            {/* Selector horario */}
            <div style={{ marginBottom: 20 }}>
              <label style={{ fontSize: 12, fontWeight: 600, color: C.mid, display: "block", marginBottom: 10 }}>Seleccionar Hora Disponible</label>
              <div style={{ display: "flex", gap: 8, flexWrap: "wrap" }}>
                {slots.flat().map(h => {
                  const isB = busy.includes(h);
                  const isS = sel === h;
                  return (
                    <button key={h} onClick={() => !isB && setSel(h)} style={{
                      padding: "8px 14px", borderRadius: 8, fontSize: 12, fontWeight: 600,
                      cursor: isB ? "not-allowed" : "pointer",
                      background: isB ? "#F5E8E8" : isS ? C.primary : C.primaryXLight,
                      color: isB ? C.danger : isS ? C.white : C.primary,
                      border: isS ? `2px solid ${C.primary}` : `1px solid ${isB ? "#F0C0C0" : C.primaryLight}`,
                      opacity: isB ? 0.6 : 1,
                    }}>{h} {isB ? "✗" : isS ? "✓" : ""}</button>
                  );
                })}
              </div>
              <div style={{ display: "flex", gap: 16, marginTop: 10 }}>
                {[
                  { color: C.primaryXLight, border: C.primaryLight, label: "Disponible", text: C.primary },
                  { color: "#F5E8E8", border: "#F0C0C0", label: "Ocupado", text: C.danger },
                  { color: C.primary, border: C.primary, label: "Seleccionado", text: C.white },
                ].map((l, i) => (
                  <div key={i} style={{ display: "flex", alignItems: "center", gap: 6 }}>
                    <div style={{ width: 14, height: 14, borderRadius: 3, background: l.color, border: `1px solid ${l.border}` }} />
                    <span style={{ fontSize: 11, color: C.muted }}>{l.label}</span>
                  </div>
                ))}
              </div>
            </div>
            <div style={{ marginBottom: 20 }}>
              <label style={{ fontSize: 12, fontWeight: 600, color: C.mid, display: "block", marginBottom: 6 }}>Observaciones</label>
              <textarea placeholder="Describa el motivo del seguimiento o puntos a tratar..." style={{
                width: "100%", height: 80, padding: "8px 12px", border: `1px solid ${C.border}`,
                borderRadius: 8, fontSize: 13, resize: "none", background: C.bg, boxSizing: "border-box",
              }} />
            </div>
            <div style={{ display: "flex", gap: 10 }}>
              <Btn>📅 Solicitar Cita</Btn>
              <Btn variant="ghost">Cancelar</Btn>
            </div>
          </div>
          {/* Confirmación visual */}
          <div style={{ display: "flex", flexDirection: "column", gap: 16 }}>
            {sel && (
              <div style={{ background: C.primaryXLight, border: `1px solid ${C.primaryLight}`, borderRadius: 12, padding: 20 }}>
                <div style={{ fontWeight: 700, fontSize: 14, color: C.primary, marginBottom: 12 }}>✅ Resumen de Solicitud</div>
                {[
                  ["Instructor", "Ing. Juan Ríos"],
                  ["Fecha", "Miércoles 4 Jun 2026"],
                  ["Hora", sel],
                  ["Modalidad", "Virtual"],
                ].map(([k, v]) => (
                  <div key={k} style={{ display: "flex", justifyContent: "space-between", marginBottom: 8 }}>
                    <span style={{ fontSize: 12, color: C.muted }}>{k}</span>
                    <span style={{ fontSize: 12, fontWeight: 600, color: C.dark }}>{v}</span>
                  </div>
                ))}
                <div style={{ marginTop: 12, padding: 10, background: C.white, borderRadius: 8 }}>
                  <div style={{ fontSize: 11, color: C.muted }}>Estado</div>
                  <Badge label="⏳ Pendiente de confirmación" color={C.warning} bg="#FFF3E0" />
                </div>
              </div>
            )}
            <div style={{ background: C.white, border: `1px solid ${C.border}`, borderRadius: 12, padding: 20 }}>
              <div style={{ fontWeight: 600, fontSize: 13, marginBottom: 12 }}>Disponibilidad del Instructor</div>
              <div style={{ background: C.primaryXLight, borderRadius: 10, padding: 12 }}>
                <div style={{ fontWeight: 600, fontSize: 12, color: C.primary, marginBottom: 8 }}>Ing. Juan Ríos — Junio 2026</div>
                <div style={{ display: "grid", gridTemplateColumns: "repeat(7,1fr)", gap: 3 }}>
                  {["L","M","X","J","V","S","D"].map(d => (
                    <div key={d} style={{ fontSize: 9, textAlign: "center", color: C.muted, fontWeight: 600 }}>{d}</div>
                  ))}
                  {Array.from({length:30}, (_, i) => i + 1).map(d => (
                    <div key={d} style={{
                      width: "100%", aspectRatio: "1", borderRadius: 4, fontSize: 9, fontWeight: 600,
                      display: "flex", alignItems: "center", justifyContent: "center",
                      background: d === 4 ? C.primary : [2,9,16,23,7,14,21,28].includes(d) ? "#F5E8E8" : C.white,
                      color: d === 4 ? C.white : [2,9,16,23,7,14,21,28].includes(d) ? C.danger : C.dark,
                    }}>{d}</div>
                  ))}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};

const Solicitudes = () => {
  const rows = [
    { aprendiz: "María López", doc: "1234567890", fecha: "04/06/2026", hora: "08:00", instructor: "Ing. Ríos", modalidad: "Virtual", estado: "Pendiente" },
    { aprendiz: "Carlos Ruiz", doc: "0987654321", fecha: "04/06/2026", hora: "10:30", instructor: "Ing. Mora", modalidad: "Presencial", estado: "Aprobada" },
    { aprendiz: "Ana Torres", doc: "1122334455", fecha: "05/06/2026", hora: "14:00", instructor: "Ing. Ríos", modalidad: "Virtual", estado: "Rechazada" },
    { aprendiz: "Luis Pérez", doc: "5566778899", fecha: "05/06/2026", hora: "15:30", instructor: "Ing. Vega", modalidad: "Presencial", estado: "Pendiente" },
    { aprendiz: "Sandra Gil", doc: "6677889900", fecha: "06/06/2026", hora: "09:00", instructor: "Ing. Mora", modalidad: "Virtual", estado: "Pendiente" },
  ];
  const estadoStyle = { Pendiente: [C.warning, "#FFF3E0"], Aprobada: [C.success, "#E8F8EF"], Rechazada: [C.danger, "#FDE8E8"] };
  return (
    <div style={{ fontFamily: "'Segoe UI', sans-serif" }}>
      <Navbar title="Gestión de Solicitudes de Seguimiento" />
      <div style={{ padding: 24, background: C.bg, minHeight: "calc(100vh - 56px)" }}>
        {/* Filtros */}
        <div style={{ background: C.white, border: `1px solid ${C.border}`, borderRadius: 12, padding: 16, marginBottom: 16, display: "flex", gap: 12, alignItems: "center" }}>
          {[
            { label: "Fecha desde", type: "date" },
            { label: "Fecha hasta", type: "date" },
          ].map((f, i) => (
            <div key={i} style={{ display: "flex", flexDirection: "column", gap: 4 }}>
              <label style={{ fontSize: 11, fontWeight: 600, color: C.muted }}>{f.label}</label>
              <input type="date" style={{
                padding: "6px 10px", border: `1px solid ${C.border}`, borderRadius: 8, fontSize: 12,
              }} />
            </div>
          ))}
          <div style={{ display: "flex", flexDirection: "column", gap: 4 }}>
            <label style={{ fontSize: 11, fontWeight: 600, color: C.muted }}>Estado</label>
            <select style={{ padding: "6px 10px", border: `1px solid ${C.border}`, borderRadius: 8, fontSize: 12 }}>
              <option>Todos</option>
              <option>Pendiente</option>
              <option>Aprobada</option>
              <option>Rechazada</option>
            </select>
          </div>
          <div style={{ display: "flex", flexDirection: "column", gap: 4 }}>
            <label style={{ fontSize: 11, fontWeight: 600, color: C.muted }}>Instructor</label>
            <select style={{ padding: "6px 10px", border: `1px solid ${C.border}`, borderRadius: 8, fontSize: 12 }}>
              <option>Todos</option>
              <option>Ing. Ríos</option>
              <option>Ing. Mora</option>
            </select>
          </div>
          <div style={{ marginTop: 18 }}>
            <Btn>🔍 Filtrar</Btn>
          </div>
        </div>
        <div style={{ background: C.white, border: `1px solid ${C.border}`, borderRadius: 12, overflow: "hidden" }}>
          <div style={{ padding: "16px 20px", borderBottom: `1px solid ${C.border}`, display: "flex", justifyContent: "space-between", alignItems: "center" }}>
            <div style={{ fontWeight: 600, fontSize: 14 }}>Solicitudes de Seguimiento <span style={{ color: C.muted, fontWeight: 400, fontSize: 12 }}>({rows.length} registros)</span></div>
            <Btn variant="outline" small>📥 Exportar</Btn>
          </div>
          <table style={{ width: "100%", borderCollapse: "collapse" }}>
            <thead>
              <tr style={{ background: C.bg }}>
                {["Aprendiz", "Documento", "Fecha", "Hora", "Instructor", "Modalidad", "Estado", "Acciones"].map(h => (
                  <th key={h} style={{ padding: "10px 16px", textAlign: "left", fontSize: 11, fontWeight: 700, color: C.muted, textTransform: "uppercase", letterSpacing: "0.05em" }}>{h}</th>
                ))}
              </tr>
            </thead>
            <tbody>
              {rows.map((r, i) => {
                const [ec, ebg] = estadoStyle[r.estado];
                return (
                  <tr key={i} style={{ borderTop: `1px solid ${C.border}`, background: i % 2 === 0 ? C.white : "#FAFBFC" }}>
                    <td style={{ padding: "12px 16px" }}>
                      <div style={{ display: "flex", alignItems: "center", gap: 8 }}>
                        <div style={{
                          width: 30, height: 30, borderRadius: "50%", background: C.primary,
                          color: C.white, display: "flex", alignItems: "center", justifyContent: "center",
                          fontSize: 11, fontWeight: 700,
                        }}>{r.aprendiz.split(" ").map(n => n[0]).join("")}</div>
                        <span style={{ fontSize: 13, fontWeight: 500 }}>{r.aprendiz}</span>
                      </div>
                    </td>
                    <td style={{ padding: "12px 16px", fontSize: 12, color: C.muted }}>{r.doc}</td>
                    <td style={{ padding: "12px 16px", fontSize: 12 }}>{r.fecha}</td>
                    <td style={{ padding: "12px 16px", fontSize: 12, fontWeight: 600, color: C.primary }}>{r.hora}</td>
                    <td style={{ padding: "12px 16px", fontSize: 12 }}>{r.instructor}</td>
                    <td style={{ padding: "12px 16px" }}><Badge label={r.modalidad} color={r.modalidad === "Virtual" ? C.info : C.success} bg={r.modalidad === "Virtual" ? "#E8F2FD" : "#E8F8EF"} /></td>
                    <td style={{ padding: "12px 16px" }}><Badge label={r.estado} color={ec} bg={ebg} /></td>
                    <td style={{ padding: "12px 16px" }}>
                      <div style={{ display: "flex", gap: 6 }}>
                        {r.estado === "Pendiente" && <>
                          <Btn variant="primary" small>✓</Btn>
                          <Btn variant="danger" small>✗</Btn>
                        </>}
                        <Btn variant="ghost" small>↻</Btn>
                      </div>
                    </td>
                  </tr>
                );
              })}
            </tbody>
          </table>
        </div>
      </div>
    </div>
  );
};

const Evaluacion = () => {
  const competencias = [
    { name: "Responsabilidad", val: 85 },
    { name: "Puntualidad", val: 92 },
    { name: "Calidad del trabajo", val: 78 },
    { name: "Iniciativa", val: 70 },
    { name: "Trabajo en equipo", val: 88 },
  ];
  return (
    <div style={{ fontFamily: "'Segoe UI', sans-serif" }}>
      <Navbar title="Evaluación y Seguimiento del Aprendiz" />
      <div style={{ padding: 24, background: C.bg, minHeight: "calc(100vh - 56px)" }}>
        <div style={{ display: "grid", gridTemplateColumns: "1fr 300px", gap: 20 }}>
          <div style={{ display: "flex", flexDirection: "column", gap: 16 }}>
            {/* Formulario evaluación */}
            <div style={{ background: C.white, border: `1px solid ${C.border}`, borderRadius: 12, padding: 24 }}>
              <div style={{ fontWeight: 700, fontSize: 15, marginBottom: 20, display: "flex", alignItems: "center", gap: 8 }}>
                <span style={{ color: C.primary }}>📝</span> Formulario de Evaluación
              </div>
              <div style={{ marginBottom: 20 }}>
                <div style={{ fontSize: 12, fontWeight: 700, color: C.mid, marginBottom: 12 }}>COMPETENCIAS</div>
                {competencias.map((c, i) => (
                  <div key={i} style={{ marginBottom: 14 }}>
                    <div style={{ display: "flex", justifyContent: "space-between", marginBottom: 4 }}>
                      <span style={{ fontSize: 13 }}>{c.name}</span>
                      <span style={{ fontSize: 12, fontWeight: 700, color: C.primary }}>{c.val}/100</span>
                    </div>
                    <div style={{ background: C.bg, borderRadius: 20, height: 8, overflow: "hidden" }}>
                      <div style={{
                        height: "100%", width: `${c.val}%`, borderRadius: 20,
                        background: c.val >= 85 ? C.success : c.val >= 70 ? C.warning : C.danger,
                      }} />
                    </div>
                  </div>
                ))}
              </div>
              <div style={{ display: "grid", gridTemplateColumns: "1fr 1fr", gap: 16, marginBottom: 20 }}>
                <div>
                  <label style={{ fontSize: 12, fontWeight: 600, color: C.mid, display: "block", marginBottom: 6 }}>Cumplimiento de metas</label>
                  <select style={{ width: "100%", padding: "8px 12px", border: `1px solid ${C.border}`, borderRadius: 8, fontSize: 13 }}>
                    <option>Excelente</option><option>Bueno</option><option>Regular</option><option>Deficiente</option>
                  </select>
                </div>
                <div>
                  <label style={{ fontSize: 12, fontWeight: 600, color: C.mid, display: "block", marginBottom: 6 }}>Calificación general</label>
                  <div style={{ display: "flex", gap: 4 }}>
                    {[1,2,3,4,5].map(s => (
                      <span key={s} style={{ fontSize: 24, cursor: "pointer", color: s <= 4 ? "#F59E0B" : C.border }}>★</span>
                    ))}
                  </div>
                </div>
              </div>
              <div style={{ marginBottom: 20 }}>
                <label style={{ fontSize: 12, fontWeight: 600, color: C.mid, display: "block", marginBottom: 6 }}>Observaciones y recomendaciones</label>
                <textarea placeholder="Ingrese sus observaciones sobre el desempeño del aprendiz..." style={{
                  width: "100%", height: 100, padding: "8px 12px", border: `1px solid ${C.border}`,
                  borderRadius: 8, fontSize: 13, resize: "none", boxSizing: "border-box",
                }} />
              </div>
              <div style={{ display: "flex", gap: 10 }}>
                <Btn>💾 Guardar Evaluación</Btn>
                <Btn variant="outline">👁️ Vista previa</Btn>
                <Btn variant="ghost">Cancelar</Btn>
              </div>
            </div>
            {/* Historial */}
            <div style={{ background: C.white, border: `1px solid ${C.border}`, borderRadius: 12, padding: 20 }}>
              <div style={{ fontWeight: 600, fontSize: 14, marginBottom: 14 }}>Historial de Evaluaciones</div>
              {[
                { fecha: "15/05/2026", tipo: "Seguimiento 3", cal: 88, instructor: "Ing. Ríos" },
                { fecha: "10/04/2026", tipo: "Seguimiento 2", cal: 82, instructor: "Ing. Mora" },
                { fecha: "05/03/2026", tipo: "Seguimiento 1", cal: 75, instructor: "Ing. Ríos" },
              ].map((h, i) => (
                <div key={i} style={{
                  display: "flex", alignItems: "center", justifyContent: "space-between",
                  padding: "10px 0", borderBottom: i < 2 ? `1px solid ${C.border}` : "none",
                }}>
                  <div style={{ display: "flex", alignItems: "center", gap: 10 }}>
                    <div style={{ width: 36, height: 36, background: C.primaryXLight, borderRadius: 8, display: "flex", alignItems: "center", justifyContent: "center", fontSize: 16 }}>📋</div>
                    <div>
                      <div style={{ fontSize: 13, fontWeight: 600 }}>{h.tipo}</div>
                      <div style={{ fontSize: 11, color: C.muted }}>{h.fecha} · {h.instructor}</div>
                    </div>
                  </div>
                  <div style={{ fontSize: 18, fontWeight: 700, color: h.cal >= 85 ? C.success : h.cal >= 75 ? C.warning : C.danger }}>{h.cal}</div>
                </div>
              ))}
            </div>
          </div>
          {/* Panel aprendiz */}
          <div style={{ display: "flex", flexDirection: "column", gap: 16 }}>
            <div style={{ background: C.white, border: `1px solid ${C.border}`, borderRadius: 12, padding: 20, textAlign: "center" }}>
              <div style={{
                width: 64, height: 64, borderRadius: "50%", background: C.primary,
                color: C.white, fontSize: 24, fontWeight: 700, display: "flex",
                alignItems: "center", justifyContent: "center", margin: "0 auto 12px",
              }}>ML</div>
              <div style={{ fontWeight: 700, fontSize: 15 }}>María López</div>
              <div style={{ fontSize: 12, color: C.muted, marginBottom: 8 }}>ID: 2344567 · ADSO</div>
              <Badge label="Activa" color={C.success} bg="#E8F8EF" />
              <div style={{ marginTop: 16, textAlign: "left" }}>
                {[
                  ["Empresa", "TechCorp S.A.S"],
                  ["Inicio EP", "01/03/2026"],
                  ["Instructor", "Ing. Juan Ríos"],
                  ["Ficha", "2876543"],
                ].map(([k, v]) => (
                  <div key={k} style={{ display: "flex", justifyContent: "space-between", marginBottom: 8 }}>
                    <span style={{ fontSize: 12, color: C.muted }}>{k}</span>
                    <span style={{ fontSize: 12, fontWeight: 600 }}>{v}</span>
                  </div>
                ))}
              </div>
            </div>
            {/* Indicadores */}
            <div style={{ background: C.white, border: `1px solid ${C.border}`, borderRadius: 12, padding: 20 }}>
              <div style={{ fontWeight: 600, fontSize: 13, marginBottom: 12 }}>Indicadores de Progreso</div>
              {[
                { label: "Seguimientos completados", val: 3, max: 4, color: C.primary },
                { label: "Rendimiento general", val: 82, max: 100, color: C.success },
                { label: "Documentos entregados", val: 7, max: 10, color: C.warning },
              ].map((ind, i) => (
                <div key={i} style={{ marginBottom: 12 }}>
                  <div style={{ display: "flex", justifyContent: "space-between", marginBottom: 4 }}>
                    <span style={{ fontSize: 11, color: C.muted }}>{ind.label}</span>
                    <span style={{ fontSize: 11, fontWeight: 700 }}>{ind.val}/{ind.max}</span>
                  </div>
                  <div style={{ background: C.bg, borderRadius: 20, height: 6 }}>
                    <div style={{ height: "100%", width: `${(ind.val/ind.max)*100}%`, background: ind.color, borderRadius: 20 }} />
                  </div>
                </div>
              ))}
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};

const Reportes = () => {
  const stats = [
    { icon: "📅", label: "Seguimientos realizados", value: "138", color: C.primary },
    { icon: "✅", label: "Cumplimiento", value: "87%", color: C.success },
    { icon: "📝", label: "Evaluaciones", value: "94", color: "#8B5CF6" },
    { icon: "🎓", label: "Aprendices activos", value: "213", color: C.info },
  ];
  return (
    <div style={{ fontFamily: "'Segoe UI', sans-serif" }}>
      <Navbar title="Generación de Reportes" />
      <div style={{ padding: 24, background: C.bg, minHeight: "calc(100vh - 56px)" }}>
        <div style={{ display: "grid", gridTemplateColumns: "repeat(4,1fr)", gap: 16, marginBottom: 20 }}>
          {stats.map((s, i) => (
            <div key={i} style={{ background: C.white, border: `1px solid ${C.border}`, borderRadius: 12, padding: 20, textAlign: "center", boxShadow: "0 1px 4px rgba(0,0,0,0.06)" }}>
              <div style={{ fontSize: 28 }}>{s.icon}</div>
              <div style={{ fontSize: 26, fontWeight: 700, color: s.color, marginTop: 4 }}>{s.value}</div>
              <div style={{ fontSize: 11, color: C.muted }}>{s.label}</div>
            </div>
          ))}
        </div>
        <div style={{ display: "grid", gridTemplateColumns: "1fr 1fr", gap: 20 }}>
          {/* Filtros reporte */}
          <div style={{ background: C.white, border: `1px solid ${C.border}`, borderRadius: 12, padding: 24 }}>
            <div style={{ fontWeight: 700, fontSize: 15, marginBottom: 20 }}>🔍 Configurar Reporte</div>
            <div style={{ marginBottom: 16 }}>
              <label style={{ fontSize: 12, fontWeight: 600, color: C.mid, display: "block", marginBottom: 8 }}>Tipo de Reporte</label>
              <div style={{ display: "grid", gridTemplateColumns: "1fr 1fr", gap: 8 }}>
                {["Por aprendiz", "Por instructor", "Por fecha", "General"].map((t, i) => (
                  <label key={t} style={{
                    display: "flex", alignItems: "center", gap: 8,
                    padding: "10px 12px", border: `1px solid ${i === 0 ? C.primary : C.border}`,
                    borderRadius: 8, cursor: "pointer", fontSize: 12,
                    background: i === 0 ? C.primaryXLight : C.bg,
                    color: i === 0 ? C.primary : C.dark, fontWeight: i === 0 ? 600 : 400,
                  }}>
                    <input type="radio" name="tipo" defaultChecked={i === 0} style={{ accentColor: C.primary }} /> {t}
                  </label>
                ))}
              </div>
            </div>
            <div style={{ display: "grid", gridTemplateColumns: "1fr 1fr", gap: 12, marginBottom: 16 }}>
              {[["Fecha desde", "date"], ["Fecha hasta", "date"], ["Aprendiz", "text"], ["Estado", "select"]].map(([l, t]) => (
                <div key={l}>
                  <label style={{ fontSize: 12, fontWeight: 600, color: C.mid, display: "block", marginBottom: 6 }}>{l}</label>
                  {t === "select" ? (
                    <select style={{ width: "100%", padding: "8px 12px", border: `1px solid ${C.border}`, borderRadius: 8, fontSize: 12 }}>
                      <option>Todos</option>
                    </select>
                  ) : (
                    <input type={t} style={{ width: "100%", padding: "8px 12px", border: `1px solid ${C.border}`, borderRadius: 8, fontSize: 12, boxSizing: "border-box" }} />
                  )}
                </div>
              ))}
            </div>
            <div style={{ display: "flex", gap: 10, flexWrap: "wrap" }}>
              <Btn>👁️ Vista Previa PDF</Btn>
              <Btn variant="outline">📥 Exportar PDF</Btn>
              <Btn variant="outline">📊 Exportar Excel</Btn>
              <Btn variant="ghost">🖨️ Imprimir</Btn>
            </div>
          </div>
          {/* Vista previa */}
          <div style={{ background: C.white, border: `1px solid ${C.border}`, borderRadius: 12, overflow: "hidden" }}>
            <div style={{ padding: "14px 20px", background: C.primary, color: C.white, display: "flex", justifyContent: "space-between", alignItems: "center" }}>
              <div style={{ fontWeight: 700, fontSize: 14 }}>Vista Previa — Reporte General</div>
              <span style={{ fontSize: 12, opacity: 0.8 }}>Junio 2026</span>
            </div>
            <div style={{ padding: 20 }}>
              <div style={{ display: "flex", alignItems: "center", gap: 10, marginBottom: 16, padding: 12, background: C.bg, borderRadius: 8 }}>
                <span style={{ fontSize: 24 }}>🎓</span>
                <div>
                  <div style={{ fontWeight: 700, fontSize: 13 }}>SENA — Etapa Productiva</div>
                  <div style={{ fontSize: 11, color: C.muted }}>Centro de Teleinformática y Producción Industrial</div>
                </div>
              </div>
              <table style={{ width: "100%", borderCollapse: "collapse", fontSize: 11 }}>
                <thead>
                  <tr style={{ background: C.primary, color: C.white }}>
                    {["Aprendiz", "Seguimientos", "Evaluación", "Estado"].map(h => (
                      <th key={h} style={{ padding: "8px 10px", textAlign: "left" }}>{h}</th>
                    ))}
                  </tr>
                </thead>
                <tbody>
                  {[
                    ["María López", "3/4", "88", "En proceso"],
                    ["Carlos Ruiz", "4/4", "92", "Completado"],
                    ["Ana Torres", "2/4", "75", "En proceso"],
                    ["Luis Pérez", "1/4", "68", "Atrasado"],
                  ].map((r, i) => (
                    <tr key={i} style={{ borderBottom: `1px solid ${C.border}`, background: i % 2 === 0 ? C.white : C.bg }}>
                      {r.map((c, j) => (
                        <td key={j} style={{ padding: "7px 10px", color: j === 3 ? (c === "Completado" ? C.success : c === "Atrasado" ? C.danger : C.warning) : C.dark, fontWeight: j === 3 ? 600 : 400 }}>{c}</td>
                      ))}
                    </tr>
                  ))}
                </tbody>
              </table>
              <div style={{ marginTop: 12, padding: 10, background: C.primaryXLight, borderRadius: 8, fontSize: 11, color: C.primary, fontStyle: "italic" }}>
                Generado el 07/06/2026 · Sistema de Seguimiento SENA v1.0
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};

const Usuarios = () => {
  const [showModal, setShowModal] = useState(false);
  const users = [
    { nombre: "Juan Ríos", doc: "79876543", correo: "j.rios@sena.edu.co", rol: "Instructor", estado: "Activo", acceso: "07/06/2026 08:12" },
    { nombre: "Ana Mora", doc: "52341234", correo: "a.mora@sena.edu.co", rol: "Instructor", estado: "Activo", acceso: "06/06/2026 15:40" },
    { nombre: "María López", doc: "1023456789", correo: "m.lopez@sena.edu.co", rol: "Aprendiz", estado: "Activo", acceso: "07/06/2026 07:55" },
    { nombre: "Carlos Ruiz", doc: "1098765432", correo: "c.ruiz@sena.edu.co", rol: "Aprendiz", estado: "Inactivo", acceso: "01/06/2026 10:00" },
    { nombre: "Pedro Vega", doc: "80123456", correo: "p.vega@sena.edu.co", rol: "Coordinador", estado: "Activo", acceso: "07/06/2026 09:00" },
  ];
  const rolColor = { Instructor: [C.info, "#E8F2FD"], Aprendiz: ["#8B5CF6", "#F0EBFE"], Coordinador: [C.warning, "#FFF3E0"], Administrador: [C.danger, "#FDE8E8"] };
  return (
    <div style={{ fontFamily: "'Segoe UI', sans-serif" }}>
      <Navbar title="Gestión de Usuarios" />
      <div style={{ padding: 24, background: C.bg, minHeight: "calc(100vh - 56px)" }}>
        {/* Acciones rápidas */}
        <div style={{ display: "grid", gridTemplateColumns: "repeat(4,1fr)", gap: 12, marginBottom: 20 }}>
          {[
            { label: "Total usuarios", val: 231, icon: "👥", color: C.primary },
            { label: "Activos", val: 218, icon: "✅", color: C.success },
            { label: "Inactivos", val: 13, icon: "⛔", color: C.danger },
            { label: "Nuevos este mes", val: 7, icon: "🆕", color: C.info },
          ].map((s, i) => (
            <div key={i} style={{ background: C.white, border: `1px solid ${C.border}`, borderRadius: 10, padding: 16, display: "flex", alignItems: "center", gap: 12 }}>
              <div style={{ width: 40, height: 40, borderRadius: 10, background: s.color + "1A", display: "flex", alignItems: "center", justifyContent: "center", fontSize: 20 }}>{s.icon}</div>
              <div>
                <div style={{ fontSize: 22, fontWeight: 700, color: C.dark }}>{s.val}</div>
                <div style={{ fontSize: 11, color: C.muted }}>{s.label}</div>
              </div>
            </div>
          ))}
        </div>
        <div style={{ background: C.white, border: `1px solid ${C.border}`, borderRadius: 12, overflow: "hidden" }}>
          <div style={{ padding: "16px 20px", borderBottom: `1px solid ${C.border}`, display: "flex", justifyContent: "space-between", alignItems: "center" }}>
            <div style={{ display: "flex", gap: 8, alignItems: "center" }}>
              <input placeholder="🔍  Buscar usuario..." style={{
                padding: "7px 14px", border: `1px solid ${C.border}`, borderRadius: 8,
                fontSize: 12, width: 220,
              }} />
              <select style={{ padding: "7px 12px", border: `1px solid ${C.border}`, borderRadius: 8, fontSize: 12 }}>
                <option>Todos los roles</option>
                <option>Instructor</option>
                <option>Aprendiz</option>
                <option>Coordinador</option>
              </select>
              <select style={{ padding: "7px 12px", border: `1px solid ${C.border}`, borderRadius: 8, fontSize: 12 }}>
                <option>Todos los estados</option>
                <option>Activo</option>
                <option>Inactivo</option>
              </select>
            </div>
            <Btn onClick={() => setShowModal(true)}>+ Crear Usuario</Btn>
          </div>
          <table style={{ width: "100%", borderCollapse: "collapse" }}>
            <thead>
              <tr style={{ background: C.bg }}>
                {["Nombre", "Documento", "Correo", "Rol", "Estado", "Último acceso", "Acciones"].map(h => (
                  <th key={h} style={{ padding: "10px 16px", textAlign: "left", fontSize: 11, fontWeight: 700, color: C.muted, textTransform: "uppercase", letterSpacing: "0.05em" }}>{h}</th>
                ))}
              </tr>
            </thead>
            <tbody>
              {users.map((u, i) => {
                const [rc, rbg] = rolColor[u.rol] || [C.muted, C.bg];
                return (
                  <tr key={i} style={{ borderTop: `1px solid ${C.border}`, background: i % 2 === 0 ? C.white : "#FAFBFC" }}>
                    <td style={{ padding: "12px 16px" }}>
                      <div style={{ display: "flex", alignItems: "center", gap: 8 }}>
                        <div style={{
                          width: 32, height: 32, borderRadius: "50%", background: C.primary,
                          color: C.white, fontSize: 11, fontWeight: 700,
                          display: "flex", alignItems: "center", justifyContent: "center",
                        }}>{u.nombre.split(" ").map(n => n[0]).join("")}</div>
                        <span style={{ fontSize: 13, fontWeight: 600 }}>{u.nombre}</span>
                      </div>
                    </td>
                    <td style={{ padding: "12px 16px", fontSize: 12, color: C.muted }}>{u.doc}</td>
                    <td style={{ padding: "12px 16px", fontSize: 12 }}>{u.correo}</td>
                    <td style={{ padding: "12px 16px" }}><Badge label={u.rol} color={rc} bg={rbg} /></td>
                    <td style={{ padding: "12px 16px" }}>
                      <div style={{ display: "flex", alignItems: "center", gap: 6 }}>
                        <div style={{ width: 7, height: 7, borderRadius: "50%", background: u.estado === "Activo" ? C.success : C.danger }} />
                        <span style={{ fontSize: 12 }}>{u.estado}</span>
                      </div>
                    </td>
                    <td style={{ padding: "12px 16px", fontSize: 11, color: C.muted }}>{u.acceso}</td>
                    <td style={{ padding: "12px 16px" }}>
                      <div style={{ display: "flex", gap: 6 }}>
                        <Btn variant="ghost" small>✏️</Btn>
                        <Btn variant={u.estado === "Activo" ? "danger" : "primary"} small>{u.estado === "Activo" ? "⛔" : "✅"}</Btn>
                        <Btn variant="ghost" small>🔑</Btn>
                      </div>
                    </td>
                  </tr>
                );
              })}
            </tbody>
          </table>
        </div>
        {/* Modal crear usuario */}
        {showModal && (
          <div style={{
            position: "fixed", inset: 0, background: "rgba(0,0,0,0.5)",
            display: "flex", alignItems: "center", justifyContent: "center", zIndex: 1000,
          }}>
            <div style={{ background: C.white, borderRadius: 16, padding: 28, width: 480, boxShadow: "0 20px 60px rgba(0,0,0,0.3)" }}>
              <div style={{ display: "flex", justifyContent: "space-between", alignItems: "center", marginBottom: 20 }}>
                <div style={{ fontWeight: 700, fontSize: 16 }}>👤 Crear Nuevo Usuario</div>
                <button onClick={() => setShowModal(false)} style={{ background: "none", border: "none", fontSize: 20, cursor: "pointer", color: C.muted }}>✕</button>
              </div>
              <div style={{ display: "grid", gridTemplateColumns: "1fr 1fr", gap: 14, marginBottom: 14 }}>
                {["Nombres", "Apellidos", "Documento", "Correo institucional", "Teléfono", "Rol"].map((f, i) => (
                  <div key={f} style={{ gridColumn: f === "Correo institucional" ? "1/3" : undefined }}>
                    <label style={{ fontSize: 12, fontWeight: 600, color: C.mid, display: "block", marginBottom: 6 }}>{f}</label>
                    {f === "Rol" ? (
                      <select style={{ width: "100%", padding: "8px 12px", border: `1px solid ${C.border}`, borderRadius: 8, fontSize: 13 }}>
                        <option>Aprendiz</option><option>Instructor</option><option>Coordinador</option><option>Administrador</option>
                      </select>
                    ) : (
                      <input type={f.includes("Correo") ? "email" : "text"} style={{ width: "100%", padding: "8px 12px", border: `1px solid ${C.border}`, borderRadius: 8, fontSize: 13, boxSizing: "border-box" }} />
                    )}
                  </div>
                ))}
              </div>
              <div style={{ display: "flex", gap: 10, justifyContent: "flex-end" }}>
                <Btn variant="ghost" onClick={() => setShowModal(false)}>Cancelar</Btn>
                <Btn>💾 Crear Usuario</Btn>
              </div>
            </div>
          </div>
        )}
      </div>
    </div>
  );
};

const Roles = () => {
  const modulos = ["Dashboard", "Calendario", "Citas", "Solicitudes", "Evaluación", "Reportes", "Usuarios", "Roles"];
  const permisos = ["Crear", "Leer", "Editar", "Eliminar", "Aprobar", "Exportar"];
  const roles = ["Administrador", "Coordinador", "Instructor", "Aprendiz"];
  const defaults = {
    Administrador: [true, true, true, true, true, true],
    Coordinador: [true, true, true, false, true, true],
    Instructor: [false, true, true, false, true, false],
    Aprendiz: [false, true, false, false, false, false],
  };
  const [activeRole, setActiveRole] = useState("Coordinador");
  const [perms, setPerms] = useState({ ...defaults });
  const toggle = (mi, pi) => {
    const cur = [...(perms[activeRole] || [])];
    // simulate per-module toggle (simplified: toggle global)
    setPerms(prev => {
      const updated = [...(prev[activeRole] || [])];
      updated[pi] = !updated[pi];
      return { ...prev, [activeRole]: updated };
    });
  };
  return (
    <div style={{ fontFamily: "'Segoe UI', sans-serif" }}>
      <Navbar title="Gestión de Roles y Permisos" />
      <div style={{ padding: 24, background: C.bg, minHeight: "calc(100vh - 56px)" }}>
        <div style={{ display: "grid", gridTemplateColumns: "220px 1fr", gap: 20 }}>
          {/* Lista roles */}
          <div style={{ background: C.white, border: `1px solid ${C.border}`, borderRadius: 12, padding: 16 }}>
            <div style={{ fontWeight: 600, fontSize: 13, marginBottom: 14, color: C.dark }}>Roles del Sistema</div>
            {roles.map((r, i) => (
              <button key={r} onClick={() => setActiveRole(r)} style={{
                width: "100%", padding: "10px 12px", borderRadius: 8, marginBottom: 6,
                background: activeRole === r ? C.primary : C.bg,
                border: `1px solid ${activeRole === r ? C.primary : C.border}`,
                color: activeRole === r ? C.white : C.dark,
                fontSize: 13, fontWeight: 600, cursor: "pointer", textAlign: "left",
                display: "flex", alignItems: "center", gap: 8,
              }}>
                <span>{["👑","🎯","👨‍🏫","🎓"][i]}</span>{r}
              </button>
            ))}
            <div style={{ marginTop: 16, padding: 12, background: C.primaryXLight, borderRadius: 8 }}>
              <div style={{ fontSize: 11, fontWeight: 600, color: C.primary, marginBottom: 4 }}>Rol seleccionado</div>
              <div style={{ fontSize: 13, fontWeight: 700, color: C.dark }}>{activeRole}</div>
              <div style={{ fontSize: 11, color: C.muted, marginTop: 4 }}>
                {(perms[activeRole] || []).filter(Boolean).length * modulos.length} permisos activos
              </div>
            </div>
          </div>
          {/* Matriz permisos */}
          <div style={{ background: C.white, border: `1px solid ${C.border}`, borderRadius: 12, overflow: "hidden" }}>
            <div style={{ padding: "16px 20px", borderBottom: `1px solid ${C.border}`, display: "flex", justifyContent: "space-between", alignItems: "center" }}>
              <div style={{ fontWeight: 700, fontSize: 14 }}>Matriz de Permisos — {activeRole}</div>
              <Btn>💾 Guardar cambios</Btn>
            </div>
            <div style={{ overflowX: "auto" }}>
              <table style={{ width: "100%", borderCollapse: "collapse" }}>
                <thead>
                  <tr style={{ background: C.bg }}>
                    <th style={{ padding: "12px 16px", textAlign: "left", fontSize: 12, fontWeight: 700, color: C.muted, minWidth: 120 }}>Módulo</th>
                    {permisos.map(p => (
                      <th key={p} style={{ padding: "12px 16px", textAlign: "center", fontSize: 11, fontWeight: 700, color: C.muted, textTransform: "uppercase", letterSpacing: "0.05em" }}>{p}</th>
                    ))}
                  </tr>
                </thead>
                <tbody>
                  {modulos.map((mod, mi) => (
                    <tr key={mod} style={{ borderTop: `1px solid ${C.border}`, background: mi % 2 === 0 ? C.white : "#FAFBFC" }}>
                      <td style={{ padding: "12px 16px", fontSize: 13, fontWeight: 600, color: C.dark }}>{mod}</td>
                      {permisos.map((p, pi) => {
                        const allowed = (perms[activeRole] || [])[pi];
                        return (
                          <td key={p} style={{ padding: "12px 16px", textAlign: "center" }}>
                            <div
                              onClick={() => toggle(mi, pi)}
                              style={{
                                width: 36, height: 20, borderRadius: 10,
                                background: allowed ? C.primary : C.border,
                                margin: "auto", cursor: "pointer", transition: "background 0.2s",
                                position: "relative",
                              }}
                            >
                              <div style={{
                                width: 14, height: 14, borderRadius: "50%", background: C.white,
                                position: "absolute", top: 3, left: allowed ? 19 : 3, transition: "left 0.2s",
                                boxShadow: "0 1px 3px rgba(0,0,0,0.2)",
                              }} />
                            </div>
                          </td>
                        );
                      })}
                    </tr>
                  ))}
                </tbody>
              </table>
            </div>
            <div style={{ padding: "12px 20px", borderTop: `1px solid ${C.border}`, display: "flex", gap: 16, alignItems: "center" }}>
              <span style={{ fontSize: 12, color: C.muted }}>Leyenda:</span>
              <div style={{ display: "flex", alignItems: "center", gap: 6 }}>
                <div style={{ width: 28, height: 14, borderRadius: 7, background: C.primary }} />
                <span style={{ fontSize: 11, color: C.muted }}>Permitido</span>
              </div>
              <div style={{ display: "flex", alignItems: "center", gap: 6 }}>
                <div style={{ width: 28, height: 14, borderRadius: 7, background: C.border }} />
                <span style={{ fontSize: 11, color: C.muted }}>Denegado</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};

// ─── MAIN APP ─────────────────────────────────────────────────────────────────
const SCREENS = {
  dashboard: { comp: Dashboard, title: "Dashboard Principal" },
  calendario: { comp: Calendario, title: "Calendario de Seguimientos" },
  citas: { comp: Citas, title: "Programación de Citas" },
  solicitudes: { comp: Solicitudes, title: "Gestión de Solicitudes" },
  evaluacion: { comp: Evaluacion, title: "Evaluación y Seguimiento" },
  reportes: { comp: Reportes, title: "Reportes" },
  usuarios: { comp: Usuarios, title: "Gestión de Usuarios" },
  roles: { comp: Roles, title: "Roles y Permisos" },
};

export default function App() {
  const [screen, setScreen] = useState("dashboard");
  const Comp = SCREENS[screen].comp;
  return (
    <div style={{ display: "flex", height: "100vh", overflow: "hidden", fontFamily: "'Segoe UI', sans-serif" }}>
      <Sidebar active={screen} onNav={setScreen} />
      <div style={{ flex: 1, overflow: "auto" }}>
        <Comp />
      </div>
    </div>
  );
}
