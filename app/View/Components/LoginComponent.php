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
    public $name;
    public function __construct($userLabel,$inputType,$inputPlaceholder,$name)
    {
        $this->userLabel=$userLabel;
        $this->inputType = $inputType;
        $this->inputPlaceholder = $inputPlaceholder;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.login-component');
    }
}
