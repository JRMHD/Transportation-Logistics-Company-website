<?php

namespace App\Mail;

use App\Models\FreeQuote;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FreeQuoteSubmission extends Mailable
{
    use Queueable, SerializesModels;

    public $quote;

    public function __construct(FreeQuote $quote)
    {
        $this->quote = $quote;
    }

    public function build()
    {
        return $this->view('emails.free-quote-submission')
            ->subject('New Free Quote Request');
    }
}
