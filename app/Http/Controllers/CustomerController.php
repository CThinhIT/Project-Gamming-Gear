<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        return view('login.register', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('login.register');
    }
    public function login()
    {
        return view('login.login');
    }
    public function processLogin(Request $request)
    {
        $u = $request->email;
        $p = md5($request->password);
        $customer = Customer::where('email', $u)->first();

        if (!$customer) {
            return redirect()->route('login')->with('alert', 'Invalid username or password');
        }
        if ($p !== $customer->password) {
            return redirect()->route('login')->with('alert', 'Invalid username or password');
        }
        if ($customer->active == 0) {
            return redirect()->route('login')->with('alert', 'Your account has been blocked');
        }
        
        //luu thong tin dang nhap vao session 
        $request->session()->put('customer', $customer);
        $request->session()->put('cus_id', $customer->id);
        Session::put('customer',$customer);
        Session::put('cus_id',$customer->id);
        return redirect()->route('home');
    }

    public function logout_cus(Request $request)
    {
        $request->session()->forget('customer');
        return redirect()->route('home');
    }
    public function store(Request $request)
    {
        $error = "Password and Confirm Password are not the same";
        $customer = new Customer;
        $customer->name = $request->name;
        $customer->email = $request->email;
        if ($request->password != $request->con_pwd) {
            return view('login.register', compact('error'));
        } else {
            $customer->password = md5($request->password);
        }

        if ($request->hasFile('image_avatar_profile')) {
            $destination_path = 'public/images/profile';
            $image = $request->file('image_avatar_profile');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image_avatar_profile')->storeAs($destination_path, $image_name);

            $image->move('profiles/image', $image_name);
            $customer->image = $image_name;
        }
        

        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->active = 1;
        $customer->save();
        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        $account = Customer::where('email', '=', session()->get('customer')->email)->first();
        return view('profile.profile', compact('account'));
    }
    public function show_user()
    {
        $customers = Customer::all();
        return view('admin.customer.user', compact('customers'));
    }
    public function handleAccount(Request $request)
    {
        $customer = Customer::where('id', $request->id)->first();
        if ($customer->active == 0) {
            $customer->active = 1;
        } else {
            $customer->active = 0;
        }
        $customer->save();
        return redirect()->route('show_user');
    }

    //Store image


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function changePassword(Request $request)
    {
        $customer = Customer::where('email', '=', session()->get('customer')->email)->first();
        if ($customer->password != md5($request->current)) {
            return redirect()->route('editPassword')->with('alert', 'Your password is incorrect');
        }
        $customer->password = md5($request->new);
        $customer->save();
        $request->session()->put('customer', $customer);
        return redirect()->route('profile')->with('alert', 'Your password has been changed');
    }
    public function destroy(Customer $customer)
    {
        //
    }
}

