<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            ModelHasRolesSeeder::class,
            PermissionSeeder::class,
            RoleHasPermissionSeeder::class,
            EstadoSeeder::class,
            CidadeSeeder::class,
            UserSeeder::class,
            NiveisAcessoSeeder::class,
        ]);

        // Popula o banco com dados de teste
        if (App::environment(['local', 'development'])) {
            $this->call(TestSeeder::class);
        }

    }
}
