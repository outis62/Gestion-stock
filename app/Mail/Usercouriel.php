<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Usercouriel extends Mailable
{
    use Queueable, SerializesModels;
    public $admin_op, $messages, $msg;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($admin_op, $messages, $msg)
    {
        $this->admin_op = $admin_op;
        $this->messages = $messages;
        $this->msg = $msg;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Bienvenue sur notre site',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'mail.usercreate',
        );
    }
    public function build()
    {
        return $this->from('enabel@gmail.com', 'Enabel Senegal')
            ->view('mail.usercreate');
    }
    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
