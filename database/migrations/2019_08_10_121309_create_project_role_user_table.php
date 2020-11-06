<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;



class CreateProjectRoleUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_role_user', function (Blueprint $table) {
            $table->bigInteger('project_role_id')->unsigned()->index();
            $table->bigInteger('user_id')->unsigned()->index(); 
            $table->timestamps();

            $table->foreign('project_role_id')->references('id')->on('project_roles'); 
            $table->foreign('user_id')->references('id')->on('users'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_role_user');
    }
}
