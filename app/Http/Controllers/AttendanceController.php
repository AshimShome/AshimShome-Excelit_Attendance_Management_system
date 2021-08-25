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
        return redirect()->back();
    }

    // employee attendance view
    public function view_attendance()

    {


        $attendances = Attendance::join('employees', 'attendances.employee_id', '=', 'employees.id')
            ->get(['attendances.*', 'employees.first_name','employees.last_name']);

        $present=Attendance::where('status','=','present')->count();


        $absent =Attendance::where('status','=','absent')->count();
        $leave =Attendance::where('status','=','leave')->count();
        $offday =Attendance::where('status','=','off day')->count();



        return view('attendance.view-attendance',compact('attendances','present','absent','leave','offday'));
    } // end method


}



