@extends('layouts.finca')

@section('title', 'Habitaciones — Hotel La Finca del Minero')

@section('head')
<meta name="description" content="Habitaciones y suites en Hotel La Finca del Minero, en el Centro Histórico de Zacatecas. Reserva directo al mejor precio garantizado.">
<meta property="og:description" content="Habitaciones y suites en Hotel La Finca del Minero, en el Centro Histórico de Zacatecas. Reserva directo al mejor precio garantizado.">
<link rel="preload" as="image" fetchpriority="high" href="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?w=1800&q=80">
@endsection

@section('styles')
<style>
  /* ── LAYOUT ── */
  .rooms-layout{display:flex;flex-direction:column;gap:32px;padding:clamp(28px,5vw,54px) 16px clamp(40px,7vw,70px)}
  @media(min-width:900px){.rooms-layout{flex-direction:row;gap:40px;max-width:1240px;margin:0 auto}}
  .rooms-list{display:flex;flex-direction:column;gap:26px}
  /* ── ROOM ARTICLE internal grid ── */
  .room-article{background:#fff;border-radius:6px;overflow:hidden;box-shadow:0 8px 30px rgba(44,26,14,.09);border:1px solid rgba(44,26,14,.05);display:grid;grid-template-columns:1fr}
  @media(min-width:560px){.room-article{grid-template-columns:repeat(auto-fit,minmax(230px,1fr))}}
  /* ── SIDEBAR ── */
  .booking-sidebar{background:#fff;border-radius:6px;box-shadow:0 10px 36px rgba(44,26,14,.12);border:1px solid rgba(44,26,14,.06);padding:24px;flex-shrink:0}
  @media(min-width:900px){.booking-sidebar{position:sticky;top:90px;width:288px}}
</style>
@endsection

@section('content')

  <!-- ===== PAGE HEADER ===== -->
  <section style="background:linear-gradient(180deg,rgba(20,11,5,.5),rgba(20,11,5,.78)),url('https://images.unsplash.com/photo-1631049307264-da0ec9d70304?w=1800&q=80') center/cover;background-color:#2C1A0E;color:#fff;padding:clamp(40px,8vw,62px) 16px clamp(48px,8vw,70px)">
    <div style="max-width:1140px;margin:0 auto">
      <span style="font-size:11px;letter-spacing:3px;text-transform:uppercase;color:#E2C16A;font-weight:600">Hospedaje</span>
      <h1 style="font-family:'Playfair Display',serif;font-size:clamp(24px,5vw,52px);font-weight:700;margin-top:10px;line-height:1.05;max-width:20ch;text-wrap:balance">Habitaciones en Hotel La Finca del Minero, Zacatecas</h1>
      <p style="margin-top:14px;font-size:clamp(14px,2vw,17px);color:rgba(255,255,255,.8);max-width:54ch;line-height:1.65;font-weight:300">Cada habitación conserva el alma colonial de la finca, con todas las comodidades que esperas de un hotel boutique de 4 estrellas.</p>
      <div style="display:inline-flex;align-items:center;gap:10px;margin-top:20px;padding:10px 16px;background:rgba(184,146,42,.18);border:1px solid rgba(184,146,42,.5);border-radius:30px">
        <span style="color:#E2C16A;font-size:14px">✓</span>
        <span style="font-size:13px;font-weight:500;color:#fff">Mejor precio garantizado al reservar directo</span>
      </div>
    </div>
  </section>

  <!-- ===== ROOMS LAYOUT ===== -->
  <div class="rooms-layout">

    <!-- room list -->
    <div class="rooms-list" style="flex:1;min-width:0">

      <!-- ROOM 1 -->
      <article class="room-article">
        <div style="min-height:clamp(200px,50vw,260px);overflow:hidden">
          <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?w=1000&q=80" width="1000" height="667" alt="Habitación Estándar en Hotel La Finca del Minero, Zacatecas" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block">
        </div>
        <div style="padding:22px">
          <h2 style="font-family:'Playfair Display',serif;font-size:clamp(20px,4vw,25px);font-weight:600">Habitación Estándar</h2>
          <p style="margin-top:8px;font-size:14px;line-height:1.6;color:#6b5d4f">Acogedora y luminosa, con cama matrimonial. Ideal para una escapada en pareja o viaje de trabajo.</p>
          <ul style="list-style:none;display:flex;flex-wrap:wrap;gap:7px;margin-top:14px">
            <li style="font-size:12px;color:#6b5d4f;background:#FAF6F0;border:1px solid #ece2d4;padding:5px 11px;border-radius:20px">WiFi</li>
            <li style="font-size:12px;color:#6b5d4f;background:#FAF6F0;border:1px solid #ece2d4;padding:5px 11px;border-radius:20px">TV con cable</li>
            <li style="font-size:12px;color:#6b5d4f;background:#FAF6F0;border:1px solid #ece2d4;padding:5px 11px;border-radius:20px">Despertador</li>
            <li style="font-size:12px;color:#6b5d4f;background:#FAF6F0;border:1px solid #ece2d4;padding:5px 11px;border-radius:20px">Baño privado</li>
          </ul>
          <div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:14px;margin-top:20px">
            <span style="font-size:13px;color:#746553">Desde <strong style="font-family:'Playfair Display',serif;font-size:clamp(22px,5vw,27px);color:#2C1A0E">890</strong> MXN / noche</span>
            <a href="{{ config('hotel.whatsapp_url') }}?text={{ urlencode('Hola, quiero reservar la Habitación Estándar en Hotel La Finca del Minero.') }}" target="_blank" rel="noopener" style="padding:13px 20px;background:#9B1C1C;color:#fff;font-size:14px;font-weight:600;border-radius:3px;box-shadow:0 4px 14px rgba(155,28,28,.25)">Reservar</a>
          </div>
        </div>
      </article>

      <!-- ROOM 2 -->
      <article class="room-article">
        <div style="min-height:clamp(200px,50vw,260px);overflow:hidden">
          <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?w=1000&q=80" width="1000" height="667" alt="Habitación Doble en Hotel La Finca del Minero, Zacatecas" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block">
        </div>
        <div style="padding:22px">
          <h2 style="font-family:'Playfair Display',serif;font-size:clamp(20px,4vw,25px);font-weight:600">Habitación Doble</h2>
          <p style="margin-top:8px;font-size:14px;line-height:1.6;color:#6b5d4f">Amplia, con dos camas individuales y rincón de descanso. Perfecta para familias o grupos de amigos.</p>
          <ul style="list-style:none;display:flex;flex-wrap:wrap;gap:7px;margin-top:14px">
            <li style="font-size:12px;color:#6b5d4f;background:#FAF6F0;border:1px solid #ece2d4;padding:5px 11px;border-radius:20px">WiFi</li>
            <li style="font-size:12px;color:#6b5d4f;background:#FAF6F0;border:1px solid #ece2d4;padding:5px 11px;border-radius:20px">TV con cable</li>
            <li style="font-size:12px;color:#6b5d4f;background:#FAF6F0;border:1px solid #ece2d4;padding:5px 11px;border-radius:20px">Dos camas</li>
            <li style="font-size:12px;color:#6b5d4f;background:#FAF6F0;border:1px solid #ece2d4;padding:5px 11px;border-radius:20px"><a href="{{ route('estacionamiento') }}" style="color:inherit">Estacionamiento</a></li>
          </ul>
          <div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:14px;margin-top:20px">
            <span style="font-size:13px;color:#746553">Desde <strong style="font-family:'Playfair Display',serif;font-size:clamp(22px,5vw,27px);color:#2C1A0E">1,090</strong> MXN / noche</span>
            <a href="{{ config('hotel.whatsapp_url') }}?text={{ urlencode('Hola, quiero reservar la Habitación Doble en Hotel La Finca del Minero.') }}" target="_blank" rel="noopener" style="padding:13px 20px;background:#9B1C1C;color:#fff;font-size:14px;font-weight:600;border-radius:3px;box-shadow:0 4px 14px rgba(155,28,28,.25)">Reservar</a>
          </div>
        </div>
      </article>

      <!-- ROOM 3 -->
      <article class="room-article">
        <div style="min-height:clamp(200px,50vw,260px);overflow:hidden">
          <img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?w=1000&q=80" width="1000" height="667" alt="Suite Colonial en Hotel La Finca del Minero, Zacatecas" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block">
        </div>
        <div style="padding:22px">
          <h2 style="font-family:'Playfair Display',serif;font-size:clamp(20px,4vw,25px);font-weight:600">Suite Colonial</h2>
          <p style="margin-top:8px;font-size:14px;line-height:1.6;color:#6b5d4f">Nuestra estancia más amplia, con sala independiente, detalles de época y los mejores acabados de la finca.</p>
          <ul style="list-style:none;display:flex;flex-wrap:wrap;gap:7px;margin-top:14px">
            <li style="font-size:12px;color:#6b5d4f;background:#FAF6F0;border:1px solid #ece2d4;padding:5px 11px;border-radius:20px">WiFi</li>
            <li style="font-size:12px;color:#6b5d4f;background:#FAF6F0;border:1px solid #ece2d4;padding:5px 11px;border-radius:20px">Sala privada</li>
            <li style="font-size:12px;color:#6b5d4f;background:#FAF6F0;border:1px solid #ece2d4;padding:5px 11px;border-radius:20px">TV con cable</li>
            <li style="font-size:12px;color:#6b5d4f;background:#FAF6F0;border:1px solid #ece2d4;padding:5px 11px;border-radius:20px">Vista a la ciudad</li>
          </ul>
          <div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:14px;margin-top:20px">
            <span style="font-size:13px;color:#746553">Desde <strong style="font-family:'Playfair Display',serif;font-size:clamp(22px,5vw,27px);color:#2C1A0E">1,650</strong> MXN / noche</span>
            <a href="{{ config('hotel.whatsapp_url') }}?text={{ urlencode('Hola, quiero reservar la Suite Colonial en Hotel La Finca del Minero.') }}" target="_blank" rel="noopener" style="padding:13px 20px;background:#9B1C1C;color:#fff;font-size:14px;font-weight:600;border-radius:3px;box-shadow:0 4px 14px rgba(155,28,28,.25)">Reservar</a>
          </div>
        </div>
      </article>

    </div>

    <!-- booking sidebar -->
    <aside class="booking-sidebar">
      <h3 style="font-family:'Playfair Display',serif;font-size:21px;font-weight:600">Reserva tu estancia</h3>
      <p style="font-size:13px;color:#746553;margin-top:5px">Consulta disponibilidad en segundos.</p>
      <div style="display:flex;flex-direction:column;gap:14px;margin-top:18px">
        <label style="display:flex;flex-direction:column;gap:6px">
          <span style="font-size:10px;letter-spacing:1.5px;text-transform:uppercase;color:#746553;font-weight:600">Llegada</span>
          <input type="date" style="border:1px solid #e3d9cc;border-radius:3px;padding:11px;font-family:inherit;font-size:14px;color:#2C1A0E;outline:none">
        </label>
        <label style="display:flex;flex-direction:column;gap:6px">
          <span style="font-size:10px;letter-spacing:1.5px;text-transform:uppercase;color:#746553;font-weight:600">Salida</span>
          <input type="date" style="border:1px solid #e3d9cc;border-radius:3px;padding:11px;font-family:inherit;font-size:14px;color:#2C1A0E;outline:none">
        </label>
        <div style="display:flex;gap:10px">
          <label style="display:flex;flex-direction:column;gap:6px;flex:1">
            <span style="font-size:10px;letter-spacing:1.5px;text-transform:uppercase;color:#746553;font-weight:600">Adultos</span>
            <select style="border:1px solid #e3d9cc;border-radius:3px;padding:11px;font-family:inherit;font-size:14px;outline:none"><option>1</option><option selected>2</option><option>3</option><option>4</option></select>
          </label>
          <label style="display:flex;flex-direction:column;gap:6px;flex:1">
            <span style="font-size:10px;letter-spacing:1.5px;text-transform:uppercase;color:#746553;font-weight:600">Niños</span>
            <select style="border:1px solid #e3d9cc;border-radius:3px;padding:11px;font-family:inherit;font-size:14px;outline:none"><option selected>0</option><option>1</option><option>2</option></select>
          </label>
        </div>
        <a href="{{ config('hotel.whatsapp_url') }}?text={{ urlencode('Hola, quiero hacer una reservación en Hotel La Finca del Minero.') }}" target="_blank" rel="noopener" style="text-align:center;padding:14px;background:#9B1C1C;color:#fff;font-size:15px;font-weight:600;border-radius:3px;box-shadow:0 4px 14px rgba(155,28,28,.28)">Reservar</a>
      </div>
      <div style="margin-top:16px;padding-top:14px;border-top:1px solid #f0e8dc;display:flex;align-items:center;gap:9px">
        <span style="color:#7d6318;font-size:15px">✓</span>
        <span style="font-size:12px;color:#6b5d4f;line-height:1.4">Mejor precio garantizado al reservar directo</span>
      </div>
    </aside>

  </div>

  <!-- ===== PRE-FOOTER CTA ===== -->
  <section style="background:#2C1A0E;color:#fff;text-align:center;padding:clamp(44px,8vw,70px) 16px">
    <h2 style="font-family:'Playfair Display',serif;font-size:clamp(24px,5vw,48px);font-weight:700">¿Listo para hospedarte?</h2>
    <p style="margin-top:12px;font-size:clamp(14px,2vw,17px);color:rgba(255,255,255,.7);font-weight:300">Elige tu habitación y reserva directo al mejor precio.</p>
    <a href="{{ config('hotel.whatsapp_url') }}?text={{ urlencode('Hola, quiero hacer una reservación en Hotel La Finca del Minero.') }}" target="_blank" rel="noopener" style="display:inline-block;margin-top:22px;padding:15px 36px;background:#9B1C1C;color:#fff;font-size:16px;font-weight:600;border-radius:3px;box-shadow:0 8px 26px rgba(155,28,28,.45)">Reservar ahora</a>
  </section>

@endsection
