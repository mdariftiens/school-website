<?php

namespace Modules\View\Http\Controllers;

use App\Models\Employee\Employee;
use Modules\View\Abstracts\Controller;

class EmployeeController extends Controller
{

    public function getDataRows()
    {
        return Employee::with(['category','department','designation','type'])->orderby('priority')->paginate();
    }

    public function getDataRow($id)
    {
        return Employee::with(['category','department','designation','type'])->findOrFail($id);
    }
}
