<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->string('title')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('slug')->nullable();
            $table->tinyText('summary')->nullable();
            $table->integer('type')->nullable();
            $table->string('sku')->nullable();
            $table->double('price')->nullable();
            $table->double('discount')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('shop')->nullable();
            $table->text('content')->nullable();
            $table->dateTime('published_at')->nullable();
            $table->dateTime('starts_at')->nullable();
            $table->dateTime('ends_at')->nullable();
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
        Schema::dropIfExists('products');
    }
}
