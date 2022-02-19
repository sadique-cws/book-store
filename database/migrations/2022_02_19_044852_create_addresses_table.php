<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string("contact")->nullable();
            $table->string("area");
            $table->foreignId("user_id")->constrianed();
            $table->string("street");
            $table->string("city");
            $table->string("state");
            $table->string("pincode");
            $table->enum("type",["home","office"])->default("home");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
};
