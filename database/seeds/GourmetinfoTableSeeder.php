<?php

use Illuminate\Database\Seeder;

class GourmetinfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Gourmetinfo::class, 50)->create();
    }
}
