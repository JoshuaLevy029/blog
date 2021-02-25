<?php

namespace App\View\Components\Menu\Navbar;

use Illuminate\View\Component;

class Nav extends Component {
    public $float, $css, $addOn, $content;

    public function __construct($float = 'mr-auto', $css = '', $addOn = '') {
        $this->float = $float;
        $this->css = $css;
        $this->addOn = $addOn;
    }

    public function render() {
        return view('components.menu.navbar.nav');
    }
}
