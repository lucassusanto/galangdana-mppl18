<?php

use Illuminate\Database\Seeder;
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
        $adminPass = bcrypt('admin123');

        $params = [ 'name' => 'admin',
            'email' => 'admin@mail.com',
            'alamat' => 'ITS',
            'password' => $adminPass,
            'tanggal_lahir' => '1997-08-17',
            'tipe_user' => 2
        ];

        User::create($params);

//        user
        $userPass = bcrypt('user123');

        $params = [ 'name' => 'Andi',
            'email' => 'andi@mail.com',
            'alamat' => 'ITS',
            'password' => $adminPass,
            'tanggal_lahir' => '1997-08-17',
            'tipe_user' => 1
        ];

        User::create($params);
    }
}
