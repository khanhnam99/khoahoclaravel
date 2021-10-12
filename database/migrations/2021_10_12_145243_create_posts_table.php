<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('status')->default(0)->comment('Trạng thái bài viết: = 0 : bài viết ẩn, =1 hiện bài viết');
            $table->tinyInteger('option')->default(0)->comment('= 0: bài viết ở ngoài trang chủ , = 1: sản phẩm hot,');
            $table->bigInteger('module_id')->default(0)->comment('=0:tin tức, 1: sản phẩm, 2: dịch vụ');
            $table->bigInteger('category_id')->default(0)->comment('category');
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
        Schema::dropIfExists('posts');
    }
}
