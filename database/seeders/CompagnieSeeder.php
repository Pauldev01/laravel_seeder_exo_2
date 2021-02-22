<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompagnieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('compagnies')->insert(
           [
            [
                'nom'=>'Nintendo',
                'adresse'=>'Tokyo',
                'phone'=>'04444444',
                'mail'=>'nintendo@nin.com',
                'contactname'=>'Regie',
                'contactfirstname'=>'Bowser',
                'image'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/NES-Console-Set.png/260px-NES-Console-Set.png'
            ],
            [
                'nom'=>'Nintendo2',
                'adresse'=>'Tokyo2',
                'phone'=>'044444442',
                'mail'=>'nintendo@nin2.com',
                'contactname'=>'Regie2',
                'contactfirstname'=>'Bowser2',
                'image'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/NES-Console-Set.png/260px-NES-Console-Set.png'
            ],
            [
                'nom'=>'Nintendo3',
                'adresse'=>'Tokyo3',
                'phone'=>'044444443',
                'mail'=>'nintendo@nin3.com',
                'contactname'=>'Regie3',
                'contactfirstname'=>'Bowser3',
                'image'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/NES-Console-Set.png/260px-NES-Console-Set.png'
            ],
            [
                'nom'=>'Nintendo4',
                'adresse'=>'Tokyo4',
                'phone'=>'044444444',
                'mail'=>'nintendo@nin4.com',
                'contactname'=>'Regie4',
                'contactfirstname'=>'Bowser4',
                'image'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/NES-Console-Set.png/260px-NES-Console-Set.png'
            ],
            [
                'nom'=>'Nintendo5',
                'adresse'=>'Tokyo5',
                'phone'=>'044444445',
                'mail'=>'nintendo@nin5.com',
                'contactname'=>'Regie5',
                'contactfirstname'=>'Bowser5',
                'image'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/NES-Console-Set.png/260px-NES-Console-Set.png'
            ],
            [
                'nom'=>'Nintendo6',
                'adresse'=>'Tokyo6',
                'phone'=>'044444446',
                'mail'=>'nintendo@nin.com6',
                'contactname'=>'Regie6',
                'contactfirstname'=>'Bowser6',
                'image'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/NES-Console-Set.png/260px-NES-Console-Set.png'
            ],
           ]
            );
    }
}
