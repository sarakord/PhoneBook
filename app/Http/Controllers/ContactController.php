<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;


class ContactController extends Controller
{
    public function index()
    {
    	//
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
    	return view('crud.edit' , compact('contact'));
    }


    public function update(Request $request, Contact $contact)
    {
    	try {
    		$contact->name = $request->name;
    		$contact->phone = $request->phone;
    		$contact->mobile = $request->mobile;
    		$contact->fax = $request->fax;
    		$contact->address = $request->address;
    		$contact->description = $request->description;
    		$file = $request->file('image');
    		if (!empty($file))
    		{
    			$oldImage = $contact->image;
    			unlink('images/contacts/'.$oldImage);
    			$image = time().$file->getClientOriginalName();
    			$contact->image = $image;
    			$contact->save();
    		}
    		
    	} catch (Exception $exception) {
    		return back()->with('warning' , $exception);
    	}

    	$msg = "ویرایش اطلاعات $contact->name با موفقیت انجام شد";
    	return redirect(route('home'))->with('success', $msg);
    }


    public function show(Contact $contact)
    {

    }


    public function destroy(Contact $contact)
    {

    }
}
