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
        Schema::create('nilai_mahasiswa', function (Blueprint $table) {
        $table->id('nilai_id'); // Kolom id primary key
        $table->unsignedBigInteger('mahasiswa_id')->index();
        $table->unsignedBigInteger('matkul_id')->index();
        $table->decimal('nilai', 5, 2); // Sesuai diagram: decimal(5,2)
        $table->timestamps();

        // Foreign Key Constraints
        $table->foreign('mahasiswa_id')->references('mahasiswa_id')->on('mahasiswa')->onDelete('cascade');
        $table->foreign('matkul_id')->references('matkul_id')->on('matkul')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_mahasiswa');
    }
};
