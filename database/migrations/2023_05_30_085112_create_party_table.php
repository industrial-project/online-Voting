<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Schema::create('Party', function (Blueprint $table) {
        //     $table->string('name_of_party',100)->primary();
        //     $table->string('logo')->nullable();
        //     $table->string('president');
        //     $table->string('level');
        //     $table->string('region');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('party');
    }
};