<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ComplaintImages;
use App\Models\Complaints;
use Illuminate\Database\Seeder;
use App\Models\{User, Rates};
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => "Super Admin",
            'userType' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);
        
        Complaints::factory(50)->has(ComplaintImages::factory(), 'image')->create();
        Rates::factory(50)->create();
    }
}
