<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login_page(){
        return view('auth.Login');
    }
 
    public function register_page(){
        return view('auth.Register');
    }

    public function register_user(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:4|confirmed',
        ]);
        
        $randomNumber = substr(str_shuffle('01456789'), 0, 10);

        // Create a new user instance after validation
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'user_id' => $randomNumber,
            'password' => Hash::make($request->password),
        ]);
    
        // Log the user in
        Auth::login($user);
    
        // Redirect to the intended page or dashboard
        return redirect()->intended('/')->with('success', 'Registration successful');
    }

    public function login_user(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {

            // get the product created by the user and reduce it by two
            $user_id = user()->user_id;

            $product = Products::where('user_id', $user_id);

            $pro_qty = $product->quantity - 2;
            
            $product->update([
                'quantity' => $pro_qty
            ]);
           
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials provided.',
        ])->withInput($request->only('email'));
    }

}
