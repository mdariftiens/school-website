<?php

namespace Modules\View\Http\Controllers;

use App\Models\Contactus\Contactus;
use App\Models\Option\Option;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Modules\View\Emails\SendContactUsEmail;
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

        if (isSendMailActive()){
            Mail::to('to@go.to')
                ->queue(new SendContactUsEmail());
        }

        return back()->with(['message' => 'Success!']);
    }

}
