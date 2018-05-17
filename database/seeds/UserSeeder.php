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
            'password' => $userPass,
            'tanggal_lahir' => '1997-08-17',
            'tipe_user' => 1
        ];

        User::create($params);

        $userPass = bcrypt('user5324');
        $params = [ 'name' => 'User5',
            'email' => 'user5@gmail.com',
            'alamat' => 'ITS',
            'password' => $userPass,
            'tanggal_lahir' => '1997-08-17',
            'tipe_user' => 0
        ];
        User::create($params);

        $userPass = bcrypt('user7324');
        $params = [ 'name' => 'User7',
            'email' => 'user7@gmail.com',
            'alamat' => 'ITS',
            'password' => $userPass,
            'tanggal_lahir' => '1997-08-17',
            'tipe_user' => 0
        ];
        User::create($params);

        $userPass = bcrypt('user8324');
        $params = [ 'name' => 'User8',
            'email' => 'user8@gmail.com',
            'alamat' => 'ITS',
            'password' => $userPass,
            'tanggal_lahir' => '1997-08-17',
            'tipe_user' => 1
        ];
        User::create($params);

        $userPass = bcrypt('user11324');
        $params = [ 'name' => 'User11',
            'email' => 'user11@gmail.com',
            'alamat' => 'ITS',
            'password' => $userPass,
            'tanggal_lahir' => '1997-08-17',
            'tipe_user' => 1
        ];
        User::create($params);

        $userPass = bcrypt('user13324');
        $params = [ 'name' => 'User13',
            'email' => 'user13@gmail.com',
            'alamat' => 'ITS',
            'password' => $userPass,
            'tanggal_lahir' => '1997-08-17',
            'tipe_user' => 1
        ];
        User::create($params);
    }
}
