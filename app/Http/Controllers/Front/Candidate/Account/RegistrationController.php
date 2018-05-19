<?php

namespace ReclutaTI\Http\Controllers\Front\Candidate\Account;

use ReclutaTI\User;
use ReclutaTI\Candidate;
use Illuminate\Http\Request;
use ReclutaTI\Http\Controllers\Controller;

class RegistrationController extends Controller
{
	/**
	 * [store description]
	 * @param  StoreRequest $request [description]
	 * @return [type]                [description]
	 */
    public function store(StoreRequest $request)
    {
    	$response;

    	$user = new User();
    	$user->name = strtolower($request->nombre);
    	$user->email = $request->correoElectronico;
    	$user->password = bcrypt($request->password);
    	$user->user_group_id = 1;

    	if ($user->save()) {
    		$candidate = new Candidate();
    		$candidate->user_id = $user->id;
    		$candidate->last_name = strtolower($request->apellidoPaterno);

    		if ($candidate->save()) {
    			$response = [
    				'errors' => false,
    				'message' => 'Se ha creado con éxito tu cuenta.',
    				'callback_url' => url('/candidate/dashboard')
    			];
    		} else {
    			$response = [
    				'errors' => true,
    				'message' => 'No se ha podido crear tu cuenta.',
    				'error_code' => '0001'
    			];
    		}
    	} else {
    		$request = [
    			'errors' => true,
    			'message' => 'No se ha podido crear tu cuenta.',
    			'error_code' => '0002'
    		];
    	}

    	return response()->json($response);
    }
}
