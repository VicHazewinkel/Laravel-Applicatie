<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
// maken van 10 random users 
         \App\Models\User::factory(10)->create();

// maken van een admin user 
         \App\Models\User::factory()->create([
             'name' => 'admin',
             'email' => 'admin@ehb.be',
             // 'password' => '123456',
             // paswoord: password
             'is_admin' => 1,
         ]);

         $item = new \App\Models\Item;                      // voor gemaakt item
         $item->name ='Pastel Acrylic Green';
         $item->description = 'Acrylic (Pastel) - Pastel Green';
         $item->price = '14.95';
         $item->stock = '10';
         $item->save();

         $item = new \App\Models\Item;                      // voor gemaakt item
         $item->name ='Pastel Acrylic Peach';
         $item->description = 'Acrylic (Pastel) - Pastel Peach';
         $item->price = '14.95';
         $item->stock = '10';
         $item->save();

         $item = new \App\Models\Item;                      // voor gemaakt item
         $item->name ='SUNLU PLA Filament';
         $item->description = 'SUNLU PLA Filament 1.75mm, Dimensional Accuracy +/- 0.02 mm, 1 kg Spool, 1.75mm, PLA Black';
         $item->price = '27.99';
         $item->stock = '10';
         $item->save();

        //  $user = new \App\Models\User;
        //  $user->name = '';
        //  $user->save();
    }
}
