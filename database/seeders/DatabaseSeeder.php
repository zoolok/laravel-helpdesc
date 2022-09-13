<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *  php artisan migrate:fresh --seed
     * @return void
     */
    public function run()
    {
       $this->call([
            RolesSeeder::class,
         /*   UserSeeder::class*/
        ]);
       /* Ticket::factory()->create();

        User::factory(1)->admin()->create();
        User::factory(5)
            ->client()
            ->has(Ticket::factory()->count(3))
            ->create();*/
    }
}
