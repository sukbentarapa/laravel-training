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
        Schema::create('gadgets', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            //name,phone_number,serial_number,brand,status
            $table->string('name'); //iphone, vivo X70
            $table->string('phone_number'); // 012
            $table->string('serial_number'); // 8776777
            $table->string('brand'); // vivo
            // $table->string('status'); // 1,0
            $table->integer('status'); // 1,0
            $table->timestamps(); //created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gadgets');
    }
};
