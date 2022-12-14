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
            $table->string('nro_legajo',20)->nullable();
            $table->enum('sexo',['M','F','X'])->default('M');
            $table->string('direcciones',200)->nullable();
            $table->string('otra_direccion',200)->nullable();
            $table->string('telefono',200)->nullable();
            $table->enum('estado_civil',['A','C','S','D','V'])->default('S');
            

            $table->text('photo',400)->nullable();
            $table->foreignId('pais_id')->nullable();
            $table->foreignId('ciudad_id')->nullable();
            $table->foreignId('barrio_id')->nullable();
            $table->date('fec_nacimiento');
            $table->integer('salario')->nullable();
            $table->integer('salario_ips')->nullable();
            $table->integer('anticipo')->nullable();
            $table->text('email','200')->nullable();

            $table->date('fec_ingreso')->nullable();

            $table->foreignId('cargo_id')->nullable();
            $table->foreignId('seccion_id')->nullable();
            $table->foreignId('sucursal_id')->nullable();

            $table->enum('ips',['S','N'])->default('S');
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
