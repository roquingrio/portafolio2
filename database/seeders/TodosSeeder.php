<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
 




class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $useradmin=User::create([ 
            'name' => 'Administrador', 
            'email' => 'admin@gmail.com', 
            'password' => Hash::make('admin'), 
            'tipo' => '1', 
        ])->assignRole('Admin');

        $user1=User::create([ 
            'name' => 'Usuario', 
            'email' => 'user@gmail.com', 
            'password' => Hash::make('user'), 
            'tipo' => '2', 
        ])->assignRole('Usuario'); 
        $user1=User::create([ 
            'name' => 'usuario Moderador', 
            'email' => 'moderador@gmail.com', 
            'password' => Hash::make('admin'), 
            'tipo' => '3', 
        ]);
        
    }
}
