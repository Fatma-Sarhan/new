<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Online_lecs.
 *
 * @author  The scaffold-interface created at 2017-02-18 07:07:59am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class OnlineLecs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('online_lecs',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('name');
        
        $table->String('lec_file');
        
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
        Schema::drop('online_lecs');
    }
}
