<?php

namespace VoyagerAdmin\ThemeBoilerplate;

use Illuminate\Support\ServiceProvider;
use TCG\Voyager\Facades\Plugins as PluginFacade;

class ThemeBoilerplateServiceProvider extends ServiceProvider
{
    public function boot()
    {
        PluginFacade::addPlugin(\VoyagerAdmin\ThemeBoilerplate\ThemeBoilerplate::class);
    }

    public function register()
    {
        //
    }
}