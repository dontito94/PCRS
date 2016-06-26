<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaseregisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('caseregister', function (Blueprint $table) {
            $table->increments('id');
            $table->string('casename');
             $table->string('casecode');
              $table->string('victimName');
            $table->string('victimemail')->unique();
             $table->string('victimphoneNo');
              $table->string('criminalName');
            $table->string('criminalemail')->unique();
             $table->string('criminalphoneNo');
             $table->string('witnessName');
            $table->string('witnessemail')->unique();
             $table->string('witnessphoneNo');
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
         Schema::drop('caseregister');
    }
}
