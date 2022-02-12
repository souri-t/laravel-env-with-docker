<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemotecodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remote_codes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('command', 50);
            $table->integer('category_id');
            $table->timestamps();
        });

        Schema::create('remote_categories', function (Blueprint $table) {
            $table->integer('id');
            $table->string('name', 50);
            $table->string('filename', 50);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('remote_codes');
        Schema::dropIfExists('remote_categories');
    }
}
