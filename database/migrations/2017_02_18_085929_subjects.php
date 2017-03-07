<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Subjects.
 *
 * @author  The scaffold-interface created at 2017-02-18 08:59:29am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Subjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('subjects',function (Blueprint $table){
        $table->increments('id'); 
        $table->String('name'); 
        $table->String('description'); 
        /**
         * Foreignkeys section
         */
        $table->timestamps();
        $table->softDeletes(); 
        // type your addition here
        $table->integer('degree_id')->unsigned()->index();
        $table->foreign('degree_id')->references('id')->on('degrees')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('subjects');
    }
}
