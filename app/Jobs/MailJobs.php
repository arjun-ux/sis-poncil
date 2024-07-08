<?php

namespace App\Jobs;

use App\Mail\WelcomeMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class MailJobs implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    protected $sabaUser;
    protected $saba;
    public function __construct($sabaUser, $saba)
    {
        $this->sabaUser = $sabaUser;
        $this->saba = $saba;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->sabaUser->email)->send(new WelcomeMail($this->sabaUser, $this->saba));
    }
}
