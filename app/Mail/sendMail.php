<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\orders
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
        //pass the completed order to the buyer 
       $details= DB::table('orders')
                 ->leftJoin('products', 'products.id', '=', 'orders.products_id')
                 ->leftJoin('users', 'users.id', '=', 'orders.user_id')
                 ->where('user_id', '=', Auth::guard('buyer')->user()->id)  
                 ->first();
        return $this->view('email.mail',[$details])->to(Auth::guard('buyer')->user()->email);
    }
}
