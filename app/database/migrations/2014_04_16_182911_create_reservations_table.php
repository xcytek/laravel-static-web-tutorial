<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('reservations', function($table){
		   $table->increments('id') ;
		   $table->integer('id_room');
		   $table->integer('id_user');
		   $table->integer('duration');
		   $table->string('subject');
		   $table->string('notes');
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
		//
		Schema::drop('reservations');
	}

}
