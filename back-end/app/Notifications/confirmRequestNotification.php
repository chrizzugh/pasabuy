<?php

namespace App\Notifications;

use App\Models\userInformation;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class confirmRequestNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public $postNumber;
    public $identity;

    public function __construct($postNumber,$identity)
    {
        //
        $this->postNumber = $postNumber;
        $this->identity = $identity;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database','broadcast'];
    }


    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toDatabase($notifiable)
    {
        $user = userInformation::where('email',Auth::user()->email)->get();
        return [
            'accepter' => $user[0]->firstName.' '.$user[0]->lastName,
            'postNumber' => $this->postNumber,
            'accepterPic' =>  $user[0]->profilePicture,
            'identity' => $this->identity,

        ];
    }

    public function toBroadcast($notifiable)
    {
        $user = userInformation::where('email',Auth::user()->email)->get();
        return new BroadcastMessage([
            'accepter' => $user[0]->firstName.' '.$user[0]->lastName,
            'postNumber' => $this->postNumber,
            'accepterPic' => $user[0]->profilePicture,
            'identity' => $this->identity,


        ]);
    }

}
