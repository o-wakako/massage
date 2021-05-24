<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InquirySendmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    protected $contact;

    public function __construct($contact)
    {
        $this -> contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->text('inquiry.mail')
                    ->with(['contact' => $this -> contact ])
                    ->from('massage.salon.flow@gmail.com','FLOW')
                    ->subject('【FLOW】お問い合わせ内容のご確認');
    }
}


