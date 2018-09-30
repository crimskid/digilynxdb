<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        //res_wek_data data insert
        DB::table('res_wek_data')->insert(['data_name' => 'n_null','pic_data' => 'aktif']);
        DB::table('res_wek_data')->insert(['data_name' => 'r_null','pic_data' => 'aktif']);
        DB::table('res_wek_data')->insert(['data_name' => 'w_null','pic_data' => 'aktif']);
        DB::table('res_wek_data')->insert(['data_name' => 'n_fire','pic_data' => 'aktif']);
        DB::table('res_wek_data')->insert(['data_name' => 'r_fire','pic_data' => 'aktif']);
        DB::table('res_wek_data')->insert(['data_name' => 'w_fire','pic_data' => 'aktif']);
        DB::table('res_wek_data')->insert(['data_name' => 'n_water','pic_data' => 'aktif']);
        DB::table('res_wek_data')->insert(['data_name' => 'r_water','pic_data' => 'aktif']);
        DB::table('res_wek_data')->insert(['data_name' => 'w_water','pic_data' => 'aktif']);
        DB::table('res_wek_data')->insert(['data_name' => 'n_electric','pic_data' => 'aktif']);
        DB::table('res_wek_data')->insert(['data_name' => 'r_electric','pic_data' => 'aktif']);
        DB::table('res_wek_data')->insert(['data_name' => 'w_electric','pic_data' => 'aktif']);
        DB::table('res_wek_data')->insert(['data_name' => 'n_nature','pic_data' => 'aktif']);
        DB::table('res_wek_data')->insert(['data_name' => 'r_nature','pic_data' => 'aktif']);
        DB::table('res_wek_data')->insert(['data_name' => 'w_nature','pic_data' => 'aktif']);
        DB::table('res_wek_data')->insert(['data_name' => 'n_light','pic_data' => 'aktif']);
        DB::table('res_wek_data')->insert(['data_name' => 'r_light','pic_data' => 'aktif']);
        DB::table('res_wek_data')->insert(['data_name' => 'w_light','pic_data' => 'aktif']);
        DB::table('res_wek_data')->insert(['data_name' => 'n_dark','pic_data' => 'aktif']);
        DB::table('res_wek_data')->insert(['data_name' => 'r_dark','pic_data' => 'aktif']);
        DB::table('res_wek_data')->insert(['data_name' => 'w_dark','pic_data' => 'aktif']);

        DB::table('res_wek_data')->insert(['data_name' => 'n_stun','pic_data' => 'aktif']);
        DB::table('res_wek_data')->insert(['data_name' => 'r_stun','pic_data' => 'aktif']);
        DB::table('res_wek_data')->insert(['data_name' => 'w_stun','pic_data' => 'aktif']);
        DB::table('res_wek_data')->insert(['data_name' => 'n_skilllock','pic_data' => 'aktif']);
        DB::table('res_wek_data')->insert(['data_name' => 'r_skilllock','pic_data' => 'aktif']);
        DB::table('res_wek_data')->insert(['data_name' => 'w_skilllock','pic_data' => 'aktif']);
        DB::table('res_wek_data')->insert(['data_name' => 'n_sleep','pic_data' => 'aktif']);
        DB::table('res_wek_data')->insert(['data_name' => 'r_sleep','pic_data' => 'aktif']);
        DB::table('res_wek_data')->insert(['data_name' => 'w_sleep','pic_data' => 'aktif']);
        DB::table('res_wek_data')->insert(['data_name' => 'n_paralize','pic_data' => 'aktif']);
        DB::table('res_wek_data')->insert(['data_name' => 'r_paralize','pic_data' => 'aktif']);
        DB::table('res_wek_data')->insert(['data_name' => 'w_paralize','pic_data' => 'aktif']);
        DB::table('res_wek_data')->insert(['data_name' => 'n_confuse','pic_data' => 'aktif']);
        DB::table('res_wek_data')->insert(['data_name' => 'r_confuse','pic_data' => 'aktif']);
        DB::table('res_wek_data')->insert(['data_name' => 'w_confuse','pic_data' => 'aktif']);
        DB::table('res_wek_data')->insert(['data_name' => 'n_poison','pic_data' => 'aktif']);
        DB::table('res_wek_data')->insert(['data_name' => 'r_poison','pic_data' => 'aktif']);
        DB::table('res_wek_data')->insert(['data_name' => 'w_posion','pic_data' => 'aktif']);
        DB::table('res_wek_data')->insert(['data_name' => 'n_death','pic_data' => 'aktif']);
        DB::table('res_wek_data')->insert(['data_name' => 'r_death','pic_data' => 'aktif']);
        DB::table('res_wek_data')->insert(['data_name' => 'w_death','pic_data' => 'aktif']);
    }
}
