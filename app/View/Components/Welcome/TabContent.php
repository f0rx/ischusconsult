<?php

namespace App\View\Components\Welcome;

use Illuminate\View\Component;

class TabContent extends Component
{
    /**
     * The Tab ID
     *
     * @var string
     */
    public $id;

    /**
     * If the tab is Active
     *
     * @var boolean
     */
    public $isActive;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $isActive)
    {
        $this->id = $id;
        $this->isActive = $isActive;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.welcome.tab-content');
    }
}
