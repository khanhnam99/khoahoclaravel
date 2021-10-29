<?php

namespace App\Console\Commands\Demo;

use App\Models\Users\User;
use App\Repositories\Users\UserRepository;
use Illuminate\Console\Command;

class Progressbar extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'khoahoc:demo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';
    protected $userRepos;
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
//        $progressBar = $this->output->createProgressBar(10);
//        $progressBar->setFormat('[%bar%]');
//        $progressBar->setBarCharacter('*');
//        $progressBar->advance(3);
//        exit;


        try {


            $users = $this->userRepos->getAll([],null);
//            $count = count($users);
//            $progressBar = $this->output->createProgressBar($count);
//            $progressBar->setFormat('[%current%/%max% [%bar%] %percent:3s%%]');
//            $progressBar->setBarCharacter('*');
//
//            $progressBar->start();
//            foreach($users as $key => $user){
//                $k = $key + 1;
//                 //sleep(1);
//                $progressBar->advance();
//            }
//            $progressBar->finish();

            $this->withProgressBar($users,function($user){
               // sleep(1);
            });


        }catch(\Exception $e) {
            echo 'Error: '.$e->getMessage();
        }


//        $users = $this->userRepos->getAll([],null);
//        $bar = $this->output->createProgressBar(count($users));
//        $key = 1;
//        foreach ($users as $user) {
//            //$this->performTask($user);
//            sleep(1);
//            $bar->advance($key);
//            $key++;
//        }
//
//        $bar->finish();




//        $progressBar = $this->output->createProgressBar(10);
//        $progressBar->setFormat('[%bar%]');
//        $progressBar->setEmptyBarCharacter('#');
//        $progressBar->advance(3);


//        $progressBar = $this->output->createProgressBar(10);
//        $progressBar->setFormat('[%bar%]');
//        $progressBar->setProgressCharacter('>');
//        $progressBar->advance(3);


//        $users = $this->userRepos->getAll([],null);
//        $progressBar = $this->output->createProgressBar(count($users));
//        $progressBar->setFormat(
//            "The current step is %current_step%
//                \n[%bar%]\nAnother test message %test%"
//        );
//
//                $progressBar = $this->output->createProgressBar(count($users));
//        $progressBar->setFormat('custom_format');
//        $progressBar->setEmptyBarCharacter('#');
//        $progressBar->advance(count($users));
//
//        for ($i = 0; $i < count($users); $i++) {
//            // We are adding one to the count so that the user can
//            // view a count that does not start at 0. Step zero
//            // would now display as "The current step is 1".
//            // Developers know that the count starts at
//            // zero, but not all end users have the
//            // same level of technical knowledge.
//
//            $progressBar->setMessage($i + 1,       'current_step');
//            $progressBar->setMessage(($i + 1) * 2, 'test');
//            $progressBar->advance();
//        }

    }
}
