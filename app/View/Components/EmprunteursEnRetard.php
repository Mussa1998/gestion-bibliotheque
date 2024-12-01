<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class EmprunteursEnRetard extends Component
{
    public $emprunteurs;
    /**
     * Create a new component instance.
     */
    public function __construct($emprunteurs)
    {
        $this->emprunteurs = $emprunteurs;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.emprunteurs-en-retard');
    }
}
