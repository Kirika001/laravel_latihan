<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (! Role::where('name', 'pengguna')->first()) {
            Role::create([
                'name' => 'pengguna',
            ]);
            Role::create([
                'name' => 'pakar',
            ]);
        }
    }
}
