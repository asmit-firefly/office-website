<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => [
                'required',
                'min:3',
                'max:25',
            ],
            'email' => [
                'required',
                'email',
            ],
            'country' => [
                'required',
                'min:2',
                'max:55',
            ],
            'comment' => [
                'required',
                'min:3',
            ],
        ]);
        $name = $request->input('name');
        $email = $request->input('email');
        $country = $request->input('country');
        $message = $request->input('comment');

        Mail::to('mailtrap@gmail.com')->send(new ContactMail($name, $email, $country, $message));

        session()->flash('emailSentMessage', 'You Message has been sent');

        return redirect()->back();

    }
}
