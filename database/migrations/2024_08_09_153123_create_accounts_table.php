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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
						$table->string('name')->unique();
						$table->string('account_type');
	          $table->string('data_category');
						$table->decimal('balance',10,2);
						$table->decimal('interest',10,2)->nullable();
						$table->decimal('payment',10,2)->nullable();
						$table->string('month')->nullable();
						$table->string('year')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
