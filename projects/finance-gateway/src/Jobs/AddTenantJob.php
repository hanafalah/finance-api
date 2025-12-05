<?php

namespace Projects\FinanceGateway\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Artisan;
use Projects\FinanceGateway\Jobs\JobRequest;
use Illuminate\Queue\SerializesModels;

class AddTenantJob implements ShouldQueue
{
    use Queueable, SerializesModels;

    public array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        JobRequest::set($this->data);      

        Artisan::call('db:seed',[
            '--class' => "Projects\FinanceGateway\\Database\Seeders\\AddDatabaseSeeder"
        ]);   
    }
}
