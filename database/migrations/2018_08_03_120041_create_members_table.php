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
            $table->string('lastname', 50)->index();
            $table->string('firstname', 50);
            $table->date('birthday');
            $table->enum('gender', ['Femme', 'Homme']);
            $table->string('address', 255);
            $table->string('zipcode', 5);
            $table->string('city', 50);
            $table->string('email')->unique();
            $table->string('primaryphone', 10);
            $table->string('secondaryphone', 10)->nullable();
            $table->unsignedInteger('mutual_id');
            $table->unsignedInteger('pension_id');
            $table->enum('ag2r', ['oui', 'non'])->nullable();
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
