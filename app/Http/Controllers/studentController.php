<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = student::all();
        return view('contents.student.showStudent',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contents.student.createStudent');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validatedData = $request->validate([
        'nisn' => 'required|unique:students',
        'nis' => 'required',
        'name' => 'required',
        'address' => 'required',
        'phone_number' => 'required',
       ]);

       student::create($validatedData);

       return redirect('/student')->with('success','Siswa ' .$request->name. ' berhasil ditambahkan');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nisn)
    {
        $student = student::where('nisn',$nisn)->first();

        return view('contents.student.editStudent',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nisn)
    {
        $validatedData = $request->validate([
            'nisn' => 'required|unique:students',
            'nis' => 'required',
            'name' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
           ]);

        student::where('nisn',$nisn)->update($validatedData);

        return redirect('/student')->with('success','Siswa berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nisn)
    {
        $student = student::findOrFail($nisn);

        $student->delete();

        return redirect('/student')->with('success','Siswa berhasil dihapus');
    }
    public function detail ($nisn)
    {
        $student = student::where('nisn',$nisn)->first();

        return view('contents.student.detailStudent',compact('student'));
    }
}
