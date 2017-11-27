<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class EntrustSetupTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        // Create table for storing roles
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('display_name')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });

        // Create table for associating roles to users (Many-to-Many)
        Schema::create('role_user', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('role_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['user_id', 'role_id']);
        });

        // Create table for storing permissions
        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('display_name')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });

        // Create table for associating permissions to roles (Many-to-Many)
        Schema::create('permission_role', function (Blueprint $table) {
            $table->integer('permission_id')->unsigned();
            $table->integer('role_id')->unsigned();

            $table->foreign('permission_id')->references('id')->on('permissions')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['permission_id', 'role_id']);
        });
        

        Schema::create('tipo_preguntas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::create('tipo_evaluacions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::create('respuestas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();
        });
         
        
        Schema::create('grupos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('descripcion');
            $table->timestamps();
        });

        
        Schema::create('materias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('cotrasena');
            $table->timestamps();

            $table->integer('user_id')->unsigned();
              $table->foreign('user_id')->references('id')->on('users')
            ->onUpdate('CASCADE')
            ->onDelete('NO ACTION');

        });

        Schema::create('preguntas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('puntos');
            $table->timestamps();

            $table->integer('respuesta_id')->unsigned();
              $table->foreign('respuesta_id')->references('id')->on('respuestas')
            ->onUpdate('CASCADE')
            ->onDelete('NO ACTION');
            
            $table->integer('tipo_pregunta_id')->unsigned();
              $table->foreign('tipo_pregunta_id')->references('id')->on('tipo_preguntas')
            ->onUpdate('CASCADE')
            ->onDelete('NO ACTION');

        });

        
        
        Schema::create('evaluacions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();

            $table->integer('user_id')->unsigned();
              $table->foreign('user_id')->references('id')->on('users')
            ->onUpdate('CASCADE')
            ->onDelete('NO ACTION');
            
            $table->integer('materia_id')->unsigned();
              $table->foreign('materia_id')->references('id')->on('materias')
            ->onUpdate('CASCADE')
            ->onDelete('NO ACTION');

            $table->integer('tipo_evaluacion_id')->unsigned();
              $table->foreign('tipo_evaluacion_id')->references('id')->on('tipo_evaluacions')
            ->onUpdate('CASCADE')
            ->onDelete('NO ACTION');

        });

        Schema::create('usuario_evaluacions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nota');
            $table->timestamps();

            $table->integer('user_id')->unsigned();
              $table->foreign('user_id')->references('id')->on('users')
            ->onUpdate('CASCADE')
            ->onDelete('NO ACTION');
            
            $table->integer('evaluacion_id')->unsigned();
              $table->foreign('evaluacion_id')->references('id')->on('evaluacions')
            ->onUpdate('CASCADE')
            ->onDelete('NO ACTION');

        });


        Schema::create('documentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();

            $table->integer('user_id')->unsigned();
              $table->foreign('user_id')->references('id')->on('users')
            ->onUpdate('CASCADE')
            ->onDelete('NO ACTION');
            
            $table->integer('evaluacion_id')->unsigned();
              $table->foreign('evaluacion_id')->references('id')->on('evaluacions')
            ->onUpdate('CASCADE')
            ->onDelete('NO ACTION');

        });
             
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('permission_role');
        Schema::drop('permissions');
        Schema::drop('role_user');
        Schema::drop('roles');
        
    }
}
