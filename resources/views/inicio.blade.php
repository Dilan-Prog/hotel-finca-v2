@extends('layouts.finca')

@section('title', 'Hotel Zacatecas | Centro Histórico – Finca del Minero')

@section('head')
<meta name="description" content="Hotel en el Centro Histórico de Zacatecas con desayuno, restaurante y estacionamiento gratuito. Reserva directo y obtén el mejor precio garantizado.">
<meta property="og:description" content="Hotel en el Centro Histórico de Zacatecas con desayuno, restaurante y estacionamiento gratuito. Reserva directo y obtén el mejor precio garantizado.">
<link rel="preload" as="image" fetchpriority="high" href="{{ asset('images/fachada-hotel-la-finca-del-minero-zacatecas-01.webp') }}">
<script type="application/ld+json">{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name' => '¿Cuánto cuesta un hotel en Zacatecas centro?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'En Hotel La Finca del Minero, en pleno Centro Histórico de Zacatecas, las habitaciones van desde 890 MXN por noche reservando directo, hasta 1,650 MXN por la Suite Colonial.',
            ],
        ],
        [
            '@type' => 'Question',
            'name' => '¿Los hoteles en Zacatecas incluyen desayuno?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Hotel La Finca del Minero cuenta con restaurante propio y desayunos caseros preparados cada mañana para nuestros huéspedes.',
            ],
        ],
        [
            '@type' => 'Question',
            'name' => '¿Dónde se ubica un hotel en Zacatecas centro como La Finca del Minero?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Hotel La Finca del Minero está en pleno Centro Histórico de Zacatecas, en C. Segunda de Matamoros 212, a pasos de la Catedral Basílica y del recorrido de la Feria Nacional.',
            ],
        ],
        [
            '@type' => 'Question',
            'name' => '¿Qué hoteles en Zacatecas centro tienen estacionamiento propio?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Hotel La Finca del Minero cuenta con estacionamiento propio, gratuito y vigilado para huéspedes con reservación, dentro del mismo predio del hotel en el Centro Histórico.',
            ],
        ],
        [
            '@type' => 'Question',
            'name' => '¿Cómo reservar un hotel en Zacatecas sin pagar comisión?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Reservando directo con Hotel La Finca del Minero por WhatsApp, sin pasar por plataformas intermediarias — el precio que ves es el que pagas.',
            ],
        ],
        [
            '@type' => 'Question',
            'name' => '¿Qué servicios incluye un hotel boutique en el Centro Histórico de Zacatecas?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Hotel La Finca del Minero incluye WiFi, restaurante con desayunos caseros, estacionamiento gratuito y vigilado, y el Salón El César para eventos con capacidad de 200 personas.',
            ],
        ],
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
@endsection

@section('styles')
<style>
  /* ── HERO BUTTONS ── */
  .hero-btns{display:flex;gap:12px;margin-top:26px;flex-direction:column}
  @media(min-width:480px){.hero-btns{flex-direction:row;flex-wrap:wrap}}
  .hero-btns a{text-align:center}
  /* ── BOOKING WIDGET ── */
  .grid-booking{display:grid;grid-template-columns:1fr 1fr;gap:14px}
  @media(min-width:600px){.grid-booking{grid-template-columns:repeat(auto-fit,minmax(148px,1fr));gap:18px}}
  .booking-cta{grid-column:1/-1}
  @media(min-width:600px){.booking-cta{grid-column:auto}}
  /* ── 3-COL STRIP ── */
  .strip-3{display:grid;grid-template-columns:1fr;gap:24px}
  @media(min-width:600px){.strip-3{grid-template-columns:repeat(3,1fr)}}
  .col-border{}
  @media(min-width:600px){.col-border{border-left:1px solid rgba(44,26,14,.1);border-right:1px solid rgba(44,26,14,.1)}}
  /* ── ROOMS ── */
  .grid-rooms{display:grid;grid-template-columns:1fr;gap:22px}
  @media(min-width:640px){.grid-rooms{grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:26px}}
  /* ── SALON BANNER ── */
  .grid-salon{display:grid;grid-template-columns:1fr;gap:28px;align-items:center}
  @media(min-width:700px){.grid-salon{grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:40px}}
  /* ── ATTRACTIONS ── */
  .grid-attr{display:grid;grid-template-columns:repeat(2,1fr);gap:12px}
  @media(min-width:700px){.grid-attr{grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:20px}}
  /* ── PRICE COMPARE ── */
  .grid-price-box{display:grid;grid-template-columns:1fr;gap:24px;align-items:center}
  @media(min-width:640px){.grid-price-box{grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:36px}}
  .price-boxes{display:flex;gap:16px;align-items:stretch}
</style>
@endsection

@section('content')

  <!-- ===== HERO ===== -->
  <section style="position:relative;min-height:86vh;display:flex;align-items:flex-end;color:#fff;background:linear-gradient(180deg,rgba(20,11,5,.28),rgba(20,11,5,.82)),url('{{ asset('images/fachada-hotel-la-finca-del-minero-zacatecas-01.webp') }}') center/cover;background-color:#2C1A0E">
    <div style="position:relative;max-width:1240px;margin:0 auto;width:100%;padding:clamp(40px,8vw,64px) 16px clamp(48px,8vw,72px);animation:fmFade .9s ease both">
      <span style="display:inline-block;font-size:11px;letter-spacing:3.5px;text-transform:uppercase;color:#E2C16A;font-weight:600;margin-bottom:16px">Hotel boutique · 4 estrellas</span>
      <h1 style="font-family:'Playfair Display',serif;font-weight:700;font-size:clamp(30px,6vw,66px);line-height:1.08;max-width:18ch;text-wrap:balance">Hotel en Zacatecas — Hotel La Finca del Minero en el Centro Histórico</h1>
      <p style="margin-top:18px;max-width:44ch;font-size:clamp(15px,2vw,19px);line-height:1.65;color:rgba(255,255,255,.82);font-weight:300">Una hacienda colonial restaurada a pasos de los callejones, museos y el teleférico.</p>
      <div class="hero-btns">
        <a href="{{ config('hotel.whatsapp_url') }}?text={{ urlencode('Hola, quiero hacer una reservación en Hotel La Finca del Minero.') }}" target="_blank" rel="noopener" style="padding:16px 32px;background:#9B1C1C;color:#fff;font-size:16px;font-weight:600;border-radius:3px;box-shadow:0 6px 22px rgba(155,28,28,.4)">Reservar ahora</a>
        <a href="{{ route('habitaciones') }}" style="padding:16px 28px;border:1.5px solid rgba(255,255,255,.45);color:#fff;font-size:16px;font-weight:500;border-radius:3px">Ver habitaciones</a>
      </div>
    </div>
  </section>

  <!-- ===== BOOKING WIDGET ===== -->
  <section style="position:relative;z-index:10;max-width:1140px;margin:-46px auto 0;padding:0 16px">
    <div style="background:#fff;border-radius:5px;box-shadow:0 18px 50px rgba(44,26,14,.16);border:1px solid rgba(44,26,14,.06);padding:20px">
      <div class="grid-booking">
        <label style="display:flex;flex-direction:column;gap:7px">
          <span style="font-size:10px;letter-spacing:1.5px;text-transform:uppercase;color:#746553;font-weight:600">Llegada</span>
          <input type="date" style="border:none;border-bottom:1.5px solid #e3d9cc;padding:8px 2px;font-family:inherit;font-size:15px;color:#2C1A0E;background:transparent;outline:none">
        </label>
        <label style="display:flex;flex-direction:column;gap:7px">
          <span style="font-size:10px;letter-spacing:1.5px;text-transform:uppercase;color:#746553;font-weight:600">Salida</span>
          <input type="date" style="border:none;border-bottom:1.5px solid #e3d9cc;padding:8px 2px;font-family:inherit;font-size:15px;color:#2C1A0E;background:transparent;outline:none">
        </label>
        <label style="display:flex;flex-direction:column;gap:7px">
          <span style="font-size:10px;letter-spacing:1.5px;text-transform:uppercase;color:#746553;font-weight:600">Adultos</span>
          <select style="border:none;border-bottom:1.5px solid #e3d9cc;padding:8px 2px;font-family:inherit;font-size:15px;color:#2C1A0E;background:transparent;outline:none"><option>1</option><option selected>2</option><option>3</option><option>4</option></select>
        </label>
        <label style="display:flex;flex-direction:column;gap:7px">
          <span style="font-size:10px;letter-spacing:1.5px;text-transform:uppercase;color:#746553;font-weight:600">Niños</span>
          <select style="border:none;border-bottom:1.5px solid #e3d9cc;padding:8px 2px;font-family:inherit;font-size:15px;color:#2C1A0E;background:transparent;outline:none"><option selected>0</option><option>1</option><option>2</option><option>3</option></select>
        </label>
        <a href="{{ config('hotel.whatsapp_url') }}?text={{ urlencode('Hola, quiero hacer una reservación en Hotel La Finca del Minero.') }}" target="_blank" rel="noopener" class="booking-cta" style="text-align:center;padding:14px 22px;background:#9B1C1C;color:#fff;font-size:15px;font-weight:600;border-radius:3px;box-shadow:0 4px 14px rgba(155,28,28,.28)">Reservar</a>
      </div>
    </div>
  </section>

  <!-- ===== BIENVENIDA ===== -->
  <section style="max-width:820px;margin:0 auto;padding:clamp(40px,6vw,60px) 16px 10px;text-align:center">
    <span style="font-size:11px;letter-spacing:3px;text-transform:uppercase;color:#7d6318;font-weight:600">Bienvenido</span>
    <h2 style="font-family:'Playfair Display',serif;font-size:clamp(22px,4vw,36px);font-weight:700;margin-top:10px;line-height:1.15">Hotel Centro de Zacatecas</h2>
    <p style="margin-top:14px;font-size:clamp(14px,2vw,17px);color:#6b5d4f;line-height:1.7">Hotel La Finca del Minero es una hacienda colonial restaurada en pleno Centro Histórico de Zacatecas, a pasos de la Catedral Basílica y del recorrido de la Feria Nacional. Vive la ciudad desde su corazón, sin depender del coche para llegar a lo que quieres conocer.</p>
  </section>

  <!-- ===== 3-COLUMN STRIP ===== -->
  <section style="max-width:1140px;margin:0 auto;padding:clamp(40px,6vw,60px) 16px 30px">
    <div class="strip-3">
      <div style="text-align:center;padding:0 12px">
        <div style="font-size:24px;color:#7d6318">✦</div>
        <h2 style="font-family:'Playfair Display',serif;font-size:19px;margin-top:10px;font-weight:600">Mejor precio directo</h2>
        <p style="margin-top:8px;font-size:14px;line-height:1.6;color:#6b5d4f">Reserva con nosotros y paga menos que en cualquier otra plataforma.</p>
      </div>
      <div class="col-border" style="text-align:center;padding:0 12px">
        <div style="font-size:24px;color:#7d6318">✦</div>
        <h2 style="font-family:'Playfair Display',serif;font-size:19px;margin-top:10px;font-weight:600">Ubicación en el centro</h2>
        <p style="margin-top:8px;font-size:14px;line-height:1.6;color:#6b5d4f">En pleno corazón histórico, a pasos de los principales atractivos.</p>
      </div>
      <div style="text-align:center;padding:0 12px">
        <div style="font-size:24px;color:#7d6318">✦</div>
        <h2 style="font-family:'Playfair Display',serif;font-size:19px;margin-top:10px;font-weight:600">Atención personalizada</h2>
        <p style="margin-top:8px;font-size:14px;line-height:1.6;color:#6b5d4f">Te recibimos como en casa, con el trato cálido de siempre.</p>
      </div>
    </div>
  </section>

  <!-- ===== ROOMS TEASER ===== -->
  <section style="max-width:1240px;margin:0 auto;padding:clamp(36px,5vw,54px) 16px">
    <div style="display:flex;justify-content:space-between;align-items:flex-end;flex-wrap:wrap;gap:14px;margin-bottom:28px">
      <div>
        <span style="font-size:11px;letter-spacing:3px;text-transform:uppercase;color:#7d6318;font-weight:600">Hospedaje</span>
        <h2 style="font-family:'Playfair Display',serif;font-size:clamp(24px,4vw,40px);font-weight:700;margin-top:8px">Nuestras habitaciones</h2>
      </div>
      <a href="{{ route('habitaciones') }}" style="font-size:14px;font-weight:600;color:#9B1C1C;border-bottom:1.5px solid #9B1C1C;padding-bottom:3px">Ver todas →</a>
    </div>
    <div class="grid-rooms">
      <article style="background:#fff;border-radius:5px;overflow:hidden;box-shadow:0 8px 30px rgba(44,26,14,.09);border:1px solid rgba(44,26,14,.05)">
        <div style="height:clamp(180px,45vw,210px);overflow:hidden">
          <img src="{{ asset('images/habitacion-estandar-hotel-la-finca-del-minero-zacatecas-01.webp') }}" width="1000" height="667" alt="Habitación Estándar en Hotel La Finca del Minero, Zacatecas" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block">
        </div>
        <div style="padding:20px">
          <h3 style="font-family:'Playfair Display',serif;font-size:21px;font-weight:600">Habitación Estándar</h3>
          <p style="margin-top:6px;font-size:14px;line-height:1.55;color:#6b5d4f">Sencilla o doble, cómoda y luminosa.</p>
          <div style="display:flex;align-items:baseline;justify-content:space-between;margin-top:16px">
            <span style="font-size:13px;color:#746553">Desde <strong style="font-family:'Playfair Display',serif;font-size:22px;color:#2C1A0E">890</strong> MXN</span>
            <a href="{{ route('habitaciones') }}" style="font-size:13px;font-weight:600;color:#9B1C1C">Ver habitación →</a>
          </div>
        </div>
      </article>
      <article style="background:#fff;border-radius:5px;overflow:hidden;box-shadow:0 8px 30px rgba(44,26,14,.09);border:1px solid rgba(44,26,14,.05)">
        <div style="height:clamp(180px,45vw,210px);overflow:hidden">
          <img src="{{ asset('images/habitacion-ejecutiva-hotel-la-finca-del-minero-zacatecas-01.webp') }}" width="1000" height="667" alt="Habitación Ejecutiva en Hotel La Finca del Minero, Zacatecas" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block">
        </div>
        <div style="padding:20px">
          <h3 style="font-family:'Playfair Display',serif;font-size:21px;font-weight:600">Habitación Ejecutiva</h3>
          <p style="margin-top:6px;font-size:14px;line-height:1.55;color:#6b5d4f">Sencilla o doble, con acabados más modernos.</p>
          <div style="display:flex;align-items:baseline;justify-content:space-between;margin-top:16px">
            <span style="font-size:13px;color:#746553">Desde <strong style="font-family:'Playfair Display',serif;font-size:22px;color:#2C1A0E">990</strong> MXN</span>
            <a href="{{ route('habitaciones') }}" style="font-size:13px;font-weight:600;color:#9B1C1C">Ver habitación →</a>
          </div>
        </div>
      </article>
      <article style="background:#fff;border-radius:5px;overflow:hidden;box-shadow:0 8px 30px rgba(44,26,14,.09);border:1px solid rgba(44,26,14,.05)">
        <div style="height:clamp(180px,45vw,210px);overflow:hidden">
          <img src="{{ asset('images/jr-suite-hotel-la-finca-del-minero-zacatecas-01.webp') }}" width="1000" height="667" alt="Jr. Suite en Hotel La Finca del Minero, Zacatecas" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block">
        </div>
        <div style="padding:20px">
          <h3 style="font-family:'Playfair Display',serif;font-size:21px;font-weight:600">Jr. Suite</h3>
          <p style="margin-top:6px;font-size:14px;line-height:1.55;color:#6b5d4f">Sencilla o doble, con sala de estar y mayor amplitud.</p>
          <div style="display:flex;align-items:baseline;justify-content:space-between;margin-top:16px">
            <span style="font-size:13px;color:#746553">Desde <strong style="font-family:'Playfair Display',serif;font-size:22px;color:#2C1A0E">1,090</strong> MXN</span>
            <a href="{{ route('habitaciones') }}" style="font-size:13px;font-weight:600;color:#9B1C1C">Ver habitación →</a>
          </div>
        </div>
      </article>
      <article style="background:#fff;border-radius:5px;overflow:hidden;box-shadow:0 8px 30px rgba(44,26,14,.09);border:1px solid rgba(44,26,14,.05)">
        <div style="height:clamp(180px,45vw,210px);overflow:hidden">
          <img src="{{ asset('images/jr-suite-ejecutiva-hotel-la-finca-del-minero-zacatecas-01.webp') }}" width="1000" height="667" alt="Jr. Suite Ejecutiva en Hotel La Finca del Minero, Zacatecas" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block">
        </div>
        <div style="padding:20px">
          <h3 style="font-family:'Playfair Display',serif;font-size:21px;font-weight:600">Jr. Suite Ejecutiva</h3>
          <p style="margin-top:6px;font-size:14px;line-height:1.55;color:#6b5d4f">Nuestra mejor estancia, con cama king size.</p>
          <div style="display:flex;align-items:baseline;justify-content:space-between;margin-top:16px">
            <span style="font-size:13px;color:#746553">Desde <strong style="font-family:'Playfair Display',serif;font-size:22px;color:#2C1A0E">1,090</strong> MXN</span>
            <a href="{{ route('habitaciones') }}" style="font-size:13px;font-weight:600;color:#9B1C1C">Ver habitación →</a>
          </div>
        </div>
      </article>
    </div>
  </section>

  <!-- ===== AMENIDADES ===== -->
  <section style="max-width:1140px;margin:0 auto;padding:0 16px clamp(36px,5vw,54px)">
    <div style="text-align:center;margin-bottom:28px">
      <span style="font-size:11px;letter-spacing:3px;text-transform:uppercase;color:#7d6318;font-weight:600">Todo incluido</span>
      <h2 style="font-family:'Playfair Display',serif;font-size:clamp(24px,4vw,40px);font-weight:700;margin-top:8px">Amenidades del hotel</h2>
    </div>
    <div class="grid-attr">
      <a href="{{ route('servicios') }}" style="display:block;background:#fff;border:1px solid rgba(44,26,14,.06);border-radius:6px;padding:22px;text-align:center;box-shadow:0 4px 16px rgba(44,26,14,.06)">
        <div style="font-size:24px;color:#9B1C1C">✦</div>
        <h3 style="font-family:'Playfair Display',serif;font-size:17px;font-weight:600;margin-top:8px">Restaurante</h3>
        <p style="font-size:13px;color:#746553;margin-top:5px;line-height:1.5">Cocina regional en el corazón del hotel</p>
      </a>
      <a href="{{ route('servicios') }}" style="display:block;background:#fff;border:1px solid rgba(44,26,14,.06);border-radius:6px;padding:22px;text-align:center;box-shadow:0 4px 16px rgba(44,26,14,.06)">
        <div style="font-size:24px;color:#9B1C1C">◇</div>
        <h3 style="font-family:'Playfair Display',serif;font-size:17px;font-weight:600;margin-top:8px">Desayuno</h3>
        <p style="font-size:13px;color:#746553;margin-top:5px;line-height:1.5">Desayunos caseros preparados cada mañana</p>
      </a>
      <a href="{{ route('estacionamiento') }}" style="display:block;background:#fff;border:1px solid rgba(44,26,14,.06);border-radius:6px;padding:22px;text-align:center;box-shadow:0 4px 16px rgba(44,26,14,.06)">
        <div style="font-size:24px;color:#9B1C1C">⊟</div>
        <h3 style="font-family:'Playfair Display',serif;font-size:17px;font-weight:600;margin-top:8px">Estacionamiento</h3>
        <p style="font-size:13px;color:#746553;margin-top:5px;line-height:1.5">Gratuito y vigilado, dentro del hotel</p>
      </a>
      <a href="{{ route('servicios') }}" style="display:block;background:#fff;border:1px solid rgba(44,26,14,.06);border-radius:6px;padding:22px;text-align:center;box-shadow:0 4px 16px rgba(44,26,14,.06)">
        <div style="font-size:24px;color:#9B1C1C">▦</div>
        <h3 style="font-family:'Playfair Display',serif;font-size:17px;font-weight:600;margin-top:8px">Salón de eventos</h3>
        <p style="font-size:13px;color:#746553;margin-top:5px;line-height:1.5">Salón El César, capacidad para 200 personas</p>
      </a>
    </div>
  </section>

  <!-- ===== SALÓN EL CÉSAR BANNER ===== -->
  <section style="color:#fff;background:linear-gradient(120deg,rgba(20,11,5,.62),rgba(20,11,5,.86)),url('{{ asset('images/salon-el-cesar-hotel-la-finca-del-minero-zacatecas-01.webp') }}') center/cover;background-color:#1d110a;margin-top:20px">
    <div style="max-width:1140px;margin:0 auto;padding:clamp(44px,8vw,78px) 16px">
      <div class="grid-salon">
        <div>
          <span style="font-size:11px;letter-spacing:3px;text-transform:uppercase;color:#E2C16A;font-weight:600">Eventos</span>
          <h2 style="font-family:'Playfair Display',serif;font-size:clamp(26px,5vw,46px);font-weight:700;margin-top:10px;line-height:1.08">Salón El César</h2>
          <p style="margin-top:14px;font-size:clamp(14px,2vw,17px);line-height:1.6;color:rgba(255,255,255,.82);max-width:42ch;font-weight:300">Capacidad para 200 personas · Todo tipo de eventos · Menús desde $480 MXN.</p>
          <a href="{{ route('servicios') }}" style="display:inline-block;margin-top:24px;padding:14px 30px;background:#9B1C1C;color:#fff;font-size:15px;font-weight:600;border-radius:3px;box-shadow:0 6px 20px rgba(155,28,28,.4)">Cotizar evento</a>
        </div>
        <div style="display:flex;flex-direction:column;gap:12px">
          <div style="display:flex;gap:12px">
            <div style="flex:1;height:clamp(100px,28vw,130px);border-radius:4px;background:url('{{ asset('images/salon-el-cesar-hotel-la-finca-del-minero-zacatecas-02.webp') }}') center/cover"></div>
            <div style="flex:1;height:clamp(100px,28vw,130px);border-radius:4px;background:url('{{ asset('images/salon-el-cesar-hotel-la-finca-del-minero-zacatecas-03.webp') }}') center/cover"></div>
          </div>
          <div style="height:clamp(100px,28vw,130px);border-radius:4px;background:url('{{ asset('images/salon-el-cesar-hotel-la-finca-del-minero-zacatecas-04.webp') }}') center/cover"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== NEARBY ATTRACTIONS ===== -->
  <section style="max-width:1240px;margin:0 auto;padding:clamp(44px,7vw,70px) 16px clamp(36px,5vw,50px)">
    <div style="text-align:center;margin-bottom:28px">
      <span style="font-size:11px;letter-spacing:3px;text-transform:uppercase;color:#7d6318;font-weight:600">El destino</span>
      <h2 style="font-family:'Playfair Display',serif;font-size:clamp(24px,4vw,40px);font-weight:700;margin-top:8px">A unos pasos de todo</h2>
      <p style="margin-top:10px;font-size:clamp(13px,1.8vw,16px);color:#6b5d4f;max-width:52ch;margin-left:auto;margin-right:auto;line-height:1.6">Zacatecas, Patrimonio de la Humanidad, te rodea desde la puerta del hotel.</p>
    </div>
    <div class="grid-attr">
      <a href="{{ route('contacto') }}" style="position:relative;height:clamp(160px,42vw,280px);border-radius:5px;overflow:hidden;display:flex;align-items:flex-end">
        <img src="https://commons.wikimedia.org/wiki/Special:FilePath/La%20bufa%20de%20Zacatecas%20de%20noche.JPG?width=1100" width="1280" height="714" alt="Cerro de la Bufa iluminado de noche, Zacatecas" loading="lazy" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover">
        <div style="position:absolute;inset:0;background:linear-gradient(160deg,rgba(20,11,5,.1),rgba(20,11,5,.76))"></div>
        <div style="position:relative;padding:16px;color:#fff"><h3 style="font-family:'Playfair Display',serif;font-size:clamp(17px,4vw,22px);font-weight:600">Cerro de la Bufa</h3><p style="font-size:12px;color:rgba(255,255,255,.75);margin-top:3px">Miradores y teleférico</p></div>
      </a>
      <a href="{{ route('contacto') }}" style="position:relative;height:clamp(160px,42vw,280px);border-radius:5px;overflow:hidden;display:flex;align-items:flex-end">
        <img src="https://commons.wikimedia.org/wiki/Special:FilePath/Mina_el_Eden.jpg?width=1100" width="1280" height="1707" alt="Entrada a la Mina El Edén, Zacatecas" loading="lazy" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover">
        <div style="position:absolute;inset:0;background:linear-gradient(160deg,rgba(20,11,5,.1),rgba(20,11,5,.76))"></div>
        <div style="position:relative;padding:16px;color:#fff"><h3 style="font-family:'Playfair Display',serif;font-size:clamp(17px,4vw,22px);font-weight:600">Mina El Edén</h3><p style="font-size:12px;color:rgba(255,255,255,.75);margin-top:3px">Recorrido en las entrañas</p></div>
      </a>
      <a href="{{ route('contacto') }}" style="position:relative;height:clamp(160px,42vw,280px);border-radius:5px;overflow:hidden;display:flex;align-items:flex-end">
        <img src="https://commons.wikimedia.org/wiki/Special:FilePath/Acueducto%20Zacatecas%20desde%20Teleferico.JPG?width=1100" width="1280" height="960" alt="Vista del acueducto de Zacatecas desde el teleférico" loading="lazy" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover">
        <div style="position:absolute;inset:0;background:linear-gradient(160deg,rgba(20,11,5,.1),rgba(20,11,5,.76))"></div>
        <div style="position:relative;padding:16px;color:#fff"><h3 style="font-family:'Playfair Display',serif;font-size:clamp(17px,4vw,22px);font-weight:600">Teleférico</h3><p style="font-size:12px;color:rgba(255,255,255,.75);margin-top:3px">Vistas únicas de la ciudad</p></div>
      </a>
      <a href="{{ route('contacto') }}" style="position:relative;height:clamp(160px,42vw,280px);border-radius:5px;overflow:hidden;display:flex;align-items:flex-end">
        <img src="https://commons.wikimedia.org/wiki/Special:FilePath/Callej%C3%B3n%20de%20San%20Agust%C3%ADn%2C%20Zacatecas%2C%20Zacatecas.JPG?width=1100" width="1280" height="853" alt="Callejón de San Agustín, cerca de los museos de Zacatecas" loading="lazy" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover">
        <div style="position:absolute;inset:0;background:linear-gradient(160deg,rgba(20,11,5,.1),rgba(20,11,5,.76))"></div>
        <div style="position:relative;padding:16px;color:#fff"><h3 style="font-family:'Playfair Display',serif;font-size:clamp(17px,4vw,22px);font-weight:600">Museos</h3><p style="font-size:12px;color:rgba(255,255,255,.75);margin-top:3px">Rafael Coronel, Pedro Coronel y más</p></div>
      </a>
    </div>
  </section>

  <!-- ===== FINAL CTA ===== -->
  <section style="max-width:1140px;margin:0 auto;padding:10px 16px clamp(48px,8vw,80px)">
    <div style="background:#fff;border:1px solid rgba(184,146,42,.35);border-radius:6px;box-shadow:0 14px 44px rgba(44,26,14,.1);padding:clamp(24px,5vw,46px)">
      <div class="grid-price-box">
        <div>
          <span style="font-size:11px;letter-spacing:3px;text-transform:uppercase;color:#9B1C1C;font-weight:700">Reserva directo</span>
          <h2 style="font-family:'Playfair Display',serif;font-size:clamp(22px,4vw,40px);font-weight:700;margin-top:10px;line-height:1.1">Reserva directo y ahorra</h2>
          <p style="margin-top:10px;font-size:clamp(13px,1.8vw,16px);line-height:1.6;color:#6b5d4f">Los precios de hotel en Zacatecas centro en La Finca del Minero van desde 890 MXN por noche reservando directo. El mismo cuarto, mejor precio. Sin intermediarios, sin cargos extra.</p>
          <a href="{{ config('hotel.whatsapp_url') }}?text={{ urlencode('Hola, quiero hacer una reservación en Hotel La Finca del Minero.') }}" target="_blank" rel="noopener" style="display:inline-block;margin-top:20px;padding:14px 32px;background:#9B1C1C;color:#fff;font-size:15px;font-weight:600;border-radius:3px;box-shadow:0 6px 20px rgba(155,28,28,.35)">Reservar ahora</a>
        </div>
        <div class="price-boxes">
          <div style="flex:1;background:#FAF6F0;border:2px solid #9B1C1C;border-radius:5px;padding:22px;text-align:center;position:relative">
            <span style="position:absolute;top:-11px;left:50%;transform:translateX(-50%);background:#9B1C1C;color:#fff;font-size:10px;letter-spacing:1.5px;text-transform:uppercase;font-weight:700;padding:4px 12px;border-radius:20px">Directo</span>
            <div style="font-family:'Playfair Display',serif;font-size:36px;font-weight:700;color:#9B1C1C;margin-top:8px">890</div>
            <div style="font-size:11px;color:#746553;letter-spacing:1px">MXN / noche</div>
          </div>
          <div style="flex:1;background:#FAF6F0;border:1px solid #e3d9cc;border-radius:5px;padding:22px;text-align:center;opacity:.85">
            <span style="font-size:10px;letter-spacing:1.5px;text-transform:uppercase;color:#746553;font-weight:600">Otros sitios</span>
            <div style="font-family:'Playfair Display',serif;font-size:36px;font-weight:700;color:#746553;margin-top:8px;text-decoration:line-through;text-decoration-color:rgba(155,28,28,.4)">1,023</div>
            <div style="font-size:11px;color:#746553;letter-spacing:1px">MXN / noche</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== FAQ ===== -->
  <section style="max-width:800px;margin:0 auto;padding:clamp(10px,2vw,20px) 16px clamp(44px,7vw,64px)">
    <div style="text-align:center;margin-bottom:28px">
      <span style="font-size:11px;letter-spacing:3px;text-transform:uppercase;color:#7d6318;font-weight:600">Preguntas frecuentes</span>
      <h2 style="font-family:'Playfair Display',serif;font-size:clamp(22px,4vw,34px);font-weight:700;margin-top:8px">Dudas antes de reservar</h2>
    </div>
    <div style="display:flex;flex-direction:column;gap:14px">
      <div style="background:#fff;border:1px solid rgba(44,26,14,.06);border-radius:6px;padding:20px;box-shadow:0 4px 16px rgba(44,26,14,.05)">
        <h3 style="font-family:'Playfair Display',serif;font-size:16px;font-weight:600">¿Cuánto cuesta un hotel en Zacatecas centro?</h3>
        <p style="margin-top:6px;font-size:14px;color:#6b5d4f;line-height:1.6">En Hotel La Finca del Minero, en pleno Centro Histórico de Zacatecas, las habitaciones van desde 890 MXN por noche reservando directo, hasta 1,650 MXN por la Suite Colonial.</p>
      </div>
      <div style="background:#fff;border:1px solid rgba(44,26,14,.06);border-radius:6px;padding:20px;box-shadow:0 4px 16px rgba(44,26,14,.05)">
        <h3 style="font-family:'Playfair Display',serif;font-size:16px;font-weight:600">¿Los hoteles en Zacatecas incluyen desayuno?</h3>
        <p style="margin-top:6px;font-size:14px;color:#6b5d4f;line-height:1.6">Hotel La Finca del Minero cuenta con restaurante propio y desayunos caseros preparados cada mañana para nuestros huéspedes.</p>
      </div>
      <div style="background:#fff;border:1px solid rgba(44,26,14,.06);border-radius:6px;padding:20px;box-shadow:0 4px 16px rgba(44,26,14,.05)">
        <h3 style="font-family:'Playfair Display',serif;font-size:16px;font-weight:600">¿Dónde se ubica un hotel en Zacatecas centro como La Finca del Minero?</h3>
        <p style="margin-top:6px;font-size:14px;color:#6b5d4f;line-height:1.6">Hotel La Finca del Minero está en pleno Centro Histórico de Zacatecas, a pasos de la Catedral Basílica y del recorrido de la Feria Nacional.</p>
      </div>
      <div style="background:#fff;border:1px solid rgba(44,26,14,.06);border-radius:6px;padding:20px;box-shadow:0 4px 16px rgba(44,26,14,.05)">
        <h3 style="font-family:'Playfair Display',serif;font-size:16px;font-weight:600">¿Qué hoteles en Zacatecas centro tienen estacionamiento propio?</h3>
        <p style="margin-top:6px;font-size:14px;color:#6b5d4f;line-height:1.6">Hotel La Finca del Minero cuenta con estacionamiento propio, gratuito y vigilado para huéspedes con reservación, dentro del mismo predio del hotel.</p>
      </div>
      <div style="background:#fff;border:1px solid rgba(44,26,14,.06);border-radius:6px;padding:20px;box-shadow:0 4px 16px rgba(44,26,14,.05)">
        <h3 style="font-family:'Playfair Display',serif;font-size:16px;font-weight:600">¿Cómo reservar un hotel en Zacatecas sin pagar comisión?</h3>
        <p style="margin-top:6px;font-size:14px;color:#6b5d4f;line-height:1.6">Reservando directo con Hotel La Finca del Minero por WhatsApp, sin pasar por plataformas intermediarias — el precio que ves es el que pagas.</p>
      </div>
      <div style="background:#fff;border:1px solid rgba(44,26,14,.06);border-radius:6px;padding:20px;box-shadow:0 4px 16px rgba(44,26,14,.05)">
        <h3 style="font-family:'Playfair Display',serif;font-size:16px;font-weight:600">¿Qué servicios incluye un hotel boutique en el Centro Histórico de Zacatecas?</h3>
        <p style="margin-top:6px;font-size:14px;color:#6b5d4f;line-height:1.6">Hotel La Finca del Minero incluye WiFi, restaurante con desayunos caseros, estacionamiento gratuito y vigilado, y el Salón El César para eventos con capacidad de 200 personas.</p>
      </div>
    </div>
  </section>

  <!-- ===== PRE-FOOTER CTA ===== -->
  <section style="background:#2C1A0E;color:#fff;text-align:center;padding:clamp(44px,8vw,70px) 16px">
    <h2 style="font-family:'Playfair Display',serif;font-size:clamp(24px,5vw,48px);font-weight:700">¿Listo para hospedarte?</h2>
    <p style="margin-top:12px;font-size:clamp(14px,2vw,17px);color:rgba(255,255,255,.7);font-weight:300">Vive Zacatecas desde su corazón. Tu hogar te espera.</p>
    <a href="{{ config('hotel.whatsapp_url') }}?text={{ urlencode('Hola, quiero hacer una reservación en Hotel La Finca del Minero.') }}" target="_blank" rel="noopener" style="display:inline-block;margin-top:22px;padding:15px 36px;background:#9B1C1C;color:#fff;font-size:16px;font-weight:600;border-radius:3px;box-shadow:0 8px 26px rgba(155,28,28,.45)">Reservar ahora</a>
  </section>

@endsection
