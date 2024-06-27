<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;
    // public mailData;

    public $formData;

    public function __construct($formData)
    {
        $this->formData = $formData;
    }

    public function build()
    {
        return $this
            ->from('gajahmadarecord.gmr@gmail.com', 'Gajah Mada Record Website')
            ->subject('Gajah Mada Record Website Message')
            ->view('emails.contact-form');
    }

}
