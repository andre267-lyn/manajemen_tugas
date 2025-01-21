<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');  // Kolom untuk judul tugas
            $table->text('description')->nullable();  // Kolom untuk deskripsi tugas
            $table->enum('status', ['pending', 'in-progress', 'completed'])->default('pending');  // Kolom untuk status tugas
            $table->foreignId('user_id')->constrained()->onDelete('cascade');  // Kolom untuk relasi dengan user
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
        Schema::dropIfExists('tasks');
    }
}
