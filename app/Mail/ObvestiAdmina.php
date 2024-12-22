<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ObvestiAdmina extends Mailable
{
    use Queueable, SerializesModels;
    protected $reservation;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->reservation=$data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = $this->reservation;
        $infoEmail = config('app.admin_email');
        return $this->from($infoEmail)
        ->subject('Prejeli ste novo rezervacijo')
        ->markdown('emails.contactus.admin')
        ->with(compact('data'));
    }
}
