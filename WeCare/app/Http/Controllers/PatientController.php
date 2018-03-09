<?php

namespace App\Http\Controllers;

use App\model\doctor;
use App\model\appointment;
use App\model\patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    public function index(){
        return view('patient-view');
    }
    public function search(Request $request){
        $num = $request->input('number');
        $patient = DB::table('appointments')
            ->select('*')
            ->where('patient_phone','=', $num)
            ->get();
        return view('confirm-patient')->with('patient',$patient);

    }


    public function view(){

        /*$doctorName = DB::table('doctors')
             ->select('doctor_name')
             ->where('moderator_moderator_id','=', $id)
             ->get();
         $doctorId = DB::table('doctors')
             ->select('id')
             ->where('moderator_moderator_id','=', $id)
             ->get();
         $this->viewPatient($doctorId);

         $patient = DB::table('appointments')
             ->select('patient_name')
             ->where('doctor_doctor_id','=', $doctorId)
             ->get();

         return $patient;*/
        $appointment = appointment::all();

       return view ('moderator-patient')->with('appointment',$appointment);
    }

    public function doctorView($id){
        $appointment = DB::table('appointments')
            ->select('*')
            ->where('doctor_doctor_id','=', $id)
            ->get();
        //$appointment = appointment::find($id);
        return view('doctor-patient-view')->with('appointment',$appointment);
    }

    public function delete($id){
        $appointment = appointment::find($id);
        $appointment->delete();
        $appointment = appointment::all();
        return view('moderator-patient')->with('appointment',$appointment);
    }

}
