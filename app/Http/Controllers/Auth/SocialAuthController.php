<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    public function index(){
        return view('login.login');
    }
    //GOOGLE
    public function googleRedirect(){
        return Socialite::driver('google')->redirect();
    }
    public function googleCallback(Request $request){
        $user = Socialite::driver('google')->user();
        $userDB=Customer::where('email',$user->email)->first();
        $this->createOrUpdateUser($user);
        $request->session()->put('customer', $userDB);
        return redirect()->route('home');
    }
    //GITHUB
    public function githubRedirect(){
        return Socialite::driver('github')->redirect();
    }
    public function githubCallback(Request $request){
        $user = Socialite::driver('github')->user();
        $userDB=Customer::where('email',$user->email)->first();
        $this->createOrUpdateUser($user);
        $request->session()->put('customer', $userDB);
        return redirect()->route('home');
    }
    //FACEBOOK
    public function facebookRedirect(){
        return Socialite::driver('facebook')->redirect();
    }
    public function facebookCallback(Request $request){
        $user = Socialite::driver('facebook')->user();
        $userDB=Customer::where('email',$user->email)->first();
        $this->createOrUpdateUser($user);
        $request->session()->put('customer', $userDB);
        return redirect()->route('home');
    }

    private function createOrUpdateUser($data){
        $user=Customer::where('email',$data->email)->first();
        if(!$user){
            $customer = new Customer;
            $customer->name = $data->name;
            $customer->email = $data->email;
            $customer->password = "";
            $customer->phone = "";
            $customer->image = "2a.jpg";
            $customer->active = 1;
            $customer->save();
        }
    }
}
