<?php

namespace App\View\Components\Blog;

use App\Models\Menus;
use Illuminate\View\Component;

class Menu extends Component {
    public $menu;

    public function __construct($menu) {
        $this->menu = $menu;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.blog.menu');
    }
}
