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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('admin')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });

        App\User::create([
          'name' => 'Moneeb',
          'email' => 'moneeb@gmail.com',
          'password' => bcrypt('moneeb123'),
          'admin' => 1,
        ]);

        App\User::create([
          'name' => 'hassanb',
          'email' => 'hassanb@gmail.com',
          'password' => bcrypt('hassan123'),
          'admin' => 0,
        ]);

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
