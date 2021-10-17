<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_review',function(Blueprint $table){
            $table->id();
            $table->bigInteger('productId');
            $table->bigInteger('parentId');
            $table->string('title',250);
            $table->tinyInteger('rating');
            $table->tinyInteger('published');
            $table->dateTime('publishedAt');
            $table->text('content');
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
        //
    }
}
