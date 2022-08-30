<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombres',200);
            $table->string('apellidos',200);
            $table->string('documento',20);
            $table->string('direcciones',200);
            $table->foreignId('pais_id');
            $table->foreignId('ciudad_id');
            $table->foreignId('barrio_id');
            $table->date('fec_nacimiento');
            $table->integer('salario');
            $table->integer('salario_ips');
            $table->integer('anticipo');

            $table->date('fec_ingreso');

            $table->foreignId('cargo_id');
            $table->foreignId('seccion_id');
            $table->foreignId('sucursal_id');


            $table->enum('estado',['A','I'])->default('A');
            $table->timestamps();

            ##Fk's  
            $table->foreign('pais_id')->references('id')->on('paises')->onDelete('cascade');
            $table->foreign('ciudad_id')->references('id')->on('ciudades')->onDelete('cascade');
            $table->foreign('barrio_id')->references('id')->on('barrios')->onDelete('cascade');
            $table->foreign('sucursal_id')->references('id')->on('sucursales')->onDelete('cascade');
            $table->foreign('seccion_id')->references('id')->on('secciones')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
