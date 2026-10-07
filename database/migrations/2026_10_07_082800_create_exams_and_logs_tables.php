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
        
        Schema::create('exams_and_logs_tables', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        //Tabel Ujian
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->integer('duration_minutes');
            $table->timestamps();
        });

        // Tabel Log Pengawasan (Face Recognition)
        Schema::create('proctoring_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('exam_id')->constrained()->cascadeOnDelete();
            $table->string('violation_type'); // Contoh: "Wajah tidak terdeteksi"
            $table->string('snapshot_path')->nullable(); 
            $table->timestamp('logged_at');
            $table->timestamps();
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams_and_logs_tables');
        Schema::dropIfExists('proctoring_logs');
        Schema::dropIfExists('exams');
    }
};
