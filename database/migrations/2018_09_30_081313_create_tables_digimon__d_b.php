<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablesDigimonDB extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      Schema::create('digimon', function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->increments('digimon_id');
          $table->string('digimonname');
          $table->integer('stage');
          $table->unsignedInteger('tribe_id');
          $table->string('info')->nullable();
          $table->timestamps();
      });

      Schema::create('digivolve', function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->increments('digivolve_id');
          $table->unsignedInteger('digimon_id');
          $table->unsignedInteger('digimon_d_id');
          $table->timestamps();
      });
      Schema::create('stat', function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->increments('stat_id');
          $table->unsignedInteger('digimon_id');
          $table->integer('awak_lvl');
          $table->integer('level');
          $table->integer('atk');
          $table->integer('def');
          $table->integer('s-atk');
          $table->integer('s-def');
          $table->integer('spd');
          $table->integer('luck');
          $table->integer('friendship');
          $table->string('photolink')->nullable();
          $table->timestamps();
      });
      Schema::create('tribe', function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->increments('tribe_id');
          $table->string('tribe_name');
          $table->string('tribe_cat');
          $table->string('tribelinkpic')->nullable();
          $table->timestamps();
      });

      Schema::create('dnaskill', function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->increments('dnaskill_id');
          $table->unsignedInteger('digimon_id');
          $table->integer('dna_category');
          $table->string('dnaskillname');
          $table->integer('power');
          $table->integer('apcons');
          $table->unsignedInteger('attribute_id');
          $table->integer('targettype');
          $table->integer('hits');
          $table->integer('critical');
          $table->string('detail')->nullable();
          $table->timestamps();
      });
      Schema::create('res_wek_construct', function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->increments('rwc_id');
          $table->unsignedInteger('tribe_id');
          $table->unsignedInteger('null_id');
          $table->unsignedInteger('fire_id');
          $table->unsignedInteger('water_id');
          $table->unsignedInteger('electric_id');
          $table->unsignedInteger('nature_id');
          $table->unsignedInteger('light_id');
          $table->unsignedInteger('dark_id');
          $table->unsignedInteger('stun_id');
          $table->unsignedInteger('skilllock_id');
          $table->unsignedInteger('sleep_id');
          $table->unsignedInteger('paralize_id');
          $table->unsignedInteger('confuse_id');
          $table->unsignedInteger('poison_id');
          $table->unsignedInteger('death_id');
          $table->timestamps();
      });
      Schema::create('res_wek_data', function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->increments('rwd_id');
          $table->string('data_name');
          $table->string('pic_data')->nullable();
          $table->timestamps();
      });

      //Add Foreign Key
      Schema::enableForeignKeyConstraints();

      Schema::table('digimon',function (Blueprint $table){
        $table->foreign('tribe_id')->references('tribe_id')->on('tribe');
        //$table->foreign('id_permohonan')->references('id_permohonan')->on('permohonan_p')->onDelete('cascade')->onUpdate('cascade');
      });

      Schema::table('digivolve',function (Blueprint $table){
         $table->foreign('digimon_id')->references('digimon_id')->on('digimon')->onDelete('cascade')->onUpdate('cascade');
         $table->foreign('digimon_d_id')->references('digimon_id')->on('digimon');
      });

      Schema::table('stat',function (Blueprint $table){
         $table->foreign('digimon_id')->references('digimon_id')->on('digimon')->onDelete('cascade')->onUpdate('cascade');
      });

      Schema::table('dnaskill',function (Blueprint $table){
         $table->foreign('digimon_id')->references('digimon_id')->on('digimon')->onDelete('cascade')->onUpdate('cascade');
      });

      Schema::table('res_wek_construct',function (Blueprint $table){
         $table->foreign('tribe_id')->references('tribe_id')->on('tribe')->onDelete('cascade')->onUpdate('cascade');
         $table->foreign('null_id')->references('rwd_id')->on('res_wek_data');
         $table->foreign('fire_id')->references('rwd_id')->on('res_wek_data');
         $table->foreign('water_id')->references('rwd_id')->on('res_wek_data');
         $table->foreign('electric_id')->references('rwd_id')->on('res_wek_data');
         $table->foreign('nature_id')->references('rwd_id')->on('res_wek_data');
         $table->foreign('light_id')->references('rwd_id')->on('res_wek_data');
         $table->foreign('dark_id')->references('rwd_id')->on('res_wek_data');
         $table->foreign('stun_id')->references('rwd_id')->on('res_wek_data');
         $table->foreign('skilllock_id')->references('rwd_id')->on('res_wek_data');
         $table->foreign('sleep_id')->references('rwd_id')->on('res_wek_data');
         $table->foreign('paralize_id')->references('rwd_id')->on('res_wek_data');
         $table->foreign('confuse_id')->references('rwd_id')->on('res_wek_data');
         $table->foreign('poison_id')->references('rwd_id')->on('res_wek_data');
         $table->foreign('death_id')->references('rwd_id')->on('res_wek_data');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('digimon');
      Schema::dropIfExists('digivolve');
      Schema::dropIfExists('stat');
      Schema::dropIfExists('tribe');
      Schema::dropIfExists('dnaskill');
      Schema::dropIfExists('res_wek_construct');
      Schema::dropIfExists('res_wek_data');
    }
}
