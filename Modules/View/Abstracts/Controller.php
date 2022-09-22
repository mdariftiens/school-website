<?php

namespace Modules\View\Abstracts;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

abstract class Controller extends BaseController
{
    abstract public function getDataRows();
    abstract public function getDataRow($id);

    public function index(Request $request)
    {
        $data['rows'] = $this->getDataRows();
        return view('view::'.getCurrentThemeId().'.index', $data);
    }

    public function show($id)
    {
        $data['row'] = $this->getDataRow($id);
        return view('view::'.getCurrentThemeId().'.show',$data);
    }
}
