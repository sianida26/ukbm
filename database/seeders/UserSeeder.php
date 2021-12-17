<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Kelas;

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
                'name' => 'Firda Amalia',
                'username' => 'firda',
                'password' => 'Oksigen8',
                'roles' => ['guru'],
            ],
            [
                'name' => 'Deni Ainur Rokhim, S.Pd.',
                'username' => 'deni.ainur',
                'password' => 'ukbm2021',
                'roles' => ['guru'],
            ],
            [
                'name' => 'Drs. Ridwan Joharmawan, M.Si.',
                'username' => 'ridwan.joharmawan',
                'password' => 'ukbm2021',
                'roles' => ['guru'],
            ],
            [
                'name' => 'Siswa 1',
                'username' => 'siswa1',
                'password' => 'passwordsiswa',
                'roles' => ['siswa'],
            ],
            [
                'name' => 'Siswa 2',
                'username' => 'siswa2',
                'password' => 'passwordsiswa',
                'roles' => ['siswa'],
            ],
            [
                'name' => 'Siswa 3',
                'username' => 'siswa3',
                'password' => 'passwordsiswa',
                'roles' => ['siswa'],
            ],
            [
                'name' => 'Siswa 4',
                'username' => 'siswa4',
                'password' => 'passwordsiswa',
                'roles' => ['siswa'],
            ],
            [
                'name' => 'Siswa 5',
                'username' => 'siswa5',
                'password' => 'passwordsiswa',
                'roles' => ['siswa'],
            ],
            [
                'name' => 'Siswa 6',
                'username' => 'siswa6',
                'password' => 'passwordsiswa',
                'roles' => ['siswa'],
            ],
            [
                'name' => 'Siswa 7',
                'username' => 'siswa7',
                'password' => 'passwordsiswa',
                'roles' => ['siswa'],
            ],
            [
                'name' => 'Siswa 8',
                'username' => 'siswa8',
                'password' => 'passwordsiswa',
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

                if ($user->hasRole('siswa')){
                    //associate siswa with random kelas
                    $kelas = Kelas::inRandomOrder()->first();
                    $user->siswa()->create([
                        'kelas_id' => $kelas->id,
                    ]);
                }
                    
            }
        });
    }
}
