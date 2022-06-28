<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Student;
use Barryvdh\DomPDF\Facade as PDF;

class StudentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $students = Student::paginate(8);
        return view('Student.studentliste', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('Student.formulaire');
        return view('Student.carte');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'cycle' => 'required',
            'niveau' => 'required',
            'annee' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $student = new Student();
        $student->matricule = $request->annee . substr(2, 4) . $request->prenom[0] . $request->nom[0] . rand(2, 9999);
        $student->nom = $request->nom;
        $student->prenom = $request->prenom;
        $student->email = $request->email;
        $student->cycle = $request->cycle;
        $student->niveau = $request->niveau;
        $student->annee = $request->annee;
        //upload image
        $file = $request->file('photo');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('IMAGES/photos/', $filename);
        $student->photo = $filename;

        $student->save();






        return redirect()->route("Student.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);   
        return view('Student.carte', compact('student'));
       
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('Student.index')->with('success', 'Student deleted successfully');
    }
public function bar()
{
return view('test');
}
    
}
