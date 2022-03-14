<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\HtmlString;
use Carbon\Carbon;

class LoanWeekReminder extends Notification implements ShouldQueue
{
    use Queueable;
    private $loan, $date;
    public $afterCommit = true;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($loan)
    {
        $this->loan = $loan;
        if ($loan->loan_tenor == "30 days") {
            $this->date = Carbon::parse($loan->created_at)->addDays(30)->format('d/m/Y h:i A');
        }
        elseif($loan->loan_tenor == "60 days"){
            $this->date = Carbon::parse($loan->created_at)->addDays(60)->format('d/m/Y h:i A');
        }
        elseif($loan->loan_tenor == "90 days"){
            $this->date = Carbon::parse($loan->created_at)->addDays(90)->format('d/m/Y h:i A');
        }
        elseif($loan->loan_tenor == "180 days"){
            $this->date = Carbon::parse($loan->created_at)->addDays(180)->format('d/m/Y h:i A');
        }

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
                ->subject(Lang::get('Loan Expire Reminder'))
                ->view('emails.loanweek',
                    [
                        'loan' => $this->loan,
                        'user' => $notifiable,
                        'date' => $this->date,
                    ]);
                // ->greeting('Hi, Dear '.$notifiable->name.'.')
                // ->line('Your Loan is going to be expired on '.$this->date.'.')
                // ->line(new HtmlString('<h2>Your Loan Amount: <strong style="font-size:20px;">'.$this->loan->amount.'</strong></h2>'))
                // ->line(new HtmlString('<h2>Reason: <strong style="font-size:20px;">'.$this->loan->reason.'</strong></h2>'))
                // ->action(new HtmlString('<p style="color:black; background: none; padding:0; margin:0;">Check</p>'), url('/notification'))
                // ->salutation('This email is sent to you by TradeLenda.com.');
    }



    public function toDatabase($notifiable)
    {
        return [
            'loan_id' => $this->loan->id,
            'status' => "lastweek",
            'message' =>"Your Loan of N".$this->loan->amount." for ".$this->loan->reason." will expire in a week.",
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
