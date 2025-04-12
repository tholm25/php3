<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class GuiEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $titleText;
    public $contentText;
    public $file;

    /**
     * Create a new message instance.
     */
    public function __construct($title, $content, $file = null)
    {
        $this->titleText = $title;
        $this->contentText = $content;
        $this->file = $file;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->titleText,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.sendMail', 
            with: [
                'titleText' => $this->titleText,
                'contentText' => $this->contentText,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     */
    public function attachments(): array
    {
        if ($this->file) {
            return [
                \Illuminate\Mail\Mailables\Attachment::fromPath($this->file->getRealPath())
                    ->as($this->file->getClientOriginalName())
                    ->withMime($this->file->getMimeType()),
            ];
        }
        return [];
    }
}