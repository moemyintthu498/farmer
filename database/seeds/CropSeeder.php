<?php

use Illuminate\Database\Seeder;


class CropSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Crop::class,2)->create();
    }
}
