<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserModule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_modules', function (Blueprint $table) {
            $table->integer('user_id');
            $table->enum('module_name', array('friend', 'location', 'record', 'monitor', 'remote_control', 'single_call', 'change_group', 'sound_record', 'display_group'));
            $table->unique(array('user_id', 'module_name'));
            $table->enum('status', array('normal', 'locked', 'deleted'));
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
        Schema::dropIfExists('user_modules');
    }
}
