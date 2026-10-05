<?php

/**
 * Datos reales del negocio, verificados contra el sitio en producción
 * (hotellafincadelminero.com) el 2026-07-22. Fuente única para evitar
 * repetir NAP (nombre/dirección/teléfono) por vista.
 */

return [
    'name' => 'Hotel La Finca del Minero',

    'production_domain' => 'https://hotellafincadelminero.com',

    'phone_display' => '01 (492) 925-03-10 al 13',
    'phone_e164' => '+524929250310',

    'phone_secondary_e164' => '+524922288777',

    'whatsapp_e164' => '+524922232151',
    'whatsapp_url' => 'https://wa.me/524922232151',

    // Mensaje de WhatsApp por página (botón flotante y botones del header).
    // Los botones dentro de cada página llevan su propio mensaje según la sección.
    'whatsapp_messages' => [
        'default' => 'Hola, quiero más información sobre Hotel La Finca del Minero.',
        'inicio' => 'Hola, vi su sitio web y quiero información y disponibilidad en Hotel La Finca del Minero.',
        'habitaciones' => 'Hola, estuve viendo las habitaciones en su sitio web y quiero reservar. ¿Tienen disponibilidad?',
        'servicios' => 'Hola, estuve viendo los servicios de Hotel La Finca del Minero y quiero más información.',
        'reservaciones' => 'Hola, quiero hacer una reservación en Hotel La Finca del Minero.',
        'contacto' => 'Hola, tengo una pregunta sobre Hotel La Finca del Minero.',
        'estacionamiento' => 'Hola, quiero reservar en Hotel La Finca del Minero y confirmar el estacionamiento.',
    ],

    'email' => 'ventas@hotellafincadelminero.com',

    'address' => [
        'street' => 'C. Segunda de Matamoros 212',
        'locality' => 'Zacatecas Centro',
        'region' => 'Zacatecas',
        'postal_code' => '98000',
        'country' => 'MX',
    ],

    // Sin coordenadas verificadas todavía — no se usan en geo/JSON-LD hasta confirmarlas.
    'geo' => [
        'lat' => null,
        'lng' => null,
    ],

    'social' => [
        'facebook' => 'https://www.facebook.com/HotelLaFincadelMinero',
        'instagram' => 'https://www.instagram.com/lafincadelminero/',
    ],
];
