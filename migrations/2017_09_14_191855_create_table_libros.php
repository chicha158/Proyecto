<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLibros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('id_proveedor')->unsigned();
			$table->foreign('id_proveedor')->references('id')->on('proveedor');
			$table->string('titulo', 50);
			$table->string('autores', 30);
			$table->string('editorial', 40);
			$table->string('tipo_tapa', 40);
			$table->string('genero', 30);
			$table->integer('precio');
			$table->string('ISBM', 30);
			$table->date('fecha_emision');
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
        Schema::dropIfExists('libros');
    }
}
