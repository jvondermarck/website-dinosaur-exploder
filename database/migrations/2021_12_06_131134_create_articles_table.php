<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    private const USER_TABLE = 'Article';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(self::USER_TABLE, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('auteur');
            $table->string('titre');
            $table->string('phrase',256);
            $table->string('contenu');
            $table->boolean('statut');
            $table->date('last_publi');
            $table->date('last_modif');
            $table->foreign('auteur')->references('login')->on('UserEloquent')->onDelete('cascade');
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
