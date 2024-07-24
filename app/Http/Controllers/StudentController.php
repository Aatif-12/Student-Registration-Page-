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

        // echo "Student added successfully";
        return redirect('list-student');


    }
    function listStudent()
    {
        // $students = Student::all();
        $students = Student::paginate(2);
        return view('listStudent', ['students' => $students]);

        // echo "Student List";

    }

    function deleteStudent($id)
    {
        // $student = Student::find($id);
        // $student->delete();
        $isdeleted = Student::destroy($id);
        return redirect('list-student');
    }

    function edit($id)
    {
        // return view('edit');
    //    return $isedited = Student::edit($id);
        $student = Student::find($id);
        return view('edit', ['data' => $student]);
        // return view('edit-student', ['student' => $student]);
    }

    function editStudent(Request $req, $id)
    {

        $student = Student::find($id);
        $student->name = $req->name;
        $student->email = $req->email;
        $student->phone = $req->phone;
        // echo "updated Sucessfully";

        if($student->save()){
            return redirect('list-student');
        }else{
            return "Update Operation Failed";
        }
    }

    function search(Request $req)
    {
        $searchStudent = Student::where('name', 'like', "%$req->search%")->get();
        return view('listStudent', ['students' => $searchStudent]);

        // return $req -> search;
    }
}
