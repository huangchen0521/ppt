<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GroupRelation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_relations', function (Blueprint $table) {
            $table->increments('group_relation_id');
            $table->integer('group_id');
            $table->integer('parent_group_id');//上一级
            $table->unique(array('group_id', 'parent_group_id'));
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
        Schema::dropIfExists('group_relations');
    }
}
