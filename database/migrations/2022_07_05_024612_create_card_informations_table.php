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
        Schema::create('card_informations', function (Blueprint $table) {
            $table->id();
            $table->string('father_name');
            $table->string('mother_name');

            $table->string('bride');
            $table->string('bride_partner');

            $table->string('started_at')->nullable();
            $table->string('ended_at')->nullable();

            $table->text('venue');
            $table->string('venue_url');

            $table->integer('wedding_at')->unsigned()->nullable();
            $table->integer('created_at')->unsigned()->nullable();
            $table->integer('updated_at')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('card_informations');
    }
};
