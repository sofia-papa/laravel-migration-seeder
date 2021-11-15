<?php

use Illuminate\Database\Seeder;
use App\Models\Holiday;
use Illuminate\Support\Str;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $holidays = [
            [
                "title" => "Settimana bianca",
                "destination" => "Cortina",
                "description" => "Non poteva mancare Cortina nelle proposte di Settimanebianche.eu! La perla delle Dolomiti può vantare una storia millenaria e una lunga tradizione nel turismo. Oggi guarda con ottimismo al futuro anche grazie all’assegnazione dei Campionati Mondiali di Sci Alpino del 2021 ed è stata città Olimpionica nel 1956.
                La bellezza della Valle d’Ampezzo, una conca ampia e soleggiata che ospita Cortina, attrae visitatori da tutto il mondo in qualsiasi periodo dell’anno. E’ circondata dalle Dolomiti, patrimonio UNESCO. Cime monumentali come il Cristallo, le Tofane, le Cinque Torri, il Pomagagnon, il Becco di Mezzodì… sono fra le montagne più belle del mondo!
                Il centro di Cortina è rinomato con bellissimi negozi, locali dove passeggiando potrai incontrare qualche divo del cinema. Troverai pasticcerie, enoteche, bar e vari locali per trascorrere piacevoli ore nel dopo sci.",
                "holiday_start" => "2022-01-15",
            ],
            [
                "title" => "Settimana in Corsica",
                "destination" => "Corsica",
                "description" => "La Corsica, isola montuosa del Mediterraneo, comprende cittadine costiere alla moda, fitte foreste e montagne rocciose (la più alta è il monte Cinto). Quasi la metà dell'isola è occupata da un parco che comprende percorsi escursionistici, tra cui l'impegnativo sentiero GR 20. La tipologia di spiagge va dall'affollata Pietracorbara fino alle remote Saleccia e Rondinara. Fa parte della Francia fin dal 1768, ma mantiene ancora oggi una forte eredità culturale italiana.",
                "holiday_start" => "2022-07-15",
            ],
            [
                "title" => "Week end nella Capitale",
                "destination" => "Roma",
                "description" => "Roma, capitale dell’Italia, è una grande città cosmopolita con una storia artistica, architettonica e culturale che ha influenzato tutto il mondo e che risale a quasi 3000 anni fa. Le antiche rovine come il Foro e il Colosseo testimoniano la potenza dell’antico Impero romano. Nella Città del Vaticano, sede della Chiesa Cattolica, si trovano la Basilica di San Pietro e i Musei Vaticani, che ospitano capolavori come la Cappella Sistina affrescata da Michelangelo.",
                "holiday_start" => "2022-04-15",
            ],
        ];

        foreach ($holidays as $holiday){
            $newHoliday = new Holiday();
            /* $newHoliday->title = $holiday['title'];
            $newHoliday->destination = $holiday['destination'];
            $newHoliday->description = $holiday['description'];
            $newHoliday->holiday_start = $holiday['holiday_start']; */

            $newHoliday->fill($holiday);
            $newHoliday->save();
        }
    }
}
