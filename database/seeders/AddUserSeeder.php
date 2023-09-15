<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AddUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = new \App\Models\User;
      $user -> username = "kusnadi76";
      $user -> name = "kusnadi";
      $user -> email = "kusnadi@gmail.com";      
      $user -> password = \Hash::make('12345');
      $user ->level = "admin";
      $user->save();
       $this->command->info("user telah dibuat");

       $user = new \App\Models\User;
       $user -> username = "Rasyad23";
       $user -> name = "rasyad";
       $user -> email = "rasyad@gmail.com";      
       $user -> password = \Hash::make('12345');
       $user ->level = "staff";
       $user->save();
       $this->command->info("user telah dibuat");


       $user = new \App\Models\User;
       $user -> username = "yassin65";
       $user -> name = "yassin";
       $user -> email = "yassin@gmail.com";      
       $user -> password = \Hash::make('12345');
       $user ->level = "staff";
       $user->save();
       $this->command->info("user telah dibuat");

    }
}
