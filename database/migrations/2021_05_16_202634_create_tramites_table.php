<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTramitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tramites', function (Blueprint $table) {
            $table->id();
            $table->string('representante');
            $table->string('testimonio');
            $table->string('nombre');
            $table->string('empresa')->nullable();
            $table->string('tipo');
            $table->string('documento');
            $table->string('estado')->default('1');
            $table->string('revosc')->default('0');
            $table->string('revaacn')->default('0');
            $table->string('ctrobs')->default('0');
            $table->string('resosc')->nullable();
            $table->string('resaacn')->nullable();

            $table->string('obserosc')->nullable();
            $table->string('obseraacn')->nullable();

            $table->unsignedBigInteger('consultor_id')->nullable();
            $table->foreign('consultor_id')->references('id')->on('consultors')->onDelete('set null');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
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
        Schema::dropIfExists('tramites');
    }
}
