<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        factory(\App\User::class)->create(['name' => 'Elliot Alderson', 'email' => 'elliot.alderson@allsafe.com']);
        factory(\App\Codersgroup::class)->create(['groupname' => 'Clean Coders']);
        factory(\App\Codersgroup::class)->create(['groupname' => 'FiveCode']);
        factory(\App\Codersgroup::class)->create(['groupname' => 'Intercoders']);
        factory(\App\Codersgroup::class)->create(['groupname' => 'Slow Coders']);
        factory(\App\Codersgroup::class)->create(['groupname' => 'Stranger Strings']);
        $this->call(BootcoderSeeder::class);
    }
}