<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrderShipped;
use Mail\contact;
use App\Http\Requests\ContactFormRequest;

class emailController extends Controller
{
    /**
     * Show the application sendMail.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendMail()
    {
    	$content = [
    		'title'=> 'Itsolutionstuff.com mail', 
    		'body'=> 'The body of your message.',
    		'button' => 'Click Here'
    		];

    	$receiverAddress = 'your email';

    	Mail::to($receiverAddress)->send(new OrderShipped($content));

    	dd('mail send successfully');
    }
    public function create()
    {
        return view('about.contact');
    }
     
    public function store(ContactFormRequest $request)
    {
          \Mail::send('emails.contact',
        array( 
            'your_subject' => $request->get('your_subject'),
            'your_category' => $request->get('your_category'),
            'your_question' => $request->get('your_question'),
            'your_email' => $request->get('your_email'),
            'your_name' => $request->get('your_name')
        ),
   function($message)
    {

        $message->to('humluchetu@gmail.com')->subject('FAQs');
    });

  return \Redirect::route('store')->with('message', 'Thanks for contacting us!');
}
}