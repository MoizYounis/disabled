<?php

namespace App\Listeners;

use App\Events\RegistrationMail;
use App\Mail\RegistrationMail as MailRegistrationMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\User;
use App\Utils\Constant;
use Illuminate\Support\Facades\Mail;

class SendRegistrationMail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\RegistrationMail  $event
     * @return void
     */
    public function handle(RegistrationMail $event)
    {
        $user = User::select('id', 'email')->where('role', Constant::ADMIN)->first();
        Mail::to($user->email)->send(new MailRegistrationMail($event->email));
    }
}
