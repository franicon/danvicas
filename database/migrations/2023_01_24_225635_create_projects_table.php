<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration  {

    public function up() {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('title');
            $table->longText('description')->nullable();
            $table->text('thumbnail');
            $table->string('img_1')->nullable();
            $table->string('img_2')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('projects');
    }
};
