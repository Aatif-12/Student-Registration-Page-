<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    //
    // function addStudent(Request $req)
    // {
    //     echo "Student added successfully";
    //     // $req->session()->put('data', $req->input());
    //     // return redirect('student');

    // }
    public function addStudent(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        $student = DB::table('users')->insert([
            'name' => $req->name,
            'email' => $req->email,
            'phone' => $req->phone
        ]);

        echo "Student added successfully";
    }
}
