<!DOCTYPE html>
<html lang="es">
<head>
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
        <a href="{{ route('reservaciones') }}" style="padding:9px 12px;font-size:14px;font-weight:{{ Route::is('reservaciones') ? '600' : '500' }};color:{{ Route::is('reservaciones') ? '#9B1C1C' : '#2C1A0E' }}">Reservaciones</a>
        <a href="{{ route('contacto') }}" style="padding:9px 12px;font-size:14px;font-weight:{{ Route::is('contacto') ? '600' : '500' }};color:{{ Route::is('contacto') ? '#9B1C1C' : '#2C1A0E' }}">Contacto</a>
        <a href="{{ route('reservaciones') }}" style="margin-left:8px;padding:10px 20px;background:#9B1C1C;color:#fff;font-size:14px;font-weight:600;border-radius:3px">Reservar</a>
      </nav>
      <button id="burger-btn" class="mob-btn" style="background:none;border:none;cursor:pointer;font-size:26px;line-height:1;color:#2C1A0E;min-width:44px;min-height:44px;padding:8px"><span id="burger-icon">☰</span></button>
    </div>
    <nav id="mobile-nav" style="display:none;flex-direction:column;background:rgba(250,246,240,.98);border-top:1px solid rgba(44,26,14,.07);padding:6px 0 10px">
      <a href="{{ route('inicio') }}" style="padding:15px 20px;font-size:16px;font-weight:{{ Route::is('inicio') ? '600' : '500' }};color:{{ Route::is('inicio') ? '#9B1C1C' : '#2C1A0E' }};border-bottom:1px solid rgba(44,26,14,.05)">Inicio</a>
      <a href="{{ route('habitaciones') }}" style="padding:15px 20px;font-size:16px;font-weight:{{ Route::is('habitaciones') ? '600' : '500' }};color:{{ Route::is('habitaciones') ? '#9B1C1C' : '#2C1A0E' }};border-bottom:1px solid rgba(44,26,14,.05)">Habitaciones</a>
      <a href="{{ route('servicios') }}" style="padding:15px 20px;font-size:16px;font-weight:{{ Route::is('servicios') ? '600' : '500' }};color:{{ Route::is('servicios') ? '#9B1C1C' : '#2C1A0E' }};border-bottom:1px solid rgba(44,26,14,.05)">Servicios</a>
      <a href="{{ route('reservaciones') }}" style="padding:15px 20px;font-size:16px;font-weight:{{ Route::is('reservaciones') ? '600' : '500' }};color:{{ Route::is('reservaciones') ? '#9B1C1C' : '#2C1A0E' }};border-bottom:1px solid rgba(44,26,14,.05)">Reservaciones</a>
      <a href="{{ route('contacto') }}" style="padding:15px 20px;font-size:16px;font-weight:{{ Route::is('contacto') ? '600' : '500' }};color:{{ Route::is('contacto') ? '#9B1C1C' : '#2C1A0E' }};border-bottom:1px solid rgba(44,26,14,.05)">Contacto</a>
      <div style="padding:12px 16px">
        <a href="{{ route('reservaciones') }}" style="display:block;text-align:center;padding:14px;background:#9B1C1C;color:#fff;font-size:15px;font-weight:600;border-radius:3px">Reservar ahora</a>
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

</div>
</body>
</html>
