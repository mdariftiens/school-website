<?php

namespace Modules\Admin\Repository\Contact;
use App\Models\Contactus\Contactus;

class ContactRepository
{
    public function getContactus()
    {
        return Contactus::paginate(20);
    }    

    public function destroy($id)
    {
        $contact = Contactus::findOrFail($id);
        return $contact->delete();
    }
}
