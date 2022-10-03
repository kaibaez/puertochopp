<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permisos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('empleado_id')->nullable();
            $table->foreignId('tip_permiso_id')->nullable();
            $table->date('fec_desde')->nullable();
            $table->date('fec_hasta')->nullable();
            $table->string('observaciones')->nullable();
            $table->enum('estado',['P','C'])->default('P');
            $table->timestamps();

        ##Fk's    
        $table->foreign('empleado_id')->references('id')->on('empleados')->onDelete('cascade');
        $table->foreign('tip_permiso_id')->references('id')->on('tipo_permisos')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permisos');
    }
}
