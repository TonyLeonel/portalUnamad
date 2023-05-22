<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_id = DB::table('users')->insertGetId([
            'dni' => '45233160',
            'nombre' => 'JOSE',
            'apaterno' => 'CORTIJO',
            'amaterno' => 'BELLIDO',            
            'email' => 'josecortijo2000@hotmail.com',
            'password' => bcrypt('dedosacuatro'),
            'telefono' => '45233160',  
            'direccion' => 'Av. 15 de agosto',
            'tipo' => 1,  
            'estado' => 1  
        ]);
    }
}
