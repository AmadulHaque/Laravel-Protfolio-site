<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hero_sections', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('frontimage')->nullable();
            $table->string('backimage')->nullable();
            $table->string('head')->nullable();
            $table->string('name')->nullable();
            $table->string('designation')->nullable();
            $table->string('title')->nullable();
            $table->string('project')->nullable();
            $table->string('github')->nullable();
            $table->string('fb')->nullable();
            $table->string('linkdin')->nullable();
            $table->string('youtube')->nullable();
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
        Schema::dropIfExists('hero_sections');
    }
};
