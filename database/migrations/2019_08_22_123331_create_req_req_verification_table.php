<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReqReqVerificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('req_req_verification', function (Blueprint $table) {
            $table->bigInteger('requirement_id')->unsigned()->index(); 
            $table->bigInteger('requirement_verification_id')->unsigned()->index(); 
            $table->timestamps();

            $table->foreign('requirement_id')->references('id')->on('requirements'); 
            $table->foreign('requirement_verification_id')->references('id')->on('requirement_verifications');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('req_req_verification');
    }
}