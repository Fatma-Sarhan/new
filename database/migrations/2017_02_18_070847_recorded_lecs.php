<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Recorded_lecs.
 *
 * @author  The scaffold-interface created at 2017-02-18 07:08:47am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class RecordedLecs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('recorded_lecs',function (Blueprint $table){

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
        Schema::drop('recorded_lecs');
    }
}
