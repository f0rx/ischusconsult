<?php

namespace App\View\Components\Welcome;

use Illuminate\View\Component;

class Tab extends Component
{
    /**
     * The Tab ID
     *
     * @var string
     */
    public $id;

    /**
     * Tab Icon class
     *
     * @var boolean
     */
    public $iconClass;

    /**
     * Current state of the Tab
     *
     * @var boolean
     */
    public $isActive;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $iconClass, $isActive)
    {
        $this->id = $id;
        $this->iconClass = $iconClass;
        $this->isActive = $isActive;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.welcome.tab');
    }
}
