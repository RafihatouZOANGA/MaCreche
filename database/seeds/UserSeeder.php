<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('users')->truncate();
        User::create([
            'name'=>'admin',
            'email'=>'rafiha@admin.com',
            'password'=> Hash::make('password'),
            'statut'=> 1,
        ]);
    }
}
