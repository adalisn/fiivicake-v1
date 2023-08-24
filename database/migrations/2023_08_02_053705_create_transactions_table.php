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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->date('tanggal');
            $table->string('reference')->nullable();
            $table->string('merchant_ref')->nullable(); //optional  
            $table->enum('status', ['paid', 'pending', 'unpaid'])->default('unpaid'); //buat ke chekout atau tidak
            $table->string('proof_image')->nullable();
            // $table->integer('kode');
            $table->integer('total_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};