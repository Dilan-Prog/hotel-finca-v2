@extends('layouts.finca')

@section('title', 'Servicios — Hotel La Finca del Minero')

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
    <span style="font-size:11px;letter-spacing:3px;text-transform:uppercase;color:#B8922A;font-weight:600">Todo para tu estancia</span>
    <h1 style="font-family:'Playfair Display',serif;font-size:clamp(24px,5vw,50px);font-weight:700;margin-top:10px;line-height:1.08;max-width:20ch;margin-left:auto;margin-right:auto;text-wrap:balance">Servicios del Hotel La Finca del Minero</h1>
    <p style="margin-top:12px;font-size:clamp(14px,2vw,17px);color:#6b5d4f;max-width:48ch;margin-left:auto;margin-right:auto;line-height:1.65">Comodidades pensadas para que te sientas como en casa, en el corazón de Zacatecas.</p>
  </section>

  <!-- ===== ICON GRID ===== -->
  <section style="max-width:1140px;margin:0 auto;padding:8px 16px clamp(32px,5vw,56px)">
    <div class="grid-icons">
      <div style="background:#fff;border:1px solid rgba(44,26,14,.06);border-radius:6px;padding:22px 14px;text-align:center;box-shadow:0 4px 16px rgba(44,26,14,.06)">
        <div style="font-size:26px;color:#9B1C1C">⌘</div>
        <h3 style="font-family:'Playfair Display',serif;font-size:clamp(15px,3vw,19px);font-weight:600;margin-top:10px">WiFi</h3>
        <p style="font-size:12px;color:#9a8a78;margin-top:5px;line-height:1.5">Internet de alta velocidad en todo el hotel</p>
      </div>
      <div style="background:#fff;border:1px solid rgba(44,26,14,.06);border-radius:6px;padding:22px 14px;text-align:center;box-shadow:0 4px 16px rgba(44,26,14,.06)">
        <div style="font-size:26px;color:#9B1C1C">✦</div>
        <h3 style="font-family:'Playfair Display',serif;font-size:clamp(15px,3vw,19px);font-weight:600;margin-top:10px">Restaurante</h3>
        <p style="font-size:12px;color:#9a8a78;margin-top:5px;line-height:1.5">Cocina regional y desayunos caseros</p>
      </div>
      <div style="background:#fff;border:1px solid rgba(44,26,14,.06);border-radius:6px;padding:22px 14px;text-align:center;box-shadow:0 4px 16px rgba(44,26,14,.06)">
        <div style="font-size:26px;color:#9B1C1C">⊟</div>
        <h3 style="font-family:'Playfair Display',serif;font-size:clamp(15px,3vw,19px);font-weight:600;margin-top:10px">Estacionamiento</h3>
        <p style="font-size:12px;color:#9a8a78;margin-top:5px;line-height:1.5">Espacio seguro para tu vehículo</p>
      </div>
      <div style="background:#fff;border:1px solid rgba(44,26,14,.06);border-radius:6px;padding:22px 14px;text-align:center;box-shadow:0 4px 16px rgba(44,26,14,.06)">
        <div style="font-size:26px;color:#9B1C1C">◴</div>
        <h3 style="font-family:'Playfair Display',serif;font-size:clamp(15px,3vw,19px);font-weight:600;margin-top:10px">Despertador</h3>
        <p style="font-size:12px;color:#9a8a78;margin-top:5px;line-height:1.5">Servicio de despertador a tu hora</p>
      </div>
      <div style="background:#fff;border:1px solid rgba(44,26,14,.06);border-radius:6px;padding:22px 14px;text-align:center;box-shadow:0 4px 16px rgba(44,26,14,.06)">
        <div style="font-size:26px;color:#9B1C1C">▦</div>
        <h3 style="font-family:'Playfair Display',serif;font-size:clamp(15px,3vw,19px);font-weight:600;margin-top:10px">TV con cable</h3>
        <p style="font-size:12px;color:#9a8a78;margin-top:5px;line-height:1.5">Canales nacionales e internacionales</p>
      </div>
    </div>
  </section>

  <!-- ===== SALÓN EL CÉSAR ===== -->
  <section style="color:#fff;background:linear-gradient(120deg,rgba(20,11,5,.78),rgba(20,11,5,.92)),url('https://images.unsplash.com/photo-1511795409834-ef04bbd61622?w=1800&q=80') center/cover;background-color:#1d110a">
    <div style="max-width:1240px;margin:0 auto;padding:clamp(44px,8vw,78px) 16px clamp(32px,6vw,60px)">
      <div style="text-align:center;max-width:60ch;margin:0 auto clamp(24px,4vw,44px)">
        <span style="font-size:11px;letter-spacing:3px;text-transform:uppercase;color:#E2C16A;font-weight:600">Nuestro espacio estrella</span>
        <h2 style="font-family:'Playfair Display',serif;font-size:clamp(28px,6vw,58px);font-weight:700;margin-top:10px;line-height:1.04">Salón El César</h2>
        <p style="margin-top:12px;font-size:clamp(14px,2vw,18px);color:rgba(255,255,255,.82);line-height:1.65;font-weight:300">El escenario ideal para bodas, XV años, congresos y celebraciones de gala en el corazón de Zacatecas.</p>
      </div>
      <div style="height:clamp(200px,52vw,460px);border-radius:7px;overflow:hidden;background:url('https://images.unsplash.com/photo-1464366400600-7168b8af9bc3?w=1800&q=80') center/cover;box-shadow:0 16px 50px rgba(0,0,0,.4)"></div>
      <div class="grid-features">
        <div style="background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.14);border-radius:6px;padding:20px">
          <div style="color:#E2C16A;font-size:18px">✦</div>
          <h3 style="font-family:'Playfair Display',serif;font-size:17px;font-weight:600;margin-top:8px">Todo tipo de eventos</h3>
          <p style="font-size:13px;color:rgba(255,255,255,.7);margin-top:5px;line-height:1.5">Bodas, XV años, congresos, cenas de gala y más.</p>
        </div>
        <div style="background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.14);border-radius:6px;padding:20px">
          <div style="color:#E2C16A;font-size:18px">✦</div>
          <h3 style="font-family:'Playfair Display',serif;font-size:17px;font-weight:600;margin-top:8px">Capacidad 200 personas</h3>
          <p style="font-size:13px;color:rgba(255,255,255,.7);margin-top:5px;line-height:1.5">Espacio versátil que se adapta a tu celebración.</p>
        </div>
        <div style="background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.14);border-radius:6px;padding:20px">
          <div style="color:#E2C16A;font-size:18px">✦</div>
          <h3 style="font-family:'Playfair Display',serif;font-size:17px;font-weight:600;margin-top:8px">Bellísima arquitectura</h3>
          <p style="font-size:13px;color:rgba(255,255,255,.7);margin-top:5px;line-height:1.5">Detalles coloniales que enmarcan cada momento.</p>
        </div>
        <div style="background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.14);border-radius:6px;padding:20px">
          <div style="color:#E2C16A;font-size:18px">✦</div>
          <h3 style="font-family:'Playfair Display',serif;font-size:17px;font-weight:600;margin-top:8px">Estacionamiento</h3>
          <p style="font-size:13px;color:rgba(255,255,255,.7);margin-top:5px;line-height:1.5">Comodidad y seguridad para todos tus invitados.</p>
        </div>
      </div>
      <div class="grid-gallery">
        <div style="height:clamp(76px,24vw,110px);border-radius:5px;background:url('https://images.unsplash.com/photo-1511795409834-ef04bbd61622?w=600&q=80') center/cover"></div>
        <div style="height:clamp(76px,24vw,110px);border-radius:5px;background:url('https://images.unsplash.com/photo-1519671482749-fd09be7ccebf?w=600&q=80') center/cover"></div>
        <div style="height:clamp(76px,24vw,110px);border-radius:5px;background:url('https://images.unsplash.com/photo-1606800052052-a08af7148866?w=600&q=80') center/cover"></div>
        <div style="height:clamp(76px,24vw,110px);border-radius:5px;background:url('https://images.unsplash.com/photo-1583939003579-730e3918a45a?w=600&q=80') center/cover"></div>
      </div>
      <div class="cta-row" style="margin-top:clamp(22px,4vw,36px)">
        <a href="{{ route('contacto') }}" style="padding:15px 36px;background:#9B1C1C;color:#fff;font-size:16px;font-weight:600;border-radius:3px;box-shadow:0 6px 22px rgba(155,28,28,.45)">Solicitar cotización</a>
        <a href="{{ route('servicios') }}" style="font-size:15px;font-weight:600;color:#E2C16A;border-bottom:1.5px solid #E2C16A;padding-bottom:3px">Galería de fotos del salón →</a>
      </div>
    </div>
  </section>

  <!-- ===== PRE-FOOTER CTA ===== -->
  <section style="background:#2C1A0E;color:#fff;text-align:center;padding:clamp(44px,8vw,70px) 16px">
    <h2 style="font-family:'Playfair Display',serif;font-size:clamp(24px,5vw,48px);font-weight:700">¿Listo para hospedarte?</h2>
    <p style="margin-top:12px;font-size:clamp(14px,2vw,17px);color:rgba(255,255,255,.7);font-weight:300">Reserva tu habitación o cotiza tu próximo evento con nosotros.</p>
    <a href="{{ route('reservaciones') }}" style="display:inline-block;margin-top:22px;padding:15px 36px;background:#9B1C1C;color:#fff;font-size:16px;font-weight:600;border-radius:3px;box-shadow:0 8px 26px rgba(155,28,28,.45)">Reservar ahora</a>
  </section>

@endsection
