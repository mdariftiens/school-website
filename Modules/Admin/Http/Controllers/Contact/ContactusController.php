<?php

namespace Modules\Admin\Http\Controllers\Contact;

use Illuminate\Routing\Controller;
use Modules\Admin\Repository\Contact\ContactRepository;

class ContactusController extends Controller
{
    private $ContactRepository;

    public function __construct(ContactRepository $ContactRepository)
    {
        $this->ContactRepository = $ContactRepository;
    }

    public function index()
    {       
        $data['list'] = $this->ContactRepository->getContactus();
        return view('admin::contact.index',$data);
    }

    public function create(){
       
    }

    public function store(Request $request)
    {
       
    }


    public function show($id)
    {
        $data['row'] = $this->ContactRepository->getContactusDetails($id);
        return view('admin::contact.detail',$data);
        
    }

    public function update(Request $request, $id)
    {
     
    }


    public function destroy($id)
    {       
        $this->ContactRepository->destroy($id);
        return back()->with(['message'=>'Contact Deleted Successfully.']);
    }
}
