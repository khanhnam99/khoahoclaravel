<?php

namespace App\Http\Controllers\Backend\Demo;

use App\Http\Controllers\Controller;
use App\Jobs\NewJob;
use App\Repositories\Category\CategoryRepository;
use App\Repositories\Posts\PostRepository;
use App\Repositories\Roles\RoleRepository;
use App\Repositories\Users\UserRepository;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DemoController extends Controller
{
    //
    protected $postRepos,$userRepos,$roleRepos,$categoryRepos;
    public function __construct(
        PostRepository $postRepos,
        UserRepository $userRepos,
        RoleRepository $roleRepos,
        CategoryRepository $categoryRepos
    )
    {
        $this->postRepos = $postRepos;
        $this->userRepos = $userRepos;
        $this->roleRepos = $roleRepos;
        $this->categoryRepos = $categoryRepos;
    }

    public function index(){


       // observe
//        $pInsert = [
//            'status'=>1
//        ];
//        $this->postRepos->create($pInsert);

//        $post = $this->postRepos->getById(25);
//        $post->status = 2;
//        $post->save();

        exit;

        //job
        //dispatch(new NewJob(1));
        //NewJob::dispatch(1);


//        $p = [
//            'hello'=>1,
//            'hello2'=>2,
//        ];
//
//        echo time();
//        echo '<br>';
//
//        $emailJob = (new NewJob($p))->delay(Carbon::now()->addSeconds(30));
//        dispatch($emailJob);
//
//        echo time();
//        exit;

       // NewJob::dispatch()->delay(now()->addMinutes(10));

//        NewJob::dispatch($p)->delay(now()->second(30));
//        echo 1;
//        exit;

        //image
        $post = $this->postRepos->getById(21);

        //$ps = $this->postRepos->viewCount($post->id);
        $ps = $this->postRepos->decrementCount($post->id);

        dd($ps);

        $posts_lang = $post->postsLang;
        $image = $post->image;


//        foreach($image as $key => $value) {
//            $value->delete();
//        }

//        dd($posts_lang);
//        $json = json_decode($image->url,true);
//        if(!empty($json)) {
//            foreach($json as $key => $value) {
//
//            }
//        }
       // $post->image->delete();

        // delete related
        //$post->image()->delete();
        //$post->delete();


        // role
        $role = $this->roleRepos->find(1);
        $user = $this->userRepos->find(3);

        //$role->users()->attach(3);
       // $role->users()->attach($user->id);
        //$user->roles()->attach($role->id);
       // $user->roles()->sync(1);
      //  exit;

//        $role->users()->attach($user->id,[
//            'active'=>1,
//            'created_by'=>1,
//        ]);


      //  dd($role->pivotRoleActive);
        dd($user->roles->toArray());
       // dd($role->pivotRoleActive->toArray());
       // $role->users()->attach(3);
        //$user->roles()->sync([4]);
        //$role->users()->detach(1);


        echo 1;
        exit;

       // dd($post->id,$posts_lang,$image);




        $user = Auth()->guard('backend')->user()->toArray();
        print_r($user);
        exit();
    }
}
