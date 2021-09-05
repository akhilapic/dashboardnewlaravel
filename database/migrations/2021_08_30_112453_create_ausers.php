<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAusers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ausers', function (Blueprint $table) {
            $table->id();
            $table->string("first_name",255);
            $table->string("last_name",255);
            $table->string("password",255);
            $table->string("email",255);
            $table->string("phone",12);
            $table->string("address",255);
            $table->string("image",255);
            $table->tinyInteger('status')->default('0');
            $table->tinyInteger('is_deleted')->default('0');
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
        Schema::dropIfExists('ausers');
    }
}
