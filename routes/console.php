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

    // Jadwalkan command untuk transaksi yang expired
    $schedule->command('transactions:expire')->everyMinute();

    // Jadwalkan command untuk mencatat aktivitas pribadi setiap malam pukul 23:59
    $schedule->command('activities:record')->dailyAt('23:59');

    return $schedule;
});