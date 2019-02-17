<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOpportunitiesTable extends Migration {

	public function up()
	{
		Schema::create('opportunities', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('titre', 200);
			$table->enum('type', array('achat', 'vente','partenaire'));
			$table->text('description');
			$table->string('pays', 50);
			$table->integer('quantity');
			$table->float('price');
			$table->enum('userType', array('societe', 'particulier'));
            $table->integer('user_id')->index() ;

        });
	}

	public function down()
	{
		Schema::drop('opportunities');
	}
}