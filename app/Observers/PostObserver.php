<?php

namespace App\Observers;

use App\Models\Posts\Post;
use Illuminate\Support\Facades\Log;

class PostObserver
{
    /**
     * Handle the Post "created" event.
     *
     * @param  Post  $post
     * @return void
     */
    public function created(Post $post)
    {
        Log::info('log',['observe'=>'log']);
    }

    /**
     * Handle the Post "updated" event.
     *
     * @param  Post  $post
     * @return void
     */
    public function updated(Post $post)
    {
        //
    }

    /**
     * Handle the Post "deleted" event.
     *
     * @param  Post  $post
     * @return void
     */
    public function deleted(Post $post)
    {
        //
    }

    /**
     * Handle the Post "restored" event.
     *
     * @param  Post  $post
     * @return void
     */
    public function restored(Post $post)
    {
        //
    }

    /**
     * @param Post $post
     */
    public function forceDeleted(Post $post)
    {
        //
    }
}
