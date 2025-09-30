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
        Schema::create('blogs', function (Blueprint $table) {

            $table->id();

            $table->string('unique_code')->unique();

            $table->unsignedBigInteger('blog_master_id')->nullable();
            $table->foreign('blog_master_id')->references('id')->on('blogmasters');

            $table->string('title');
            $table->text('short_note');
            $table->text('blog_content');
            $table->text('blog_image');
            $table->text('blog_img_alt');

            $table->text('slug_url');

            $table->string('meta_title');
            $table->text('meta_description');
            $table->string('meta_keyword');

            $table->string('og_type');
            $table->string('og_url');
            $table->string('og_title');
            $table->text('og_description');

            $table->string('writer_name');
            $table->string('writer_email')->nullable();
            $table->string('writer_website')->nullable();

            $table->string('listing')->default('Active');
            $table->string('pinit')->default('Un-Pin');

            $table->string('soft_delete')->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
