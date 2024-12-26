<?php

namespace Firsadev\HitungMundur;

use Illuminate\Support\ServiceProvider;

class HitungMundurProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        dd("oke berhasil");
    }
}
