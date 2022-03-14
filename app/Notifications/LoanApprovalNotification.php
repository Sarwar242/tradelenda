<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\HtmlString;

class LoanApprovalNotification extends Notification
{
    use Queueable;
    private $loan;
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
        return ['database', 'mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)->view('emails.approved',
        [
            'loan' => $this->loan,
            'user' => $notifiable
        ]);
                // ->subject(Lang::get('Loan Approval Notification'))
                // ->greeting('Hi, Dear '.$notifiable->name.'.')
                // ->line('Your Requested loan for '.$this->loan->reason.' has been approved by Admins.')
                // ->line(new HtmlString('<h2>Your Loan Amount: <strong style="font-size:20px;">'.$this->loan->amount.'</strong></h2>'))
                // ->action(new HtmlString('<p style="color:black; background: none; padding:0; margin:0;">Check</p>'), url('/notification'))
                // ->salutation('This email is sent to you by TradeLenda.com.');
    }



    public function toDatabase($notifiable)
    {
        return [
            'loan_id' => $this->loan->id,
            'admin_id' => $this->loan->admin_id,
            'status' => "approved",
            'message' =>"Your Loan of N".$this->loan->amount." for ".$this->loan->reason." has been approved.",
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
