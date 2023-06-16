<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        // Schema::create('candidates', function (Blueprint $table) {
        //     $table->string('candidate_id',15)->primary();
        //     $table->string('full_name');
        //     $table->integer('age');
        //     $table->string('gender');
        //     $table->string('party',100);
        //     $table->string('educational_level');
        //     $table->text('other_achievements')->nullable();
        //     $table->foreign('party')->references('name_of_party')->on('Party');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};
