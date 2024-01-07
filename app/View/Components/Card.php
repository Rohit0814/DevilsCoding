<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Create a new component instance.
     */
    public $cardLabel;
    public $cardTitle;
    public $showLink;
    public $cardImg;
    // $card_Label,$card_Title,$show_link;
    public function __construct($cardLabel,$cardTitle,$showLink,$cardImg)
    {
        $this->cardLabel = $cardLabel;
        $this->cardTitle = $cardTitle;
        $this->showLink = $showLink;
        $this->cardImg=$cardImg;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
