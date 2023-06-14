<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        try {
            //validasi request
            $this->validate($request, [
                'email' => 'required|email',
                'password' => 'required'
            ]);

            // check credential login
            $credentials = request(['email', 'password']);
            if(!Auth::attempt($credentials)){
                return ResponseFormatter::error([
                    'message' => 'Unathorized'
                ], 'Authentication Failed', 500);
            }

            //jika hash tidak sesuai maka beri error
            $user = User::where('email', $request->email)->first();
            if(!Hash::check($request->password, $user->password, []))
            {
                throw new \Exception('Invalid Credentials');
            }

            //jika berhasil check password maka login
            $tokenResult = $user->createToken('authToken')->plainTextToken;
            return ResponseFormatter::success([
                'access_token' => $tokenResult,
                'token_Type' => 'Bearer',
                'user' => $user
            ], 'Authenticated');


        } catch (\Error $error) {
            return ResponseFormatter::error([
                'message' => 'Something When Wrong',
                'error' => $error
            ], 'Authentication Failed', 500);
        }
    }

    public function register(Request $request)
    {
        try {
            //validate request
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|unique:users,email',
                'password' => 'required|string|min:8',
                'confirmation_password' => 'required|string|min:8'
            ]);

            //chech kondisi password dan confirmation passwword
            if($request->password != $request->confirmation_password){
                return ResponseFormatter::error([
                    'message' => 'Password not Macth',
                ], 'Athentication', 500);
            }

            //jika berhasil maka buat user baru
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            //get data user
            $user = User::where('email', $request->email)->first();

            //create token maka login
            $tokenResult = $user->createToken('authToken')->plainTextToken;
            return ResponseFormatter::success([
                'access_token' => $tokenResult,
                'token_Type' => 'Bearer',
                'user' => $user
            ], 'User Registered Successfully');

        } catch (\Error $error) {
            return ResponseFormatter::error([
                'message' => 'Something When Wrong',
                'error' => $error
            ], 'Authentication Failed', 500);
        }
    }

    public function logout(Request $request)
    {
        //menghapus token pada saat logout
        $token = $request->user()->currentAccessToken()->delete();
        return ResponseFormatter::success($token, 'Token Revoked');
    }

    public function updatePassword(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'current_password' => 'required',
            'password' => 'required|min:8|string',
            'confirmation_password' => 'required|min:8|string',
        ]);

        //jika validator gagal maka beri error
        if($validator->fails()){
            return ResponseFormatter::error([
                'error' => $validator->errors()
            ], 'Update Password Failed', 401);
        }

        $user = Auth::user();

        //jika hash/password tidak sesuai mak maka beri error
        if(!Hash::check($data['current_password'], $user->password)){
            return ResponseFormatter::error([
                'message' => 'Current Password is not macth'
            ], 'Update Password Failed', 401);
        }

        //jika password dan confirmation_password tidak sesuai maka beri error
        if ($data['password'] != $data['confirmation_password']) {
            return ResponseFormatter::error([
                'message' => 'Password is not macth'
            ], 'Update Password Failed', 401);
        }

        //jika berhasil maka update password
        $user->password = Hash::make($data['password']);
        $user->save();

        return ResponseFormatter::success([
            'user' => $user
        ], 'Update Password Success');
    }

}
