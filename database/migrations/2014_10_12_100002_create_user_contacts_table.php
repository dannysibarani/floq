<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Models\Enums\PhoneType; 
use App\Models\Enums\PhoneStatus; 


class CreateUserContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->index(); 
            $table->string('phone_number'); 
            $table->string('phone_type')->default(PhoneType::DEFAULT); 
            $table->string('phone_status')->default(PhoneStatus::DEFAULT); 
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
        Schema::dropIfExists('user_contacts');
    }
}
