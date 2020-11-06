<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Models\Enums\StakeholderClassification; 

class CreateStakeholderRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stakeholder_registers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('project_id')->unsigned()->index();
            $table->bigInteger('user_id')->unsigned()->index();
            $table->bigInteger('project_role_id')->unsigned()->index();
            $table->text('requirements')->nullable(); 
            $table->text('expectation')->nullable(); 
            $table->string('classification')->default(StakeholderClassification::DEFAULT); 
            $table->timestamps();

            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('user_id')->references('id')->on('users'); 
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
        Schema::dropIfExists('stakeholder_registers');
    }
}
