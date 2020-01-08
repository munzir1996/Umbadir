<?php

use App\User;
use App\Setting;
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
        factory(User::class)->create([
            'email' => 'admin@admin.com',
            'name' => 'admin',
        ]);
        // $this->call(UsersTableSeeder::class);
        factory(Setting::class, 1)->create();

    }
}
