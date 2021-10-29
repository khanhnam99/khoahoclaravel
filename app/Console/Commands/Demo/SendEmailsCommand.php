<?php

namespace App\Console\Commands\Demo;

use App\Repositories\Users\UserRepository;
use Illuminate\Console\Command;

class SendEmailsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:send {user} {booking}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';
    protected $userRepos;

    /**
     * SendEmailsCommand constructor.
     * @param UserRepository $userRepos
     */
    public function __construct(UserRepository $userRepos)
    {
        parent::__construct();
        $this->userRepos = $userRepos;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->anticipate('What is your name?', ['Taylor', 'Dayle']);

        $address = $this->anticipate('What is your address?', function ($input) {
            // Return auto-completion options...
        });



    }
}
