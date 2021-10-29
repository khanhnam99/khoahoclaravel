<?php

namespace App\Console\Commands\Demo;

use Illuminate\Console\Command;

class PasswordCommand extends Command
{
    /**
     * The name and signature of the console command.
     * @url https://viblo.asia/p/laravel-commands-5y8Rr6YbRob3
     * @var string
     */
    protected $signature = 'password';

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
     * @return int
     */
    public function handle()
    {
        $password = $this->secret('What is the password?');
        $this->info('The command was successful!');
        $this->error('Something went wrong!');
        $this->line('Display this on the screen');
        $this->comment("This is a comment.");
        $this->question("This is a question.");

        $this->error("This is an error.");
        $this->newLine();
// Write three blank lines...
        $this->newLine(3);


//        if ($this->confirm('Do you wish to continue?')) {
//            echo $password;
        $this->info('The command was successful!');
//        }

//        if ($this->confirm('Do you wish to continue?', true)) {
//            echo $password;
//        }

        //$name = $this->anticipate('What is your name?', ['Taylor', 'Dayle']);

//        $name = $this->anticipate('What is your address?', function ($input) {
//            // Return auto-completion options...
//        });
    }
}
