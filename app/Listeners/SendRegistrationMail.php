<?php

namespace App\Listeners;

use App\Events\RegistrationMail;
use App\Mail\RegistrationMail as MailRegistrationMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class SendRegistrationMail implements ShouldQueue
{
    public $email;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\RegistrationMail  $event
     * @return void
     */
    public function handle(RegistrationMail $event)
    {
        Mail::to($this->email)->send(new MailRegistrationMail($event->email));
    }
}
