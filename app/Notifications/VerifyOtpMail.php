<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\HtmlString;

class VerifyOtpMail extends Notification
{
    use Queueable;
    public $otp;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($otp)
    {
        $this->otp= $otp;
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
        return (new MailMessage)->view('emails.mail_verification',
                [
                    'otp' => $this->otp,
                    'user' => $notifiable
                ]);
        // (new MailMessage)
        //             ->subject('Email verification code')
        //             ->greeting('Hi '.$notifiable->first_name.',')
        //             ->line('Your Email Verification Code is: ')
        //             ->line(new HtmlString('<h1><center><strong style="font-size:25px;">'.$this->otp.'</strong></center></h1>'))
        //             ->action(new HtmlString('<p style="color:black; background: none; padding:0; margin:0;">Verification Page</p>'), url('/email/verify'))
        //             ->line('Thank you for using our application!')
        //             ->salutation('This email was sent to you by Test.com.');

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
