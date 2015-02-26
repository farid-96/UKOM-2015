<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKampusdatasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	   $this->down();
		Schema::create('kampusdatas', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('namakampus');
			$table->string('akronim');
			$table->string('wilayah');
			$table->string('alamat');
			$table->string('website');
			$table->string('status');
			$table->string('akreditasi');
			$table->string('bahasa');
			$table->string('kapasitas');
			$table->string('fasilitas');
			$table->string('biaya');
			$table->string('beasiswa');
			$table->string('ujianmasuk');
			$table->string('fakultas');
		    $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->timestamp('deleted_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('kampusdatas',function($table){
		$table->dropIndex('search');
		)};
		Schema::dropIfExists('kampusdatas');
	}

}
