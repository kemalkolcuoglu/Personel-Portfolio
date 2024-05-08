<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class FeedbackMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(public $mailParameters)
    {

    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Feedback Mail',
            from: new Address(
                'no-reply@mehmettunaselvi.com',
                'No-Reply | Mehmet Tuna Selvi'
            ),
            replyTo: [
                new Address($this->mailParameters['feedbackEmail'], null),
                new Address('info@mehmettunaselvi.com', null),
            ],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mail.feedback',
            with: $this->mailParameters,
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
