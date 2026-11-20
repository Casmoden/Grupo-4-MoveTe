<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Challenge;
use App\Models\Recipe;
use App\Models\News;
use App\Models\Sponsorship;
use App\Models\Partner;
use App\Models\Sponsor;
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

        $this->command->info('A criar utilizadores...');

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        User::factory()->create([
            'name' => 'user2',
            'email' => 'user2@example.com',
        ]);

        User::factory()->create([
            'name' => 'user3',
            'email' => 'user3@example.com',
        ]);

        User::factory()->create([
            'name' => 'user4',
            'email' => 'user4@example.com',
        ]);

        User::factory()->create([
            'name' => 'user5',
            'email' => 'user5@example.com',
        ]);

        User::factory()->create([
            'name' => 'user6',
            'email' => 'user6@example.com',
        ]);

        User::factory()->create([
            'name' => 'user7',
            'email' => 'user7@example.com',
        ]);

        User::factory()->create([
            'name' => 'user8',
            'email' => 'user8@example.com',
        ]);

        User::factory()->create([
            'name' => 'user9',
            'email' => 'user9@example.com',
        ]);

        User::factory()->create([
            'name' => 'user10',
            'email' => 'user10@example.com',
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

        $this->command->info('A criar desafios...');

        Challenge::create([
            'name' => 'O Primeiro Passo: 15 Minutos de Liberdade',
            'todo' => '2.ª feira: 15 min de caminhada suave no bairro. 4.ª feira: 15 min num parque ou zona verde. Sábado: 20 min de caminhada com música ou podcast.',
            'category' => 'caminhada',
            'difficulty' => 'fácil',
            'description' => 'Ideal para iniciantes saírem do sedentarismo sem pressas nem esforço excessivo, criando uma rotina semanal simples.',
            'duration' => '7 Dias',
        ]);

        Challenge::create([
            'name' => 'A Rota dos 5.000 Passos',
            'todo' => 'Atingir pelo menos 5.000 passos diários em caminhadas ou deslocações a pé durante 5 dias seguidos.',
            'category' => 'caminhada',
            'difficulty' => 'fácil',
            'description' => 'Ajuda a ativar a circulação e a quebrar longos períodos sentado ao longo do dia.',
            'duration' => '5 Dias',
        ]);

        Challenge::create([
            'name' => 'O Despertar do Corpo',
            'todo' => 'Dedicar 6 a 8 minutos por manhã a rotações articulares suaves, alongamentos de cadeia posterior e mobilidade de anca e ombros.',
            'category' => 'mobilidade',
            'difficulty' => 'fácil',
            'description' => 'Reduz a rigidez matinal e prepara as articulações para o dia a dia ou para sessões de treino.',
            'duration' => '7 Dias',
        ]);

        Challenge::create([
            'name' => 'Caminhada à Beira-Rio em Família',
            'todo' => 'Realizar 3 caminhadas de 30 a 40 minutos em ritmo de conversa (sem ficar sem fôlego) em percursos planos.',
            'category' => 'caminhada',
            'difficulty' => 'fácil',
            'description' => 'Promove o convívio ao ar livre e a aplicação da regra da conversa durante o exercício.',
            'duration' => '10 Dias',
        ]);

        Challenge::create([
            'name' => 'Método CaCo: Primeiros Trotes',
            'todo' => 'Alternar 2 minutos de caminhada rápida com 30 segundos de trote muito leve (repetir 6 vezes), 3 vezes por semana.',
            'category' => 'corrida',
            'difficulty' => 'médio',
            'description' => 'Introduz a corrida de forma progressiva para fortalecer o sistema cardiorrespiratório e reduzir o risco de lesões.',
            'duration' => '14 Dias',
        ]);

        Challenge::create([
            'name' => 'Começar o Dia Bem',
            'todo' => 'Logo de manhã, iniciar com 2 minutos de caminhada de aquecimento e seguir com 15 a 20 minutos de trote leve contínuo, 4 vezes por semana.',
            'category' => 'corrida',
            'difficulty' => 'médio',
            'description' => 'Ajuda a ganhar energia matinal, foco mental e regularidade na corrida.',
            'duration' => '7 Dias',
        ]);

        Challenge::create([
            'name' => 'Mobilidade Pós-Caminhada e Corrida',
            'todo' => 'Após cada treino ou caminhada, realizar 10 minutos de mobilidade de tornozelos, gémeos, quadríceps e zona lombar.',
            'category' => 'mobilidade',
            'difficulty' => 'fácil',
            'description' => 'Melhora a amplitude articular e favorece a recuperação muscular após o esforço.',
            'duration' => '14 Dias',
        ]);

        Challenge::create([
            'name' => 'Ritmo Constante nos 3 km',
            'todo' => 'Completar 3 sessões semanais de corrida contínua de 3 km mantendo um ritmo confortável e controlado do início ao fim.',
            'category' => 'corrida',
            'difficulty' => 'médio',
            'description' => 'Focado na consistência e na gestão do ritmo antes de avançar para distâncias maiores.',
            'duration' => '14 Dias',
        ]);

        Challenge::create([
            'name' => 'Desbloqueio Articular e Postura',
            'todo' => 'Praticar 12 minutos diários de exercícios de mobilidade torácica, abertura peitoral e estabilidade do core.',
            'category' => 'mobilidade',
            'difficulty' => 'médio',
            'description' => 'Combate os efeitos da postura sentada prolongada e melhora a eficiência da passada.',
            'duration' => '10 Dias',
        ]);

        Challenge::create([
            'name' => 'Desafio 30 Dias: Do Zero aos 5 km',
            'todo' => 'Cumprir o plano progressivo de 4 semanas combinando caminhada, trote e corrida contínua até alcançar os 5 km.',
            'category' => 'corrida',
            'difficulty' => 'difícil',
            'description' => 'Plano estruturado de 30 dias pensado para quem quer conquistar os seus primeiros 5 km com segurança.',
            'duration' => '30 Dias',
        ]);

        $this->command->info('A criar receitas saudáveis...');

        Recipe::create([
            'name' => 'Batido de Banana e Aveia',
            'ingredients' => '1 banana madura, 2 colheres de sopa de flocos de aveia, 200 ml de leite ou bebida vegetal, 1 pitada de canela.',
            'duration' => '3 minutos',
        ]);

        Recipe::create([
            'name' => 'Tosta de Abacate com Ovo',
            'ingredients' => '1 fatia de pão integral, 1/2 abacate esmagado, 1 ovo cozido ou escalfado, pimenta preta e um fio de azeite.',
            'duration' => '5 minutos',
        ]);

        Recipe::create([
            'name' => 'Iogurte Grego com Frutos Vermelhos e Sementes',
            'ingredients' => '1 iogurte grego natural sem açúcar, 1 punhado de frutos vermelhos, 1 colher de chá de sementes de chia ou linhaça.',
            'duration' => '2 minutos',
        ]);

        Recipe::create([
            'name' => 'Papa de Aveia Rápida com Maçã e Canela',
            'ingredients' => '4 colheres de sopa de aveia, 150 ml de leite ou bebida vegetal, 1/2 maçã em cubos pequenos, canela a gosto.',
            'duration' => '4 minutos',
        ]);

        Recipe::create([
            'name' => 'Wrap Integral de Frango Desfiado e Vegetais',
            'ingredients' => '1 tortilha integral, 80 g de peito de frango cozido desfiado, folhas de alface, cenoura ralado e tomate.',
            'duration' => '7 minutos',
        ]);

        Recipe::create([
            'name' => 'Panquecas Rápidas de Aveia e Banana',
            'ingredients' => '1 banana, 1 ovo, 3 colheres de sopa de aveia, 1 pitada de fermento e 1 fio de óleo de coco ou azeite.',
            'duration' => '8 minutos',
        ]);

        Recipe::create([
            'name' => 'Taça de Queijo Fresco Batido com Nozes e Mel',
            'ingredients' => '150 g de queijo fresco batido magro, 4 metades de noz, 1 colher de chá de mel e raspas de limão.',
            'duration' => '3 minutos',
        ]);

        Recipe::create([
            'name' => 'Húmus Simples com Palitos de Cenoura e Pepino',
            'ingredients' => '3 colheres de sopa de húmus de grão-de-bico, 1 cenoura em palitos, 1/2 pepino em palitos, pimentão doce.',
            'duration' => '5 minutos',
        ]);

        Recipe::create([
            'name' => 'Overnight Oats com Cacau e Manteiga de Amendoim',
            'ingredients' => '4 colheres de sopa de aveia, 150 ml de bebida vegetal, 1 colher de chá de cacau magro, 1 colher de chá de manteiga de amendoim.',
            'duration' => '5 minutos',
        ]);

        Recipe::create([
            'name' => 'Salada Rápida de Grão, Atum e Salsa',
            'ingredients' => '100 g de grão-de-bico cozido, 1 lata pequena de atum ao natural, tomate-cereja, salsa fresca, azeite e limão.',
            'duration' => '5 minutos',
        ]);

        $this->command->info('A criar noticias...');

        News::create([
            'title' => 'Abertura oficial das inscrições para a nova temporada',
            'image' => 'news/inscricoes-temporada.jpg',
            'description' => 'Já se encontram abertas as inscrições para todos os participantes interessados na nova época desportiva. Garante já o teu lugar através do nosso portal.',
            'user_id' => 1,
        ]);

        News::create([
            'title' => 'Parceria renovada com os patrocinadores principais',
            'image' => 'news/parceria-patrocinadores.jpg',
            'description' => 'Temos o prazer de anunciar a renovação do acordo de patrocínio para este ano, reforçando o apoio às nossas atividades e eventos.',
            'user_id' => 1,
        ]);

        News::create([
            'title' => 'Calendário oficial de eventos divulgado',
            'image' => 'news/calendario-eventos.jpg',
            'description' => 'Consulta todas as datas, horários e locais confirmados para os próximos encontros e competições ao longo dos próximos meses.',
            'user_id' => 1,
        ]);

        News::create([
            'title' => 'Novas melhorias nas instalações concluídas',
            'image' => 'news/melhorias-instalacoes.jpg',
            'description' => 'As obras de requalificação dos espaços de treino e acolhimento ao público estão concluídas, oferecendo melhores condições a todos os visitantes.',
            'user_id' => 1,
        ]);

        News::create([
            'title' => 'Comunicado importante sobre alterações de horário',
            'image' => null,
            'description' => 'Informamos todos os membros que, na próxima sexta-feira, o horário de funcionamento será ajustado devido à preparação do evento de fim de semana.',
            'user_id' => 1,
        ]);

        News::create([
            'title' => 'Resumo e melhores momentos do torneio anual',
            'image' => 'news/resumo-torneio.jpg',
            'description' => 'Revê os momentos mais marcantes da edição deste ano, que contou com recorde de assistência e grande espírito competitivo.',
            'user_id' => 1,
        ]);

        News::create([
            'title' => 'Lançamento da nova plataforma digital e área de membro',
            'image' => 'news/plataforma-digital.jpg',
            'description' => 'A partir de hoje já podes gerir o teu perfil, acompanhar novidades em tempo real e aceder a conteúdos exclusivos na nossa nova área reservada.',
            'user_id' => 1,
        ]);

        News::create([
            'title' => 'Campanha solidária de recolha de bens este fim de semana',
            'image' => 'news/campanha-solidaria.jpg',
            'description' => 'Junta-te à nossa iniciativa solidária. Estaremos a recolher bens essenciais na entrada principal durante todo o sábado.',
            'user_id' => 1,
        ]);

        News::create([
            'title' => 'Workshop aberto à comunidade no próximo mês',
            'image' => null,
            'description' => 'Estão abertas as pré-reservas para a sessão prática gratuita dedicada a iniciantes e entusiastas. As vagas são limitadas.',
            'user_id' => 1,
        ]);

        News::create([
            'title' => 'Balanço anual e objetivos para o próximo ano',
            'image' => 'news/balanco-anual.jpg',
            'description' => 'Partilhamos os principais marcos alcançados ao longo deste ano e apresentamos as metas estratégicas definidas para o futuro.',
            'user_id' => 1,
        ]);

        $this->command->info('A criar patricionios...');

        Sponsorship::create([
            'description' => 'Patrocínio Ouro - Logótipo na camisola principal e banner no site',
            'amount' => 1500.00,
        ]);

        Sponsorship::create([
            'description' => 'Patrocínio Prata - Menção nas redes sociais e stand no recinto',
            'amount' => 750.00,
        ]);

        Sponsorship::create([
            'description' => 'Patrocínio Bronze - Divulgação no programa oficial e newsletter',
            'amount' => 250.00,
        ]);

        Sponsorship::create([
            'description' => 'Patrocínio Principal - Naming rights do evento e destaque na abertura',
            'amount' => 4500.00,
        ]);

        Sponsorship::create([
            'description' => 'Apoio Logístico - Fornecimento de águas, snacks e materiais de apoio',
            'amount' => 380.50,
        ]);

        Sponsorship::create([
            'description' => 'Patrocínio Digital - Banner na aplicação móvel e campanhas pagas',
            'amount' => 1200.00,
        ]);

        Sponsorship::create([
            'description' => 'Patrocínio de Palco - Logótipo no cenário principal e agradecimentos em palco',
            'amount' => 2250.00,
        ]);

        Sponsorship::create([
            'description' => 'Patrocínio de Prémios - Troféus, medalhas e brindes para os vencedores',
            'amount' => 600.00,
        ]);

        Sponsorship::create([
            'description' => 'Patrocínio de Imprensa - Presença na sala de imprensa e press kit oficial',
            'amount' => 520.00,
        ]);

        Sponsorship::create([
            'description' => 'Patrocínio Diamante - Pacote completo VIP, stand amplo e destaque global',
            'amount' => 8900.00,
        ]);

        $this->command->info('A criar parceiros...');

        Partner::create([
            'user_id' => 1,
            'description' => 'Loja especializada em equipamento desportivo e material para corrida.',
            'image' => 'decathlon_partner.png',
        ]);

        Partner::create([
            'user_id' => 2,
            'description' => 'Empresa responsável pelo fornecimento de água e bebidas para os participantes.',
            'image' => 'luso_partner.png',
        ]);

        Partner::create([
            'user_id' => 3,
            'description' => 'Clínica de medicina desportiva que presta apoio médico durante os eventos.',
            'image' => 'clinica_partner.png',
        ]);

        Partner::create([
            'user_id' => 4,
            'description' => 'Empresa especializada em cronometragem eletrónica de provas desportivas.',
            'image' => 'timing_partner.png',
        ]);

        Partner::create([
            'user_id' => 5,
            'description' => 'Ginásio parceiro que promove programas de treino para atletas e amadores.',
            'image' => 'fitness_partner.png',
        ]);

        Partner::create([
            'user_id' => 6,
            'description' => 'Fornecedor oficial de nutrição desportiva e suplementos alimentares.',
            'image' => 'nutrition_partner.png',
        ]);

        Partner::create([
            'user_id' => 7,
            'description' => 'Empresa de transportes que apoia a logística dos eventos e participantes.',
            'image' => 'transport_partner.png',
        ]);

        Partner::create([
            'user_id' => 8,
            'description' => 'Entidade local que colabora na organização e divulgação das atividades desportivas.',
            'image' => 'municipio_partner.png',
        ]);

        Partner::create([
            'user_id' => 9,
            'description' => 'Empresa especializada em fotografia e cobertura multimédia de eventos.',
            'image' => 'media_partner.png',
        ]);

        Partner::create([
            'user_id' => 10,
            'description' => 'Loja de calçado técnico e acessórios para corrida e caminhada.',
            'image' => 'running_partner.png',
        ]);

        $this->command->info('A criar patrocinadores...');

        Sponsor::create([
            'name' => 'Nike',
            'user_id' => 1,
            'image' => 'nike.png',
        ]);

        Sponsor::create([
            'name' => 'Adidas',
            'user_id' => 2,
            'image' => 'adidas.png',
        ]);

        Sponsor::create([
            'name' => 'Decathlon',
            'user_id' => 3,
            'image' => 'decathlon.png',
        ]);

        Sponsor::create([
            'name' => 'Sport Zone',
            'user_id' => 4,
            'image' => 'sportzone.png',
        ]);

        Sponsor::create([
            'name' => 'MEO',
            'user_id' => 5,
            'image' => 'meo.png',
        ]);

        Sponsor::create([
            'name' => 'Vodafone',
            'user_id' => 6,
            'image' => 'vodafone.png',
        ]);

        Sponsor::create([
            'name' => 'NOS',
            'user_id' => 7,
            'image' => 'nos.png',
        ]);

        Sponsor::create([
            'name' => 'Continente',
            'user_id' => 8,
            'image' => 'continente.png',
        ]);

        Sponsor::create([
            'name' => 'Delta Cafés',
            'user_id' => 9,
            'image' => 'delta.png',
        ]);

        Sponsor::create([
            'name' => 'Toyota',
            'user_id' => 10,
            'image' => 'toyota.png',
        ]);
    }
}
