<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function logout()
    {
        //$request->session()->invalidate();
        Session::put('user', null);
        return redirect('admin/');
    } 

    public function login(Request $request)
    {

        if (Session::has('user')) {
            $user = $request->Session::get('user');
            return redirect('admin/dashBoard');
        }
        return view('admin/login/login');
    }

    public function checkLogin(Request $request)
    {
        $email = $request->email;
        $pwd = $request->pwd;
        $user = DB::table('staffs')->where('email', $email)->first();
        $count_user = DB::table('staffs')->get();

        $userx = count($count_user);

        Session::put('userC', $userx);
        $order = DB::table('order')->get();

        $orderx = count($order);

        $cusX = DB::table('customers')->get();

        $cusC = count($cusX);

        Session::put('cusC', $cusC);
        Session::put('order', $orderx);
        //NẾU USER KHÔNG NULL VÀ PASSWORD GIỐNG THÌ LƯU LẠI GIÁ TRỊ VÀO SS
        if ($user != null && $user->password == $pwd) {
            // $request->session()->push('user', $user);
            Session::put('user', $user);
            Session::put('admin_name', $user->name);
            Session::put('admin_id', $user->id);
            Session::put('admin_role', $user->role);
            //CHẶN KHI TÀI KHOẢN BỊ KHOÁ
            return redirect("admin/dashBoard");
        } else {
            return redirect('admin/')->with('message', 'Your username or password may be incorrect');
        }
    }
}
