<?php

namespace App\View\Components\Menu\Navbar;

use Illuminate\View\Component;

class NavItem extends Component {
    public $redirect, $route, $css, $addOn, $css2, $addOn2, $content, $icon, $title;

    public function __construct($redirect = false, $route = '', $css = '', $addOn = '', $css2 = '', $addOn2 = '', $icon = '', $title) {
        $this->redirect = $redirect;
        $this->route = $route;
        $this->css = $css;
        $this->addOn = $addOn;
        $this->css2 = $css2;
        $this->addOn2 = $addOn2;
        $this->icon = $icon;
        $this->title = $title;
    }

    public function render() {
        return view('components.menu.navbar.nav-item');
    }
}
