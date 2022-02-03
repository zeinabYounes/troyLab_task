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
      Eloquent::unguard();
      $this->call(SchoolSeeder::class);
      $this->call(OrderSeeder::class);
      $this->call(StudentSeeder::class);
        // $this->call(UsersTableSeeder::class);
        Eloquent::reguard();
    }
}
