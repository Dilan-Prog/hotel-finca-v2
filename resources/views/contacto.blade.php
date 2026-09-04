@extends('layouts.finca')

@section('title', 'Contacto — Hotel La Finca del Minero')

@section('head')
<meta name="description" content="Contacta a Hotel La Finca del Minero en el Centro Histórico de Zacatecas por WhatsApp o teléfono. Resolvemos tus dudas al instante.">
<meta property="og:description" content="Contacta a Hotel La Finca del Minero en el Centro Histórico de Zacatecas por WhatsApp o teléfono. Resolvemos tus dudas al instante.">
@endsection

@section('styles')
<style>
  .grid-phones{display:grid;grid-template-columns:1fr;gap:14px}
  @media(min-width:560px){.grid-phones{grid-template-columns:repeat(2,1fr)}}
  .grid-form-map{display:grid;grid-template-columns:1fr;gap:28px;align-items:start}
  @media(min-width:700px){.grid-form-map{grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:34px}}
</style>
@endsection

@section('content')

  <!-- ===== PAGE HEADER ===== -->
  <section style="max-width:1140px;margin:0 auto;padding:clamp(32px,6vw,58px) 16px 14px;text-align:center">
    <span style="font-size:11px;letter-spacing:3px;text-transform:uppercase;color:#7d6318;font-weight:600">Estamos para atenderte</span>
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
        <span style="font-size:24px;color:#7d6318">✆</span>
        <div>
          <div style="font-size:10px;letter-spacing:1.5px;text-transform:uppercase;color:#746553;font-weight:600">Lada sin costo</div>
          <div style="font-family:'Playfair Display',serif;font-size:clamp(16px,3.5vw,23px);font-weight:600;margin-top:2px;color:#2C1A0E">01 800 215 2604</div>
        </div>
      </a>
    </div>
  </section>

  <!-- ===== FORM + MAP ===== -->
  <section style="max-width:1140px;margin:0 auto;padding:clamp(16px,3vw,34px) 16px clamp(44px,8vw,70px)">
    <div class="grid-form-map">

      <!-- whatsapp cta -->
      <div style="background:#fff;border:1px solid rgba(44,26,14,.06);border-radius:7px;box-shadow:0 10px 36px rgba(44,26,14,.1);padding:clamp(20px,4vw,34px);text-align:center;display:flex;flex-direction:column;justify-content:center">
        <h2 style="font-family:'Playfair Display',serif;font-size:clamp(20px,4vw,25px);font-weight:600">Escríbenos por WhatsApp</h2>
        <p style="font-size:13px;color:#746553;margin-top:5px">Te respondemos lo antes posible.</p>
        <a href="{{ config('hotel.whatsapp_url') }}?text={{ urlencode('Hola, tengo una pregunta sobre Hotel La Finca del Minero.') }}" target="_blank" rel="noopener" style="display:inline-flex;align-items:center;gap:10px;justify-content:center;margin-top:20px;padding:15px;background:#0e7a3d;color:#fff;font-size:16px;font-weight:600;border-radius:3px;box-shadow:0 6px 18px rgba(14,122,61,.3)">
          <svg viewBox="0 0 448 512" width="18" height="18" fill="#fff" aria-hidden="true"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
          Escribir por WhatsApp
        </a>
      </div>

      <!-- map + info -->
      @php
        $mapQuery = urlencode(
            config('hotel.address.street').', '.
            config('hotel.address.locality').', '.
            config('hotel.address.postal_code').' '.config('hotel.address.region').', México'
        );
        $mapEmbedUrl = 'https://www.google.com/maps?q='.$mapQuery.'&hl=es&z=16&output=embed';
      @endphp
      <div style="display:flex;flex-direction:column;gap:18px">
        <div style="position:relative;height:clamp(220px,60vw,300px);border-radius:7px;overflow:hidden;border:1px solid rgba(44,26,14,.08);box-shadow:0 10px 36px rgba(44,26,14,.1)">
          <iframe src="{{ $mapEmbedUrl }}" loading="lazy" title="Ubicación de {{ config('hotel.name') }}" referrerpolicy="no-referrer-when-downgrade" style="width:100%;height:100%;border:0;display:block"></iframe>
        </div>
        <div style="background:#2C1A0E;color:#fff;border-radius:7px;padding:clamp(20px,4vw,28px)">
          <h3 style="font-family:'Playfair Display',serif;font-size:clamp(18px,4vw,21px);font-weight:600">En el corazón de la ciudad</h3>
          <p style="margin-top:10px;font-size:14px;line-height:1.65;color:#E2C16A;font-weight:600">{{ config('hotel.address.street') }}, {{ config('hotel.address.locality') }}<br>{{ config('hotel.address.postal_code') }} {{ config('hotel.address.region') }}, México</p>
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
    <a href="{{ config('hotel.whatsapp_url') }}?text={{ urlencode('Hola, quiero hacer una reservación en Hotel La Finca del Minero.') }}" target="_blank" rel="noopener" style="display:inline-block;margin-top:22px;padding:15px 36px;background:#9B1C1C;color:#fff;font-size:16px;font-weight:600;border-radius:3px;box-shadow:0 8px 26px rgba(155,28,28,.45)">Reservar ahora</a>
  </section>

@endsection
