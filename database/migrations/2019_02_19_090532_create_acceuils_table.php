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
            $table->string('logonavbar');
            $table->string('biglogo');
            $table->string('imageuncarousel');
            $table->string('imagedeuxcarousel');
            $table->string('imagetestimonial');
            $table->string('titrecarousel');
            $table->string('titrelabsworld');
            $table->string('titrevertworld');
            $table->string('titreword');
            $table->string('textelabsworld');
            $table->string('titreclient');
            $table->string('titreservice');
            $table->string('titreteam');
            $table->string('titrestandout');
            $table->string('textestandout');
            $table->string('contactus');
            $table->string('texte');
            $table->string('mainoffice');
            $table->string('addresse');
            $table->string('phone');
            $table->string('email');
            $table->string('newsletter');
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
