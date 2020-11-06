<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePolicyResourceRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policy_resource_role', function (Blueprint $table) {
            $table->bigInteger('policy_resource_id')->unsigned()->index();
            $table->bigInteger('project_role_id')->unsigned()->index();
            $table->boolean('is_permitted')->default(false); 
            $table->timestamps();

            $table->foreign('policy_resource_id')->references('id')->on('policy_resource'); 
            $table->foreign('project_role_id')->references('id')->on('project_roles'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('policy_resource_role');
    }
}