<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactToMe extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * User data come from contact form.
     *
     * @var
     */
    public $senderInfo;

    /**
     * ContactToMe constructor.
     *
     * @param $req
     */
    public function __construct($req)
    {
        $this->senderInfo = $req;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->senderInfo['email'])
                    ->subject('[SOV] '.$this->senderInfo['subject'])
                    ->view('emails.contact-to-me');
    }
}
