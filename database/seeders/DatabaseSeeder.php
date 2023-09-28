<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    use HasRoles;
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'admin@admin.com',
            'password' => Hash::make('156354111')
        ])->assignRole('admin');
    }
}
