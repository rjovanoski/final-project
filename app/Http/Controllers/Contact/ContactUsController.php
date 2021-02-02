<?php

namespace App\Http\Controllers\Contact;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUsMail;

class ContactUsController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $administrators = User::where('role', '=', 'admin')->get();

        foreach ($administrators as $administrator) {
            Mail::to($administrator)->send(new ContactUsMail($data));
        }       

        return redirect()->back()->with('message', 'Your message has been received. Thank you for contacting us.');
    }
}
