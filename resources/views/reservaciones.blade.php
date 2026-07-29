@extends('layouts.finca')

@section('title', 'Reservaciones — Hotel La Finca del Minero')

@section('head')
<meta name="description" content="Reserva tu habitación directo con Hotel La Finca del Minero por WhatsApp. Sin intermediarios, mejor precio garantizado en Zacatecas.">
<meta property="og:description" content="Reserva tu habitación directo con Hotel La Finca del Minero por WhatsApp. Sin intermediarios, mejor precio garantizado en Zacatecas.">
<link rel="preload" as="image" fetchpriority="high" href="https://images.unsplash.com/photo-1611892440504-42a792e24d32?w=1800&q=80">
@endsection

@section('styles')
<style>
  .price-compare{display:flex;gap:18px;align-items:stretch;flex-wrap:wrap}
  .grid-trust{display:grid;grid-template-columns:1fr;gap:14px}
  @media(min-width:520px){.grid-trust{grid-template-columns:repeat(auto-fit,minmax(180px,1fr))}}
</style>
@endsection

@section('content')

  <!-- ===== PAGE HEADER ===== -->
  <section style="background:linear-gradient(180deg,rgba(20,11,5,.55),rgba(20,11,5,.82)),url('https://images.unsplash.com/photo-1611892440504-42a792e24d32?w=1800&q=80') center/cover;background-color:#2C1A0E;color:#fff;padding:clamp(40px,8vw,60px) 16px clamp(44px,8vw,64px);text-align:center">
    <span style="font-size:11px;letter-spacing:3px;text-transform:uppercase;color:#E2C16A;font-weight:600">Reserva directa</span>
    <h1 style="font-family:'Playfair Display',serif;font-size:clamp(24px,5vw,52px);font-weight:700;margin-top:10px;line-height:1.05;max-width:20ch;margin-left:auto;margin-right:auto;text-wrap:balance">Reserva tu habitación directamente con nosotros</h1>
    <p style="margin-top:14px;font-size:clamp(14px,2vw,17px);color:rgba(255,255,255,.8);max-width:52ch;margin-left:auto;margin-right:auto;line-height:1.6;font-weight:300">Sin intermediarios. El mejor precio, siempre, está aquí.</p>
  </section>

  <!-- ===== PRICE COMPARISON CALLOUT ===== -->
  <section style="max-width:760px;margin:-38px auto 0;padding:0 16px;position:relative;z-index:5">
    <div style="background:#fff;border:1px solid rgba(184,146,42,.35);border-radius:7px;box-shadow:0 16px 46px rgba(44,26,14,.16);padding:clamp(20px,4vw,30px);display:flex;gap:18px;align-items:center;justify-content:center;flex-wrap:wrap">
      <div class="price-compare">
        <div style="flex:1;min-width:140px;background:#FAF6F0;border:2px solid #9B1C1C;border-radius:6px;padding:22px;text-align:center;position:relative">
          <span style="position:absolute;top:-11px;left:50%;transform:translateX(-50%);background:#9B1C1C;color:#fff;font-size:10px;letter-spacing:1.5px;text-transform:uppercase;font-weight:700;padding:4px 12px;border-radius:20px;white-space:nowrap">Reservando directo</span>
          <div style="font-family:'Playfair Display',serif;font-size:clamp(34px,8vw,44px);font-weight:700;color:#9B1C1C;margin-top:8px">890</div>
          <div style="font-size:11px;color:#746553;letter-spacing:1px">MXN / noche</div>
        </div>
        <div style="font-size:22px;color:#7d6318;font-weight:300;align-self:center">vs</div>
        <div style="flex:1;min-width:140px;background:#FAF6F0;border:1px solid #e3d9cc;border-radius:6px;padding:22px;text-align:center;opacity:.85">
          <span style="font-size:10px;letter-spacing:1.5px;text-transform:uppercase;color:#746553;font-weight:600">En otros sitios</span>
          <div style="font-family:'Playfair Display',serif;font-size:clamp(34px,8vw,44px);font-weight:700;color:#746553;margin-top:8px;text-decoration:line-through;text-decoration-color:rgba(155,28,28,.4)">1,023</div>
          <div style="font-size:11px;color:#746553;letter-spacing:1px">MXN / noche</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== WHATSAPP CTA ===== -->
  <section style="max-width:760px;margin:0 auto;padding:clamp(28px,5vw,40px) 16px 16px">
    <div style="background:#fff;border:1px solid rgba(44,26,14,.06);border-radius:7px;box-shadow:0 10px 36px rgba(44,26,14,.1);padding:clamp(20px,4vw,36px);text-align:center">
      <h2 style="font-family:'Playfair Display',serif;font-size:clamp(20px,4vw,26px);font-weight:600">Completa tu reservación por WhatsApp</h2>
      <p style="font-size:13px;color:#746553;margin-top:5px">Cuéntanos tus fechas y te confirmamos al instante.</p>
      <a href="{{ config('hotel.whatsapp_url') }}?text={{ urlencode('Hola, quiero reservar una habitación en Hotel La Finca del Minero.') }}" target="_blank" rel="noopener" style="display:inline-flex;align-items:center;gap:10px;justify-content:center;width:100%;margin-top:22px;padding:16px;background:#0e7a3d;color:#fff;font-size:17px;font-weight:600;border-radius:3px;box-shadow:0 6px 20px rgba(14,122,61,.35)">
        <svg viewBox="0 0 448 512" width="20" height="20" fill="#fff" aria-hidden="true"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
        Reservar por WhatsApp
      </a>
    </div>
  </section>

  <!-- ===== TRUST BLOCK ===== -->
  <section style="max-width:760px;margin:0 auto;padding:16px 16px clamp(44px,8vw,70px)">
    <div class="grid-trust">
      <div style="background:#fff;border:1px solid rgba(44,26,14,.06);border-radius:6px;padding:20px;text-align:center;box-shadow:0 6px 18px rgba(44,26,14,.05)">
        <div style="font-size:20px;color:#7d6318">✓</div>
        <h3 style="font-family:'Playfair Display',serif;font-size:16px;font-weight:600;margin-top:8px">Sin cargos extra</h3>
        <p style="font-size:12px;color:#746553;margin-top:4px">El precio que ves es el que pagas.</p>
      </div>
      <div style="background:#fff;border:1px solid rgba(44,26,14,.06);border-radius:6px;padding:20px;text-align:center;box-shadow:0 6px 18px rgba(44,26,14,.05)">
        <div style="font-size:20px;color:#7d6318">✓</div>
        <h3 style="font-family:'Playfair Display',serif;font-size:16px;font-weight:600;margin-top:8px">Confirmación inmediata</h3>
        <p style="font-size:12px;color:#746553;margin-top:4px">Recibe tu confirmación al instante.</p>
      </div>
      <div style="background:#fff;border:1px solid rgba(44,26,14,.06);border-radius:6px;padding:20px;text-align:center;box-shadow:0 6px 18px rgba(44,26,14,.05)">
        <div style="font-size:20px;color:#7d6318">✓</div>
        <h3 style="font-family:'Playfair Display',serif;font-size:16px;font-weight:600;margin-top:8px">Mejor precio garantizado</h3>
        <p style="font-size:12px;color:#746553;margin-top:4px">Siempre al mejor precio, directo.</p>
      </div>
    </div>
  </section>

  <!-- ===== PRE-FOOTER CTA ===== -->
  <section style="background:#2C1A0E;color:#fff;text-align:center;padding:clamp(44px,8vw,70px) 16px">
    <h2 style="font-family:'Playfair Display',serif;font-size:clamp(24px,5vw,48px);font-weight:700">¿Listo para hospedarte?</h2>
    <p style="margin-top:12px;font-size:clamp(14px,2vw,17px);color:rgba(255,255,255,.7);font-weight:300">¿Dudas antes de reservar? Llámanos sin costo al 01 800 215 2604.</p>
    <a href="{{ route('contacto') }}" style="display:inline-block;margin-top:22px;padding:15px 36px;background:#9B1C1C;color:#fff;font-size:16px;font-weight:600;border-radius:3px;box-shadow:0 8px 26px rgba(155,28,28,.45)">Contáctanos</a>
  </section>

@endsection
