<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Lang;
use App\User;

class PasswordResetNotification extends Notification
{
    use Queueable;
    private $token, $user, $email, $name;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($token)
    {
        $this->token =$token;
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
        $this->email= $notifiable->getEmailForPasswordReset();
        $this->user=User::where('email',$this->email)->first();
        $this->name = $this->user->first_name.' '. $this->user->last_name;
        return (new MailMessage)->view('emails.reset_password',
        [
            'email' => $this->email,
            'name' => $this->name,
            'token' => $this->token,
        ]);
        //(new MailMessage)
        //     ->subject(Lang::get('Reset Password Notification'))
        //     ->line(Lang::get('You are receiving this email because we received a password reset request for your account.'))
        //     ->action(Lang::get('Reset Password'), url(route('password.reset', ['token' => $this->token, 'email' => $notifiable->getEmailForPasswordReset()], false)))
        //     ->line(Lang::get('This password reset link will expire in :count minutes.', ['count' => config('auth.passwords.'.config('auth.defaults.passwords').'.expire')]))
        //     ->line(Lang::get('If you did not request a password reset, no further action is required.'));
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
