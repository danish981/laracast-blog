<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TestMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testMigration', function (Blueprint $table) {
            $table->integer('id');
            $table->string('fullName', 35);
            $table->string('flightDay', 20);
            $table->string('youngerBroName', 30);
            $table->string('username', 35)->unique();
            $table->string('email', 35)->unique();
            $table->string('password')->unique();
            $table->string('favouriteGame', 40)->default('false');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testMigration');
    }
}
