<?php

namespace ReclutaTI\Http\Controllers\Front\Candidate\Account;

use Auth;
use Session;
use Illuminate\Http\Request;
use ReclutaTI\Http\Controllers\Controller;
use ReclutaTI\Http\Requests\Front\Candidate\Account\LoginRequest;

class LoginController extends Controller
{
	/**
	 * [index description]
	 * @return [type] [description]
	 */
    public function index()
    {
    	return view('front.static.candidate.login');
    }

    /**
     * [login description]
     * @param  LoginRequest $request [description]
     * @return [type]                [description]
     */
    public function login(LoginRequest $request)
    {
    	$credentials = [
    		'email' => $request->correoElectronico,
    		'password' => $request->password,
    		'user_group_id' => 1
    	];

    	if (Auth::attempt($credentials)) {
    		return redirect('candidate/dashboard');
    	} else {
    		Session::flash('loginError', true);
    		return back();
    	}
    }
}
