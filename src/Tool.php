<?php

namespace PragmaRX\ArtisanTool;

use Laravel\Nova\Nova;
use Laravel\Nova\Tool as BaseTool;

class Tool extends BaseTool
{
    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::script('artisan-tool', __DIR__ . '/../dist/js/tool.js');
        Nova::style('artisan-tool', __DIR__ . '/../dist/css/tool.css');
    }

    /**
     * Build the view that renders the navigation links for the tool.
     *
     * @return \Illuminate\View\View
     */
    public function renderNavigation()
    {
        return view('artisan-tool::navigation');
    }
}
