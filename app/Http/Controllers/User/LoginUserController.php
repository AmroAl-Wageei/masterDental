<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginUserController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('RedirectHome');
    // }

    public function index()
    {

        return view('front.login');

    }
    public function LoginPost(LoginRequest $request): RedirectResponse
    {

        // $request->authenticate();
        // $data = User::where('email',$request->email)->get();
        // if($data[0]->role=='engineer'){

        //     if($data[0]->status !=='accepted'){
        //         abort(403);
        //     }

        // }

        $request->authenticate();
        $request->session()->regenerate();

        $email = $request->email;
        $password = $request->password;

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // $request->session()->regenerate();
            $data = User::where('email' ,$email)->first();
            // dd($data);

            if($data->role=='user'){
                
                return redirect()->route('home');
            }else{
                return redirect()->route('admin.admin');
                
            }



        }

    }
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}