<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * @Deprecated
 */
class CreateCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::create('careers', function (Blueprint $table) {
        //    $table->id();
        //    $table->string('name');
        //    $table->string('code')->unique();
        //    $table->foreignId('departament_id')->constrained();
        //    $table->timestamps();
        //});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('careers');
    }
}
