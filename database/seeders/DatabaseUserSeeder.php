<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate(['id' => 1], [
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => '$2y$10$EE0dFeHOO8tnDper/UNa0.EYUqEkZ/2XLtiJwD/eqqRtkeKQzHbV6' // hash = password
        ]);
    }
}
