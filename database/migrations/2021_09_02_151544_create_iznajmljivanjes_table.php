<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIznajmljivanjesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iznajmljivanjes', function (Blueprint $table) {
            $table->string('Ime');
            $table->string('Prezime');
            $table->unsignedBigInteger('Knjiga');
            $table->foreign('Knjiga')->references('id')->on('knjigas')->onDelete('cascade');
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
        Schema::dropIfExists('iznajmljivanjes');
    }
}
