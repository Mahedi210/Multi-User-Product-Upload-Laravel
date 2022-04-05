<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'mahedi@gmail.com')->first();
        if (is_null($user)) {
            $user = new User();
            $user->name = "Mahedi Hasan";
            $user->email = "mahedi@gmail.com";
            $user->password =Hash::make('12345678');
            $user->birth_date =date("2017-06-15");
            $user->city = "Dhaka";
            $user->country = "Bangladesh";
            $user->phone ="01744859191";
            $user->save();
        }
    }

}
