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
        Schema::table('cards', function (Blueprint $table) {
            $table->string('background')->default('islamic-1')->after('type');

            $table->unsignedBigInteger('bismillah_id')->default(1);
            $table->foreign('bismillah_id')
                  ->references('id')
                  ->on('bismillahs')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->unsignedBigInteger('walimatul_id')->default(1);
            $table->foreign('walimatul_id')
                  ->references('id')
                  ->on('walimatuls')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->string('main_color')->default('#000000')->after('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cards', function (Blueprint $table) {
            $table->dropColumn('background');
            $table->dropForeign('cards_walimatul_id_foreign');
            $table->dropForeign('cards_bismillah_id_foreign');
            $table->dropColumn('walimatul_id');
            $table->dropColumn('bismillah_id');
            $table->dropColumn('main_color');
        });
    }
};
