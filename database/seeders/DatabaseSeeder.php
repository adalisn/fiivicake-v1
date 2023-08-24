<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Muhammad Ariiq Fiezayyan',
            'username' => 'afadmin',
            'role' => 'admin',
            'email' => 'ariiqfiezayyanadmin@gmail.com',
            'password' => bcrypt('admin')
        ]);
        
        User::create([
            'name' => 'Muhammad Ariiq Fiezayyan',
            'username' => 'afmember',
            'role' => 'member',
            'email' => 'ariiqfiezayyanmember@gmail.com',
            'password' => bcrypt('member')
                
        ]);
        
        User::create([
            'name' => 'Fivi Mosiaty',
            'username' => 'fmmember',
            'role' => 'member',
            'email' => 'fivimosiaty@gmail.com',
            'password' => bcrypt('member')
                
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $pcategory = new Category();
        $pcategory->name = 'Kue Kering';
        $pcategory->slug = Str::slug($pcategory->name);
        $pcategory->save();
        
        $pcategory = new Category();
        $pcategory->name = 'Kue Basah';
        $pcategory->slug = Str::slug($pcategory->name);
        $pcategory->save();
        
        $pcategory = new Category();
        $pcategory->name = 'Gorengan';
        $pcategory->slug = Str::slug($pcategory->name);
        $pcategory->save();
        
        $pcategory = new Category();
        $pcategory->name = 'Roti';
        $pcategory->slug = Str::slug($pcategory->name);
        $pcategory->save();

        $this->call(ProductSeeder::class);
    }
}