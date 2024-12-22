<?php

use Illuminate\Database\Seeder;
use App\Room;

class RoomSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::create([
            'ime' => 'Enoposteljna soba',
            'cena' => 50.00,
            'kratek_opis' => 'Enostavna soba z osnovnimi potrebščinami.',
            'dolg_opis' => 'Enostavana postelja primerna za eno osebo.',
        ]);

        Room::create([
            'ime' => 'Dvoposteljna soba',
            'cena' => 120.00,
            'kratek_opis' => 'Prostorna soba z luksuznimi dodatki.',
            'dolg_opis' => 'Prostorna soba z dvema posteljema.',
        ]);

        Room::create([
            'ime' => 'Družinska soba',
            'cena' => 80.00,
            'kratek_opis' => 'Idealna za družine, z dodatnimi ležišči.',
            'dolg_opis' => 'Družinska soba s tremi posteljami, primerna za večje skupine ali družine.',
        ]);

        Room::create([
            'ime' => 'Apartma',
            'cena' => 150.00,
            'kratek_opis' => 'Apartma z ločenim bivalnim prostorom.',
            'dolg_opis' => 'Luksuzen apartma s kuhinjo, dnevnim prostorom in spalnico.',
        ]);
    }
}
