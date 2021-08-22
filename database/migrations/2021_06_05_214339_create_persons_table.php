<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('uid')->nullable()->comment('Arg country is CUIL');
            $table->string('dni')->nullable()->comment('Arg country is DNI');
            $table->string('contact_email')->nullable();
            $table->string('cellphone')->nullable();
            $table->string('phone')->nullable();
            $table->string('citizenship')->nullable();
            $table->string('real_address')->nullable();
            $table->string('legal_address')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->foreignId('place_of_birth')->nullable()->constrained('cities');
            $table->foreignId('user_id')->nullable()->constrained();
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
        Schema::dropIfExists('persons');
    }
}
