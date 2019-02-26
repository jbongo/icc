<?php

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
            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->date('date_naissance');
            $table->string('telephone');
            $table->string('profession')->nullable();
            $table->string('ville')->nullable();
            $table->string('code_postal')->nullable();
            $table->date('date_bapteme')->nullable();
            $table->date('date_nouvelle_naissance')->nullable();
            $table->enum('role',['membre','coordo','admin'])->default('membre');
            $table->string('pole')->nullable();
            $table->boolean('archive')->default(false);
            $table->boolean('actif')->default(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('users');
    }
}
