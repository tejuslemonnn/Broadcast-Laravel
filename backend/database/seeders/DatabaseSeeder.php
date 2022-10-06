<?php

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(3)->create();


        Message::create([
            'sender_id' => 1,
            'receiver_id' => 2,
            'message' => "Haloo bro"
        ]);

        Message::create([
            'sender_id' => 1,
            'receiver_id' => 2,
            'message' => "Apa Kabar?"
        ]);

        Message::create([
            'sender_id' => 2,
            'receiver_id' => 1,
            'message' => "Baik Bro"
        ]);
    }
}
