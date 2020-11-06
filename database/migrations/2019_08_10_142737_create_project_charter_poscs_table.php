<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectCharterPoscsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_charter_poscs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('project_charter_id')->unsigned()->index(); 
            $table->text('po_scope'); 
            $table->text('po_time'); 
            $table->text('po_cost'); 
            $table->text('po_other'); 
            $table->text('sc_scope'); 
            $table->text('sc_time'); 
            $table->text('sc_cost'); 
            $table->text('sc_other'); 
            $table->timestamps();

            $table->foreign('project_charter_id')->references('id')->on('project_charters'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_charter_poscs');
    }
}