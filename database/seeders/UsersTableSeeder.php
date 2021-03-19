<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate(['id'=>1],
        ['name'=>'admin',
        'email'=>'admin@a.a',
        'password'=>'$2y$10$P20ocz73ONqHU8a4GwYzNeo7cb/rn78RwEnP6PCGJkQUpJ9.4lzvC'] // password
    );
    }
}
