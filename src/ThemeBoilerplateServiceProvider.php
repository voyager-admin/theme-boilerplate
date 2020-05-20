<?php

namespace Voyager\ThemeBoilerplate;

use Illuminate\Support\ServiceProvider;
use Voyager\Admin\Manager\Plugins as PluginManager;

class ThemeBoilerplateServiceProvider extends ServiceProvider
{
    public function boot(PluginManager $pluginmanager)
    {
        $pluginmanager->addPlugin(\Voyager\ThemeBoilerplate\ThemeBoilerplate::class);
    }

    public function register()
    {
        //
    }
}