<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SingleTeamMember extends Component
{
//    public string $imageName;
//    public string $dentistName;
    public int $id;
    public string $imageName;
    public string $dentistName;
    public string $title;
    /**
     * Create a new component instance.
     */
    public function __construct(int $id, string $imageName, string $dentistName, string $title)
    {
        $this->id = $id;
        $this->imageName = $imageName;
        $this->dentistName = $dentistName;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.single-team-member', ['title' => $this->title]);
    }
}
