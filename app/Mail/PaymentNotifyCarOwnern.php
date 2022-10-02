<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PaymentNotifyCarOwnern extends Mailable
{
    public $sendertwo;
    public $receivertwo;
    public $messagetwo;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($sendertwo, $receivertwo, $messagetwo)
    {
        $this->sendertwo = $sendertwo;
        $this->receivertwo = $receivertwo;
        $this->messagetwo = $messagetwo;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.PaymentNotifyCarOwner')->subject('payment has been received');
    }
}
