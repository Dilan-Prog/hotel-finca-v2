<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';

    protected $description = 'Genera public/sitemap.xml a partir de las rutas fijas reales del sitio (sin crawler)';

    public function handle(): void
    {
        $domain = rtrim(config('hotel.production_domain'), '/');
        $lastmod = now();

        $routes = [
            '/' => 1.0,
            '/habitaciones' => 0.9,
            '/servicios' => 0.8,
            '/reservaciones' => 0.9,
            '/contacto' => 0.7,
        ];

        $sitemap = Sitemap::create();

        foreach ($routes as $path => $priority) {
            $sitemap->add(
                Url::create($domain.$path)
                    ->setLastModificationDate($lastmod)
                    ->setPriority($priority)
            );
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generado en public/sitemap.xml con dominio '.$domain);
    }
}
