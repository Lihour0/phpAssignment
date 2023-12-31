<?php

use App\Models\Course;
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
            //
            Schema::create('contents', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->string('video_title');
                $table->string('video_img')->nullable();
                $table->string('video')->nullable();
                $table->foreignIdFor(Course::class);
                $table->string('video_description')->nullable();
            });

        }

        /**
     * Reverse the migrations.
     */
        public function down(): void
        {
            //
        }
    };
