<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display register page.
     * 
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('auth.register');
    }

    /**
     * Handle account registration request
     * 
     * @param RegisterRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function register(RegisterRequest $request) 
    {
        $user = $request->validated();
        $u = User::where('email',$request->email)->first();;
        //dd($u->id);
        if(isset($u->id)){
            return redirect('/register')->with('error', "Email is already registered");
        }
        $user['password'] = Hash::make($user['password']);
        //dd($user);
        $user = User::create($user);

        auth()->login($user);

        return redirect('/dashboard')->with('success', "Account successfully registered.");
    }
}
