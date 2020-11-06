<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectScopeStatementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_scope_statements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('project_id')->unsigned()->index()->unique(); 
            $table->text('project_scope_defenition')->nullable(); 
            $table->text('project_deliverables')->nullable(); 
            $table->text('product_acceptance_criteria')->nullable(); 
            $table->text('project_exclusion')->nullable(); 
            $table->text('project_constrains')->nullable(); 
            $table->text('project_assumptions')->nullable(); 
            $table->timestamps();

            $table->foreign('project_id')->references('id')->on('projects'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_scope_statements');
    }
}
