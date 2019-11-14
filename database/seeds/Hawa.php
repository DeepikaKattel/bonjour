<?php

use Illuminate\Database\Seeder;
use App\User;

class Hawa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = array(
            array(
                'name' =>'Bonjour',
                'email' =>'admin@gmail.com',
                'password' => Hash::make('123456'),
            )
        );
        foreach ($array as $user_data){
            $user = User::where('email', $user_data['email'])->first();
            if (!$user){
                $user = new User();
            }
            $user->fill($user_data);
            $user->save();
        }
    }
}
