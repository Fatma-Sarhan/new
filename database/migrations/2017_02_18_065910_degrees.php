<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Degrees.
 *
 * @author  The scaffold-interface created at 2017-02-18 06:59:10am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Degrees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('degrees',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('name')->unique();
        
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
        Schema::drop('degrees');
    }
}
