<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contests', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('qty')->default(1);
            $table->string('code')->unique();
            $table->string('name')->nullable();
            $table->dateTime('init_date')->comment('init contest');
            $table->dateTime('end_date')->comment('end contest');
            $table->dateTime('enrollment_date_end')->comment('end enrrollment contest');
            $table->longText('description')->comment('description, contact, and other info');
            $table->foreignId('remuneration_type_id')->constrained();
            $table->foreignId('working_day_type_id')->constrained();
            $table->foreignId('course_id')->constrained();
            $table->foreignId('category_type_id')->constrained();
            $table->foreignId('category_id')->constrained();
            $table->foreignId('area_id')->nullable()->constrained();
            $table->foreignId('orientation_id')->nullable()->constrained();
            $table->foreignId('departament_id')->nullable()->constrained();
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
        Schema::dropIfExists('contests');
    }
}
