<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LastFMTop extends Component
{
    public $tracks;
    /**
     * Create a new component instance.
     */
    public function __construct($tracks)
    {
        $this->tracks = $tracks;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.lastfm-top');
    }
}
