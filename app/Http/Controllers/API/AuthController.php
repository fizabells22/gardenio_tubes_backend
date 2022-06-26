<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Helpers\ApiFormatter;

class AuthController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $data = Pengguna::where('password', '=', $request->password)->first();
            if ($data) {
                return ApiFormatter::createToken($request->username)->plainTextToken;
            } else {
                return ApiFormatter::createApi(400, 'Failed');
            }
        }

    public function register(Request $request){
        
    }

    public function logout(Request $request){
        
    }
}
