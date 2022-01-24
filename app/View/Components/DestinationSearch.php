<?php

namespace App\View\Components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DestinationSearch extends Component
{
    public function render(): View|Factory|Htmlable|string|\Closure|Application
    {
        return view('components.destination-search');
    }
}
