<?php

use Illuminate\Database\Seeder;

class ToolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tool = new \App\Tool([
            'item' => 'Pipe Wrench',
            'description' => 'Heavy metal weapon capable of delivering nasty dome splits.',
            'price' => 20.00
        ]);
        $tool->save();

        $tool = new \App\Tool([
            'item' => 'Zledge Hammer',
            'description' => 'Our signature Sledge Hammer that drops zombies into the ground like railroad spikes!',
            'price' => 99.99
        ]);
        $tool->save();

        $tool = new \App\Tool([
            'item' => 'Baseball Bat',
            'description' => 'Light and quick, the perfect weapon if you want to stay light on your feet.',
            'price' => 10.00
        ]);
        $tool->save();

        $tool = new \App\Tool([
            'item' => 'Scythe',
            'description' => 'Reap the souls of the damned. Too bad for you, you wont receive any souls..',
            'price' => 66.60
        ]);
        $tool->save();

        $tool = new \App\Tool([
            'item' => 'Armored Minivan',
            'description' => 'Keep your supplies close by with this armored van! you should be getting from A to B in no time! As long as you can find the gas...',
            'price' => 12000.00
        ]);
        $tool->save();
    }
}
