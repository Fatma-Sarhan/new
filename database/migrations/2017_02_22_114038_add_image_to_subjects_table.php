<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImageToSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subjects', function(Blueprint $table)
        {
            $table->string('start_data');
            $table->string('end_data');
            $table->string('image')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subjects', function(Blueprint $table)
        {
            $table->dropColumn('start_data');
            $table->dropColumn('end_data');
            $table->dropColumn('image');

        });
    }
}
