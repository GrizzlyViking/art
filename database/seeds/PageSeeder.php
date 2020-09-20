<?php

use App\Model\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::updateOrCreate([
            'slug' => 'landing-page'
        ],[
            'slug' => 'landing-page',
            'title' => 'Natalias Art',
            'subtitle' => 'Natalia\'s art page',
        ]);
    }
}
