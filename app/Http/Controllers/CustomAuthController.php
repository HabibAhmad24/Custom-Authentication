<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CustomAuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:8',
            'address' => 'required',
            'city' => 'required',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->address = $request->address;
        $user->city = $request->city;
        $user->save();

        if ($user) {
            return redirect('dashboard')->with('success', 'You have registered successfully.');
        } else {
            return back()->with('fail', 'Something went wrong.');
        }
    }

    public function loginuser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:8',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginid', $user->id);
                return redirect('dashboard')->with('success', 'Login successful.');
            } else {
                return back()->with('fail', 'Password is not matched.');
            }
        } else {
            return back()->with('fail', 'User not found. Please register.');
        }
    }

    public function dashboard(Request $request)
{
    $data = [];
    if (Session::has('loginid')) {
        $userId = Session::get('loginid');
        $user = User::find($userId);

        if ($user) {
            $data = $user;
        }
    }

    return view('dashboard', compact('data'));
}
public function logout(){
    if(Session::has('loginid')){
        Session::pull('loginid');
        return redirect('login');
    }


}

}
