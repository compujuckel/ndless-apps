<?php

class LoginController extends BaseController {
	public function getIndex()
	{
		return View::make('login')->withNavbar(false);
	}
	
	public function postIndex()
	{
		$rules = array(
			'username' => 'required|alpha_dash',
			'password' => 'required|min:8'
		);
		
		$input = Input::all();
		$validator = Validator::make($input,$rules);
		
		$validator->sometimes('username', 'unique:users,name', function($input) {
			return $input->action == 'register';
		});
		
		if($validator->fails())
		{
			return Redirect::to('login')->withErrors($validator);
		}
		
		if($input['action'] == 'login')
		{
			if(Auth::attempt(array(
					'name' => $input['username'],
					'password' => $input['password']
			), Input::has('remember') ? true : false)) {
				return Redirect::to('/');
			}
			else {
				return Redirect::to('login')->withErrors(array('message' => 'Wrong username or password.'));
			}
		}
		elseif($input['action'] == 'register')
		{
			$user = new User;
			$user->name = $input['username'];
			$user->password = Hash::make($input['password']);
			$user->save();
			Auth::login($user);
			return Redirect::intended('/');
		}
	}
}