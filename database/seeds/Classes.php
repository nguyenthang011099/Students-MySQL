<?php

use Illuminate\Database\Seeder;

class Classes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Classes::class, 10)->create();
    }
}
