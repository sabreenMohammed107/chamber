<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepatrtmentBoardMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depatrtment_board_members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('en_name',1000)->nullable();
            $table->string('ar_name',1000)->nullable();
            $table->string('en_position',1000)->nullable();
            $table->string('ar_position',1000)->nullable();
            $table->string('image',1000)->nullable();
            $table->integer('board_directors_id')->unsigned()->nullable();
            $table->text('ar_cv',1000)->nullable();
            $table->text('en_cv',1000)->nullable();
            $table->integer('position_order')->nullable();
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
        Schema::dropIfExists('depatrtment_board_members');
    }
}
