<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\HtmlString;

class LoanNotificationAdmin extends Notification implements ShouldQueue
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
        return (new MailMessage)
                ->subject(Lang::get('Loan Request Notification'))
                ->view('emails.loanrequestadmin',
                    [
                        'loan' => $this->loan,
                        'admin' => $notifiable
                    ]);
                // ->greeting('Hi, Dear '.$notifiable->first_name.'.')
                // ->line('A User has Requested a loan for '.$this->loan->reason.' in the website.')
                // ->line(new HtmlString('<h2>The Loan Amount: <strong style="font-size:20px;">'.$this->loan->amount.'</strong></h2>'))
                // ->action(new HtmlString('<p style="color:black; background: none; padding:0; margin:0;">Check</p>'), url('/admin/notifications'))
                // ->line('Please visit the loan area in the admin panel to see more details about the loan.')
                // ->line('As an Admin you can take actions about the loan.')
                // ->salutation('This email is sent to you by TradeLenda.com.');
    }


    public function toDatabase($notifiable)
    {
        return [
            'loan_id'    => $this->loan->id,
            'user_id'    => $this->loan->user_id,
            'user_email' => $this->loan->email,
            'status'     => "pending",
            'message'    => "A Loan of N".$this->loan->amount." for ".$this->loan->reason." has been requested by ".$this->loan->user->first_name.".",
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
