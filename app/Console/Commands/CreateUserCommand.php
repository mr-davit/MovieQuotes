<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class CreateUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create';

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
     *
     *
     */


    public function handle()
    {
        $username = $this->ask('Username?');
        $email = $this->ask('Email ?');
        $password = $this->secret('Password ?');

        $validator = Validator::make([
            'username' => $username,
            'email' => $email,
            'password' => $password,
        ], [
            'username' => ['required','string','unique:users,username'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:8'],
        ]);
        if ($validator->fails()) {
            $this->info('Staff User not created. See error messages below:');

            foreach ($validator->errors()->all() as $error) {
                $this->error($error);
            }
            return 1;
        }$validator->errors()->all();

        User::create([
            'username' => $username,
            'email' => $email,
            'password' => bcrypt($password),
            'remember_token' => Str::random(10)
        ]);

       $this->info('User '. $username .' Created Successfully');
        return Command::SUCCESS;
    }
}
