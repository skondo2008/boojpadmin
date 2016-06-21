<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMyTableTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('MyTable', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->text('name', 65535)->nullable();
			$table->text('mail', 65535)->nullable();
			$table->integer('age')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('MyTable');
	}

}
