<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendmail3 extends Mailable
{
    
    use Queueable, SerializesModels;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }
    /**
     * Build the message.
     *
     * @return $this
  

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
               return $this->from('demo1.browntech@gmail.com')->subject('Account verfied')->view('dynamic_email_template3')->with('data', $this->data);
    }
}
