<?php
namespace Modules\View\View\Components;
use App\Models\Slider\Slider;
use Illuminate\View\Component;

class SliderComponent extends Component
{
    public $slider;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->slider = Slider::with('media')->find(getThemeSettingValue('_theme_setting_slider_id'));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('view::components.slidercomponent');
    }
}
