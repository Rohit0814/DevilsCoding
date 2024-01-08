<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LoginComponent extends Component
{
    public $userLabel;
    public $inputType;
    public $inputPlaceholder;
    public function __construct($userLabel,$inputType,$inputPlaceholder)
    {
        $this->userLabel=$userLabel;
        $this->inputType = $inputType;
        $this->inputPlaceholder = $inputPlaceholder;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.login-component');
    }
}
