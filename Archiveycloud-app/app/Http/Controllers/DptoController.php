<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDptosTable extends Migration
{
    public function up()
    {
        Schema::create('dptos', function (Blueprint $table) {
            $table->string('dpt_id');
            $table->string('dpt_nom');
            $table->string('pai_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dptos');
    }
}
