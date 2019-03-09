<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class InquiryMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $name, $email, $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email_content)
    {
        $this->name = $email_content['name'];
        $this->email = $email_content['email'];
        $this->message = $email_content['message'];
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
        $subject = 'Guest Inquiry';

        return $this->view('email.inquiry')
                    ->from($address, $name)
                    ->replyTo($address, $name)
                    ->subject($subject);
    }
}
