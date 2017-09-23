<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use mail;
use mailable;
use App\mail\sendMail;
class mailController extends Controller
{
 public function send(){
 	Mail::send(new sendMail());
 }
}
