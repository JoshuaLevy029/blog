<?php

namespace App\View\Components\Menu\Navbar;

use Illuminate\View\Component;

class NavIcon extends Component {
    public $redirect, $route, $css, $addOn, $css2, $addOn2, $content, $icon, $addOn3, $placement, $template, $html, $title;

    public function __construct($redirect = false, $route = '', $css = '', $addOn = '', $css2 = '', $addOn2 = '', $icon, $addOn3 = '', $placement = 'bottom', $title, $html = false, $template = '') {
        $this->redirect = $redirect;
        $this->route = $route;
        $this->css = $css;
        $this->addOn = $addOn;
        $this->css2 = $css2;
        $this->addOn2 = $addOn2;
        $this->addOn3 = $addOn3;
        $this->icon = $icon;
        $this->template = $template ? $template : "<div class='tooltip' role='tooltip'><div class='arrow'></div><div class='tooltip-inner' style='color:red !important;background:#fff !important;'></div></div>";
        $this->placement = $placement;
        $this->title = $title;
        $this->html = $html ? "true" : "false";
    }

    public function render() {
        return view('components.menu.navbar.nav-icon');
    }
}
