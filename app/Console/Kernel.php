<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
        $schedule->command('legiscan:get-query-from-legiscan 89cd49a69c0b33fe092891f9957e36b0 All legislatures')
            ->everyFiveMinutes()
            ->runInBackground();
        $schedule->command('legiscan:get-query-from-legiscan 89cd49a69c0b33fe092891f9957e36b0 All committees')
            ->everyFiveMinutes()
            ->runInBackground();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
