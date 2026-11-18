<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Participation;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->command->info('A criar eventos...');

        Event::create([
            'title' => 'Corrida Noturna de Leiria',
            'description' => 'Percurso urbano de 10 km pelo centro da cidade.',
            'date' => '2026-12-15',
            'hour' => '20:00:00',
            'local' => 'Estádio Municipal de Leiria',
            'distance' => 10.00,
        ]);

        Event::create([
            'title' => 'Caminhada Solidária de Leiria',
            'description' => "Caminhada aberta a toda a comunidade pelo parque da cidade.",
            'date' => '2026-12-20',
            'hour' => '09:00:00',
            'local' => 'Parque do Avião, Leiria',
            'distance' => 6.00,
        ]);

        $this->command->info('A criar participações...');

        Participation::create([
            'user_id' => 1,
            'event_id' => 1,
            'date' => '2026-12-15',
        ]);

        Participation::create([
            'user_id'  => 1,
            'event_id' => 2,
            'date'     => '2026-11-18',
        ]);
    }
}
