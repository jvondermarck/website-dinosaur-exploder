<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    private const USER_TABLE = 'Comment';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(self::USER_TABLE, function (Blueprint $table) {
            $table->increments('id');
            $table->integer('article_id');
            $table->integer('user_id');
            $table->string("comment");
            $table->foreign('article_id')->references('id')->on('Article')->onDelete('cascade');
            $table->foreign('user_id')->references('login')->on('UserEloquent')->onDelete('cascade');
            $table->date('last_publi');
            $table->date('last_modif');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(self::USER_TABLE);
    }
}
