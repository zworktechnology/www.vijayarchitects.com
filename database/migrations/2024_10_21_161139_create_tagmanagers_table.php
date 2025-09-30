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
        Schema::create('tagmanagers', function (Blueprint $table) {

            $table->id();

            $table->string('unique_code')->unique();

            $table->text('script');
            $table->text('no_script');
            $table->text('site_verify')->nullable();

            $table->string('soft_delete')->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tagmanagers');
    }
};
