<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class QuestionnairesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$questionnaireId = DB::table('questionnaires')->insert([
			'name' => 'My First Questionnaire'
		]);
		
		$questionId = DB::table('questions')->insert([
			'questionnaire_id' => $questionnaireId,
			'message' => 'On daily basis, how often do you see "Hello World"?'
		]);
		
		$answers = ['never', 'sometimes', 'often', 'always'];
		foreach ($answers as $value) {
			$answer = DB::table('answers')->insert([
				'question_id' => $questionId,
				'message' => $value
			]);
		}
    }
}
