<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CourseCard extends Component
{
    public $courseImg;
    public $courseSubTitle;
    public $courseTitle;
    public $courseLesson;
    public $courseStart;
    public $courseTag;

    public function __construct($courseImg,$courseSubTitle,$courseTitle,$courseLesson,$courseStart,$courseTag)
    {
        $this->courseImg=$courseImg;
        $this->courseSubTitle = $courseSubTitle;
        $this->courseTitle = $courseTitle;
        $this->courseLesson = $courseLesson;
        $this->courseStart = $courseStart;
        $this->courseTag = $courseTag;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.course-card');
    }
}
