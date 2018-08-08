<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lastname', 55)->index();
            $table->string('firstname', 55);
            $table->date('birthday');
            $table->enum('gender', ['Femme', 'Homme']);
            $table->string('address');
            $table->integer('zipcode');
            $table->string('city', 100);
            $table->string('email')->unique();
            $table->string('phone', 10)->nullable();
            $table->string('cellphone', 10);
            //──── enlever quand on aura mis la publication pour les deux ──────────────────────
            $table->unsignedInteger('mutual_id');
            $table->unsignedInteger('pension_id');
            $table->enum('ressortissantAG2R', ['oui', 'non'])->nullable();
            //──── complementary 1 selectionné par défaut ────────────────────────
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
        Schema::dropIfExists('members');
    }
}
