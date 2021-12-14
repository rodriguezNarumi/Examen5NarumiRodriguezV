<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->integer('id_genero');
            $table->integer('id_autor');
            $table->text('titulo');
            $table->text('sinopsis');
            $table->text('idioma');
            $table->text('fecha');
            $table->text('portada');
            $table->text('stock');
            $table->text('precio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libros');
    }
}
