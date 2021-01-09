<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name') ->  nullable();
            $table->string('username') ->  unique();
            $table->string('password') ;
            $table->string('email') ->  unique();
            $table->string('cell') ->  unique();
            $table->integer('age');
            $table->string('photo') -> nullable();
            $table->unsignedInteger('status') -> default(1);
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
        Schema::dropIfExists('teachers');
    }
}
