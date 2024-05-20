<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Contactrequest;
use App\Models\Contact;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('contact');
    }
    public function contact_submit(Contactrequest $request)
    {
        $contact = new Contact();

        $contact->name = $request->input('name');
        $contact->contactno = $request->input('contactno');
        $contact->companyname  = $request->input('companyname');
        $contact->companyemail = $request->input('companyemail');
         
        $userdata = $contact->save($request->validated());

        if($userdata)
            return redirect()->back()->with('success','successfully submitted');
        else{
            return redirect()->back()->with('error','Error occured');
        }

    }
    
}
