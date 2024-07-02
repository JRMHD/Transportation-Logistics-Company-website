<?php

namespace App\Http\Controllers;

use App\Models\FreeQuote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FreeQuoteController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
        ]);

        $quote = FreeQuote::create($validated);

        Mail::to('smallstransportationllc@gmail.com')->send(new \App\Mail\FreeQuoteSubmission($quote));

        return redirect()->back()->with('quote-success', 'Thank you for your quote request. We will get back to you soon!');
    }
}
