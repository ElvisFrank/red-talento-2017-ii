<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Elvis Frank',
            'last_name' => 'Dominguez Vidal',
            'email' => 'kenq@admin.com',
            'password' => bcrypt('1234'),
            'type' => 'admin',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
        ]);

        DB::table('users')->insert([
            'name' => 'Alirio',
            'last_name' => 'Suarez',
            'email' => 'AlirioSuarez@email.com',
            'password' => bcrypt('1234'),
            'type' => 'member',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
        ]);

        DB::table('users')->insert([
            'name' => 'Alejandro',
            'last_name' => 'Jimenez',
            'email' => 'AlejandroJimenez@email.com',
            'password' => bcrypt('1234'),
            'type' => 'member',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
        ]);
        DB::table('users')->insert([
            'name' => 'Marianela',
            'last_name' => 'Cordero',
            'email' => 'MarianelaCordero@email.com',
            'password' => bcrypt('1234'),
            'type' => 'member',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
        ]);
    }
}
