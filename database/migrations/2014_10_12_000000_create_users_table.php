<?php

use App\User;
use Illuminate\Support\Facades\Schema;
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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();//sirve para mantener activa la sesion de un usuario
            $table->string('verified')->default(User::USUARIO_NO_VERIFICADO);//para saber si un usuario esta o no verificado
            $table->string('verified_token')->nullable();
            $table->string('admin')->default(User::USUARIO_REGULAR);
            $table->timestamps();//Fecha de creacion y actualizacion 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
