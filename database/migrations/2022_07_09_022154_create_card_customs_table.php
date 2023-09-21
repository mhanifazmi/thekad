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
        Schema::create('card_customs', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->text('value');

            $table->unsignedBigInteger('card_id')->default(1);
            $table->foreign('card_id')
                  ->references('id')
                  ->on('cards')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

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
        Schema::dropIfExists('card_customs');
    }
};