<?php

namespace Database\Seeders;

use App\Models\trains;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\New_;

class Trainstableseeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $treno = [
            "id"=> "3",
            "azienda"=> "TreniThomas",
            "stazione_di_partenza"=> "Bologna",
            "stazione_di_arrivo"=> "Bolognina",
            "ora_di_partenza"=> "17:30",
            "ora_di_arrivo"=> "18:00",
            "codice_treno"=> "1849626GYG",
            "numero_carrozze"=> "200",
            "in_orario"=> 1,
            "cancellato"=> 0,
        ];

        foreach ($treno as $key => $singolo) {
            $newTrain = new trains();
            $newTrain->id = $singolo['id'];
            $newTrain->azienda = $singolo['azienda'];
            $newTrain->stazione_di_partenza = $singolo['stazione_di_partenza'];
            $newTrain->stazione_di_arrivo = $singolo['stazione_di_arrivo'];
            $newTrain->ora_di_partenza = $singolo['ora_di_partenza'];
            $newTrain->ora_di_arrivo = $singolo['ora_di_arrivo'];
            $newTrain->codice_treno = $singolo['codice_treno'];
            $newTrain->numero_carrozze = $singolo['numero_carrozze'];
            $newTrain->in_orario = $singolo['in_orario'];
            $newTrain->cancellato = $singolo['cancellato'];
            $newTrain->save();
        }
    }
}
