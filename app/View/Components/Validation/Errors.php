<?php

namespace App\View\Components\Validation;

use Illuminate\View\Component;

class Errors extends Component {
    public $errors;
    public function __construct($errors) {
        $this->errors = $errors;
    }

    public function render() {
        return view('components.validation.errors');
    }
}
