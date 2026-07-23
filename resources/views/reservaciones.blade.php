@extends('layouts.finca')

@section('title', 'Reservaciones — Hotel La Finca del Minero')

@section('styles')
<style>
  .price-compare{display:flex;gap:18px;align-items:stretch;flex-wrap:wrap}
  .form-grid-2{display:grid;grid-template-columns:1fr;gap:16px}
  @media(min-width:520px){.form-grid-2{grid-template-columns:1fr 1fr}}
  .form-grid-3{display:grid;grid-template-columns:1fr;gap:16px}
  @media(min-width:520px){.form-grid-3{grid-template-columns:repeat(3,1fr)}}
  .grid-trust{display:grid;grid-template-columns:1fr;gap:14px}
  @media(min-width:520px){.grid-trust{grid-template-columns:repeat(auto-fit,minmax(180px,1fr))}}
</style>
@endsection

@section('content')

  @if (session('success'))
    <div style="max-width:760px;margin:16px auto 0;padding:0 16px">
      <div style="background:#1d8a4c;color:#fff;border-radius:6px;padding:16px 20px;font-size:14px;font-weight:500">
        ¡Gracias! Tu solicitud de reservación fue enviada correctamente.
      </div>
    </div>
  @endif

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

  <!-- ===== BOOKING FORM ===== -->
  <section style="max-width:760px;margin:0 auto;padding:clamp(28px,5vw,40px) 16px 16px">
    <div style="background:#fff;border:1px solid rgba(44,26,14,.06);border-radius:7px;box-shadow:0 10px 36px rgba(44,26,14,.1);padding:clamp(20px,4vw,36px)">
      <h2 style="font-family:'Playfair Display',serif;font-size:clamp(20px,4vw,26px);font-weight:600">Completa tu reservación</h2>
      <p style="font-size:13px;color:#746553;margin-top:5px">Te enviaremos la confirmación de inmediato.</p>

      <form method="POST" action="{{ route('reservaciones.enviar') }}">
        @csrf

        <div class="form-grid-2" style="margin-top:22px">
          <label style="display:flex;flex-direction:column;gap:6px"><span style="font-size:11px;letter-spacing:1px;text-transform:uppercase;color:#6b5d4f;font-weight:600">Llegada</span><input type="date" name="llegada" style="border:1px solid #e3d9cc;border-radius:3px;padding:12px;font-size:15px;color:#2C1A0E;outline:none"></label>
          <label style="display:flex;flex-direction:column;gap:6px"><span style="font-size:11px;letter-spacing:1px;text-transform:uppercase;color:#6b5d4f;font-weight:600">Salida</span><input type="date" name="salida" style="border:1px solid #e3d9cc;border-radius:3px;padding:12px;font-size:15px;color:#2C1A0E;outline:none"></label>
          <label style="display:flex;flex-direction:column;gap:6px"><span style="font-size:11px;letter-spacing:1px;text-transform:uppercase;color:#6b5d4f;font-weight:600">Adultos</span><select name="adultos" style="border:1px solid #e3d9cc;border-radius:3px;padding:12px;font-size:15px;outline:none"><option>1</option><option selected>2</option><option>3</option><option>4</option></select></label>
          <label style="display:flex;flex-direction:column;gap:6px"><span style="font-size:11px;letter-spacing:1px;text-transform:uppercase;color:#6b5d4f;font-weight:600">Niños</span><select name="ninos" style="border:1px solid #e3d9cc;border-radius:3px;padding:12px;font-size:15px;outline:none"><option selected>0</option><option>1</option><option>2</option><option>3</option></select></label>
        </div>

        <label style="display:flex;flex-direction:column;gap:6px;margin-top:16px"><span style="font-size:11px;letter-spacing:1px;text-transform:uppercase;color:#6b5d4f;font-weight:600">Tipo de habitación</span><select name="tipo_habitacion" style="border:1px solid #e3d9cc;border-radius:3px;padding:12px;font-size:15px;outline:none"><option>Habitación Estándar — desde 890 MXN</option><option>Habitación Doble — desde 1,090 MXN</option><option>Suite Colonial — desde 1,650 MXN</option></select></label>

        <div class="form-grid-3" style="margin-top:16px">
          <label style="display:flex;flex-direction:column;gap:6px"><span style="font-size:11px;letter-spacing:1px;text-transform:uppercase;color:#6b5d4f;font-weight:600">Nombre completo</span><input type="text" name="nombre" placeholder="Tu nombre" style="border:1px solid #e3d9cc;border-radius:3px;padding:12px;font-size:15px;color:#2C1A0E;outline:none"></label>
          <label style="display:flex;flex-direction:column;gap:6px"><span style="font-size:11px;letter-spacing:1px;text-transform:uppercase;color:#6b5d4f;font-weight:600">Email</span><input type="email" name="email" placeholder="correo@ejemplo.com" style="border:1px solid #e3d9cc;border-radius:3px;padding:12px;font-size:15px;color:#2C1A0E;outline:none"></label>
          <label style="display:flex;flex-direction:column;gap:6px"><span style="font-size:11px;letter-spacing:1px;text-transform:uppercase;color:#6b5d4f;font-weight:600">Teléfono</span><input type="tel" name="telefono" placeholder="(492) 000 0000" style="border:1px solid #e3d9cc;border-radius:3px;padding:12px;font-size:15px;color:#2C1A0E;outline:none"></label>
        </div>

        <button type="submit" style="width:100%;margin-top:22px;padding:16px;background:#9B1C1C;color:#fff;font-size:17px;font-weight:600;border:none;border-radius:3px;cursor:pointer;box-shadow:0 6px 20px rgba(155,28,28,.35)">Confirmar reservación</button>
      </form>
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
