<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AutoPartBuy extends Mailable
{
    use Queueable, SerializesModels;

    public $autopart_model;
    public $email;
    public $messages;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($autopart_model, $email, $messages)
    {
        $this->autopart_model = $autopart_model;
        $this->$email = $email;
        $this->$messages = $messages;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject('BUY AT AUTOPART MARKETPLACE');
        return $this->view('mails.auto_part_buy');
    }
}
