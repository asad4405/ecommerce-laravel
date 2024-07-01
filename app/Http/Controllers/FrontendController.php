<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactPostRequest;
use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function shop()
    {
        return view('shop');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function contact_post(ContactPostRequest $request)
    {
        Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'message' => $request->message,
            'created_at' => Carbon::now(),
        ]);
        return back()->with('contact-success','Message send Successfully!');
    }
}
