<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration  {

    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->text('thumbnail');
            $table->string('title');
            $table->string('category');
            $table->string('description');
            $table->string('img_1');
            $table->string('img_2');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('projects');
    }
};
