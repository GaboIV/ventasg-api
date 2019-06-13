<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller {

    use AuthenticatesUsers;

    public function __construct() {
        $this->middleware('guest')->except('logout');
    }

    public function login (Request $request) {

        $nick = $request->nick;
        $pase = $request->pase;

        $user = User::query()->where('nick', $nick)->first() ?? null;
        if (!$user) {
            $data = array(
                'message' => "Usuario no encontrado. Verifique su nick.",
                'code' => 404
            );        
            
            return response()->json($data, $data['code']);
        }

        $validatePassword = Hash::check($pase, $user->password);

        if (!$validatePassword) {
            $data = array(
                'message' => "Combinación de nick y pase errónea",
                'code' => 403
            );        
            
            return response()->json($data, $data['code']);
        }
            

        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        $token->save();

        $data = array(
            'access_token' => $tokenResult->accessToken,
            'user' => $user,
            'code' => 200
        );        
        
        return response()->json($data, $data['code']);
    }
}
