<?php

class UsersTableSeeder extends Seeder {
    public function run()
    {
        $user = new User();
        $user->email = 'admin@codeup.com';
        $user->password = Hash::make($_ENV['SEED_USER_PASSWORD']);
        $user->username = 'admin';
        $user->image_path = 'img/admin.jpg';
        $user->first_name = 'testfirst';
        $user->last_name = 'testlast';
        $user->save();
    }
}