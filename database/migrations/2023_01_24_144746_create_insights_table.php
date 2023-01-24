<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {

    public function up() {
        Schema::create('insights', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('body');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('insights');
    }
};
