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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 45);
            $table->double('amount');
            $table->enum('unit', ['Kg', 'L', 'Pz']);
            $table->enum('type', ['Verdura', 'Fruta', 'Proteina', 'Cereales y Legumbres','Lacteo','Embutido','Especia'])->default('Verdura');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
