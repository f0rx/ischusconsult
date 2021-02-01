<?php

namespace App\Mail;

use App\Models\JobApplication;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class JobApplicationCreated extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * The Job Application instance.
     *
     * @var \App\Models\Order
     */
    public $jobApplication;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(JobApplication $jobApplication)
    {
        $this->jobApplication = $jobApplication;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.jobs.created');
    }
}
