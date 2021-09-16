<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendmail4 extends Mailable
{
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
               return $this->from('demo1.browntech@gmail.com')->subject('New User')->view('dynamic_email_template4')->with('data', $this->data);
    }
}
