<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SubsectDeptDetail extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subsect_dept_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Subsect_ID')->unsigned();
            $table->integer('Dept_ID')->unsigned();
            $table->integer('Detail_ID')->unsigned();
            // $table->foreign('Subsect_ID')->references('id')->on('subsection')->onDelete('cascade');
            // $table->foreign('Dept_ID')->references('id')->on('department')->onDelete('cascade');
            // $table->foreign('Detail_ID')->references('id')->on('detail')->onDelete('cascade');
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
		Schema::drop('subsect_dept_detail');
	}

}
