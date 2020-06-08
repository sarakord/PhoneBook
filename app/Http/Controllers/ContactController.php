<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;


class ContactController extends Controller
{
    public function index()
    {

    }


    public function create()
    {

    	return view('crud.create');

    }


    public function store(Request $request)
    {
    	/*dd($request->user()->id);*/

    	$contact = new Contact();
    	try {

    		$contact->name = $request->name;
    		$contact->phone = $request->phone;
    		$contact->mobile = $request->mobile;
    		$contact->fax = $request->fax;
    		$contact->address = $request->address;
    		$contact->description = $request->description;
    		$contact->user_id = $request->user()->id;
    		$file = $request->file('image');
    		if (!empty($file)) {
    			$image=time().$file->getClientOriginalName();
    			$file->move('images/contacts' , $image);
    			$contact->image = $image;
    		}
    		$contact->save();

    	} catch (Exception $exception) {
    		return back()->with('warning' , $exception->getcode());
    		
    	}

    	$msg="مخاطب جدید با موفقیت اضافه شد.";

    	return redirect(route('home'))->with('success' , $msg);

    }


    public function edit(Contact $contact)
    {

    }


    public function update(Contact $contact)
    {

    }


    public function show(Contact $contact)
    {

    }


    public function destroy(Contact $contact)
    {

    }
}
