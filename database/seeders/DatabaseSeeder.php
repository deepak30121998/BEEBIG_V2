<?php

namespace Database\Seeders;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $super_admin_role = Role::create(['name' => 'super-admin']);
        $super_admin = User::create([
            'name' => 'Super Admin',
            'email' => 'deepakchoudhary3012@gmail.com',
            'password' => bcrypt('s170022200245')
        ]);

        $super_admin->assignRole($super_admin_role);
    }
}
