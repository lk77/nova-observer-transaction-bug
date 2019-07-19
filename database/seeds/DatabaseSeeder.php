<?php

use App\Test;
use App\User;
use Illuminate\Database\Seeder;
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
        factory(Test::class, 10)->create();

        User::updateOrCreate(['email' => 'test@test.com'], [
            'name' => 'test',
            'password' => Hash::make('test')
        ]);
    }
}
