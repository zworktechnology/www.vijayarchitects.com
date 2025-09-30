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
        Schema::create('blogmasters', function (Blueprint $table) {

            $table->id();

            $table->string('unique_code')->unique();

            $table->string('master_name');
            $table->string('master_url');

            $table->string('status')->default('Active');

            $table->string('soft_delete')->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogmasters');
    }
};
