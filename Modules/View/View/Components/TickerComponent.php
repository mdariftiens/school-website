<?php

namespace Modules\View\View\Components;
use App\Models\Notice\Notice;
use Illuminate\View\Component;

class TickerComponent extends Component
{
    public $tickerRows;


    public function __construct()
    {
        $this->tickerRows = Notice::where('is_ticker', Notice::IS_TICKER)
            ->latest('id')
            ->get();

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('view::components.tickercomponent');
    }
}
