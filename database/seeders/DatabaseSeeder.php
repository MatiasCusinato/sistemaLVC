<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rubro;
use App\Models\Articulo;
use App\Models\ComprobanteCabecera;
use App\Models\ComprobanteRenglon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Rubro::factory(40)->create();
        \App\Models\Articulo::factory(65)->create();
        \App\Models\ComprobanteCabecera::factory(30)->create();
        \App\Models\ComprobanteRenglon::factory(60)->create();
    }
}
