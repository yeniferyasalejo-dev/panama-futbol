<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Club Deportivo Árabe Unido | Vive el fútbol de Colón</title>
  <meta name="description" content="App oficial del Club Deportivo Árabe Unido. Compra boletas, predice resultados en La Polla y gana puntos para canjear en entradas y merch oficial.">
  <meta name="keywords" content="Árabe Unido, fútbol Panamá, LPF, boletas fútbol, Colón Panamá, polla deportiva">
  <meta property="og:title" content="Club Deportivo Árabe Unido | Vive el fútbol de Colón">
  <meta property="og:description" content="Compra boletas, predice resultados y gana puntos canjeables en entradas y merch oficial.">
  <meta property="og:type" content="website">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,800&display=swap" rel="stylesheet">
  <style>
    /* ============================================
       RESET & BASE
       ============================================ */
    *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

    :root {
      /* Paleta — verde + blanco cálido (estética tiptap) */
      --bg:        #f5f5f4;
      --bg-soft:   #ffffff;
      --ink:       #0d0d0d;
      --ink-60:    rgba(13, 13, 13, 0.6);
      --ink-40:    rgba(13, 13, 13, 0.4);
      --ink-30:    rgba(13, 13, 13, 0.3);
      --ink-12:    rgba(13, 13, 13, 0.12);
      --ink-10:    rgba(13, 13, 13, 0.10);
      --ink-06:    rgba(13, 13, 13, 0.06);
      --green:     #16a34a;
      --green-1:   #4ade80;
      --green-2:   #15803d;
      --green-lt:  #dcfce7;
      --dark:      #1a1919;
      --amber:     #d97706;
      --red:       #dc2626;

      --radius-sm: 10px;
      --radius-md: 16px;
      --radius-lg: 24px;
      --radius-xl: 36px;

      --font: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
      --max:   1180px;
      --ease:  cubic-bezier(0.16, 1, 0.3, 1);
    }

    html { scroll-behavior: smooth; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; }
    body { font-family: var(--font); background: var(--bg); color: var(--ink); line-height: 1.6; overflow-x: hidden; }
    a { text-decoration: none; color: inherit; }
    button { font-family: var(--font); cursor: pointer; }
    img { max-width: 100%; display: block; }
    .wrap { max-width: var(--max); margin: 0 auto; padding: 0 24px; }

    /* ============================================
       SCROLL REVEAL
       ============================================ */
    .reveal { opacity: 0; transform: translateY(28px); transition: opacity 0.8s var(--ease), transform 0.8s var(--ease); }
    .reveal.in { opacity: 1; transform: none; }
    .reveal.d1 { transition-delay: 0.08s; }
    .reveal.d2 { transition-delay: 0.16s; }
    .reveal.d3 { transition-delay: 0.24s; }

    /* ============================================
       TOP BAR
       ============================================ */
    .topbar { background: var(--dark); color: rgba(255,255,255,0.6); text-align: center; padding: 11px 16px; font-size: 13px; font-weight: 500; }
    .topbar b { color: var(--green-1); font-weight: 700; }

    /* ============================================
       NAV
       ============================================ */
    .nav { position: sticky; top: 0; z-index: 100; background: rgba(245,245,244,0.82); backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px); border-bottom: 1px solid var(--ink-10); }
    .nav-inner { display: flex; align-items: center; justify-content: space-between; height: 68px; }
    .logo { display: flex; align-items: center; gap: 11px; }
    .logo-mark { width: 38px; height: 38px; border-radius: 11px; background: linear-gradient(145deg, var(--green-1), var(--green-2)); display: flex; align-items: center; justify-content: center; color: #fff; font-weight: 800; font-size: 14px; letter-spacing: -0.02em; box-shadow: 0 4px 14px rgba(22,163,74,0.3); }
    .logo-name { font-size: 16px; font-weight: 800; letter-spacing: -0.03em; }
    .nav-links { display: flex; align-items: center; gap: 4px; }
    .nav-links a { font-size: 14px; font-weight: 600; color: var(--ink-60); padding: 8px 14px; border-radius: 10px; transition: all 0.2s var(--ease); }
    .nav-links a:hover { color: var(--ink); background: var(--ink-06); }
    .nav-cta { background: var(--ink); color: #fff; border: none; border-radius: 12px; padding: 10px 20px; font-size: 14px; font-weight: 700; letter-spacing: -0.01em; transition: transform 0.2s var(--ease), opacity 0.2s; }
    .nav-cta:hover { opacity: 0.88; transform: translateY(-1px); }
    .nav-burger { display: none; background: none; border: none; font-size: 26px; color: var(--ink); }

    @media (max-width: 860px) {
      .nav-links { position: fixed; inset: 68px 0 auto 0; flex-direction: column; gap: 0; background: rgba(245,245,244,0.98); backdrop-filter: blur(20px); padding: 12px 24px 24px; border-bottom: 1px solid var(--ink-10); transform: translateY(-130%); transition: transform 0.4s var(--ease); align-items: stretch; }
      .nav-links.open { transform: none; }
      .nav-links a { padding: 14px 8px; border-bottom: 1px solid var(--ink-06); border-radius: 0; font-size: 16px; }
      .nav-burger { display: block; }
      .nav-cta { display: none; }
    }

    /* ============================================
       HERO
       ============================================ */
    .hero { position: relative; overflow: hidden; padding: 120px 0 100px; text-align: center; }
    .blobs { position: absolute; inset: 0; pointer-events: none; z-index: 0; }
    .blob { position: absolute; border-radius: 50%; filter: blur(80px); opacity: 0.85; }
    .blob-1 { width: 460px; height: 460px; background: rgba(34,197,94,0.30); top: -140px; right: -80px; animation: float1 11s ease-in-out infinite; }
    .blob-2 { width: 360px; height: 360px; background: rgba(21,128,61,0.24); bottom: -120px; left: -100px; animation: float2 14s ease-in-out infinite; }
    .blob-3 { width: 240px; height: 240px; background: rgba(74,222,128,0.22); top: 36%; left: 30%; animation: float3 9s ease-in-out infinite; }
    @keyframes float1 { 0%,100% { transform: translate(0,0) scale(1); } 50% { transform: translate(-40px,50px) scale(1.14); } }
    @keyframes float2 { 0%,100% { transform: translate(0,0) scale(1); } 50% { transform: translate(46px,-34px) scale(1.2); } }
    @keyframes float3 { 0%,100% { transform: translate(0,0) scale(1); } 33% { transform: translate(24px,-22px) scale(0.85); } 66% { transform: translate(-18px,16px) scale(1.08); } }

    .hero-inner { position: relative; z-index: 1; display: flex; flex-direction: column; align-items: center; gap: 28px; }
    .pill { display: inline-flex; align-items: center; gap: 8px; background: rgba(255,255,255,0.7); border: 1px solid var(--ink-10); border-radius: 100px; padding: 7px 16px; font-size: 13px; font-weight: 700; color: var(--ink-60); letter-spacing: 0.01em; box-shadow: 0 2px 10px rgba(13,13,13,0.04); }
    .pulse { width: 7px; height: 7px; background: var(--green); border-radius: 50%; animation: pulse 1.6s ease-in-out infinite; }
    @keyframes pulse { 0%,100% { opacity: 1; box-shadow: 0 0 0 0 rgba(22,163,74,0.5); } 50% { opacity: 0.6; box-shadow: 0 0 0 6px rgba(22,163,74,0); } }

    .hero h1 { font-size: clamp(52px, 11vw, 104px); font-weight: 800; letter-spacing: -0.05em; line-height: 0.92; max-width: 920px; }
    .hero h1 em { font-style: italic; background: linear-gradient(120deg, var(--green-1), var(--green-2)); -webkit-background-clip: text; background-clip: text; -webkit-text-fill-color: transparent; }
    .hero-sub { font-size: clamp(16px, 2.6vw, 20px); color: var(--ink-60); font-weight: 500; max-width: 540px; line-height: 1.5; }
    .hero-btns { display: flex; gap: 12px; flex-wrap: wrap; justify-content: center; }
    .btn-primary { background: var(--ink); color: #fff; border: none; border-radius: 16px; padding: 16px 28px; font-size: 16px; font-weight: 700; letter-spacing: -0.01em; transition: transform 0.2s var(--ease), opacity 0.2s; }
    .btn-primary:hover { opacity: 0.88; transform: translateY(-2px); }
    .btn-ghost { background: var(--bg-soft); color: var(--ink); border: 2px solid var(--ink-12); border-radius: 16px; padding: 14px 28px; font-size: 16px; font-weight: 700; letter-spacing: -0.01em; transition: border-color 0.2s, transform 0.2s var(--ease); }
    .btn-ghost:hover { border-color: var(--ink-30); transform: translateY(-2px); }

    /* STAT STRIPE */
    .stat-stripe { display: flex; width: 100%; max-width: 640px; margin-top: 18px; background: rgba(255,255,255,0.65); border: 1px solid var(--ink-10); border-radius: var(--radius-lg); overflow: hidden; box-shadow: 0 10px 40px rgba(13,13,13,0.05); }
    .stat { flex: 1; padding: 22px 10px; text-align: center; border-right: 1px solid var(--ink-10); }
    .stat:last-child { border-right: none; }
    .stat-n { font-size: clamp(22px, 5vw, 30px); font-weight: 800; letter-spacing: -0.04em; }
    .stat-l { font-size: 11px; color: var(--ink-40); text-transform: uppercase; letter-spacing: 0.08em; font-weight: 700; margin-top: 4px; }

    /* ============================================
       MARQUEE
       ============================================ */
    .marquee { background: var(--dark); padding: 18px 0; overflow: hidden; white-space: nowrap; }
    .marquee-track { display: inline-block; animation: scroll 28s linear infinite; }
    .marquee:hover .marquee-track { animation-play-state: paused; }
    @keyframes scroll { from { transform: translateX(0); } to { transform: translateX(-50%); } }
    .mq-item { display: inline-flex; align-items: center; gap: 10px; margin-right: 36px; font-size: 15px; font-weight: 700; color: rgba(255,255,255,0.4); letter-spacing: -0.01em; }
    .mq-item b { color: rgba(255,255,255,0.92); }
    .mq-item .dot { color: var(--green-1); }

    /* ============================================
       SECTION SHELL
       ============================================ */
    section.block { padding: 100px 0; }
    .eyebrow { font-size: 13px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.12em; color: var(--green); margin-bottom: 14px; }
    .eyebrow.light { color: var(--green-1); }
    .block h2 { font-size: clamp(34px, 7vw, 64px); font-weight: 800; letter-spacing: -0.045em; line-height: 1.02; margin-bottom: 16px; }
    .block .lead { font-size: clamp(16px, 2.4vw, 19px); color: var(--ink-60); font-weight: 500; max-width: 480px; line-height: 1.5; margin-bottom: 48px; }
    .block.dark { background: var(--dark); color: #fff; }
    .block.dark h2 { color: #fff; }
    .block.dark .lead { color: rgba(255,255,255,0.5); }

    /* ============================================
       PARTIDOS
       ============================================ */
    .matches { display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 18px; }
    .match { background: var(--bg-soft); border: 1px solid var(--ink-10); border-radius: var(--radius-xl); padding: 32px; transition: transform 0.35s var(--ease), box-shadow 0.35s var(--ease); }
    .match:hover { transform: translateY(-6px); box-shadow: 0 24px 60px rgba(13,13,13,0.10); }
    .match-top { display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px; }
    .match-comp { font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.07em; color: var(--ink-40); }
    .match-date { font-size: 13px; font-weight: 600; color: var(--ink-40); }
    .match-teams { display: flex; align-items: center; justify-content: space-between; margin-bottom: 28px; }
    .mteam { flex: 1; }
    .mteam.right { text-align: right; }
    .mteam-name { font-size: 19px; font-weight: 800; letter-spacing: -0.025em; line-height: 1.1; }
    .mteam-tag { font-size: 12px; color: var(--ink-40); margin-top: 4px; }
    .mvs { padding: 0 16px; }
    .mvs span { font-size: 11px; font-weight: 800; color: var(--ink-30); background: var(--ink-06); padding: 5px 11px; border-radius: 8px; letter-spacing: 0.05em; }
    .match-actions { display: flex; gap: 10px; }
    .btn-green { flex: 1; background: var(--green); color: #fff; border: none; border-radius: 12px; padding: 13px; font-size: 14px; font-weight: 700; transition: opacity 0.2s, transform 0.2s var(--ease); }
    .btn-green:hover { opacity: 0.9; transform: translateY(-1px); }
    .btn-soft { background: var(--ink-06); color: var(--ink-60); border: none; border-radius: 12px; padding: 13px 18px; font-size: 14px; font-weight: 700; transition: background 0.2s; }
    .btn-soft:hover { background: var(--ink-10); }

    /* ============================================
       BOLETAS
       ============================================ */
    .ticket { max-width: 640px; background: var(--bg-soft); border: 1px solid var(--ink-10); border-radius: var(--radius-xl); padding: 40px; box-shadow: 0 20px 60px rgba(13,13,13,0.06); }
    .ticket-head { margin-bottom: 28px; }
    .ticket-head h3 { font-size: 24px; font-weight: 800; letter-spacing: -0.03em; }
    .ticket-head p { font-size: 14px; color: var(--ink-40); margin-top: 6px; }
    .zones { display: grid; grid-template-columns: repeat(2, 1fr); gap: 12px; margin-bottom: 28px; }
    .zone { border: 1.5px solid var(--ink-10); border-radius: var(--radius-md); padding: 18px; cursor: pointer; transition: all 0.25s var(--ease); background: var(--bg-soft); }
    .zone:hover { border-color: var(--ink-30); }
    .zone.active { border-color: var(--green); background: var(--green-lt); }
    .zone.sold { opacity: 0.45; pointer-events: none; }
    .zone-name { font-size: 15px; font-weight: 800; letter-spacing: -0.01em; }
    .zone-price { font-size: 28px; font-weight: 800; letter-spacing: -0.04em; margin: 6px 0 8px; }
    .zone-tag { font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; }
    .tag-ok { color: var(--green); }
    .tag-few { color: var(--amber); }
    .tag-no { color: var(--red); }
    .ticket-row { display: flex; align-items: center; justify-content: space-between; padding: 20px 0; border-top: 1px solid var(--ink-10); }
    .ticket-row .label { font-size: 15px; font-weight: 600; color: var(--ink-60); }
    .qty { display: flex; align-items: center; gap: 16px; }
    .qty button { width: 36px; height: 36px; border-radius: 10px; border: 1.5px solid var(--ink-12); background: var(--bg); font-size: 20px; font-weight: 700; color: var(--ink); display: flex; align-items: center; justify-content: center; transition: all 0.2s; }
    .qty button:hover { border-color: var(--green); color: var(--green); }
    .qty .num { font-size: 19px; font-weight: 800; min-width: 24px; text-align: center; }
    .ticket-total { display: flex; align-items: baseline; justify-content: space-between; padding: 22px 0; border-top: 1px solid var(--ink-10); margin-bottom: 24px; }
    .ticket-total .label { font-size: 15px; font-weight: 600; color: var(--ink-60); }
    .ticket-total .amount { font-size: 34px; font-weight: 800; letter-spacing: -0.05em; }
    .btn-full { width: 100%; background: var(--ink); color: #fff; border: none; border-radius: 16px; padding: 18px; font-size: 16px; font-weight: 700; transition: opacity 0.2s, transform 0.2s var(--ease); }
    .btn-full:hover { opacity: 0.88; transform: translateY(-2px); }

    /* ============================================
       LA POLLA
       ============================================ */
    .polla { max-width: 680px; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-radius: var(--radius-xl); padding: 40px; }
    .polla-head { display: flex; align-items: center; gap: 14px; flex-wrap: wrap; margin-bottom: 32px; }
    .polla-head h3 { font-size: 21px; font-weight: 800; letter-spacing: -0.03em; color: #fff; }
    .polla-points { display: inline-flex; align-items: center; gap: 6px; background: rgba(74,222,128,0.14); border: 1px solid rgba(74,222,128,0.3); border-radius: 10px; padding: 6px 13px; font-size: 13px; font-weight: 700; color: var(--green-1); }
    .question { margin-bottom: 28px; }
    .q-label { font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.09em; color: var(--green-1); margin-bottom: 8px; }
    .q-text { font-size: 17px; font-weight: 700; color: #fff; letter-spacing: -0.01em; margin-bottom: 14px; }
    .q-options { display: flex; flex-wrap: wrap; gap: 8px; }
    .q-opt { padding: 11px 20px; border: 1.5px solid rgba(255,255,255,0.14); border-radius: 12px; background: rgba(255,255,255,0.05); color: rgba(255,255,255,0.55); font-size: 14px; font-weight: 600; transition: all 0.2s var(--ease); }
    .q-opt:hover { border-color: rgba(255,255,255,0.4); color: #fff; }
    .q-opt.active { background: rgba(74,222,128,0.16); border-color: rgba(74,222,128,0.5); color: var(--green-1); }
    .score-pick { display: flex; align-items: center; gap: 14px; }
    .score-team { font-size: 13px; color: rgba(255,255,255,0.4); flex: 1; }
    .score-team.right { text-align: right; }
    .score-in { width: 64px; height: 64px; text-align: center; font-size: 30px; font-weight: 800; background: rgba(255,255,255,0.07); border: 1.5px solid rgba(255,255,255,0.16); border-radius: var(--radius-md); color: #fff; font-family: var(--font); letter-spacing: -0.03em; }
    .score-in:focus { outline: none; border-color: var(--green-1); }
    .score-dash { font-size: 28px; color: rgba(255,255,255,0.25); font-weight: 700; }
    .btn-submit { width: 100%; background: var(--green); color: #fff; border: none; border-radius: 16px; padding: 18px; font-size: 16px; font-weight: 700; margin-top: 12px; transition: opacity 0.2s, transform 0.2s var(--ease); }
    .btn-submit:hover { opacity: 0.9; transform: translateY(-2px); }

    /* ============================================
       PUNTOS
       ============================================ */
    .points-layout { display: grid; grid-template-columns: 1fr 1.1fr; gap: 28px; align-items: start; }
    @media (max-width: 860px) { .points-layout { grid-template-columns: 1fr; } }
    .points-card { background: var(--bg-soft); border: 1px solid var(--ink-10); border-radius: var(--radius-xl); padding: 44px 32px; text-align: center; box-shadow: 0 20px 60px rgba(13,13,13,0.05); }
    .points-num { font-size: clamp(64px, 14vw, 92px); font-weight: 800; letter-spacing: -0.07em; line-height: 1; background: linear-gradient(120deg, var(--green-1), var(--green-2)); -webkit-background-clip: text; background-clip: text; -webkit-text-fill-color: transparent; }
    .points-label { font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.09em; color: var(--ink-40); margin: 8px 0 28px; }
    .progress { height: 8px; background: var(--ink-06); border-radius: 100px; overflow: hidden; margin-bottom: 10px; }
    .progress-fill { height: 100%; background: linear-gradient(90deg, var(--green-1), var(--green)); border-radius: 100px; transition: width 0.8s var(--ease); }
    .progress-row { display: flex; justify-content: space-between; font-size: 12px; font-weight: 600; color: var(--ink-40); }
    .rewards { display: flex; flex-direction: column; gap: 12px; }
    .reward { display: flex; align-items: center; gap: 16px; background: var(--bg-soft); border: 1px solid var(--ink-10); border-radius: var(--radius-lg); padding: 18px 20px; transition: transform 0.3s var(--ease), box-shadow 0.3s var(--ease); }
    .reward:hover { transform: translateX(4px); box-shadow: 0 10px 30px rgba(13,13,13,0.06); }
    .reward-icon { width: 48px; height: 48px; border-radius: 14px; background: var(--green-lt); display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
    .reward-icon svg { width: 24px; height: 24px; stroke: var(--green); }
    .reward-info { flex: 1; }
    .reward-name { font-size: 16px; font-weight: 700; letter-spacing: -0.01em; }
    .reward-cost { font-size: 13px; color: var(--ink-40); margin-top: 2px; }
    .reward-btn { padding: 10px 18px; border-radius: 11px; font-size: 13px; font-weight: 700; border: 1.5px solid var(--ink-12); background: var(--bg); color: var(--ink-40); transition: all 0.2s; flex-shrink: 0; }
    .reward-btn.can { border-color: var(--green); background: var(--green-lt); color: var(--green); }
    .reward-btn.can:hover { background: var(--green); color: #fff; }

    .history { margin-top: 56px; }
    .history h3 { font-size: 18px; font-weight: 800; letter-spacing: -0.02em; margin-bottom: 8px; }
    .hist-row { display: flex; align-items: center; justify-content: space-between; padding: 18px 0; border-bottom: 1px solid var(--ink-10); }
    .hist-name { font-size: 15px; font-weight: 700; }
    .hist-sub { font-size: 13px; color: var(--ink-40); margin-top: 3px; }
    .hist-pts { font-size: 16px; font-weight: 800; color: var(--green); }

    /* ============================================
       FOOTER
       ============================================ */
    footer { background: var(--dark); color: #fff; padding: 72px 0 40px; }
    .foot-top { display: flex; justify-content: space-between; flex-wrap: wrap; gap: 40px; margin-bottom: 48px; }
    .foot-brand { max-width: 320px; }
    .foot-logo { display: flex; align-items: center; gap: 11px; margin-bottom: 16px; }
    .foot-logo .logo-mark { box-shadow: none; }
    .foot-logo span { font-size: 18px; font-weight: 800; letter-spacing: -0.03em; }
    .foot-desc { font-size: 14px; color: rgba(255,255,255,0.4); line-height: 1.6; }
    .foot-cols { display: flex; gap: 56px; flex-wrap: wrap; }
    .foot-col h4 { font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; color: rgba(255,255,255,0.35); margin-bottom: 16px; }
    .foot-col a { display: block; font-size: 14px; font-weight: 600; color: rgba(255,255,255,0.6); padding: 6px 0; transition: color 0.2s; }
    .foot-col a:hover { color: #fff; }
    .foot-bottom { border-top: 1px solid rgba(255,255,255,0.08); padding-top: 28px; display: flex; justify-content: space-between; flex-wrap: wrap; gap: 12px; }
    .foot-bottom p { font-size: 13px; color: rgba(255,255,255,0.3); }

    /* TOAST */
    .toast { position: fixed; bottom: 28px; left: 50%; transform: translate(-50%, 120px); background: var(--ink); color: #fff; padding: 16px 24px; border-radius: 14px; font-size: 14px; font-weight: 600; box-shadow: 0 16px 50px rgba(0,0,0,0.3); z-index: 1000; transition: transform 0.45s var(--ease); max-width: 90%; text-align: center; }
    .toast.show { transform: translate(-50%, 0); }
  </style>
</head>
<body>

  <!-- TOP BAR -->
  <div class="topbar">Temporada Apertura LPF 2026 en curso — <b>Árabe Unido va 2° en la tabla</b> · 3 partidos en casa este mes</div>

  <!-- NAV -->
  <nav class="nav">
    <div class="wrap nav-inner">
      <a href="#inicio" class="logo">
        <div class="logo-mark">AU</div>
        <span class="logo-name">Árabe Unido</span>
      </a>
      <div class="nav-links" id="navLinks">
        <a href="#partidos">Partidos</a>
        <a href="#boletas">Boletas</a>
        <a href="#polla">La Polla</a>
        <a href="#puntos">Mis puntos</a>
      </div>
      <button class="nav-cta" onclick="goTo('boletas')">Comprar boleta</button>
      <button class="nav-burger" id="burger" aria-label="Menú">☰</button>
    </div>
  </nav>

  <!-- HERO -->
  <header class="hero" id="inicio">
    <div class="blobs">
      <div class="blob blob-1"></div>
      <div class="blob blob-2"></div>
      <div class="blob blob-3"></div>
    </div>
    <div class="wrap hero-inner">
      <div class="pill reveal"><span class="pulse"></span> Colón, Panamá · Fundado en 1946</div>
      <h1 class="reveal d1">Tu club, <em>tu estadio</em>,<br>tu pasión.</h1>
      <p class="hero-sub reveal d2">Compra boletas, predice resultados en La Polla y acumula puntos para canjear en entradas y merch oficial del club.</p>
      <div class="hero-btns reveal d3">
        <button class="btn-primary" onclick="goTo('boletas')">Comprar boleta →</button>
        <button class="btn-ghost" onclick="goTo('polla')">Jugar La Polla</button>
      </div>
      <div class="stat-stripe reveal d3">
        <div class="stat"><div class="stat-n">2°</div><div class="stat-l">Posición LPF</div></div>
        <div class="stat"><div class="stat-n">8–3–2</div><div class="stat-l">G · E · P</div></div>
        <div class="stat"><div class="stat-n">27 pts</div><div class="stat-l">Temporada</div></div>
      </div>
    </div>
  </header>

  <!-- MARQUEE -->
  <div class="marquee">
    <div class="marquee-track" id="marqueeTrack">
      <span class="mq-item"><span class="dot">●</span> <b>vs Tauro FC</b> · Sáb 20 Jun</span>
      <span class="mq-item"><span class="dot">●</span> <b>vs Plaza Amador</b> · Mié 25 Jun</span>
      <span class="mq-item"><span class="dot">●</span> <b>vs San Francisco FC</b> · Sáb 28 Jun</span>
      <span class="mq-item"><span class="dot">●</span> <b>vs Sporting SM</b> · Sáb 05 Jul</span>
      <span class="mq-item"><span class="dot">●</span> <b>vs Alianza FC</b> · Mié 09 Jul</span>
      <span class="mq-item"><span class="dot">●</span> <b>vs Chorrillo FC</b> · Sáb 12 Jul</span>
    </div>
  </div>

  <!-- PARTIDOS -->
  <section class="block" id="partidos">
    <div class="wrap">
      <p class="eyebrow reveal">Calendario</p>
      <h2 class="reveal">Próximos partidos</h2>
      <p class="lead reveal d1">Liga Panameña de Fútbol · Apertura 2026. Asegura tu lugar en el Estadio Armando Dely Valdés.</p>
      <div class="matches">
        <div class="match reveal">
          <div class="match-top"><span class="match-comp">LPF · Jornada 14</span><span class="match-date">Sáb 20 Jun · 7:00 PM</span></div>
          <div class="match-teams">
            <div class="mteam"><div class="mteam-name">Árabe Unido</div><div class="mteam-tag">Local · Colón</div></div>
            <div class="mvs"><span>VS</span></div>
            <div class="mteam right"><div class="mteam-name">Tauro FC</div><div class="mteam-tag">Visitante</div></div>
          </div>
          <div class="match-actions">
            <button class="btn-green" onclick="goTo('boletas')">Comprar boleta</button>
            <button class="btn-soft" onclick="goTo('polla')">Predecir</button>
          </div>
        </div>
        <div class="match reveal d1">
          <div class="match-top"><span class="match-comp">LPF · Jornada 15</span><span class="match-date">Mié 25 Jun · 8:00 PM</span></div>
          <div class="match-teams">
            <div class="mteam"><div class="mteam-name">Plaza Amador</div><div class="mteam-tag">Local</div></div>
            <div class="mvs"><span>VS</span></div>
            <div class="mteam right"><div class="mteam-name">Árabe Unido</div><div class="mteam-tag">Visitante</div></div>
          </div>
          <div class="match-actions">
            <button class="btn-green" onclick="toast('Entradas de visitante disponibles pronto')">Ver entradas</button>
            <button class="btn-soft" onclick="goTo('polla')">Predecir</button>
          </div>
        </div>
        <div class="match reveal d2">
          <div class="match-top"><span class="match-comp">LPF · Jornada 16</span><span class="match-date">Sáb 28 Jun · 7:00 PM</span></div>
          <div class="match-teams">
            <div class="mteam"><div class="mteam-name">Árabe Unido</div><div class="mteam-tag">Local · Colón</div></div>
            <div class="mvs"><span>VS</span></div>
            <div class="mteam right"><div class="mteam-name">San Francisco FC</div><div class="mteam-tag">Visitante</div></div>
          </div>
          <div class="match-actions">
            <button class="btn-green" onclick="goTo('boletas')">Comprar boleta</button>
            <button class="btn-soft" onclick="goTo('polla')">Predecir</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- BOLETAS -->
  <section class="block" id="boletas" style="background: var(--bg-soft); border-top: 1px solid var(--ink-10); border-bottom: 1px solid var(--ink-10);">
    <div class="wrap">
      <p class="eyebrow reveal">Entradas</p>
      <h2 class="reveal">Compra tu boleta</h2>
      <p class="lead reveal d1">Árabe Unido vs Tauro FC · Sábado 20 Jun, 7:00 PM · Est. Armando Dely Valdés</p>
      <div class="ticket reveal d1">
        <div class="ticket-head">
          <h3>Selecciona tu zona</h3>
          <p>Precios en USD · Pago seguro vía PSE / tarjeta</p>
        </div>
        <div class="zones" id="zones">
          <div class="zone active" data-price="5" onclick="selectZone(this,5)">
            <div class="zone-name">General</div>
            <div class="zone-price">$5</div>
            <div class="zone-tag tag-ok">Disponible</div>
          </div>
          <div class="zone" data-price="10" onclick="selectZone(this,10)">
            <div class="zone-name">Preferencia</div>
            <div class="zone-price">$10</div>
            <div class="zone-tag tag-ok">Disponible</div>
          </div>
          <div class="zone" data-price="20" onclick="selectZone(this,20)">
            <div class="zone-name">VIP</div>
            <div class="zone-price">$20</div>
            <div class="zone-tag tag-few">Pocos lugares</div>
          </div>
          <div class="zone sold">
            <div class="zone-name">Palco</div>
            <div class="zone-price">$35</div>
            <div class="zone-tag tag-no">Agotado</div>
          </div>
        </div>
        <div class="ticket-row">
          <span class="label">Cantidad de boletas</span>
          <div class="qty">
            <button onclick="changeQty(-1)">−</button>
            <span class="num" id="qty">1</span>
            <button onclick="changeQty(1)">+</button>
          </div>
        </div>
        <div class="ticket-total">
          <span class="label">Total a pagar</span>
          <span class="amount" id="total">$5.00</span>
        </div>
        <button class="btn-full" onclick="toast('Demo: redirigiendo a pago seguro PSE...')">Confirmar y pagar</button>
      </div>
    </div>
  </section>

  <!-- LA POLLA -->
  <section class="block dark" id="polla">
    <div class="wrap">
      <p class="eyebrow light reveal">Fan engagement</p>
      <h2 class="reveal">La Polla</h2>
      <p class="lead reveal d1">Predice los 4 datos clave del partido. Acumula puntos por participar y gana más si aciertas.</p>
      <div class="polla reveal d1">
        <div class="polla-head">
          <h3>Árabe Unido vs Tauro FC</h3>
          <span class="polla-points">★ Hasta +120 pts</span>
        </div>
        <div class="question">
          <div class="q-label">Pregunta 1</div>
          <div class="q-text">¿Quién gana el partido?</div>
          <div class="q-options">
            <button class="q-opt" data-group="r1" onclick="pick(this)">Árabe Unido</button>
            <button class="q-opt" data-group="r1" onclick="pick(this)">Empate</button>
            <button class="q-opt" data-group="r1" onclick="pick(this)">Tauro FC</button>
          </div>
        </div>
        <div class="question">
          <div class="q-label">Pregunta 2</div>
          <div class="q-text">Marcador exacto al final</div>
          <div class="score-pick">
            <span class="score-team">Árabe U.</span>
            <input class="score-in" type="number" min="0" max="9" value="2" id="s1">
            <span class="score-dash">–</span>
            <input class="score-in" type="number" min="0" max="9" value="1" id="s2">
            <span class="score-team right">Tauro FC</span>
          </div>
        </div>
        <div class="question">
          <div class="q-label">Pregunta 3</div>
          <div class="q-text">¿Habrá gol en los primeros 15 minutos?</div>
          <div class="q-options">
            <button class="q-opt" data-group="r2" onclick="pick(this)">Sí</button>
            <button class="q-opt" data-group="r2" onclick="pick(this)">No</button>
          </div>
        </div>
        <div class="question">
          <div class="q-label">Pregunta 4</div>
          <div class="q-text">Total de goles en el partido</div>
          <div class="q-options">
            <button class="q-opt" data-group="r3" onclick="pick(this)">0 – 1</button>
            <button class="q-opt" data-group="r3" onclick="pick(this)">2 – 3</button>
            <button class="q-opt" data-group="r3" onclick="pick(this)">4 o más</button>
          </div>
        </div>
        <button class="btn-submit" onclick="submitPolla()">Enviar predicción</button>
      </div>
    </div>
  </section>

  <!-- PUNTOS -->
  <section class="block" id="puntos">
    <div class="wrap">
      <p class="eyebrow reveal">Recompensas</p>
      <h2 class="reveal">Mis puntos</h2>
      <p class="lead reveal d1">Gana puntos prediciendo en La Polla y canjéalos por boletas o merch oficial del club.</p>
      <div class="points-layout">
        <div class="points-card reveal">
          <div class="points-num" id="pointsNum">340</div>
          <div class="points-label">puntos acumulados</div>
          <div class="progress"><div class="progress-fill" id="progressFill" style="width: 34%;"></div></div>
          <div class="progress-row"><span>0</span><span>1.000 pts = boleta gratis</span></div>
        </div>
        <div class="rewards reveal d1">
          <div class="reward">
            <div class="reward-icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 5v2M15 11v2M15 17v2M5 5h14a2 2 0 0 1 2 2v3a2 2 0 0 0 0 4v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-3a2 2 0 0 0 0-4V7a2 2 0 0 1 2-2"/></svg></div>
            <div class="reward-info"><div class="reward-name">Boleta General</div><div class="reward-cost">500 puntos</div></div>
            <button class="reward-btn" onclick="redeem(500,'Boleta General')">Canjear</button>
          </div>
          <div class="reward">
            <div class="reward-icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 4l6 2v5h-3v9H6v-9H3V6l6-2a3 3 0 0 0 6 0"/></svg></div>
            <div class="reward-info"><div class="reward-name">Camiseta oficial</div><div class="reward-cost">2.000 puntos</div></div>
            <button class="reward-btn" onclick="redeem(2000,'Camiseta oficial')">Canjear</button>
          </div>
          <div class="reward">
            <div class="reward-icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 8l4 4 5-7 5 7 4-4v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg></div>
            <div class="reward-info"><div class="reward-name">Boleta VIP</div><div class="reward-cost">1.500 puntos</div></div>
            <button class="reward-btn" onclick="redeem(1500,'Boleta VIP')">Canjear</button>
          </div>
        </div>
      </div>
      <div class="history reveal">
        <h3>Historial de puntos</h3>
        <div class="hist-row"><div><div class="hist-name">vs Sporting SM · 08 Jun</div><div class="hist-sub">Marcador exacto 2–0 acertado</div></div><div class="hist-pts">+80 pts</div></div>
        <div class="hist-row"><div><div class="hist-name">vs Chorrillo FC · 01 Jun</div><div class="hist-sub">Resultado correcto</div></div><div class="hist-pts">+40 pts</div></div>
        <div class="hist-row"><div><div class="hist-name">vs Alianza FC · 22 May</div><div class="hist-sub">2 de 4 predicciones correctas</div></div><div class="hist-pts">+20 pts</div></div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    <div class="wrap">
      <div class="foot-top">
        <div class="foot-brand">
          <div class="foot-logo"><div class="logo-mark">AU</div><span>Árabe Unido</span></div>
          <p class="foot-desc">Club Deportivo Árabe Unido. Colón, Panamá. Fundado en 1946. Vive el fútbol como nunca antes.</p>
        </div>
        <div class="foot-cols">
          <div class="foot-col">
            <h4>El club</h4>
            <a href="#partidos">Partidos</a>
            <a href="#boletas">Boletas</a>
            <a href="#">Plantilla</a>
            <a href="#">Historia</a>
          </div>
          <div class="foot-col">
            <h4>Fans</h4>
            <a href="#polla">La Polla</a>
            <a href="#puntos">Mis puntos</a>
            <a href="#">Merch oficial</a>
            <a href="#">Socios</a>
          </div>
          <div class="foot-col">
            <h4>Contacto</h4>
            <a href="#">Estadio</a>
            <a href="#">Prensa</a>
            <a href="#">Soporte</a>
          </div>
        </div>
      </div>
      <div class="foot-bottom">
        <p>© 2026 Club Deportivo Árabe Unido. Todos los derechos reservados.</p>
        <p>Demo · Hecho en Panamá 🇵🇦</p>
      </div>
    </div>
  </footer>

  <div class="toast" id="toast"></div>

  <script>
    /* ============================================
       NAV MÓVIL
       ============================================ */
    const burger = document.getElementById('burger');
    const navLinks = document.getElementById('navLinks');
    burger.addEventListener('click', () => navLinks.classList.toggle('open'));
    navLinks.querySelectorAll('a').forEach(a => a.addEventListener('click', () => navLinks.classList.remove('open')));

    function goTo(id) {
      document.getElementById(id).scrollIntoView({ behavior: 'smooth' });
    }

    /* ============================================
       SCROLL REVEAL (IntersectionObserver)
       ============================================ */
    const io = new IntersectionObserver((entries) => {
      entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); } });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
    document.querySelectorAll('.reveal').forEach(el => io.observe(el));

    /* ============================================
       MARQUEE (duplicar para loop infinito)
       ============================================ */
    const track = document.getElementById('marqueeTrack');
    track.innerHTML += track.innerHTML;

    /* ============================================
       BOLETAS
       ============================================ */
    let zonePrice = 5, qty = 1;
    function selectZone(el, price) {
      document.querySelectorAll('.zone').forEach(z => z.classList.remove('active'));
      el.classList.add('active');
      zonePrice = price;
      updateTotal();
    }
    function changeQty(delta) {
      qty = Math.max(1, Math.min(10, qty + delta));
      document.getElementById('qty').textContent = qty;
      updateTotal();
    }
    function updateTotal() {
      document.getElementById('total').textContent = '$' + (zonePrice * qty).toFixed(2);
    }

    /* ============================================
       LA POLLA
       ============================================ */
    function pick(el) {
      const group = el.dataset.group;
      document.querySelectorAll('.q-opt[data-group="' + group + '"]').forEach(o => o.classList.remove('active'));
      el.classList.add('active');
    }
    function submitPolla() {
      const answered = new Set([...document.querySelectorAll('.q-opt.active')].map(o => o.dataset.group)).size;
      if (answered < 3) { toast('Responde las 4 preguntas antes de enviar'); return; }
      addPoints(30);
      toast('¡Predicción enviada! +30 pts por participar · hasta +90 más si aciertas');
    }

    /* ============================================
       PUNTOS
       ============================================ */
    function addPoints(n) {
      const el = document.getElementById('pointsNum');
      const total = parseInt(el.textContent.replace(/\D/g, '')) + n;
      el.textContent = total;
      document.getElementById('progressFill').style.width = Math.min(100, (total / 1000) * 100) + '%';
    }
    function redeem(cost, name) {
      const el = document.getElementById('pointsNum');
      const current = parseInt(el.textContent.replace(/\D/g, ''));
      if (current < cost) { toast('Te faltan ' + (cost - current) + ' puntos para ' + name); return; }
      el.textContent = current - cost;
      document.getElementById('progressFill').style.width = Math.min(100, ((current - cost) / 1000) * 100) + '%';
      toast('¡Listo! Tu ' + name + ' fue reservada 🎉');
    }

    /* ============================================
       TOAST
       ============================================ */
    let toastTimer;
    function toast(msg) {
      const t = document.getElementById('toast');
      t.textContent = msg;
      t.classList.add('show');
      clearTimeout(toastTimer);
      toastTimer = setTimeout(() => t.classList.remove('show'), 3200);
    }

    /* ============================================
       NAVBAR SHADOW ON SCROLL
       ============================================ */
    const nav = document.querySelector('.nav');
    window.addEventListener('scroll', () => {
      nav.style.boxShadow = window.scrollY > 10 ? '0 4px 24px rgba(13,13,13,0.05)' : 'none';
    });
  </script>
</body>
</html>
