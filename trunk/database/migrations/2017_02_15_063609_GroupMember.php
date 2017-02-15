<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GroupMember extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_members', function (Blueprint $table) {
            $table->integer('group_id');
            $table->primary('group_id');
            $table->integer('user_id');
            $table->unique(array('group_id', 'user_id'));
            $table->enum('speak_level', array('low', 'middle','high'));//讲话级别
            $table->enum('user_level', array('member', 'own','dispatcher'));//member:普通成员；own：群主；dispatcher：调度员
            $table->enum('status', array('normal', 'locked','deleted'));
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
        Schema::dropIfExists('group_members');
    }
}
