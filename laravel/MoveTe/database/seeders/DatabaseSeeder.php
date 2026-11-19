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

        Event::create([
            'title' => 'Meia Maratona do Lis',
            'description' => 'Prova competitiva de 21.00 km ao longo das margens do rio Lis.',
            'date' => '2027-01-17',
            'hour' => '09:30:00',
            'local' => 'Jardim Luís de Camões, Leiria',
            'distance' => 21.00,
        ]);

        Event::create([
            'title' => 'Trail dos Castelos',
            'description' => 'Percurso de corrida em trilhos naturais com subida ao Castelo de Leiria.',
            'date' => '2027-02-07',
            'hour' => '08:30:00',
            'local' => 'Castelo de Leiria',
            'distance' => 15.00,
        ]);

        Event::create([
            'title' => 'Corrida dos Namorados MoveTe',
            'description' => 'Corrida temática de 5 km para participar a pares ou individualmente.',
            'date' => '2027-02-14',
            'hour' => '10:00:00',
            'local' => 'Praça Rodrigues Lobo, Leiria',
            'distance' => 5.00,
        ]);

        Event::create([
            'title' => 'Desafio 30 Dias: Prova Final 5K',
            'description' => 'Corrida de encerramento do desafio mensal destinada a iniciantes.',
            'date' => '2027-03-06',
            'hour' => '09:00:00',
            'local' => 'Percurso Polis, Leiria',
            'distance' => 5.00,
        ]);

        Event::create([
            'title' => 'Caminhada da Primavera na Mata Nacional',
            'description' => 'Caminhada ecológica pelos trilhos da Mata Nacional de Leiria.',
            'date' => '2027-03-21',
            'hour' => '09:30:00',
            'local' => 'São Pedro de Moel, Marinha Grande',
            'distance' => 8.00,
        ]);

        Event::create([
            'title' => 'Corrida das Pontes',
            'description' => 'Trajeto rápido e plano de 12 km atravessando as principais pontes da cidade.',
            'date' => '2027-04-11',
            'hour' => '09:00:00',
            'local' => 'Parque Tenente Coronel Jaime Filipe da Fonseca, Leiria',
            'distance' => 12.00,
        ]);

        Event::create([
            'title' => 'Trail Noturno da Senhora do Monte',
            'description' => 'Aventura noturna em trilhos florestais com uso obrigatório de frontal.',
            'date' => '2027-05-08',
            'hour' => '21:00:00',
            'local' => 'Santuário de Nossa Senhora do Monte, Cortes',
            'distance' => 14.00,
        ]);

        Event::create([
            'title' => 'Corrida Atlântica de Verão',
            'description' => 'Corrida junto à costa atlântica com vista para o mar.',
            'date' => '2027-06-13',
            'hour' => '08:45:00',
            'local' => 'Marginal da Praia do Pedrógão',
            'distance' => 10.00,
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

        Participation::create([
            'user_id'  => 1,
            'event_id' => 3,
            'date'     => '2026-12-01',
        ]);

        Participation::create([
            'user_id'  => 1,
            'event_id' => 4,
            'date'     => '2026-12-10',
        ]);

        Participation::create([
            'user_id'  => 1,
            'event_id' => 5,
            'date'     => '2027-01-05',
        ]);

        Participation::create([
            'user_id'  => 1,
            'event_id' => 6,
            'date'     => '2027-01-20',
        ]);

        Participation::create([
            'user_id'  => 1,
            'event_id' => 7,
            'date'     => '2027-02-12',
        ]);

        Participation::create([
            'user_id'  => 1,
            'event_id' => 8,
            'date'     => '2027-03-01',
        ]);

        Participation::create([
            'user_id'  => 1,
            'event_id' => 9,
            'date'     => '2027-03-18',
        ]);

        Participation::create([
            'user_id'  => 1,
            'event_id' => 10,
            'date'     => '2027-04-25',
        ]);
    }
}
