<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = [
            [
                'title' => 'Srawung Budaya Jawa',
                'date' => '2025-08-16',
                'location' => 'Pendopo Balai Desa Sukamaju',
                'description' => 'Sarasehan lan srawung bareng warga kanggo nguri-uri budaya Jawa. Ngobrol bareng, sinau bebarengan, lan nglestarekake tradisi kanthi guyub rukun.',
                'image' => 'events/srawung-budaya-jawa.jpg',
            ],
            [
                'title' => 'Pentas Seni Tradisional',
                'date' => '2025-09-05',
                'location' => 'Lapangan Desa Sumberrejo',
                'description' => 'Pentas kesenian tradisional Jawa kanthi paseduluran antar sanggar. Papan kanggo crita lan karya para seniman lokal supaya tetep lestari.',
                'image' => 'events/pentas-seni-tradisional.jpg',
            ],
            [
                'title' => 'Kumpul Komunitas Kreatif',
                'date' => '2025-09-20',
                'location' => 'Omah Kreatif SrawungSpace',
                'description' => 'Kumpul bareng konco-konco kreatif kanggo tukar gagasan, sinau lan nyawiji, sarta ngraketake paseduluran antar komunitas ing SrawungSpace.',
                'image' => 'events/kumpul-komunitas-kreatif.jpg',
            ],
            [
                'title' => 'Sinau Gamelan Bareng',
                'date' => '2025-10-04',
                'location' => 'Sanggar Karawitan Ngudi Laras',
                'description' => 'Kagiyatan sinau nabuh gamelan kanggo sedulur enom lan tuwa. Sinau lan nyawiji ing seni karawitan supaya budaya Jawa tetep urip lan ngrembaka.',
                'image' => 'events/sinau-gamelan-bareng.jpg',
            ],
            [
                'title' => 'Pasar Kreatif Desa',
                'date' => '2025-10-18',
                'location' => 'Alun-alun Desa Karangasri',
                'description' => 'Pasar rakyat kanggo produk kreatif lan kuliner khas desa. Ajang kumpul bareng konco lan warga kanthi swasana guyub rukun lan srawung bareng.',
                'image' => 'events/pasar-kreatif-desa.jpg',
            ],
        ];

        foreach ($events as $event) {
            Event::create($event);
        }
    }
}
