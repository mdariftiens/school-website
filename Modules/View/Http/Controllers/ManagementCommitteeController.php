<?php

namespace Modules\View\Http\Controllers;

use App\Models\ManagementCommittee\ManagementCommittee;
use Modules\View\Abstracts\Controller;

class ManagementCommitteeController extends Controller
{

    public function getDataRows()
    {
        return ManagementCommittee::orderby('priority')->paginate();
    }

    public function getDataRow($id)
    {
        return ManagementCommittee::findOrFail($id);
    }
}
