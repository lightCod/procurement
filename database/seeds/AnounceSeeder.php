<?php

use Illuminate\Database\Seeder;

class AnounceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Anounce::class, 20)->create();
    }
}
