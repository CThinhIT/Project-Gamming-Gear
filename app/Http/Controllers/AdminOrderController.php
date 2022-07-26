<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminOrderController extends Controller
{
    public function index()
    {
        $order = DB::table('order')->get();

        $orderx = count($order);

        $cusX = DB::table('customers')->get();

        $cusC = count($cusX);

        Session::put('cusC', $cusC);
        Session::put('order', $orderx);
        return view('admin.order.index')->with(['order' => $order]);
    }
    public function create()
    {
        return view('admin.order.create');
    }
    public function delete($id)
    {
        $b = DB::table('order')
            ->where('id', intval($id))
            ->delete();
        return redirect()->action([AdminOrderController::class, 'index']);
    }
    public function update(Request $request, $id)
    {
        $stf = DB::table('order')
            ->where('id', intval($id))
            ->first();
        return view('admin.order.edit', ['o' => $stf]);
    }

    public function postUpdate(Request $request, $id)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $role = $request->input('role');
        $b = DB::table('order')
            ->where('id', intval($id))
            ->update(['name' => $name, 'email' => $email, 'role' => $role]);
        return redirect()->action([AdminOrderController::class, 'index']);
    }
}
