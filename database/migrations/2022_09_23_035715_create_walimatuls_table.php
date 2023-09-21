<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Artisan;
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
        Schema::create('walimatuls', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('svg');
            $table->integer('created_at')->unsigned()->nullable();
            $table->integer('updated_at')->unsigned()->nullable();
        });

        Schema::create('bismillahs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('svg');
            $table->integer('created_at')->unsigned()->nullable();
            $table->integer('updated_at')->unsigned()->nullable();
        });

        Artisan::call('db:seed', [
            '--class' => 'WalimatulSeeder',
        ]);

        Artisan::call('db:seed', [
            '--class' => 'BismillahSeeder',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('walimatuls');
        Schema::dropIfExists('bismillahs');
    }
};
