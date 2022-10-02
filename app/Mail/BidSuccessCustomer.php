<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BidSuccessCustomer extends Mailable
{
    public $senderone;
    public $receiverone;
    public $messageone;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($senderone, $receiverone, $messageone)
    {
        $this->senderone = $senderone;
        $this->receiverone = $receiverone;
        $this->messageone = $messageone;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.BidSuccessCustomer')->subject('Awarded ');
    }
}
