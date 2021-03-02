<?php

namespace App\View\Components\Menu\Navbar;

use Illuminate\View\Component;

class NavAvatar extends Component {
    public $content;

    public function __construct() {
        //
    }

    public function render() {
        return view('components.menu.navbar.nav-avatar');
    }
}
