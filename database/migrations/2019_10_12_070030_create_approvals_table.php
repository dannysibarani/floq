<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApprovalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approvals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('project_id')->unsigned()->index(); 
            $table->bigInteger('user_id')->unsigned()->index(); 
            $table->bigInteger('project_role_id')->unsigned()->index(); 
            $table->bigInteger('resource_id')->unsigned()->index(); 
            $table->string('signature')->nullable(); 
            $table->boolean('approved')->default(false); 
            $table->datetime('date')->nullable(); 
            $table->morphs('approvalable');
            $table->softDeletes(); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('approvals');
    }
}
