<?php

namespace Voyager\ThemeBoilerplate;

use Voyager\Admin\Contracts\Plugins\ThemePlugin;

class ThemeBoilerplate implements ThemePlugin
{
    public $name = 'Theme boilerplate';
    public $description = 'A theme boilerplate for Voyager 2';
    public $repository = 'voyager-admin/theme-boilerplate';
    public $website = 'https://github.com/voyager-admin/theme-boilerplate';
    public $version = '1.0.0';

    public function __construct()
    {
        $this->readme = realpath(dirname(__DIR__, 1).'/README.md');
    }

    public function provideCSS(): string
    {
        return file_get_contents(realpath(dirname(__DIR__, 1).'/resources/dist/styles.css'));
    }
}
