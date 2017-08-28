<?php

class UserController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| デフォルトHomeコントローラー
	|--------------------------------------------------------------------------
	|
	| クロージャーベースのルーティングの代わりに、もしくはそれに付け加え
	| コントローラーを使いたいと思うことでしょう。それは素晴らしい！
	| このコントローラーを動作させるには、ルートに以下を付け加えてください。
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showProf($id)
	{
	    $user = User::find($id);

		return View::make('users');
	}

}
