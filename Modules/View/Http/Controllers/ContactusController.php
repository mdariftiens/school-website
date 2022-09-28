<?php

namespace Modules\View\Http\Controllers;

use App\Models\Contactus\Contactus;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\View\Http\Requests\ContactUsRequest;

class ContactusController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return viewWithCache('view::'.getCurrentThemeId().'.contactus');
    }

    public function store(ContactUsRequest $request)
    {
        Contactus::create($request->validated());
        return back()->with(['message' => 'Success!']);
    }

}
