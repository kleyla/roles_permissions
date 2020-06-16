<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $editor = User::create([
            'name' => 'editor',
            'email' => 'editor@gmail.com',
            'password' => bcrypt('123123'),
        ]);
        $editor->assignRole('editor');

        $moderador = User::create([
            'name' => 'moderador',
            'email' => 'moderador@gmail.com',
            'password' => bcrypt('123123'),
        ]);
        $moderador->assignRole('moderador');

        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123123'),
        ]);
        $admin->assignRole('super-admin');
    }
}
