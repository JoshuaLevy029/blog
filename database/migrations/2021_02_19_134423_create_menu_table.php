<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->id();
            $table->integer('menu_id')->default(0);
            $table->string('name')->nullable();
            $table->string('icon')->nullable();
            $table->string('route')->nullable();
            $table->text('data')->nullable();
            $table->boolean('active')->default(true);
            $table->integer('order');
            $table->string('target')->default('_self');
            $table->string('type')->default('route');
            $table->string('permission')->default('all');
            $table->string('site')->default('blog');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu');
    }
}
