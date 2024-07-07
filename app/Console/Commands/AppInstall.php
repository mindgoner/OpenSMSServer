<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Str;
use Artisan;

class AppInstall extends Command
{
    protected $signature = 'app:install';

    protected $description = 'Installs the application: runs migrations, seeders, etc.';

    public function handle()
    {
        $this->info('Installing the application...');

        $this->call('key:generate');
        $this->call('migrate:fresh');
        $this->call('db:seed');

        $this->info('Application installed successfully.');

        $randomPassword = Str::random(10);
        User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'admin@opensms.cloud',
            'password' => Hash::make($randomPassword),
        ]);
        $this->info('Super Admin (admin@opensms.cloud) created with password: ' . $randomPassword);
    }
}
