<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Layout extends Component
{

    public $book;
    public $page;

    /**
     * Create a new component instance.
     */
    public function __construct($book = null, $page = 'dashboard')
    {
        $this->book = $book;
        $this->page = $page;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout');
    }
}
