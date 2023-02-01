<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable {
    use Queueable, SerializesModels;

    public $mailData;

    public function __construct($mailData) {
        $this->mailData = $mailData;
    }

    public function envelope() {
        return new Envelope(
            subject: 'Contact Mail',
        );
    }


    public function content() {
        return new Content(
            view: 'email-contact',
        );
    }

    public function build() {
        return $this->subject('Contact Mail')->view('email-contact');
    }

    public function attachments() {
        return [];
    }
}
