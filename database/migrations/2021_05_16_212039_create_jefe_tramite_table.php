<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJefeTramiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jefe_tramite', function (Blueprint $table) {
            $table->id();
            $table->string('aceptacion');
            $table->unsignedBigInteger('jefes_id');
            $table->foreign('jefes_id')->references('id')->on('jefes')->onDelete('cascade');
            $table->unsignedBigInteger('tramite_id');
            $table->foreign('tramite_id')->references('id')->on('tramites')->onDelete('cascade');
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
        Schema::dropIfExists('jefe_tramite');
    }
}
