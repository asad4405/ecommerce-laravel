<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Sanctum\PersonalAccessToken;
use Illuminate\Validation\Rules\Password;

class CustomerAuthenticationController extends Controller
{
    function customer_register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fname' => 'required',
            'email' => 'required|unique:customers',
            'password' => [
                'required',
                'confirmed',
                Password::min(8)
            ],
            'password_confirmation' => 'required',
        ]);

        if ($validator->fails()) {
            return $validator->errors()->all();
        }

        $customers = Customer::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $token = $customers->createToken('token')->plainTextToken;

        $response = [
            'success' => 'Customer Registered Success!',
            'customers' => $customers->email,
            'token' => $token,
        ];
        return response()->json($response);
    }

    function customer_login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return $validator->errors()->all();
        }

        $customer = Customer::where('email',$request->email)->first();

        if (Customer::where('email', $request->email)->exists()) {
            if (Auth::guard('customer')->attempt(['email' => $request->email, 'password' => $request->password])) {
                $token = $customer->createToken('token')->plainTextToken;
                $response = [
                    'success' => 'Customer Login Success!',
                    'customers' => $customer->email,
                    'token' => $token,
                ];
                return response()->json($response);
            } else {
                return response(['error' => 'Wrong Password!']);
            }
        } else {
            return response(['error' => 'Email Does not exists!']);
        }
    }

    function customer_logout(Request $request)
    {
        $accessToken = $request->bearerToken();
        $token = PersonalAccessToken::findToken($accessToken);

        $token->delete();

        return response(['message' => 'Customer Logout Success!']);
    }
}
