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
        Schema::create('grievances', function (Blueprint $table) {
            $table->string('GrievanceID',15)->primary();
            $table->string('VoterID',15);
            $table->date('Date');
            $table->string('Election');
            $table->string('Name');
            $table->text('Grevance');
            $table->text('Response')->nullable();
            $table->timestamps();
            $table->foreign('VoterID')
            ->references('voterID')
            ->on('voters')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grievances');
    }
};
