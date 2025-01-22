<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HomeComponent extends Component
{
    public $message;

    /**
     * Crée une nouvelle instance du composant.
     */
    public function __construct($message = 'Welcome to Home!')
    {
        $this->message = $message;
    }

    /**
     * Obtenez la vue ou le contenu qui représente le composant.
     */
    public function render()
    {
        return view('components.home-component');
    }
}
