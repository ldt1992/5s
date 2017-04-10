<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupATable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('groupA', function (Blueprint $table) {
		    $table->increments('id');
		    $table->integer('Fact_ID')->length(10);
		    $table->foreign('Fact_ID')->references('id')->on('factory')->onDelete('cascade');
		    $table->integer('Sect_ID')->length(10);
		    $table->foreign('Sect_ID')->references('id')->on('section')->onDelete('cascade');
		    $table->integer('Subsect_ID')->length(10);
		    $table->foreign('Subsect_ID')->references('id')->on('subsections')->onDelete('cascade');
		    $table->integer('Dept_ID')->length(10);
		    $table->foreign('Dept_ID')->references('id')->on('department')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('groupA');
	}

}
