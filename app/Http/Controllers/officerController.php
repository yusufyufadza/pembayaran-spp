<?php

namespace App\Http\Controllers;

use App\Models\officer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class officerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $title = "Daftar petugas";
        $officer = officer::get();
        return view('contents.officer.showOfficer', compact('title', 'officer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tambah Petugas";
        $classes = officer::get();
        // dd($classes);
        return view('contents.officer.createOfficer', compact('title', 'classes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            // dd($request->all());
            $validatedData = $request->validate([
             'username' => 'required',
             'password' => 'required',
             'name_officer' => 'required',
             'level' => 'required',
            ]);

            officer::create($validatedData);

            return redirect('/officer')->with('success','Petugas ' .$request->name. ' berhasil ditambahkan');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_officer)
    {
        $title = "Edit Petugas";
        $officer = officer::where('id', $id_officer)->first();
        return view('contents.officer.editOfficer', compact('title', 'officer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_officer)
    {
        $validatedData = $request->validate([
            'username'                   => 'required',
            'name_officer'               => 'required',
            'level'                      => 'required',
            ]);

            officer::where('id', $id_officer)->update($validatedData);

            return redirect('/officer')->with('pesan', 'berhasil di upadate :)');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function detail($id_officer)
    {
        $title = "Detail Siswa";
        $officer = officer::where('id', $id_officer)->first();

        return view ('contents.officer.detailOfficer',compact('title', 'officer'));
    }

    public function destroy($id_officer)
    {
        officer::where('id',$id_officer)->delete();

        return redirect('/officer')->with('success','Petugas berhasil dihapus');
    }
}
