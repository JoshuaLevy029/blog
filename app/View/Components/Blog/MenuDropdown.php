<?php

namespace App\View\Components\Blog;

use Illuminate\View\Component;
use App\Models\Menus;

class MenuDropdown extends Component {
    public $menu, $item;

    public function __construct($menu, Menus $item) {
        $this->menu = $menu;
        $this->item = $item;
    }

    public function render() {
        return view('components.blog.menu-dropdown');
    }
}
