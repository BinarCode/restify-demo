<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Contact;
use App\Models\Organization;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'John Doe',
            'password' => Hash::make('secret!'),
            'email' => 'johndoe@example.com',
        ]);

        Organization::factory()
            ->has(Contact::factory()->count(2))
            ->count(25)->create();

        User::factory(15)->create();
    }
}
