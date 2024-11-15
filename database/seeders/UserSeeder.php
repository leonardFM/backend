<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seeder untuk tabel users
        for ($i = 1; $i <= 20; $i++) {
            DB::table('users')->insert([
                [
                    'parent_id' => null,
                    'name' => 'User ' . $i,
                    'email' => 'user' . $i . '@example.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('password123'), // Hash password
                    'status' => 'active',
                    'rt' => rand(1, 5), // Menggunakan angka acak untuk RT
                    'rw' => rand(1, 5), // Menggunakan angka acak untuk RW
                    'alamat' => 'Alamat Jalan ' . $i,
                    'phone' => '081234567' . str_pad($i, 2, '0', STR_PAD_LEFT),
                    'role' => ($i % 2 === 0) ? 'admin' : 'warga', // Setiap pengguna genap adalah admin
                    'nik' => '12345678901234' . $i,
                    'tanggal_lahir' => date('Y-m-d', strtotime('-' . (rand(18, 60) * 365) . ' days')), // Usia acak
                    'jenis_kelamin' => ($i % 2 === 0) ? 'perempuan' : 'laki-laki',
                    'tanggal_masuk' => now(),
                    'aktif' => true,
                    'emergency_contact' => '081234567' . str_pad($i + 1, 2, '0', STR_PAD_LEFT),
                    'foto_profil' => null,
                    'remember_token' => Str::random(10),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
        }

        // Seeder untuk tabel password_reset_tokens
        for ($i = 1; $i <= 20; $i++) {
            DB::table('password_reset_tokens')->insert([
                [
                    'email' => 'user' . $i . '@example.com',
                    'token' => Str::random(60),
                    'created_at' => now(),
                ],
            ]);
        }

        // Seeder untuk tabel sessions
        for ($i = 1; $i <= 20; $i++) {
            DB::table('sessions')->insert([
                [
                    'id' => Str::random(40),
                    'user_id' => $i, // ID user yang sesuai
                    'ip_address' => '192.168.1.' . rand(1, 255),
                    'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36',
                    'payload' => serialize([]), // Sesuaikan dengan payload yang Anda inginkan
                    'last_activity' => time(),
                ],
            ]);
        }
    }
}
