<?php

namespace App\View\Components;

use Illuminate\View\Component;

class App extends Component {
    public $page, $developer, $web;

    public function __construct(string $developer, string $web) {
        $this->developer = $developer;
        $this->web = $web;
    }

    public function render() {
        return view('components.app');
    }
}
