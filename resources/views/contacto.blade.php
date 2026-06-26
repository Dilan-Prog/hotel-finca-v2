@extends('layouts.finca')

@section('title', 'Contacto — Hotel La Finca del Minero')

@section('styles')
<style>
  .grid-phones{display:grid;grid-template-columns:1fr;gap:14px}
  @media(min-width:560px){.grid-phones{grid-template-columns:repeat(2,1fr)}}
  .grid-form-map{display:grid;grid-template-columns:1fr;gap:28px;align-items:start}
  @media(min-width:700px){.grid-form-map{grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:34px}}
  .form-inner-2{display:grid;grid-template-columns:1fr;gap:14px}
  @media(min-width:480px){.form-inner-2{grid-template-columns:1fr 1fr}}
</style>
@endsection

@section('content')

  @if (session('success'))
    <div style="max-width:1140px;margin:16px auto 0;padding:0 16px">
      <div style="background:#1d8a4c;color:#fff;border-radius:6px;padding:16px 20px;font-size:14px;font-weight:500">
        ¡Gracias por escribirnos! Te responderemos lo antes posible.
      </div>
    </div>
  @endif

  <!-- ===== PAGE HEADER ===== -->
  <section style="max-width:1140px;margin:0 auto;padding:clamp(32px,6vw,58px) 16px 14px;text-align:center">
    <span style="font-size:11px;letter-spacing:3px;text-transform:uppercase;color:#B8922A;font-weight:600">Estamos para atenderte</span>
    <h1 style="font-family:'Playfair Display',serif;font-size:clamp(22px,5vw,48px);font-weight:700;margin-top:10px;line-height:1.06;max-width:22ch;margin-left:auto;margin-right:auto;text-wrap:balance">Contacto — Hotel La Finca del Minero</h1>
    <p style="margin-top:12px;font-size:clamp(13px,2vw,17px);color:#6b5d4f;max-width:52ch;margin-left:auto;margin-right:auto;line-height:1.65">En el corazón de la ciudad — a pasos de callejones, museos, teleférico y más.</p>
  </section>

  <!-- ===== PHONE STRIP ===== -->
  <section style="max-width:1140px;margin:0 auto;padding:16px 16px">
    <div class="grid-phones">
      <a href="{{ route('reservaciones') }}" style="display:flex;align-items:center;gap:14px;background:#9B1C1C;color:#fff;border-radius:6px;padding:20px 22px;box-shadow:0 8px 24px rgba(155,28,28,.28)">
        <span style="font-size:24px">☎</span>
        <div>
          <div style="font-size:10px;letter-spacing:1.5px;text-transform:uppercase;color:rgba(255,255,255,.7);font-weight:600">Reservaciones</div>
          <div style="font-family:'Playfair Display',serif;font-size:clamp(16px,3.5vw,23px);font-weight:600;margin-top:2px">01 (492) 925-03-10 al 13</div>
        </div>
      </a>
      <a href="{{ route('reservaciones') }}" style="display:flex;align-items:center;gap:14px;background:#fff;border:1px solid rgba(184,146,42,.4);border-radius:6px;padding:20px 22px;box-shadow:0 8px 24px rgba(44,26,14,.07)">
        <span style="font-size:24px;color:#B8922A">✆</span>
        <div>
          <div style="font-size:10px;letter-spacing:1.5px;text-transform:uppercase;color:#9a8a78;font-weight:600">Lada sin costo</div>
          <div style="font-family:'Playfair Display',serif;font-size:clamp(16px,3.5vw,23px);font-weight:600;margin-top:2px;color:#2C1A0E">01 800 215 2604</div>
        </div>
      </a>
    </div>
  </section>

  <!-- ===== FORM + MAP ===== -->
  <section style="max-width:1140px;margin:0 auto;padding:clamp(16px,3vw,34px) 16px clamp(44px,8vw,70px)">
    <div class="grid-form-map">

      <!-- form -->
      <div style="background:#fff;border:1px solid rgba(44,26,14,.06);border-radius:7px;box-shadow:0 10px 36px rgba(44,26,14,.1);padding:clamp(20px,4vw,34px)">
        <h2 style="font-family:'Playfair Display',serif;font-size:clamp(20px,4vw,25px);font-weight:600">Escríbenos</h2>
        <p style="font-size:13px;color:#9a8a78;margin-top:5px">Te respondemos lo antes posible.</p>
        <form method="POST" action="{{ route('contacto.enviar') }}">
          @csrf
          <div style="display:flex;flex-direction:column;gap:14px;margin-top:20px">
            <label style="display:flex;flex-direction:column;gap:6px"><span style="font-size:11px;letter-spacing:1px;text-transform:uppercase;color:#6b5d4f;font-weight:600">Nombre</span><input type="text" name="nombre" placeholder="Tu nombre" style="border:1px solid #e3d9cc;border-radius:3px;padding:12px;font-size:15px;color:#2C1A0E;outline:none"></label>
            <div class="form-inner-2">
              <label style="display:flex;flex-direction:column;gap:6px"><span style="font-size:11px;letter-spacing:1px;text-transform:uppercase;color:#6b5d4f;font-weight:600">Email</span><input type="email" name="email" placeholder="correo@ejemplo.com" style="border:1px solid #e3d9cc;border-radius:3px;padding:12px;font-size:15px;color:#2C1A0E;outline:none"></label>
              <label style="display:flex;flex-direction:column;gap:6px"><span style="font-size:11px;letter-spacing:1px;text-transform:uppercase;color:#6b5d4f;font-weight:600">Teléfono</span><input type="tel" name="telefono" placeholder="(492) 000 0000" style="border:1px solid #e3d9cc;border-radius:3px;padding:12px;font-size:15px;color:#2C1A0E;outline:none"></label>
            </div>
            <label style="display:flex;flex-direction:column;gap:6px"><span style="font-size:11px;letter-spacing:1px;text-transform:uppercase;color:#6b5d4f;font-weight:600">Tipo de consulta</span><select name="tipo_consulta" style="border:1px solid #e3d9cc;border-radius:3px;padding:12px;font-size:15px;color:#2C1A0E;outline:none"><option>Reservación</option><option>Evento</option><option>Información</option></select></label>
            <label style="display:flex;flex-direction:column;gap:6px"><span style="font-size:11px;letter-spacing:1px;text-transform:uppercase;color:#6b5d4f;font-weight:600">Mensaje</span><textarea name="mensaje" rows="4" placeholder="¿En qué podemos ayudarte?" style="border:1px solid #e3d9cc;border-radius:3px;padding:12px;font-size:15px;color:#2C1A0E;outline:none;resize:vertical"></textarea></label>
            <button type="submit" style="margin-top:4px;padding:15px;background:#9B1C1C;color:#fff;font-size:16px;font-weight:600;border:none;border-radius:3px;cursor:pointer;box-shadow:0 6px 18px rgba(155,28,28,.3)">Enviar</button>
          </div>
        </form>
      </div>

      <!-- map + info -->
      <div style="display:flex;flex-direction:column;gap:18px">
        <div style="position:relative;height:clamp(220px,60vw,300px);border-radius:7px;overflow:hidden;border:1px solid rgba(44,26,14,.08);box-shadow:0 10px 36px rgba(44,26,14,.1);background:repeating-linear-gradient(0deg,rgba(44,26,14,.05) 0 1px,transparent 1px 34px),repeating-linear-gradient(90deg,rgba(44,26,14,.05) 0 1px,transparent 1px 34px),linear-gradient(135deg,#efe6d8,#e3d4bf)">
          <div style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);text-align:center">
            <div style="width:22px;height:22px;border-radius:50% 50% 50% 0;background:#9B1C1C;transform:rotate(-45deg);margin:0 auto;box-shadow:0 6px 14px rgba(155,28,28,.4)"></div>
            <div style="margin-top:14px;font-family:'Playfair Display',serif;font-size:15px;font-weight:600;color:#2C1A0E">Centro Histórico, Zacatecas</div>
            <div style="font-size:11px;color:#6b5d4f;margin-top:2px">✦ Mapa · ubicación del hotel</div>
          </div>
        </div>
        <div style="background:#2C1A0E;color:#fff;border-radius:7px;padding:clamp(20px,4vw,28px)">
          <h3 style="font-family:'Playfair Display',serif;font-size:clamp(18px,4vw,21px);font-weight:600">En el corazón de la ciudad</h3>
          <p style="margin-top:10px;font-size:14px;line-height:1.65;color:rgba(255,255,255,.78)">A pasos de callejones, museos, teleférico y los principales atractivos de Zacatecas.</p>
          <div style="display:flex;flex-wrap:wrap;gap:8px;margin-top:14px">
            <span style="font-size:12px;color:#E2C16A;border:1px solid rgba(184,146,42,.5);padding:5px 11px;border-radius:20px">Cerro de la Bufa</span>
            <span style="font-size:12px;color:#E2C16A;border:1px solid rgba(184,146,42,.5);padding:5px 11px;border-radius:20px">Teleférico</span>
            <span style="font-size:12px;color:#E2C16A;border:1px solid rgba(184,146,42,.5);padding:5px 11px;border-radius:20px">Museos</span>
            <span style="font-size:12px;color:#E2C16A;border:1px solid rgba(184,146,42,.5);padding:5px 11px;border-radius:20px">Mina El Edén</span>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- ===== PRE-FOOTER CTA ===== -->
  <section style="background:#2C1A0E;color:#fff;text-align:center;padding:clamp(44px,8vw,70px) 16px">
    <h2 style="font-family:'Playfair Display',serif;font-size:clamp(24px,5vw,48px);font-weight:700">¿Listo para hospedarte?</h2>
    <p style="margin-top:12px;font-size:clamp(14px,2vw,17px);color:rgba(255,255,255,.7);font-weight:300">Reserva directo y vive Zacatecas desde su corazón.</p>
    <a href="{{ route('reservaciones') }}" style="display:inline-block;margin-top:22px;padding:15px 36px;background:#9B1C1C;color:#fff;font-size:16px;font-weight:600;border-radius:3px;box-shadow:0 8px 26px rgba(155,28,28,.45)">Reservar ahora</a>
  </section>

@endsection
