<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{

    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('pib');
            $table->string('password');
            $table->string('email')->unique();
            $table->string('address');
            $table->string('telephone_num');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
