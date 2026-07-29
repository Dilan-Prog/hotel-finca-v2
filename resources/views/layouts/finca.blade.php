<!DOCTYPE html>
<html lang="es">
<head>
<script src="https://rankprosolutions.com.mx/api/tracking/snippet/rp_live_JMqUNYdjPX89ZrrjOruZI6QkKE3xZcX2eTDXB40dpnwD8Hc9XQoTW2vh.js"></script>
@php
  $prodDomain = rtrim(config('hotel.production_domain'), '/');
  $prodPath = request()->path() === '/' ? '/' : '/'.request()->path();
  $canonicalUrl = $prodDomain.$prodPath;
  $breadcrumbLabels = [
      'inicio' => 'Inicio',
      'habitaciones' => 'Habitaciones',
      'servicios' => 'Servicios',
      'reservaciones' => 'Reservaciones',
      'contacto' => 'Contacto',
      'estacionamiento' => 'Estacionamiento',
  ];
  $currentRoute = Route::currentRouteName();
@endphp
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title', config('hotel.name'))</title>
<link rel="canonical" href="{{ $canonicalUrl }}">
<meta property="og:type" content="website">
<meta property="og:site_name" content="{{ config('hotel.name') }}">
<meta property="og:title" content="@yield('title', config('hotel.name'))">
<meta property="og:url" content="{{ $canonicalUrl }}">
<script type="application/ld+json">{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Hotel',
    'name' => config('hotel.name'),
    'url' => $prodDomain.'/',
    'telephone' => config('hotel.phone_e164'),
    'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => config('hotel.address.street'),
        'addressLocality' => config('hotel.address.locality'),
        'addressRegion' => config('hotel.address.region'),
        'postalCode' => config('hotel.address.postal_code'),
        'addressCountry' => config('hotel.address.country'),
    ],
    'priceRange' => '$890–$1650 MXN',
    'amenityFeature' => [
        ['@type' => 'LocationFeatureSpecification', 'name' => 'Free parking', 'value' => true],
        ['@type' => 'LocationFeatureSpecification', 'name' => 'Restaurant', 'value' => true],
        ['@type' => 'LocationFeatureSpecification', 'name' => 'Breakfast available', 'value' => true],
        ['@type' => 'LocationFeatureSpecification', 'name' => 'Meeting rooms', 'value' => true],
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
<script type="application/ld+json">{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => array_values(array_filter([
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Inicio', 'item' => $prodDomain.'/'],
        $currentRoute !== 'inicio' ? [
            '@type' => 'ListItem',
            'position' => 2,
            'name' => $breadcrumbLabels[$currentRoute] ?? ucfirst((string) $currentRoute),
            'item' => $canonicalUrl,
        ] : null,
    ])),
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
@yield('head')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://images.unsplash.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
@vite(['resources/css/app.css', 'resources/js/app.js'])
@yield('styles')
</head>
<body>
<div style="background:#FAF6F0;overflow-x:hidden">

  <!-- ===== HEADER ===== -->
  <header style="position:sticky;top:0;z-index:50;background:rgba(250,246,240,.95);backdrop-filter:blur(10px);border-bottom:1px solid rgba(44,26,14,.1)">
    <div style="max-width:1240px;margin:0 auto;padding:12px 16px;display:flex;align-items:center;justify-content:space-between">
      <a href="{{ route('inicio') }}" style="display:flex;flex-direction:column;line-height:1">
        <span style="font-family:'Playfair Display',serif;font-weight:700;font-size:clamp(15px,4vw,21px);letter-spacing:.3px;color:#2C1A0E">Hotel La Finca del Minero</span>
        <span style="display:flex;align-items:center;gap:6px;margin-top:4px">
          <span style="color:#7d6318;font-size:11px;letter-spacing:3px">★★★★</span>
          <span style="font-size:9px;letter-spacing:2px;text-transform:uppercase;color:#746553;font-weight:500">Zacatecas · Centro Histórico</span>
        </span>
      </a>
      <nav class="desk-nav">
        <a href="{{ route('inicio') }}" style="padding:9px 12px;font-size:14px;font-weight:{{ Route::is('inicio') ? '600' : '500' }};color:{{ Route::is('inicio') ? '#9B1C1C' : '#2C1A0E' }}">Inicio</a>
        <a href="{{ route('habitaciones') }}" style="padding:9px 12px;font-size:14px;font-weight:{{ Route::is('habitaciones') ? '600' : '500' }};color:{{ Route::is('habitaciones') ? '#9B1C1C' : '#2C1A0E' }}">Habitaciones</a>
        <a href="{{ route('servicios') }}" style="padding:9px 12px;font-size:14px;font-weight:{{ Route::is('servicios') ? '600' : '500' }};color:{{ Route::is('servicios') ? '#9B1C1C' : '#2C1A0E' }}">Servicios</a>
        <a href="{{ route('estacionamiento') }}" style="padding:9px 12px;font-size:14px;font-weight:{{ Route::is('estacionamiento') ? '600' : '500' }};color:{{ Route::is('estacionamiento') ? '#9B1C1C' : '#2C1A0E' }}">Estacionamiento</a>
        <a href="{{ route('reservaciones') }}" style="padding:9px 12px;font-size:14px;font-weight:{{ Route::is('reservaciones') ? '600' : '500' }};color:{{ Route::is('reservaciones') ? '#9B1C1C' : '#2C1A0E' }}">Reservaciones</a>
        <a href="{{ route('contacto') }}" style="padding:9px 12px;font-size:14px;font-weight:{{ Route::is('contacto') ? '600' : '500' }};color:{{ Route::is('contacto') ? '#9B1C1C' : '#2C1A0E' }}">Contacto</a>
        <a href="{{ config('hotel.whatsapp_url') }}?text={{ urlencode('Hola, quiero hacer una reservación en Hotel La Finca del Minero.') }}" target="_blank" rel="noopener" style="margin-left:8px;padding:10px 20px;background:#9B1C1C;color:#fff;font-size:14px;font-weight:600;border-radius:3px">Reservar</a>
      </nav>
      <button id="burger-btn" class="mob-btn" style="background:none;border:none;cursor:pointer;font-size:26px;line-height:1;color:#2C1A0E;min-width:44px;min-height:44px;padding:8px"><span id="burger-icon">☰</span></button>
    </div>
    <nav id="mobile-nav" style="display:none;flex-direction:column;background:rgba(250,246,240,.98);border-top:1px solid rgba(44,26,14,.07);padding:6px 0 10px">
      <a href="{{ route('inicio') }}" style="padding:15px 20px;font-size:16px;font-weight:{{ Route::is('inicio') ? '600' : '500' }};color:{{ Route::is('inicio') ? '#9B1C1C' : '#2C1A0E' }};border-bottom:1px solid rgba(44,26,14,.05)">Inicio</a>
      <a href="{{ route('habitaciones') }}" style="padding:15px 20px;font-size:16px;font-weight:{{ Route::is('habitaciones') ? '600' : '500' }};color:{{ Route::is('habitaciones') ? '#9B1C1C' : '#2C1A0E' }};border-bottom:1px solid rgba(44,26,14,.05)">Habitaciones</a>
      <a href="{{ route('servicios') }}" style="padding:15px 20px;font-size:16px;font-weight:{{ Route::is('servicios') ? '600' : '500' }};color:{{ Route::is('servicios') ? '#9B1C1C' : '#2C1A0E' }};border-bottom:1px solid rgba(44,26,14,.05)">Servicios</a>
      <a href="{{ route('estacionamiento') }}" style="padding:15px 20px;font-size:16px;font-weight:{{ Route::is('estacionamiento') ? '600' : '500' }};color:{{ Route::is('estacionamiento') ? '#9B1C1C' : '#2C1A0E' }};border-bottom:1px solid rgba(44,26,14,.05)">Estacionamiento</a>
      <a href="{{ route('reservaciones') }}" style="padding:15px 20px;font-size:16px;font-weight:{{ Route::is('reservaciones') ? '600' : '500' }};color:{{ Route::is('reservaciones') ? '#9B1C1C' : '#2C1A0E' }};border-bottom:1px solid rgba(44,26,14,.05)">Reservaciones</a>
      <a href="{{ route('contacto') }}" style="padding:15px 20px;font-size:16px;font-weight:{{ Route::is('contacto') ? '600' : '500' }};color:{{ Route::is('contacto') ? '#9B1C1C' : '#2C1A0E' }};border-bottom:1px solid rgba(44,26,14,.05)">Contacto</a>
      <div style="padding:12px 16px">
        <a href="{{ config('hotel.whatsapp_url') }}?text={{ urlencode('Hola, quiero hacer una reservación en Hotel La Finca del Minero.') }}" target="_blank" rel="noopener" style="display:block;text-align:center;padding:14px;background:#9B1C1C;color:#fff;font-size:15px;font-weight:600;border-radius:3px">Reservar ahora</a>
      </div>
    </nav>
  </header>

  @yield('content')

  <!-- ===== FOOTER ===== -->
  <footer style="background:#1d110a;color:rgba(255,255,255,.6);padding:clamp(32px,5vw,50px) 16px clamp(22px,4vw,36px)">
    <div style="max-width:1140px;margin:0 auto">
      <div class="grid-footer">
        <div>
          <span style="font-family:'Playfair Display',serif;font-weight:700;font-size:18px;color:#fff;display:block">Hotel La Finca del Minero</span>
          <span style="color:#B8922A;font-size:12px;letter-spacing:3px;display:block;margin-top:6px">★★★★</span>
          <p style="margin-top:10px;font-size:13px;line-height:1.6;max-width:34ch">Centro histórico de Zacatecas, México. La calidez de una hacienda colonial.</p>
        </div>
        <div>
          <span style="font-size:10px;letter-spacing:2px;text-transform:uppercase;color:#B8922A;font-weight:600">Contacto</span>
          <p style="margin-top:10px;font-size:14px;line-height:1.8">Tel. 01 (492) 925-03-10 al 13<br>Lada sin costo: 01 800 215 2604</p>
        </div>
        <div>
          <span style="font-size:10px;letter-spacing:2px;text-transform:uppercase;color:#B8922A;font-weight:600">Síguenos</span>
          <p style="margin-top:10px;font-size:14px;line-height:1.9">
            <a href="{{ route('contacto') }}" style="color:rgba(255,255,255,.7)">Facebook</a><br>
            <a href="{{ route('contacto') }}" style="color:rgba(255,255,255,.7)">Aviso de privacidad</a>
          </p>
        </div>
      </div>
      <div style="margin-top:26px;padding-top:18px;border-top:1px solid rgba(255,255,255,.1);font-size:11px;color:rgba(255,255,255,.4)">© 2026 Hotel La Finca del Minero · Zacatecas, México</div>
    </div>
  </footer>

  <!-- ===== WHATSAPP FLOTANTE ===== -->
  <a href="{{ config('hotel.whatsapp_url') }}?text={{ urlencode('Hola, quiero más información sobre Hotel La Finca del Minero.') }}" target="_blank" rel="noopener" aria-label="Escríbenos por WhatsApp" style="position:fixed;right:20px;bottom:20px;z-index:999;width:58px;height:58px;border-radius:50%;background:#0e7a3d;display:flex;align-items:center;justify-content:center;box-shadow:0 6px 20px rgba(0,0,0,.3)">
    <svg viewBox="0 0 448 512" width="28" height="28" fill="#fff" aria-hidden="true"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
  </a>

</div>
</body>
</html>
