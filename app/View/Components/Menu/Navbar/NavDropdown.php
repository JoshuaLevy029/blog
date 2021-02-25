<?php

namespace App\View\Components\Menu\Navbar;

use Illuminate\View\Component;

class NavDropdown extends Component {
    public $direction, $content, $icon, $title, $id, $css, $css2, $css3, $addOn, $addOn2, $addOn3;

    public function __construct($direction = 'dropdown', $icon = '', $title, $id, $css = '', $css2 = '', $css3 = '', $addOn = '', $addOn2 = '', $addOn3 = '') {
        $this->direction = $direction;
        $this->icon = $icon;
        $this->title = $title;
        $this->id = $id;
        $this->css = $css;
        $this->css2 = $css2;
        $this->css3 = $css3;
        $this->addOn = $addOn;
        $this->addOn2 = $addOn2;
        $this->addOn3 = $addOn3;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.menu.navbar.nav-dropdown');
    }
}
