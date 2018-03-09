<?php

namespace App\Http\Controllers;

use App\model\department;
use App\model\doctor;
use App\model\moderator;
use Illuminate\Http\Request;

class myController extends Controller
{
    public function showHome(){
        $department = department::all();
        return view('home')->with('department',$department);
    }

    public function addAdmin(){
        return view('addAdmin');
    }

    public function adminLogIn(){
        return view('adminLogIn');
    }

    public function adminHome(){
        return view('admin');
    }

    public function addDoctor(){
        $moderator = moderator::all();
        $department = department::all();
        return view('addDoctor')->with('moderator',$moderator)->with('department',$department);
    }

    public function viewDoctor(){
        return view('viewDoctor');
    }

    public function addModerator(){
        $department = department::all();
        return view('addModerator')->with('department',$department);
    }

    public function doctorLogin(){
    return view('doctor-login');
    }

    public function moderatorLogin(){
        return view('moderator-login');
    }


    public function moderatorHome(){
        return view('moderator-home');
    }

    public function homeDoctor(){
        return view('doctor-home');
    }

    public function addSlot(){
        $doctor = doctor::all();
        return view('slot-add')->with('doctor',$doctor);
    }

}
