<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $name;
    public $cpf;
    public $phone;
    public $email;
    public $reason;
    public $message;
    public $data;


    public function __construct($value)
    {
        $this->data = array(
            $this->name = $value['name'],
            $this->email = $value['email'],
            $this->phone = $value['phone'],
            $this->cpf = $value['cpf'],
            $this->reason = $value['reason'],
            $this->message = $value['message'],
        );
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.contact')->with($this->data);
    }
}
