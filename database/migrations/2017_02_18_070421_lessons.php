<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Lessons.
 *
 * @author  The scaffold-interface created at 2017-02-18 07:04:21am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Lessons extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('lessons',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('name');
        
        $table->longText('description');
        
        /**
         * Foreignkeys section
         */
        
        
        $table->timestamps();
        
        
        $table->softDeletes();
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('lessons');
    }
}
