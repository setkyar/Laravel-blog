<?php 

	class AuthController extends BaseController {
		public function login()
		{
			$site_title = 'Login';

			if(is_post()) {
				$v = Validator::make(Input::all(), array(
					'email' => 'required',
					'password' => 'required'
					));

				if ($v->passes()) {
					$credentials = array(
						'email' => Input::get('email'),
						'password' => Input::get('password')
						);
					if (Auth::attempt($credentials)) {
						return Redirect::to('admin/dashboard');
					}
				}

				return Redirect::to('admin')->with('message', 'Email / Password is invalid!');
			}
			return View::make('auth/login', compact('site_title'));
		}

		public function logout()
		{
			Auth::logout();

			return Redirect::to('/');
		}
	}