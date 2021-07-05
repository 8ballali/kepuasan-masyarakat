<?php

use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $answer = [[

            'answer'=> 'Sangat Puas',
            'bgcolor'=> 'primary'
        ],[
            'answer'=> 'Puas',
            'bgcolor'=> 'success'
        ],[
            'answer'=> 'Cukup',
            'bgcolor'=> 'warning'

        ],[
            'answer'=> 'Tidak Puas',
            'bgcolor'=> 'danger'

        ]
        ];
        foreach ($answer as $a){
            DB::table('answer')->insert([
                'answer' => $a['answer'],
                'bgcolor' => $a['bgcolor'],
                'file' => ''
            ]);
        }
    }
}
