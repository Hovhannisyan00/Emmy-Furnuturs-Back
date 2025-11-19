<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderStatusMail extends Mailable
{
    use Queueable, SerializesModels;

    public $order;
    public $coupon;

    public function __construct($order, $coupon)
    {
        $this->order = $order;
        $this->coupon = $coupon;
    }

    public function build()
    {
        return $this->subject('Your Order Status')
            ->view('emails.order-status');
    }
}
