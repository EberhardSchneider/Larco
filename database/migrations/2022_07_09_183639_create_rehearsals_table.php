<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rehearsals', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date_begin');
            $table->dateTime('date_end');
            $table->boolean('full_day')->default(false);
            $table->foreignId('location_id')->nullable()->constrained();
            $table->foreignId('project_id')->nullable()->constrained();
            $table->string('program');
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
        Schema::dropIfExists('rehearsals');
    }
};
