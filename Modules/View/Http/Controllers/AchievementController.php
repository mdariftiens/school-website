<?php

namespace Modules\View\Http\Controllers;

use App\Models\Achievements\Achievements;
use Modules\View\Abstracts\Controller;

class AchievementController extends Controller
{

    public function getDataRows()
    {
        return Achievements::latest()->paginate();
    }

    public function getDataRow($id)
    {
        return Achievements::findOrFail($id);
    }
}
