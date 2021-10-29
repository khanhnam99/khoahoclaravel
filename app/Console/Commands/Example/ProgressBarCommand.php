<?php

namespace App\Console\Commands\Example;

use App\Repositories\Users\UserRepository;
use Illuminate\Console\Command;

class ProgressBarCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'khlt:user';
    protected $userRepos;


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * ProgressBarCommand constructor.
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
        $name = $this->ask('What is your name?');
        $this->newLine(1);
        $password = $this->secret('What is the password?');
        $this->newLine(2);
        $this->error('Something went wrong!');
        $this->newLine(2);
        $this->info('The command was successful!');
    }
}
