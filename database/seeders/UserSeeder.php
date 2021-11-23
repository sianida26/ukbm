<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userNames = [
            [
                'name' => 'guru',
                'username' => 'guru',
                'password' => 'StdPwdGuru2021',
                'roles' => ['guru'],
            ],
            [
                'name' => 'siswa',
                'username' => 'siswa',
                'password' => 'StdPwdSiswa2021',
                'roles' => ['siswa'],
            ],
        ];

        collect($userNames)->map(function($name){

            $user = User::firstWhere('username',$name['username']);
            if ($user == null){
                $user = User::create([
                    'name' => $name['name'],
                    'username' => $name['username'],
                    'password' => Hash::make($name['password']),
                    // 'is_active' => true,
                ]);
                $user->syncRoles($name['roles']);
            }
        });
    }
}
