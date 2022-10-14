<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class CreateUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create {username} {email} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create New User With this command';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $username = $this->argument('username');
        $password = $this->argument('password');
        User::create([
            'username' => $username,
            'email' => $this->argument('email'),
            'password' => bcrypt($password),
            'remember_token' => Str::random(10)
        ]);

       $this->info('User '. $username .' Created Successfully');
        return Command::SUCCESS;
    }
}
