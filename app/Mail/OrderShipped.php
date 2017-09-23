<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Gloudemans\Shoppingcart\Facades\Cart;

use Illuminate\Support\Facades\Auth;

class sendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //fetch sellers using seller id from sessions
        return $this->view('mail.mail')->to(Auth::guard('buyer')->user()->email);
    }
}
