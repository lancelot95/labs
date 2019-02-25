<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcceuilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acceuils', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logonavbar')->nullable();
            $table->string('biglogo')->nullable();
            $table->string('imagetestimonial')->nullable();
            $table->string('titrecarousel')->nullable();
            $table->string('titrelabsworld')->nullable();
            $table->string('titrevertworld')->nullable();
            $table->string('titreword')->nullable();
            $table->string('textelabsworld')->nullable();
            $table->string('titreclient')->nullable();
            $table->string('titreservice')->nullable();
            $table->string('titreteam')->nullable();
            $table->string('titrestandout')->nullable();
            $table->string('textestandout')->nullable();
            $table->string('contactus')->nullable();
            $table->string('texte')->nullable();
            $table->string('mainoffice')->nullable();
            $table->string('addresse')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('newsletter')->nullable();
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
        Schema::dropIfExists('acceuils');
    }
}
