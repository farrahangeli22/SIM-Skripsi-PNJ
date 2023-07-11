<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserRole;
use App\Models\Dosen;
use App\Models\Mahasiswa;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $user1 = User::create([
            'username' => 'nip1',
            'password' => 'nip1',
            'email' => 'admin1@gmail.com',
            'nama' => 'Ayres Pradiptyas, S.S.T., M.M',
            ]);

            //buat penentuan role
            UserRole::create(
                [
                    'user_id' => $user1->id,
                    'role_id' => 1
                ]
            );

            //buat data dosen
            Dosen::create(
                [
                    'nip' => $user1->username,
                    'user_id' => $user1->id,
                    'nama' => $user1->nama,
                    'email' => $user1->email,
                ]
        );

        $user2 = User::create([
            'username' => 'nip2',
            'password' => 'nip2',
            'email' => 'dospem@gmail.com',
            'nama' => 'Eriya S.Kom., M.T.',
            ]);

            UserRole::create(
                [
                    'user_id' => $user2->id,
                    'role_id' => 2
                ]
            );

            //buat data dosen
            Dosen::create(
                [
                    'nip' => $user2->username,
                    'user_id' => $user2->id,
                    'nama' => $user2->nama,
                    'email' => $user2->email,
                ]
        );

        $user3 = User::create([
            'username' => '1907411012',
            'password' => '123456',
            'email' => 'farrah@gmail.com',
            'nama' => 'Farrah Dillah Angeli',
            ]);

            UserRole::create(
                [
                    'user_id' => $user3->id,
                    'role_id' => 4
                ]
            );

            //buat data mahasiswa
            Mahasiswa::create(
                [
                    'nim' => $user3->username,
                    'user_id' => $user3->id,
                    'status_id' => 6,
                    'nama' => $user3->nama,
                    'prodi' => 'Teknik Informatika',
                    'kelas' => 'TI 8A',
                    'email' => $user3->email,
                ]
        );

        $user4 = User::create([
            'username' => '1907411032',
            'password' => '123456',
            'email' => 'arin@gmail.com',
            'nama' => 'Niyara Arinda',
            ]);

            UserRole::create(
                [
                    'user_id' => $user4->id,
                    'role_id' => 4
                ]
            );

            //buat data mahasiswa
            Mahasiswa::create(
                [
                    'nim' => $user4->username,
                    'user_id' => $user4->id,
                    'status_id' => 8,
                    'nama' => $user4->nama,
                    'prodi' => 'Teknik Informatika',
                    'kelas' => 'TI 8A',
                    'email' => $user4->email,
                ]
        );

        $user5 = User::create([
            'username' => 'nip3',
            'password' => 'nip3',
            'email' => 'kps@gmail.com',
            'nama' => 'Asep Taufik Muharram, S.Kom., M.Kom.',
            ]);

            UserRole::create(
                [
                    'user_id' => $user5->id,
                    'role_id' => 3
                ]
            );

            //jika memiliki lebih dari 1 role, create userRole 
            UserRole::create(
                [
                    'user_id' => $user5->id,
                    'role_id' => 2
                ]
            );

            //buat data dosen
            Dosen::create(
                [
                    'nip' => $user5->username,
                    'user_id' => $user5->id,
                    'nama' => $user5->nama,
                    'email' => $user5->email,
                ]
            );
        

    }
}
