<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->enum('tipo_ci', ['Venezolano', 'Extranjero', 'Menor']);
            $table->string('number_ci')->unique()->nullable();
            $table->enum('genero', ['Femenino', 'Masculino']);
            $table->date('fecha_nacimiento');
            $table->string('telf_casa');
            $table->string('telf_movil');
            $table->string('telf_trabajo');
            $table->string('profesion');
            $table->integer('habitantes_casa');
            $table->enum('tipo_usuario', ['Administrador', 'Usuario']);
            $table->string('lugar_edificio');
            $table->string('lugar_apartamento');
            $table->string('email');
            $table->string('password', 60);
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
