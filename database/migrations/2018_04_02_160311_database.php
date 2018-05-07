<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Database extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        //Ambientes
        Schema::create('ambientes',function(Blueprint $table){
            $table->engine='InnoDB';
            $table->increments('id');
            $table->string('nome',250);
            $table->string('bloco',1);      
        });

         // Chaves
        Schema::create('chaves_ambiente', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nome');
            $table->integer('ambiente_id')->unsigned();

        //relacionamentos
            $table->foreign('ambiente_id')->references('id')->on('ambientes');
          
        });

         //Perfil
        Schema::create('perfis', function(Blueprint $table){
            $table->engine='InnoDB';
            $table->increments('id');
            $table->string('nome',250);

        });

        //Perfil ambiente
        Schema::create('perfis_ambiente',function(Blueprint $table){
            $table->engine='InnoDB';
            $table->integer('perfil_id')->unsigned();
            $table->integer('ambiente_id')->unsigned();

            $table->foreign('perfil_id')->references('id')->on('perfis');
            $table->foreign('ambiente_id')->references('id')->on('ambientes');

        });

        //Permissões
        Schema::create('permissoes', function(Blueprint $table){
            $table->engine='InnoDB';
            $table->increments('id');
            $table->string('nome',250);
        });

        //Permissão Perfil
        Schema::create('permissoes_perfis', function( Blueprint $table){
            $table->engine='InnoDB';
            $table->integer('perfil_id')->unsigned();
            $table->integer('permissao_id')->unsigned();


        //Relacionamento
            $table->foreign('perfil_id')->references('id')->on('perfis');
            $table->foreign('permissao_id')->references('id')->on('permissoes');
        });


          //Usuário
        Schema::create('usuarios', function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('perfil_id')->unsigned();
            $table->string('nome');
            $table->string('cpf');
            $table->string('telefone');
            $table->string('celular');
            $table->string('email');
            $table->bigInteger('situacao');

          //relacionamento
            $table->foreign('perfil_id')->references('id')->on('perfis');

        });


         //Reserva de Ambiente
        Schema::create('reservas_ambiente', function(Blueprint $table){
            $table->engine='InnoDB';
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->integer('ambiente_id')->unsigned();
            $table->timestamp('data_solicitacao');
            $table->timestamp('data_entrada');
            $table->timestamp('data_saida');
            $table->timestamp('data_reserva_inicio');
            $table->timestamp('data_reserva_fim');
            $table->string('observacao',250);

            $table->foreign('ambiente_id')->references('id')->on('ambientes');
            $table->foreign('usuario_id')->references('id')->on('usuarios');

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
         Schema::drop('permissoes_perfis');
         Schema::drop('permissoes');
         Schema::drop('perfis');
         Schema::drop('usuarios');
         Schema::drop('ambientes');
         Schema::drop('chaves_ambiente');
         Schema::drop('reservas_ambiente');
        

    }
}