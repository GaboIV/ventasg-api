<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\ApiController;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends ApiController {

    use AuthenticatesUsers;

    public function __construct() {
        $this->middleware('guest')->except('logout');
    }

    public function login (Request $request) {
        $nick = $request->nick;
        $password = $request->password;

        $user = User::query()->where('nick', $nick)->first() ?? null;
        if (!$user)           
            return $this->errorResponse("Usuario no encontrado. Verifique su nick.", 404);   

        $validatePassword = Hash::check($password, $user->password);

        if (!$validatePassword) 
            return $this->errorResponse("Combinación de nick y password errónea", 403);

        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        $token->save();

        $data = array(
            'access_token' => $tokenResult->accessToken,
            'user' => $user
        );        
        
        return $this->successResponse($data, 201);
    }
}
