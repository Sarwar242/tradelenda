<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\HtmlString;

class AdminInviteNotification extends Notification
{
    use Queueable;
    public $pass;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($pass)
    {
        $this->pass=$pass;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)->view('emails.admininvite',
                                    [
                                        'pass' => $this->pass,
                                        'user' => $notifiable
                                    ]);
                    // ->subject(Lang::get('Admin Login Invitation'))
                    // ->greeting('Hi, Dear '.$notifiable->name.'.')
                    // ->line('You have been invited to Test.com\'s Admin Panel as an Admin.')
                    // ->line(new HtmlString('<h2>Your Temporary Password is: <strong style="font-size:25px;">'.$this->pass.'</strong></h2>'))
                    // ->line('Please don\'t forget to change your password after login.')
                    // ->action(new HtmlString('<p style="color:black; background: none; padding:0; margin:0;">Login</p>'), url('/admin'))
                    // ->salutation('This email is sent to you by TradeLenda.com');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
