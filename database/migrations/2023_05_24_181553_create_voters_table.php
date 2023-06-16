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
        // Schema::create('voters', function (Blueprint $table) {
        //     $table->string('voterID',15)->primary();
        //     $table->string('username',15);
        //     $table->string('full_name',15);           
        //     $table->date('dob');
        //     $table->integer('age',3);
        //     $table->string('gender',10);
        //     $table->string('disability',10)->nullable();
        //     $table->string('residency_duration',10);
        //     $table->string('house_no',10);
        //     $table->string('vote_status',10);
        //     $table->text('remark')->nullable();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voters');
    }
};
