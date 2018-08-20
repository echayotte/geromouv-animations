<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignkeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('members', function (Blueprint $table) {
            $table->foreign('mutual_id')->references('id')->on('mutuals');
            $table->foreign('pension_id')->references('id')->on('pensions');
        });

        Schema::table('activity_member', function (Blueprint $table) {
            $table->foreign('activity_id')->references('id')->on('activities');
            $table->foreign('member_id')->references('id')->on('members');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foreignkeys');
    }
}
