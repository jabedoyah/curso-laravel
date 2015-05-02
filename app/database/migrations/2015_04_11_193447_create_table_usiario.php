<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsiario extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuario', function(Blueprint $table)
		{
                    $table->increments('id');
                    $table->string('nombre');
                    $table->string('correo');
                    $table->string('password');
                    $table->rememberToken();
                    $table->timestamps();
		});
                
                Schema::create('publicacion', function(Blueprint $table)
		{
                    $table->increments('id');
                    $table->timestamps();
                    $table->text('publicacion');
                    $table->boolean('tipo');
                    $table->integer('usuario_id')->unsigned();
                    $table->foreign('usuario_id')->references('id')->on('usuario');
                    $table->integer('padre')->unsigned()->nullable;
                    $table->foreign('padre')->references('id')->on('publicacion');
		});
                
                Schema::create('me_gusta', function(Blueprint $table)
		{
                    $table->increments('id');
                    $table->integer('usuario_id')->unsigned();
                    $table->foreign('usuario_id')->references('id')->on('usuario');
                    $table->integer('publicacion_id')->unsigned();
                    $table->foreign('publicacion_id')->references('id')->on('publicacion');
                    $table->timestamps();
		});
                
                DB::table('usuario')
                        ->insert([
                            'nombre'=>'Andres',
                            'correo'=>'jabedoyah@gmail.com',
                            'password'=>Hash::make('12345')
                            
                        ]);
                DB::table('usuario')
                        ->insert([
                            'nombre'=>'Luis',
                            'correo'=>'luis@gmail.com',
                            'password'=>Hash::make('12345')
                            
                        ]);
                
                DB::table('usuario')
                        ->insert([
                            'nombre'=>'Carlos',
                            'correo'=>'carlos@gmail.com',
                            'password'=>Hash::make('12345')
                            
                        ]);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('usuario', function(Blueprint $table)
		{
                    Schema::drop('me_gusta');
                    Schema::drop('publicacion');
                    Schema::drop('usuario');
		});
	}

}
