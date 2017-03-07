<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Sections.
 *
 * @author  The scaffold-interface created at 2017-02-18 09:38:01am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Sections extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('sections',function (Blueprint $table){

        $table->increments('id');
        $table->String('name'); 
        $table->longText('description');
        
        /**
         * Foreignkeys section
         */
        
        $table->timestamps();  
        $table->softDeletes();
  
        // type your addition here
        
        $table->integer('subject_id')->unsigned()->index();
        $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('sections');
    }
}
