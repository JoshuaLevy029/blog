<?php

namespace App\View\Components\Menu\Navbar;

use Illuminate\View\Component;

class NavDropdownItem extends Component {
    public $route, $css, $addOn, $content, $icon, $title, $redirect;

    public function __construct($route = '', $css = '', $redirect = false, $addOn = '', $icon = '', $title = '') {
        $this->route = $route;
        $this->css = $css;
        $this->redirect = $redirect;
        $this->addOn = $addOn;
        $this->icon = $icon;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.menu.navbar.nav-dropdown-item');
    }
}
