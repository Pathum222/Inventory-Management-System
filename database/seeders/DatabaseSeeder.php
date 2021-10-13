<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       Role::create(["name"=>'Owner']);
       Role::create(["name"=>'Manager']);
       Role::create(["name"=>'Cashier']); // \App\Models\User::factory(10)->create();
    }
}
