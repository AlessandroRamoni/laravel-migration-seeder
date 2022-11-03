<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 20)->nullable(false);
            $table->string('stazione di partenza', 50)->nullable(false);
            $table->string('stazione di arrivo', 50)->nullable(false);
            $table->date('data');
            $table->time('orario di partenza', 2)->nullable(false);
            $table->time('orario di arrivo', 2)->nullable(false);
            $table->string('codice treno', 10)->nullable(false);
            $table->tinyInteger('numero carrozze');
            $table->boolean('in orario')->default(true);
            $table->boolean('cancellato')->default(false);
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
        Schema::dropIfExists('trains');
    }
}
