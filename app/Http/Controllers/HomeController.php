<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;


class HomeController extends Controller
{
    public function index()
    {

    	$contacts = Contact::orderBy('id' , 'DESC')->paginate(8);
    	return view('phonebook' , ['contacts'=> $contacts]);
    }

}
