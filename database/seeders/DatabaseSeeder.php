<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'name' => 'Administator',
            'email' => 'admin@mail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
        ]);

        $this->call([
            ProjectCategorySeeder::class,
            DocumentCategorySeeder::class,
            ArticleCategorySeeder::class,
        ]);
    }
}
