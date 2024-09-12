<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WaitingListMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data = [];

    public function __construct($data)
    {
        $this->data = $data;
    }



    public function build()
    {
        return $this->from('yousufmuhammud10@gmail.com')
            ->to('yousifalbashir9@gmail.com')
            ->view('mails.waiting_mail')->with('data',$this->data);
        // return $this->view('mails.waiting_mail')->with('data',$this->data);
    }
}
