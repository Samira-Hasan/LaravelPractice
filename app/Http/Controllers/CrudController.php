<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Model\Students;

class CrudController extends Controller
{
   public function index()
   {
       return view('crud/index');
   }

    public function view()
    {
        $students = Students::all();
        return view('crud/view')->with('students', $students);
    }

    public function saveStudent(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'address' => 'required',
        ]);


        $students = new Students();
        $students->first_name = $request->input('first_name');
        $students->last_name = $request -> input('last_name');
        $students->email = $request->input('email');
        $students->password = $request->input('password');
        $students->address = $request->input('address');
        $students->save();
        session::flash('message', 'Students info save successfully');
        return redirect('/');
    }

    public function delete($id)
    {
        Students::find($id)->delete();
        return redirect('/view');
    }

    public function edit($id)
    {
       $student = Students::find($id);
       return view('crud/edit')->with('student', $student);
    }

    public function updateStudent(Request $request)
    {
        $id = $request->input('id');
        $student = Students::find($id);

        $student->first_name = $request->input('first_name', 50);
        $student->last_name = $request -> input('last_name', 50);
        $student->email = $request->input('email', 50);

        $student->address = $request->input('address');
        $student->save();

        return redirect('/view');
    }
}
