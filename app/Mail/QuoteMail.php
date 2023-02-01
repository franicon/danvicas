<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class QuoteMail extends Mailable {
    use Queueable, SerializesModels;

    public function __construct() {
        //
    }


    public function envelope() {
        return new Envelope(
            subject: 'Quote Mail',
        );
    }


    public function content() {
        return new Content(
            view: 'email-quote',
        );
    }

    public function build()
    {
        return $this->subject('Test Email')->view('email-quote');
    }

    public function attachments() {
        return [];
    }
}
