<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Notifications\LoanWeekReminder;
use App\Loans;

class LoanExpireWeek implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $loan, $user;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($loan, $user)
    {
        $this->loan = $loan;
        $this->user = $user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if(!is_null($this->user->email)){
            $this->user->notify(new LoanWeekReminder($this->loan));
        }
    }
}
