<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cidades', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('estado_id')->unsigned();
            $table->string('nome');
            $table->integer('codigo');
            $table->integer('ddd');
            $table->tinyInteger('status');
            $table->string('slug');
            $table->integer('populacao');
            $table->decimal('lat', 12, 8);
            $table->decimal('long', 12, 8);
            $table->decimal('renda_per_capita', 8, 2);
        });

        Schema::table('cidades', function (Blueprint $table) {
            $table->foreign('estado_id')->references('id')->on('estados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cidades');
    }
}
