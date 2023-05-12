<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $tours = Tour::where('show', true)->latest()->take(6)->get();
        return view('frontpage.home.index', compact('tours'));
    }

    public function send_message(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $contact = (object) $request->only('name', 'email', 'subject', 'message');

        Mail::to('info@sanurcycletours.com', 'Info Sanur Cycle Tours')
            ->cc('wayan@sanurcycletours.com', 'Sanur Cycle Tours')
            ->bcc('agus@baligatra.com', 'Backup')
            ->send(new ContactMail($contact));

        return redirect()->route('frontpage.home')->with('success', 'Your Message Hans Been Sent Successfully');
    }
}
