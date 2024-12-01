<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LivresIndex extends Component
{
    public $livres;
    /**
     * Create a new component instance.
     */
    public function __construct($livres)
    {
        $this->livres = $livres;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.livres-index');
    }
}
