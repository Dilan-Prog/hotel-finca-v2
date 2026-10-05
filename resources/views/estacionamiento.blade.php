@extends('layouts.finca')

@section('title', 'Estacionamiento en tu Hotel de Zacatecas | Finca del Minero')

@section('head')
<meta name="description" content="Estacionamiento gratuito y vigilado en Hotel La Finca del Minero, a pasos del Centro Histórico de Zacatecas. Olvídate de buscar dónde dejar tu auto.">
<meta property="og:description" content="Estacionamiento gratuito y vigilado en Hotel La Finca del Minero, a pasos del Centro Histórico de Zacatecas. Olvídate de buscar dónde dejar tu auto.">
<link rel="preload" as="image" fetchpriority="high" href="{{ asset('images/fachada-hotel-la-finca-del-minero-zacatecas-06.webp') }}">
<script type="application/ld+json">{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'QAPage',
    'mainEntity' => [
        '@type' => 'Question',
        'name' => '¿El hotel tiene estacionamiento?',
        'text' => '¿El hotel tiene estacionamiento?',
        'answerCount' => 1,
        'acceptedAnswer' => [
            '@type' => 'Answer',
            'text' => 'Sí. Hotel La Finca del Minero, en el Centro Histórico de Zacatecas, cuenta con estacionamiento propio, gratuito y vigilado para huéspedes con reservación, así que no es necesario buscar estacionamiento público en las calles del centro.',
        ],
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
<script type="application/ld+json">{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name' => '¿El estacionamiento del hotel tiene costo adicional?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'No. El estacionamiento es gratuito para huéspedes con reservación, sin costo adicional por noche.',
            ],
        ],
        [
            '@type' => 'Question',
            'name' => '¿Hay espacio garantizado en el estacionamiento?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Los espacios se asignan por orden de llegada, ya que el cupo es limitado. Te recomendamos avisarnos tu hora estimada de llegada para asegurar tu lugar.',
            ],
        ],
        [
            '@type' => 'Question',
            'name' => '¿Qué hoteles en Zacatecas tienen estacionamiento gratuito?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Hotel La Finca del Minero, en el Centro Histórico de Zacatecas, ofrece estacionamiento propio gratuito y vigilado para sus huéspedes.',
            ],
        ],
        [
            '@type' => 'Question',
            'name' => '¿Es seguro dejar mi auto en el estacionamiento del hotel?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Sí. El estacionamiento está vigilado y dentro del predio del hotel, no en la vía pública.',
            ],
        ],
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
@endsection

@section('styles')
<style>
  .park-grid{display:grid;grid-template-columns:1fr;gap:14px;margin-top:22px}
  @media(min-width:640px){.park-grid{grid-template-columns:repeat(auto-fit,minmax(230px,1fr));gap:20px}}
  .compare-grid{display:grid;grid-template-columns:1fr;gap:16px;margin-top:24px}
  @media(min-width:640px){.compare-grid{grid-template-columns:1fr 1fr;gap:22px}}
</style>
@endsection

@section('content')

  <!-- ===== PAGE HEADER + RESPUESTA DIRECTA (snippet target) ===== -->
  <section style="max-width:900px;margin:0 auto;padding:clamp(32px,6vw,60px) 16px clamp(16px,3vw,26px);text-align:center">
    <span style="font-size:11px;letter-spacing:3px;text-transform:uppercase;color:var(--c-gold);font-weight:600">Estacionamiento incluido</span>
    <h1 style="font-family:'Playfair Display',serif;font-size:clamp(24px,5vw,46px);font-weight:700;margin-top:10px;line-height:1.1;text-wrap:balance">Estacionamiento Gratuito en tu Hotel del Centro de Zacatecas</h1>
    <p style="margin-top:18px;font-size:clamp(15px,2.2vw,19px);color:#3a2e22;max-width:64ch;margin-left:auto;margin-right:auto;line-height:1.7;text-align:left;background:#fff;border:1px solid rgba(var(--c-ink-rgb),.08);border-radius:6px;padding:18px 20px;box-shadow:0 4px 16px rgba(var(--c-ink-rgb),.06)">
      <strong>Sí:</strong> Hotel La Finca del Minero, en el Centro Histórico de Zacatecas, cuenta con estacionamiento propio, gratuito y vigilado para huéspedes con reservación. No necesitas buscar estacionamiento en las calles empedradas del centro — tu vehículo queda resguardado a un paso de tu habitación durante toda tu estancia.
    </p>
  </section>

  <!-- ===== DETALLES PRÁCTICOS ===== -->
  <section style="max-width:1140px;margin:0 auto;padding:8px 16px clamp(28px,5vw,48px)">
    <h2 style="font-family:'Playfair Display',serif;font-size:clamp(19px,3.4vw,28px);font-weight:600;text-align:center;max-width:36ch;margin:0 auto">Cómo es el estacionamiento del hotel</h2>
    <div class="park-grid">
      <div style="background:#fff;border:1px solid rgba(var(--c-ink-rgb),.06);border-radius:6px;padding:20px;box-shadow:0 4px 16px rgba(var(--c-ink-rgb),.06)">
        <div style="font-size:22px;color:var(--c-primary)">✓</div>
        <h3 style="font-family:'Playfair Display',serif;font-size:16px;font-weight:600;margin-top:8px">Gratuito</h3>
        <p style="font-size:13px;color:#746553;margin-top:5px;line-height:1.55">Incluido para huéspedes con reservación, sin costo adicional por noche.</p>
      </div>
      <div style="background:#fff;border:1px solid rgba(var(--c-ink-rgb),.06);border-radius:6px;padding:20px;box-shadow:0 4px 16px rgba(var(--c-ink-rgb),.06)">
        <div style="font-size:22px;color:var(--c-primary)">✓</div>
        <h3 style="font-family:'Playfair Display',serif;font-size:16px;font-weight:600;margin-top:8px">Vigilado</h3>
        <p style="font-size:13px;color:#746553;margin-top:5px;line-height:1.55">Espacio descubierto dentro del predio del hotel, con vigilancia.</p>
      </div>
      <div style="background:#fff;border:1px solid rgba(var(--c-ink-rgb),.06);border-radius:6px;padding:20px;box-shadow:0 4px 16px rgba(var(--c-ink-rgb),.06)">
        <div style="font-size:22px;color:var(--c-primary)">✓</div>
        <h3 style="font-family:'Playfair Display',serif;font-size:16px;font-weight:600;margin-top:8px">A un paso de tu habitación</h3>
        <p style="font-size:13px;color:#746553;margin-top:5px;line-height:1.55">Dentro del propio hotel, sin caminar varias cuadras desde un estacionamiento público.</p>
      </div>
      <div style="background:#fff;border:1px solid rgba(var(--c-ink-rgb),.06);border-radius:6px;padding:20px;box-shadow:0 4px 16px rgba(var(--c-ink-rgb),.06)">
        <div style="font-size:22px;color:var(--c-primary)">✓</div>
        <h3 style="font-family:'Playfair Display',serif;font-size:16px;font-weight:600;margin-top:8px">Cupo limitado</h3>
        <p style="font-size:13px;color:#746553;margin-top:5px;line-height:1.55">Espacios asignados por orden de llegada; te recomendamos avisarnos tu hora estimada de llegada.</p>
      </div>
    </div>
  </section>

  <!-- ===== CONTEXTO LOCAL ===== -->
  <section style="color:#fff;background:linear-gradient(120deg,rgba(var(--c-ink-deep-rgb),.82),rgba(var(--c-ink-deep-rgb),.92)),url('{{ asset('images/fachada-hotel-la-finca-del-minero-zacatecas-06.webp') }}') center/cover;background-color:var(--c-ink-deep)">
    <div style="max-width:900px;margin:0 auto;padding:clamp(40px,7vw,66px) 16px">
      <h2 style="font-family:'Playfair Display',serif;font-size:clamp(20px,3.6vw,30px);font-weight:700;line-height:1.2">Por qué el estacionamiento importa en el Centro Histórico de Zacatecas</h2>
      <p style="margin-top:14px;font-size:clamp(14px,2vw,16px);color:rgba(255,255,255,.85);line-height:1.75;font-weight:300">
        Buscar dónde dejar el coche es uno de los mayores dolores de cabeza al hospedarte en hoteles en Zacatecas centro con estacionamiento limitado. Las calles del Centro Histórico son empedradas, angostas y en su mayoría de un solo sentido; varias zonas alrededor de la Catedral y el Mercado González Ortega tienen restricción vehicular en fines de semana y días de evento. El estacionamiento público en la vía es escaso y, cuando hay festival o puente, prácticamente desaparece. Hospedarte en un hotel con estacionamiento propio elimina esa incertidumbre desde que llegas a la ciudad.
      </p>
    </div>
  </section>

  <!-- ===== COMPARATIVA ===== -->
  <section style="max-width:1140px;margin:0 auto;padding:clamp(32px,6vw,56px) 16px">
    <h2 style="font-family:'Playfair Display',serif;font-size:clamp(19px,3.4vw,28px);font-weight:600;text-align:center">Estacionamiento del hotel vs. estacionamientos públicos del centro</h2>
    <div class="compare-grid">
      <div style="background:#fff;border:2px solid var(--c-primary);border-radius:6px;padding:22px">
        <span style="font-size:11px;letter-spacing:2px;text-transform:uppercase;color:var(--c-primary);font-weight:700">Hotel La Finca del Minero</span>
        <ul style="margin-top:12px;padding-left:18px;font-size:14px;color:#3a2e22;line-height:1.9">
          <li>Sin costo por noche, incluido en tu estancia</li>
          <li>Dentro del hotel, sin caminar de noche por la calle</li>
          <li>No depende de disponibilidad de la vía pública ni de restricciones por eventos</li>
          <li>Vigilado, dentro del predio del hotel</li>
        </ul>
      </div>
      <div style="background:#FAF6F0;border:1px solid rgba(var(--c-ink-rgb),.1);border-radius:6px;padding:22px">
        <span style="font-size:11px;letter-spacing:2px;text-transform:uppercase;color:#746553;font-weight:700">Estacionamientos públicos del centro</span>
        <ul style="margin-top:12px;padding-left:18px;font-size:14px;color:#6b5d4f;line-height:1.9">
          <li>Tarifa por hora o por día, aparte del hospedaje</li>
          <li>Puede quedar a varias cuadras de tu hotel</li>
          <li>Cupo reducido en temporada alta, puentes y festivales</li>
          <li>Acceso limitado por calles peatonales o restringidas al tráfico</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- ===== FAQ ===== -->
  <section style="max-width:800px;margin:0 auto;padding:0 16px clamp(44px,7vw,64px)">
    <div style="text-align:center;margin-bottom:28px">
      <span style="font-size:11px;letter-spacing:3px;text-transform:uppercase;color:var(--c-gold);font-weight:600">Preguntas frecuentes</span>
      <h2 style="font-family:'Playfair Display',serif;font-size:clamp(19px,3.4vw,28px);font-weight:600;margin-top:8px">Dudas sobre el estacionamiento</h2>
    </div>
    <div style="display:flex;flex-direction:column;gap:14px">
      <div style="background:#fff;border:1px solid rgba(var(--c-ink-rgb),.06);border-radius:6px;padding:20px;box-shadow:0 4px 16px rgba(var(--c-ink-rgb),.05)">
        <h3 style="font-family:'Playfair Display',serif;font-size:16px;font-weight:600">¿El estacionamiento del hotel tiene costo adicional?</h3>
        <p style="margin-top:6px;font-size:14px;color:#6b5d4f;line-height:1.6">No. El estacionamiento es gratuito para huéspedes con reservación, sin costo adicional por noche.</p>
      </div>
      <div style="background:#fff;border:1px solid rgba(var(--c-ink-rgb),.06);border-radius:6px;padding:20px;box-shadow:0 4px 16px rgba(var(--c-ink-rgb),.05)">
        <h3 style="font-family:'Playfair Display',serif;font-size:16px;font-weight:600">¿Hay espacio garantizado en el estacionamiento?</h3>
        <p style="margin-top:6px;font-size:14px;color:#6b5d4f;line-height:1.6">Los espacios se asignan por orden de llegada, ya que el cupo es limitado. Te recomendamos avisarnos tu hora estimada de llegada para asegurar tu lugar.</p>
      </div>
      <div style="background:#fff;border:1px solid rgba(var(--c-ink-rgb),.06);border-radius:6px;padding:20px;box-shadow:0 4px 16px rgba(var(--c-ink-rgb),.05)">
        <h3 style="font-family:'Playfair Display',serif;font-size:16px;font-weight:600">¿Qué hoteles en Zacatecas tienen estacionamiento gratuito?</h3>
        <p style="margin-top:6px;font-size:14px;color:#6b5d4f;line-height:1.6">Hotel La Finca del Minero, en el Centro Histórico de Zacatecas, ofrece estacionamiento propio gratuito y vigilado para sus huéspedes.</p>
      </div>
      <div style="background:#fff;border:1px solid rgba(var(--c-ink-rgb),.06);border-radius:6px;padding:20px;box-shadow:0 4px 16px rgba(var(--c-ink-rgb),.05)">
        <h3 style="font-family:'Playfair Display',serif;font-size:16px;font-weight:600">¿Es seguro dejar mi auto en el estacionamiento del hotel?</h3>
        <p style="margin-top:6px;font-size:14px;color:#6b5d4f;line-height:1.6">Sí. El estacionamiento está vigilado y dentro del predio del hotel, no en la vía pública.</p>
      </div>
    </div>
  </section>

  <!-- ===== CTA RESERVA ===== -->
  <section style="background:var(--c-ink);color:#fff;text-align:center;padding:clamp(44px,8vw,70px) 16px">
    <h2 style="font-family:'Playfair Display',serif;font-size:clamp(22px,4.4vw,40px);font-weight:700">Llega en auto, deja de preocuparte por el estacionamiento</h2>
    <p style="margin-top:12px;font-size:clamp(14px,2vw,17px);color:rgba(255,255,255,.7);font-weight:300;max-width:52ch;margin-left:auto;margin-right:auto">Reserva tu habitación en Hotel La Finca del Minero y tu estacionamiento gratuito y vigilado queda incluido.</p>
    <a class="btn-gold" href="{{ config('hotel.whatsapp_url') }}?text={{ urlencode('Hola, quiero hacer una reservación en Hotel La Finca del Minero y confirmar el estacionamiento.') }}" target="_blank" rel="noopener" style="display:inline-block;margin-top:22px;padding:15px 36px;font-size:16px;font-weight:600;border-radius:3px">Reservar ahora</a>
    <div style="margin-top:22px;font-size:13px;color:rgba(255,255,255,.55)">
      <a href="{{ route('inicio') }}" style="color:rgba(255,255,255,.75);border-bottom:1px solid rgba(255,255,255,.3)">Hotel Zacatecas</a>
      &nbsp;·&nbsp;
      <a href="{{ route('habitaciones') }}" style="color:rgba(255,255,255,.75);border-bottom:1px solid rgba(255,255,255,.3)">Ver habitaciones</a>
      &nbsp;·&nbsp;
      <a href="{{ route('contacto') }}" style="color:rgba(255,255,255,.75);border-bottom:1px solid rgba(255,255,255,.3)">Cómo llegar</a>
    </div>
  </section>

@endsection
