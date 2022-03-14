<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\LoanExpireWeek;
use App\User;
use App\Loans;
use Carbon\Carbon;
use DB;

class SendLoanReminderMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:loan_reminder {--queue}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // $today=Carbon::today();
        $start30=Carbon::today()->subDays(23);
        $start60=Carbon::today()->subDays(53);
        $start90=Carbon::today()->subDays(83);
        $start180=Carbon::today()->subDays(173);

        // $stop =$today->subDays(30)
        // \Log::info($start30);
        // \Log::info('command test5');

        $loans30 = DB::table('loans')
            ->whereDate('created_at', $start30)
            ->where('loan_tenor','30 days')
            ->get();
            info(count($loans30));
        if(!is_null($loans30)){
            foreach ($loans30 as $loan) {
                $user = User::find($loan->user_id);
                if($user){
                    dispatch(new LoanExpireWeek($loan,$user));
                }
            }
        }
        $loans60 = DB::table('loans')
            ->where('loan_tenor','60 days')
            ->whereDate('created_at', $start60)
            ->get();
            info(count($loans60));
        if(!is_null($loans60)){
            foreach ($loans60 as $loan) {
                $user = User::find($loan->user_id);

                if($user){
                    dispatch(new LoanExpireWeek($loan,$user));
                }
            }
        }
        $loans90 = DB::table('loans')
            ->where('loan_tenor','90 days')
            ->whereDate('created_at', $start90)
            ->get();
            info(count($loans90));
        if(!is_null($loans90)){
            foreach ($loans90 as $loan) {
                $user = User::find($loan->user_id);
                if($user){
                    dispatch(new LoanExpireWeek($loan,$user));
                }
            }
        }
        $loans180 = DB::table('loans')
            ->where('loan_tenor','180 days')
            ->whereDate('created_at', $start180)
            ->get();

        if(!is_null($loans180)){
            foreach ($loans180 as $loan) {
                $user = User::find($loan->user_id);
                if($user){
                    dispatch(new LoanExpireWeek($loan,$user));
                }
            }
        }
        $this->info('The loan_reminder command was successful!');
    }
}
