<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class RedirectWidget extends Widget
{
    protected static string $view = 'vendor.filament.widgets.redirect-widget';

    public function view():string{
        return $this->view();
    }
}
