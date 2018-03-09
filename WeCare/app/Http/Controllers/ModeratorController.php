<?php

namespace App\Http\Controllers;

use App\model\moderator;
use App\model\department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModeratorController extends Controller
{
    public function login(Request $request)
    {
        $userEmail = $request->input('email');
        $userPassword = $request->input('password');


        $check = DB::table('moderators')->where(['moderator_email'=>$userEmail,'moderator_password'=>$userPassword])->get();

        $id = DB::table('moderators')
            ->select('id')
            ->where('moderator_email','=', $userEmail)
            ->where('moderator_password','=', $userPassword)
            ->get();
        //return dd($id);

       if (count($check) >0){
            return view('moderator-home')->with('moderator',$check);
        }

        else
            echo 'faild';
    }


    public function store(Request $request)
    {
        $moderator = new moderator();
        $moderator->moderator_name = $request->input('moderatorName');
        $moderator->moderator_email = $request->input('moderatorEmail');
        $moderator->moderator_birthday = $request->input('moderatorBirthday');
        $moderator->moderator_password = $request->input('moderatorPassword');
        $moderator->moderator_gender = $request->input('moderatorGender');
        $moderator->moderator_info = $request->input('moderatorInfo');
        $moderator->department_department_name = $request->input('moderatorDepartment');
        $moderator->moderator_cell = $request->input('moderatorMobile');
        $moderator->save();
        return redirect('addModerator');
    }


    public function show(moderator $moderator)
    {
        $moderators = moderator::all();
        return view('viewModerator')->with('moderators',$moderators);
    }


    public function edit($id)
    {
        $moderator = moderator::find($id);
        $department = department::all();
        return view('editModerator')->with('moderator',$moderator)->with('department',$department);
    }


    public function update(Request $request)
    {
        $id = $request->input('id');
        $moderator = moderator::find($id);
        $moderator = new moderator();
        $moderator->moderator_name = $request->input('moderatorName');
        $moderator->moderator_email = $request->input('moderatorEmail');
        $moderator->moderator_birthday = $request->input('moderatorBirthday');
        $moderator->moderator_password = $request->input('moderatorPassword');
        $moderator->moderator_gender = $request->input('moderatorGender');
        $moderator->moderator_info = $request->input('moderatorInfo');
        $moderator->department_department_name = $request->input('moderatorDepartment');
        $moderator->moderator_cell = $request->input('moderatorMobile');
        $moderator->save();
        return redirect('viewModerator');
    }

    public function delete($id){
        moderator::find($id)->delete();
        return redirect('viewModerator');
    }


    public function findmoderatorname(Request $request){


        $data = moderator::select('id','moderator_name')->where('department_department_id',$request->id)->take(100)->get();
        return response()->json($data);

    }
}
