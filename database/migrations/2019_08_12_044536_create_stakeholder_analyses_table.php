<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Models\Enums\Power; 
use App\Models\Enums\Interest;
use App\Models\Enums\Influence;
use App\Models\Enums\Attitude;

class CreateStakeholderAnalysesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stakeholder_analyses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('project_id')->unsigned()->index(); 
            $table->bigInteger('user_id')->unsigned()->index(); 
            $table->bigInteger('project_role_id')->unsigned()->index(); 
            $table->string('power')->default(Power::DEFAULT); 
            $table->string('interest')->default(Interest::DEFAULT);
            $table->string('influence')->default(Influence::DEFAULT);
            $table->string('attitude')->default(Attitude::DEFAULT);
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
        Schema::dropIfExists('stakeholder_analyses');
    }
}
