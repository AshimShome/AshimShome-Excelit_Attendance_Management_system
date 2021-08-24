<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AttendanceController extends Controller
{
    public function attendance_index(){
       $employees=Employee::select('id','first_name','last_name')->get();

        return view('attendance.add-attendance',compact('employees'));
    }
    public function store(Request  $request)
    {


        foreach ($request->employee_id as $emp_id)
        {
            Attendance::create( [
                "employee_id" => $emp_id,
                "status" => $request->status[$emp_id],
                "date" => $request->date,
            ]);
        }
    }
}



