<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $rental, $pickdate, $returndate, $duration, $total, $firstname, $lastname, $email, $phone, $info;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email_content)
    {
        $this->rental = $email_content['rental'];
        $this->pickdate = $email_content['pickdate'];
        $this->returndate = $email_content['returndate'];
        $this->duration = $email_content['duration'];
        $this->total = $email_content['total'];

        $this->firstname = $email_content['firstname'];
        $this->lastname = $email_content['lastname'];
        $this->email = $email_content['email'];
        $this->phone = $email_content['phone'];
        $this->info = $email_content['info'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = 'no-reply@cannesluxuryrental.com';
        $name = 'Cannes Luxury Rental';
        $subject = 'Rental Inquiry';

        return $this->view('email.inquiry')
                    ->from($address, $name)
                    ->replyTo($address, $name)
                    ->subject($subject);
    }
}
