<?php

namespace Creode\LaravelNovaFaqs\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class FAQsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        \Creode\LaravelNovaFaqs\Entities\Faq::factory(30)->create();
    }
}
