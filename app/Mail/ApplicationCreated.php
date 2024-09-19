<?php

namespace App\Mail;

use App\Models\Application;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ApplicationCreated extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public Application $application
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Application Created',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.application-created',
        );
    }

    public function attachments(): array
    {
        // $file_for_mail = Attachment::fromStorageDisk('public', $this->application->file_url);

        // if(!is_null($this->application->file_url)) {
        //     $file_for_mail;
        // }

        return [
            // $file_for_mail
        ];
    }
}
