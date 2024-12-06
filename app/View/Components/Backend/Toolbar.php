<?php

namespace App\View\Components\Backend;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Toolbar extends Component
{
    public $title;
    public $breadcrumbs;
    public $buttonText;
    public $buttonIcon;
    public $buttonUrl;

    public function __construct($title, $breadcrumbs = [], $buttonText = null, $buttonIcon = null, $buttonUrl = '#')
    {
        $this->title = $title;
        $this->breadcrumbs = $breadcrumbs;
        $this->buttonText = $buttonText;
        $this->buttonIcon = $buttonIcon;
        $this->buttonUrl = $buttonUrl;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.backend.toolbar');
    }
}
