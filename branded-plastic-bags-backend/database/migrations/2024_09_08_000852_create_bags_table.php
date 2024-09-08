<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBagsTable extends Migration
{
    public function up()
    {
        Schema::create('bags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price_per_unit', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bags');
    }
}