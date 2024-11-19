<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Console\Scheduling\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

// Jadwalkan command di routes/console.php
app()->singleton(Schedule::class, function () {
    $schedule = new Schedule;

    // Jalankan command setiap menit
    $schedule->command('transactions:expire')->everyMinute();

    return $schedule;
});