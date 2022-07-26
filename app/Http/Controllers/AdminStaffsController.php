<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

session_start();
class AdminStaffsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function AuthLogin()
    {
        $admin_id = Session::get('admin_id');
        if ($admin_id != null) {
            return redirect('admin/staffs/');
        } else {
            return redirect('admin/');
        }
    }
    public function index()
    {
       
        $staffs = DB::table('staffs')->get();
        return view('admin.staffs.staffs')->with(['staffs' => $staffs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.staffs.create');
    }
    public function postCreate(Request $request)
    {
        // nhận tất cả tham số vào mảng product
        $staff = $request->all();
        // xử lý upload hình vào thư mục
        DB::table('staffs')->insert([
            'name' => $staff['name'],
            'email' => $staff['email'],
            'password' => $staff['pwd'],
            'role' => $staff['role'],
        ]);
        return redirect()->action([AdminStaffsController::class, 'index']);
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
        $stf = DB::table('staffs')
            ->where('id', intval($id))
            ->first();
        return view('admin.staffs.edit', ['p' => $stf]);
    }

    public function postUpdate(Request $request, $id)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $role = $request->input('role');
        $b = DB::table('staffs')
            ->where('id', intval($id))
            ->update(['name' => $name, 'email' => $email, 'role' => $role]);
        return redirect()->action([AdminStaffsController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $b = DB::table('staffs')
            ->where('id', intval($id))
            ->delete();
        return redirect()->action([AdminStaffsController::class, 'index']);
    }
}
