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
        Schema::create('event_times', function (Blueprint $table) {
            $table->id(); // Id (PK)
            $table->dateTime('start_date'); // StartDate
            $table->dateTime('end_date');   // EndDate
            $table->string('description', 255)->nullable(); // Description
            $table->unsignedBigInteger('event_id'); // IdEvent (FK)
            $table->softDeletes('deleted_at'); // DeleteAt
            $table->timestamps();

            // Khóa ngoại
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_times');
    }
};
