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
        Schema::table('card_informations', function (Blueprint $table) {
            $table->unsignedBigInteger('card_id')->default(1);
            $table->foreign('card_id')
                  ->references('id')
                  ->on('cards')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('card_informations', function (Blueprint $table) {
            $table->dropForeign('card_informations_card_id_foreign');
            $table->dropColumn('card_id');
        });
    }
};
