<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ViewComponent extends Component
{
    public $title;

    /**
     * Crée une nouvelle instance du composant.
     */
    public function __construct($title = 'Default Title')
    {
        $this->title = $title;
    }

    /**
     * Obtenez la vue ou le contenu qui représente le composant.
     */
    public function render()
    {
        return view('components.view-component');
    }
}
