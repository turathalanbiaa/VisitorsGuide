<?php

use Illuminate\Database\Seeder;

class LostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\Models\Lost::class,100)->create();
    }
}
