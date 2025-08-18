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
        Schema::create('events', function (Blueprint $table) {
            $table->id();

            $table->string('name', 255);
            $table->string('slug', 255);
            $table->string('description');
            $table->string('address', 255);
            $table->string('imagepath', 255);
            $table->string('imagename', 255);
            $table->integer('views')->default(0);

            // Khóa ngoại: users
            $table->unsignedBigInteger('IdUserCreated');
            $table->foreign('IdUserCreated')
                ->references('id')->on('users')
                ->onDelete('cascade');

            // Khóa ngoại: categories
            $table->unsignedBigInteger('IdCategory');
            $table->foreign('IdCategory')
                ->references('id')->on('categories');

            // Khóa ngoại: event_statuses
            $table->unsignedBigInteger('IdEventStatus');
            $table->foreign('IdEventStatus')
                ->references('id')->on('event_statuses');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
