<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\HtmlString;

class ApprovedNotificationAdmin extends Notification implements ShouldQueue
{
    use Queueable;
    private $loan;
    public $afterCommit = true;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($loan)
    {
        $this->loan = $loan;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    public function toDatabase($notifiable)
    {
        return [
            'loan_id'    => $this->loan->id,
            'user_id'    => $this->loan->user_id,
            'admin_id'   => $this->loan->admin_id,
            'status'     => "approved",
            'message'    => "The Loan of N".$this->loan->amount." for ".$this->loan->reason." requested by ".$this->loan->user->first_name." ".$this->loan->user->last_name." has been approved by Admin: ".$this->loan->admin->name.".",
        ];
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
