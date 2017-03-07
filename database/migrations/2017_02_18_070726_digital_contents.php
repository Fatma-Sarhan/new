<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Digital_contents.
 *
 * @author  The scaffold-interface created at 2017-02-18 07:07:26am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class DigitalContents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('digital_contents',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('name');
        
        $table->String('content_file');
        
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
        Schema::drop('digital_contents');
    }
}
