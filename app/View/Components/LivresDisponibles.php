<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LivresDisponibles extends Component
{
    public $livresDisponibles;

    /**
     * Create a new component instance.
     */
    public function __construct($livresDisponibles)
    {
        $this->livresDisponibles = $livresDisponibles;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.livres-disponibles');
    }
}
