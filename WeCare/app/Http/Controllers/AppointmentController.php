<?php

namespace App\Http\Controllers;

use App\model\department;
use App\model\slot;
use App\model\doctor;
use App\model\patient;
use App\model\appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function store(Request $request){
        $appointment = new appointment();

    }

    public function page(){


        $department = department::all();
        return view('appointment')->with('department',$department);

    }
    public function finddoctor(Request $request){


        $data = doctor::select('id','doctor_name')->where('department_department_id',$request->id)->take(100)->get();
        return response()->json($data);

    }


    public function findslot(Request $request){


        $data = slot::select('date','id')->where('doctor_doctor_id',$request->id)->take(100)->get();
        return response()->json($data);

    }

    public function findtime(Request $request){


        $data = slot::select('time','id')->where('id',$request->id)->take(100)->get();
        return response()->json($data);

    }

    public function submit(Request $request){
        $slot = new slot();
        $x= $request->input('slot');
        $slot = slot::select('date')->where('id',$x)->get();

        $appointment = new appointment();
        $appointment->patient_phone = $request->input('mobile');
        $appointment->doctor_doctor_id = $request->input('doctorId');
        $appointment->stot_date =  $slot;
        $appointment->stot_time = $request->input('time');
        $appointment->patient_name=$request->input('name');
        $appointment->patient_age=$request->input('age');
        $appointment->patient_gender=$request->input('gender');
        $appointment->save();

        return redirect('/home');

    }

}
