@extends('layouts.finca')

@section('title', 'Servicios — Hotel La Finca del Minero')

@section('head')
<meta name="description" content="Restaurante, WiFi, estacionamiento y el Salón El César para eventos en Hotel La Finca del Minero, Centro Histórico de Zacatecas.">
<meta property="og:description" content="Restaurante, WiFi, estacionamiento y el Salón El César para eventos en Hotel La Finca del Minero, Centro Histórico de Zacatecas.">
<link rel="preload" as="image" fetchpriority="high" href="{{ asset('images/salon-el-cesar-hotel-la-finca-del-minero-zacatecas-01.webp') }}">
@endsection

@section('styles')
<style>
  .grid-icons{display:grid;grid-template-columns:repeat(2,1fr);gap:12px}
  @media(min-width:600px){.grid-icons{grid-template-columns:repeat(auto-fit,minmax(175px,1fr));gap:18px}}
  .grid-features{display:grid;grid-template-columns:1fr;gap:12px;margin-top:22px}
  @media(min-width:600px){.grid-features{grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:20px;margin-top:34px}}
  .grid-gallery{display:grid;grid-template-columns:repeat(2,1fr);gap:10px;margin-top:16px}
  @media(min-width:600px){.grid-gallery{grid-template-columns:repeat(4,1fr);gap:14px;margin-top:24px}}
</style>
@endsection

@section('content')

  <!-- ===== PAGE HEADER ===== -->
  <section style="max-width:1140px;margin:0 auto;padding:clamp(32px,6vw,60px) 16px clamp(16px,3vw,30px);text-align:center">
    <span style="font-size:11px;letter-spacing:3px;text-transform:uppercase;color:#7d6318;font-weight:600">Todo para tu estancia</span>
    <h1 style="font-family:'Playfair Display',serif;font-size:clamp(24px,5vw,50px);font-weight:700;margin-top:10px;line-height:1.08;max-width:20ch;margin-left:auto;margin-right:auto;text-wrap:balance">Servicios del Hotel La Finca del Minero</h1>
    <p style="margin-top:12px;font-size:clamp(14px,2vw,17px);color:#6b5d4f;max-width:48ch;margin-left:auto;margin-right:auto;line-height:1.65">Comodidades pensadas para que te sientas como en casa, en el corazón de Zacatecas.</p>
  </section>

  <!-- ===== ICON GRID ===== -->
  <section style="max-width:1140px;margin:0 auto;padding:8px 16px clamp(32px,5vw,56px)">
    <div class="grid-icons">
      <div style="background:#fff;border:1px solid rgba(44,26,14,.06);border-radius:6px;padding:22px 14px;text-align:center;box-shadow:0 4px 16px rgba(44,26,14,.06)">
        <div style="font-size:26px;color:#9B1C1C">⌘</div>
        <h2 style="font-family:'Playfair Display',serif;font-size:clamp(15px,3vw,19px);font-weight:600;margin-top:10px">WiFi</h2>
        <p style="font-size:12px;color:#746553;margin-top:5px;line-height:1.5">Internet de alta velocidad en todo el hotel</p>
      </div>
      <div style="background:#fff;border:1px solid rgba(44,26,14,.06);border-radius:6px;padding:22px 14px;text-align:center;box-shadow:0 4px 16px rgba(44,26,14,.06)">
        <div style="font-size:26px;color:#9B1C1C">✦</div>
        <h2 style="font-family:'Playfair Display',serif;font-size:clamp(15px,3vw,19px);font-weight:600;margin-top:10px">Restaurante</h2>
        <p style="font-size:12px;color:#746553;margin-top:5px;line-height:1.5">Cocina regional y desayunos caseros</p>
      </div>
      <div style="background:#fff;border:1px solid rgba(44,26,14,.06);border-radius:6px;padding:22px 14px;text-align:center;box-shadow:0 4px 16px rgba(44,26,14,.06)">
        <div style="font-size:26px;color:#9B1C1C">⊟</div>
        <h2 style="font-family:'Playfair Display',serif;font-size:clamp(15px,3vw,19px);font-weight:600;margin-top:10px">Estacionamiento</h2>
        <p style="font-size:12px;color:#746553;margin-top:5px;line-height:1.5">Espacio seguro para tu vehículo</p>
        <a href="{{ route('estacionamiento') }}" style="display:inline-block;margin-top:8px;font-size:11px;font-weight:600;color:#9B1C1C;border-bottom:1px solid rgba(155,28,28,.4)">Ver detalles →</a>
      </div>
      <div style="background:#fff;border:1px solid rgba(44,26,14,.06);border-radius:6px;padding:22px 14px;text-align:center;box-shadow:0 4px 16px rgba(44,26,14,.06)">
        <div style="font-size:26px;color:#9B1C1C">◴</div>
        <h2 style="font-family:'Playfair Display',serif;font-size:clamp(15px,3vw,19px);font-weight:600;margin-top:10px">Despertador</h2>
        <p style="font-size:12px;color:#746553;margin-top:5px;line-height:1.5">Servicio de despertador a tu hora</p>
      </div>
      <div style="background:#fff;border:1px solid rgba(44,26,14,.06);border-radius:6px;padding:22px 14px;text-align:center;box-shadow:0 4px 16px rgba(44,26,14,.06)">
        <div style="font-size:26px;color:#9B1C1C">▦</div>
        <h2 style="font-family:'Playfair Display',serif;font-size:clamp(15px,3vw,19px);font-weight:600;margin-top:10px">TV con cable</h2>
        <p style="font-size:12px;color:#746553;margin-top:5px;line-height:1.5">Canales nacionales e internacionales</p>
      </div>
    </div>
  </section>

  <!-- ===== SALÓN EL CÉSAR ===== -->
  <section style="color:#fff;background:linear-gradient(120deg,rgba(20,11,5,.78),rgba(20,11,5,.92)),url('{{ asset('images/salon-el-cesar-hotel-la-finca-del-minero-zacatecas-01.webp') }}') center/cover;background-color:#1d110a">
    <div style="max-width:1240px;margin:0 auto;padding:clamp(44px,8vw,78px) 16px clamp(32px,6vw,60px)">
      <div style="text-align:center;max-width:60ch;margin:0 auto clamp(24px,4vw,44px)">
        <span style="font-size:11px;letter-spacing:3px;text-transform:uppercase;color:#E2C16A;font-weight:600">Nuestro espacio estrella</span>
        <h2 style="font-family:'Playfair Display',serif;font-size:clamp(28px,6vw,58px);font-weight:700;margin-top:10px;line-height:1.04">Salón El César</h2>
        <p style="margin-top:12px;font-size:clamp(14px,2vw,18px);color:rgba(255,255,255,.82);line-height:1.65;font-weight:300">El escenario ideal para bodas, XV años, congresos y celebraciones de gala en el corazón de Zacatecas. Capacidad para 200 personas.</p>
      </div>
      <div style="height:clamp(200px,52vw,460px);border-radius:7px;overflow:hidden;background:url('{{ asset('images/salon-el-cesar-hotel-la-finca-del-minero-zacatecas-03.webp') }}') center/cover;box-shadow:0 16px 50px rgba(0,0,0,.4)"></div>

      <div style="margin-top:clamp(28px,5vw,44px);background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.14);border-radius:8px;padding:clamp(20px,4vw,32px)">
        <h3 style="font-family:'Playfair Display',serif;font-size:clamp(19px,3vw,24px);font-weight:600">La contratación de tu evento incluye</h3>
        <ul style="list-style:none;margin-top:16px;display:grid;grid-template-columns:1fr;gap:11px">
          <li style="display:flex;gap:10px;font-size:14px;color:rgba(255,255,255,.85);line-height:1.5"><span style="color:#E2C16A">✦</span> Menú a 2 tiempos (entrada y fuerte), desde $480 MXN por persona — pollo, cerdo o pescado</li>
          <li style="display:flex;gap:10px;font-size:14px;color:rgba(255,255,255,.85);line-height:1.5"><span style="color:#E2C16A">✦</span> Salón por cinco horas para tu evento</li>
          <li style="display:flex;gap:10px;font-size:14px;color:rgba(255,255,255,.85);line-height:1.5"><span style="color:#E2C16A">✦</span> Descorche, refresco y hielo ilimitado durante las cinco horas (no incluye cerveza ni coctelería)</li>
          <li style="display:flex;gap:10px;font-size:14px;color:rgba(255,255,255,.85);line-height:1.5"><span style="color:#E2C16A">✦</span> Montaje, mantelería, plaqué y cristalería a tu elección</li>
          <li style="display:flex;gap:10px;font-size:14px;color:rgba(255,255,255,.85);line-height:1.5"><span style="color:#E2C16A">✦</span> Doncella para los baños, seguridad, capitán y meseros</li>
          <li style="display:flex;gap:10px;font-size:14px;color:rgba(255,255,255,.85);line-height:1.5"><span style="color:#E2C16A">✦</span> Estacionamiento para tus invitados (cupo limitado)</li>
          <li style="display:flex;gap:10px;font-size:14px;color:rgba(255,255,255,.85);line-height:1.5"><span style="color:#E2C16A">✦</span> Prueba de menú para 4 personas (2 platillos)</li>
          <li style="display:flex;gap:10px;font-size:14px;color:rgba(255,255,255,.85);line-height:1.5"><span style="color:#E2C16A">✦</span> Tarifa especial de $990 MXN/noche (sencilla o doble) para tus invitados que se hospeden en el hotel</li>
        </ul>
      </div>

      <div class="grid-gallery">
        <div style="height:clamp(76px,24vw,110px);border-radius:5px;background:url('{{ asset('images/salon-el-cesar-hotel-la-finca-del-minero-zacatecas-02.webp') }}') center/cover"></div>
        <div style="height:clamp(76px,24vw,110px);border-radius:5px;background:url('{{ asset('images/salon-el-cesar-hotel-la-finca-del-minero-zacatecas-04.webp') }}') center/cover"></div>
        <div style="height:clamp(76px,24vw,110px);border-radius:5px;background:url('{{ asset('images/salon-el-cesar-hotel-la-finca-del-minero-zacatecas-05.webp') }}') center/cover"></div>
        <div style="height:clamp(76px,24vw,110px);border-radius:5px;background:url('{{ asset('images/salon-el-cesar-hotel-la-finca-del-minero-zacatecas-06.webp') }}') center/cover"></div>
        <div style="height:clamp(76px,24vw,110px);border-radius:5px;background:url('{{ asset('images/salon-el-cesar-hotel-la-finca-del-minero-zacatecas-07.webp') }}') center/cover"></div>
      </div>
      <div class="cta-row" style="margin-top:clamp(22px,4vw,36px)">
        <a href="{{ route('contacto') }}" style="padding:15px 36px;background:#9B1C1C;color:#fff;font-size:16px;font-weight:600;border-radius:3px;box-shadow:0 6px 22px rgba(155,28,28,.45)">Solicitar cotización</a>
      </div>
    </div>
  </section>

  <!-- ===== PRE-FOOTER CTA ===== -->
  <section style="background:#2C1A0E;color:#fff;text-align:center;padding:clamp(44px,8vw,70px) 16px">
    <h2 style="font-family:'Playfair Display',serif;font-size:clamp(24px,5vw,48px);font-weight:700">¿Listo para hospedarte?</h2>
    <p style="margin-top:12px;font-size:clamp(14px,2vw,17px);color:rgba(255,255,255,.7);font-weight:300">Reserva tu habitación o cotiza tu próximo evento con nosotros.</p>
    <a href="{{ config('hotel.whatsapp_url') }}?text={{ urlencode('Hola, quiero hacer una reservación en Hotel La Finca del Minero.') }}" target="_blank" rel="noopener" style="display:inline-block;margin-top:22px;padding:15px 36px;background:#9B1C1C;color:#fff;font-size:16px;font-weight:600;border-radius:3px;box-shadow:0 8px 26px rgba(155,28,28,.45)">Reservar ahora</a>
  </section>

@endsection
