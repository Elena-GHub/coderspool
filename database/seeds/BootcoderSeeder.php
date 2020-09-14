<?php

use Illuminate\Database\Seeder;

class BootcoderSeeder extends Seeder
{
    public function run()
    {
        factory(\App\Bootcoder::class, 10)->create();
    }
}