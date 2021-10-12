<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsLangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts_lang', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('post_id')->default(0);
            $table->string('lang')->comment('en,vi');
            $table->string('name')->nullable()->default(null)->comment('Tên của bài viết hoặc là tên sản phẩm');
            $table->text('description')->nullable()->default(null)->comment('Nội dung');
            $table->text('short_description')->nullable()->default(null)->comment('Nội dung ngắn');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts_lang');
    }
}
