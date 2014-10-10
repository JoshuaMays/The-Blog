<?php

class UsersTableSeeder extends Seeder {
    public function run()
    {
        DB::table('users')->truncate();
        
        $user = new User();
        $user->email = 'admin@codeup.com';
        $user->password = 'lololol';
        $user->save();
    }
}