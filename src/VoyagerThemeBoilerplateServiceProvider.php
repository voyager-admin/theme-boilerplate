<?php

namespace VoyagerAdmin\VoyagerThemeBoilerplate;

use Illuminate\Support\ServiceProvider;
use TCG\Voyager\Facades\Plugins as PluginFacade;

class VoyagerThemeBoilerplateServiceProvider extends ServiceProvider
{
    public function boot()
    {
        PluginFacade::addPlugin(\VoyagerAdmin\VoyagerThemeBoilerplate\VoyagerThemeBoilerplate::class);
    }

    public function register()
    {
        //
    }
}