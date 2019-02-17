<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignkeyToEntreprisesProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('entreprises_products', function (Blueprint $table) {

            $table->integer('entreprises_id')->unsigned()->index()->nullable();
            $table->foreign('entreprises_id')->references('id')->on('entreprises');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('entreprises_products', function (Blueprint $table) {
            //
        });
    }
}
