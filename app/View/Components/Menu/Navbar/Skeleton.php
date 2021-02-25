<?php

namespace App\View\Components\Menu\Navbar;

use Illuminate\View\Component;

class Skeleton extends Component {
    public $css, $addOn, $id, $content, $css2, $addOn2, $prepend, $append, $size, $cor, $image;

    public function __construct($css = 'navbar-dark black text-white', $addOn = '', $id = 'topNav', $css2 = '', $addOn2 = '', $size = '55', $cor = 'branco', $image = true) {
        $this->css = $css;
        $this->addOn = $addOn;
        $this->id = $id;
        $this->css2 = $css2;
        $this->addOn2 = $addOn2;
        $this->size = $size;
        $this->cor = $cor;
        $this->image = $image;
    }

    public function render() {
        return view('components.menu.navbar.skeleton');
    }
}
