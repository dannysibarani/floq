<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Models\Enums\RelationshipStatus; 
use App\Models\Enums\Sex; 


class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->index(); 
            $table->string('first_name')->nullable(); 
            $table->string('middle_name')->nullable(); 
            $table->string('last_name')->nullable(); 
            $table->datetime('date_of_birth')->nullable(); 
            $table->string('place_of_birth')->nullable(); 
            $table->string('nationality')->nullable(); 
            $table->string('sex')->default(Sex::DEFAULT);
            $table->string('relationship_status')->default(RelationshipStatus::DEFAULT); 
            $table->string('avatar')->nullable(); 
            $table->timestamps();

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
        Schema::dropIfExists('user_profiles');
    }
}
