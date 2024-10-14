<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // categoryのシーディング
        $this->call(CategoriesTableSeeder::class);
        Contact::factory(35)->create();
    }
}
