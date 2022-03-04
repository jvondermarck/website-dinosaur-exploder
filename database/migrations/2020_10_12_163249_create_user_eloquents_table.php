<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserEloquentsTable extends Migration
{
    private const USER_TABLE = 'UserEloquent';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(self::USER_TABLE, function (Blueprint $table) {
            $table->bigIncrements('user_id');
            $table->string('login')->unique();
            $table->string('password',256);
            $table->boolean('admin');
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
