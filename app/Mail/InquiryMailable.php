<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class InquiryMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $fullname, $emailadd, $msg;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email_content)
    {
        $this->fullname = $email_content['name'];
        $this->emailadd = $email_content['email'];
        $this->msg = $email_content['message'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = 'no-reply@cotedazurluxuryrentals.com';
        $name = "Cote d'Azur Luxury Rentals";
        $subject = 'Website Inquiry';

        return $this->view('email.inquiry')
                    ->from($address, $name)
                    ->replyTo($address, $name)
                    ->subject($subject);
    }
}
