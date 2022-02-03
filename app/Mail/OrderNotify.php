<?php

namespace App\Mail;
use App\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class OrderNotify extends Mailable
{
    use Queueable, SerializesModels;
public $order;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct((Order $order)
    {
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->from('zeinabyounes099@gmail.com')
              ->view('emails.order')->with([
                        'student_name' => $this->order->student_name,
                        'school_name' => $this->order->school->name,
                    ]);;
    }
}
