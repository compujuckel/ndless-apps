<?php
	
class AccountController extends BaseController {
	public function __construct()
	{
		$this->middleware('auth', array(
			'on' => 'postIndex'
		));
	}

	public function getIndex()
	{
		return View::make('account');
	}
	
	public function postIndex()
	{
		if(Input::has('changepw'))
		{
			$rules = array(
				'oldPass' => 'required',
				'newPass1' => 'required|min:8',
				'newPass2' => 'required|min:8|same:newPass1'
			);
			
			$input = Input::all();
			$validator = Validator::make($input,$rules);
			
			if($validator->fails())
			{
				return Redirect::to('/account')->withErrors($validator);
			}
			
			$user = Auth::user();
			
			if(!Auth::validate(array('name' => $user->name, 'password' => $input['oldPass'])))
			{
				return Redirect::to('/account')->withErrors(array('message' => 'You have entered a wrong password.'));
			}
			
			$user->password = Hash::make($input['newPass2']);
			
			$user->save();
			
			return Redirect::to('/account');
		}
		elseif(Input::has('removeacc'))
		{
			$rules = array(
				'remPass' => 'required|min:8'
			);
			
			$input = Input::all();
			$validator = Validator::make($input,$rules);
			
			if($validator->fails())
			{
				return Redirect::to('/account')->withErrors($validator);
			}
			
			$user = Auth::user();
			
			if(!Auth::validate(array('name' => $user->name, 'password' => $input['oldPass'])))
			{
				return Redirect::to('/account')->withErrors(array('message' => 'You have entered a wrong password.'));
			}
			
			$user->delete();
			
			Auth::logout();
			
			return Redirect::to('/');
		}
	}
}

?>