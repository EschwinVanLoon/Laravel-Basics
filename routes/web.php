<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* Voorbeeld */
/* geeft conflict met t10m03o01
Route::get('/roll', function () {
	return 'It was a '.rand(1,6);
}); */
 
// t10m02
/* opdacht 1 */
/* 1.2 geeft conflict met t10m03o01:
Route::get('/user/{id}', function ($id) {
    return 'Hallo '. $id;
}); */

Route::get('/user/{id}/files/{filename?}', function ($id, $filename = 'cv.docx') {
    return 'Welcome back '. $id.' here is your file '.$filename;
});

Route::get('/user/{id}/email/{email}', function ($id, $email) {
	 return '<p>User: '. $id.'<br>email: '.$email.'</p>';
}) -> where([
	'id' => '[0-9]+',
	'email' => '(.+)([@].+)([.].{2,3}$)'
]);

/* opdracht 2 */
Route::get('/form', function () {
    return	'<form method="POST">'.
				csrf_field().
				'<input type="text" name="naam">'.
				'<input type="submit">'.
			'</form>';
});

Route::post('/form', function () {
    return	'Hallo '.$_POST['naam'];
});


Route::get('/roll', function () {
    return view('dice', [
		'dice' => rand(1,6)
	]);
});

// t10m03
/* opdracht 1  */
Route::get('/user/{name?}', function ($name = false) {
    return view('user', [
		'name' => $name
	]);
});

Route::post('/user', function () {
    return view('user', [
		'name' => $_POST['name']
	]);
});

// t10m05
Route::get('answers/{id?}', function($id = 1) {
	$answer = DB::select(
		'SELECT * FROM answers WHERE id = :id',
		['id' => $id]
	);
	
	//return '<pre>'.print_r($answers, true).'</pre>';
	return $answer[0]->message;
})->where(['id' => '[0-9]+']);

Route::get('/builder/{id?}', function ($id = 1) {
	$answers = DB::table('answers')->get();
	
	return '<pre>'.print_r($answers, true).'</pre>';
});

Route::get('/questionnaire/{id?}', function ($id = 1) {
	$questionnaire = App\Models\Questionnaire::where('id', $id)->first();
	
	/* enkel Eloquent
	 *	$html = '<h2>'.$questionnaire->name.'</h2>';
	 *	foreach($questionnaire->questions() as $question) {
	 *		$html .= '<fieldset style="width:350px">';
	 *		$html .= '<legend>'.$question->message.'</legend>';
	 *			foreach($question->answers() as $answer) {
	 *				$html .= '<label><input type="radio" name="q';
	 *				$html .= $question->id.'">'.$answer->message.'</label>';
	 *			}
	 *		$html .= '</fieldset>';
	 *	}
	 *	
	 *	return $html;
	 */
	 
	 // Blade
	 return view('questionnaire', [
		'questionnaire' => $questionnaire
	 ]);
});
// t10m06
Route::get('/news', ['uses' => 'App\Http\Controllers\NewsArticlesController@latest']);
Route::get('/news/{id}', ['uses' => 'App\Http\Controllers\NewsArticlesController@show']);
Route::get('/news-create', ['uses' => 'App\Http\Controllers\NewsArticlesController@create']);
Route::get('/news-edit/{id}', ['uses' => 'App\Http\Controllers\NewsArticlesController@edit']);
Route::post('/news-save', ['uses' => 'App\Http\Controllers\NewsArticlesController@store']);