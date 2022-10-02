<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PaymentNotifyAdmin extends Mailable
{
    public $senderthree;
    public $receiverthree;
    public $messagethree;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($senderthree, $receiverthree, $messagethree)
    {
        $this->senderthree = $senderthree;
        $this->receiverthree = $receiverthree;
        $this->messagethree = $messagethree;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.PaymentNotifyAdmin')->subject('Payment has been received');
    }
}
