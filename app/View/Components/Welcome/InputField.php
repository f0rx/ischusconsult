<?php

namespace App\View\Components\Welcome;

use Illuminate\View\Component;

class InputField extends Component
{
    /**
     * Controls the rounded attribute
     * of the input field.
     *
     * @var string
     */
    public $isRounded;

    /**
     * Controls input label visibiility
     *
     * @var string
     */
    public $showLabel;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($isRounded, $showLabel)
    {
        $this->isRounded = $isRounded;
        $this->showLabel = $showLabel;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.welcome.input-field');
    }
}
