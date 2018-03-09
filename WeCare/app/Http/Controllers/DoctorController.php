<?php

namespace App\Http\Controllers;

use App\model\doctor;
use App\model\department;
use App\model\moderator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{

    public function index()
    {
        //
    }


    public function login(Request $request)
    {
        $userEmail = $request->input('email');
        $userPassword = $request->input('password');

        $check = DB::table('doctors')->where(['doctor_email'=>$userEmail,'doctor_password'=>$userPassword])->get();

        if (count($check) >0){
           return view('doctor-home')->with('doctor',$check);
        }

        else
            echo 'faild';
    }


    public function store(Request $request)
    {
        $doctor = new doctor();
        $doctor->doctor_name = $request->input('doctorName');
        $doctor->doctor_email = $request->input('doctorEmail');
        $doctor->doctor_birthday = $request->input('doctorBirthday');
        $doctor->doctor_password = $request->input('doctorPassword');
        $doctor->doctor_gender = $request->input('doctorGender');
        $doctor->doctor_info = $request->input('doctorInfo');
        $doctor->department_department_id = $request->input('doctorDepartment');
        $doctor->moderator_moderator_id = $request->input('modetaroeId');
        $doctor->doctor_cell = $request->input('doctorMobile');
        $doctor->save();
        return redirect('/addDoctor');
    }


    public function show(doctor $doctor)
    {
        $doctors = doctor::all();
        return view('viewDoctor')->with('doctors',$doctors);
    }


    public function edit($id)
    {
        $moderator = moderator::all();
        $department = department::all();
        $doctor = doctor::find($id);
        return view('editDoctor')->with('doctor',$doctor)->with('moderator',$moderator)->with('department',$department);
    }


    public function delete($id){

        $doctor = doctor::find($id);
        $doctor->delete();
        return redirect('viewDoctor');
    }


    public function update(Request $request)
    {
        $id = $request->input('id');
        $doctor = doctor::find($id);
        $doctor = new doctor();
        $doctor->doctor_name = $request->input('doctorName');
        $doctor->doctor_email = $request->input('doctorEmail');
        $doctor->doctor_birthday = $request->input('doctorBirthday');
        $doctor->doctor_password = $request->input('doctorPassword');
        $doctor->doctor_gender = $request->input('doctorGender');
        $doctor->doctor_info = $request->input('doctorInfo');
        $doctor->department_department_id = $request->input('doctorDepartment');
        $doctor->moderator_moderator_id = $request->input('modetaroeId');
        $doctor->doctor_cell = $request->input('doctorMobile');
        $doctor->save();
        return redirect('/viewDoctor');
    }


    public function destroy(doctor $doctor)
    {
        //
    }
}
