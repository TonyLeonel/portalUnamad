<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProgramadorController extends Controller
{
    public function link()
    {
        File::link(storage_path('app/public'), public_path('storage'));
        return 'LINK GENERADO CORRECTAMENTE';
    }

    public function config_cache()
    {
        Artisan::call('config:clear');
        Artisan::call('cache:clear');
        Artisan::call('config:cache');
        return "CONFIG CACHE ACTUALIZADO CORRECTAMENTE";
    }

    public function view_cache()
    {
        Artisan::call('view:clear');
        Artisan::call('view:cache');
        return "VIEW CACHE ACTUALIZADO CORRECTAMENTE";
    }

    public function route_cache(Type $var = null)
    {
        Artisan::call('route:clear');
        Artisan::call('route:cache');
        return "ROUTE CACHE ACTUALIZADO CORRECTAMENTE";
    }

}
