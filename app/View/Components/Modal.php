<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    public $id;
    public $title;
    public $buttonText;
    public $component;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $title, $buttonText, $component)
    {
        $this->id = $id;
        $this->title = $title;
        $this->buttonText = $buttonText;
        $this->component = $component;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal');
    }
}
