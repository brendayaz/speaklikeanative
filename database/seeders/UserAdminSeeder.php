<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'admin', 'email' => 'admin@speaklikeanative.org', 'password' => bcrypt('cloud!@#$'), 'remember_token' => '',],
            ['id' => 2, 'name' => 'admin', 'email' => 'teacher@speaklikeanative.org', 'password' => bcrypt('cloud!@#$'), 'remember_token' => '',],
            ['id' => 3, 'name' => 'admin', 'email' => 'student@speaklikeanative.org', 'password' => bcrypt('cloud!@#$'), 'remember_token' => '',],

        ];

        foreach ($items as $item) {
            User::create($item);
        }
    }
}
