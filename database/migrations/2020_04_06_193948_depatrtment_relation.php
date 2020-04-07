<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DepatrtmentRelation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       //  This is Realations for the department_news Table ..
       Schema::table('department_news', function (Blueprint $table) {
        $table->foreign('department_id')->references('id')->on('depatrtments');
       
    });

    //  This is Realations for the department_galleries Table ..
    Schema::table('department_galleries', function (Blueprint $table) {
        $table->foreign('department_news_id')->references('id')->on('department_news');
       
    });

    //  This is Realations for the related_department_news Table ..
    Schema::table('related_department_news', function (Blueprint $table) {
        $table->foreign('related_department_news_id')->references('id')->on('department_news');
        $table->foreign('department_news_id')->references('id')->on('department_news');
       
    });
    //  This is Realations for the department_files Table ..
    Schema::table('department_files', function (Blueprint $table) {
        $table->foreign('department_news_id')->references('id')->on('department_news');
       
    });
     //  This is Realations for the department_board_directors Table ..
     Schema::table('department_board_directors', function (Blueprint $table) {
        $table->foreign('department_id')->references('id')->on('depatrtments');
       
    });

     //  This is Realations for the depatrtment_board_members Table ..
     Schema::table('depatrtment_board_members', function (Blueprint $table) {
        $table->foreign('board_directors_id')->references('id')->on('department_board_directors');
       
    });
     //  This is Realations for the depatrtment_registers Table ..
     Schema::table('depatrtment_registers', function (Blueprint $table) {
        $table->foreign('department_id')->references('id')->on('depatrtments');
       
    });
    //  This is Realations for the depatrtment_meetings Table ..
    Schema::table('depatrtment_meetings', function (Blueprint $table) {
        $table->foreign('department_id')->references('id')->on('depatrtments');
       
    });
     //  This is Realations for the depatrtment_meeting_galleries Table ..
     Schema::table('depatrtment_meeting_galleries', function (Blueprint $table) {
        $table->foreign('department_meeting_id')->references('id')->on('depatrtment_meetings');
       
    });
    //  This is Realations for the department_files Table ..
    Schema::table('department_meeting_files', function (Blueprint $table) {
        $table->foreign('department_meeting_id')->references('id')->on('depatrtment_meetings');
       
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
