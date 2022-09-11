<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
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
        User::factory()
            ->count(5)
            ->state(new Sequence(
                function ($sequence) {
                    return [
                        'role_id' => Role::all()->random()
                    ];
                },
            ))
            ->create();
    }
}
