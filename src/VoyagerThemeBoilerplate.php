<?php

namespace VoyagerAdmin\VoyagerThemeBoilerplate;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use TCG\Voyager\Contracts\Plugins\IsThemePlugin;

class VoyagerThemeBoilerplate implements IsThemePlugin
{
    public $name = 'Voyager theme boilerplate';
    public $description = 'A theme boilerplate for Voyager 2';
    public $repository = 'voyager-admin/voyager-theme-boilerplate';
    public $website = 'https://github.com/voyager-admin/voyager-theme-boilerplate';
    public $version = '1.0.0';

    public function getInstructionsView(): ?View
    {
        return null;
    }

    public function registerProtectedRoutes()
    {
        //
    }

    public function registerPublicRoutes()
    {
        Route::get('voyager-theme-boilerplate.css', function () {
            $path = realpath(dirname(__DIR__, 1).'/resources/dist/styles.css');
            $response = response(File::get($path), 200, ['Content-Type' => 'text/css']);
            $response->setSharedMaxAge(31536000);
            $response->setMaxAge(31536000);
            $response->setExpires(new \DateTime('+1 year'));

            return $response;
        })->name('voyager-theme-boilerplate');
    }

    public function getSettingsView(): ?View
    {
        return null;
    }

    public function getStyleRoute(): string
    {
        return route('voyager-theme-boilerplate');
    }
}
