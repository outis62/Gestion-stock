<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // User::factory()->count(4)->create();

        $admin_accounts = [
            [
                'nom' => 'ZABRE',
                'prenom' => 'Boureima',
                'statut' => 1,
                'adresse' => 'Koudougou',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
                'role' => 'handler-admin',
                'email_verified_at' => now(),
            ],
            [
                'nom' => 'KABORE',
                'prenom' => 'Haoua',
                'statut' => 1,
                'adresse' => 'Ouagadougou',
                'email' => 'secretaire@secretaire.com',
                'password' => bcrypt('password'),
                'role' => 'handler-op',
                'email_verified_at' => now(),
            ],
        ];

        foreach ($admin_accounts as $admin_account) {
            User::create($admin_account);
        }
    }
}
