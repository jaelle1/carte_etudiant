<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
<<<<<<< HEAD
            $table->bigInteger('matricule')->primary();
=======
            $table->id();
            $table->string('matricule');
>>>>>>> 23a1ce9bc1a64bfd2c90d16c5168017a788e332f
            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->string('cycle');
            $table->string('niveau');
            $table->string('annee');
            $table->string('photo');
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
        Schema::dropIfExists('students');
    }
};

