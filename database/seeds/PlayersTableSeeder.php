<?php

use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //identifica o model, busca do PlayersFactory e cria 10 players
        factory(\App\Player::class, 10)->create();
    }
}
