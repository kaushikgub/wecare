<?php

namespace App\Http\Controllers;

use App\model\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login (request $request)
    {
        $userName = $request->input('adminName');
        $userPassword = $request->input('adminPassword');

        $check = DB::table('admins')->where(['name'=>$userName,'password'=>$userPassword])->get();

        if (count($check) >0){

            return redirect('/adminhome');
    }

    else
        echo 'faild';
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
        $admin = new admin();
        $admin->name = $request->input('adminName');
        $admin->id = $request->input('adminId');
        $admin->password = $request->input('adminPassword');
        $admin->save();
        return redirect('/addadmin');
    }

    public function show(admin $admin)
    {
        $admins = admin::all();
        return view('showadmin')->with('admins',$admins);
    }

    public function edit(admin $admin)
    {
        //
    }

    public function update(Request $request, admin $admin)
    {
        //
    }

    public function destroy(admin $admin)
    {

    }

    public function adminLogIn(){
        return view('adminLogIn');}
}
