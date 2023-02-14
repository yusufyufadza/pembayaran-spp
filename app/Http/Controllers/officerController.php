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
        $officer = officer::all();
        return view('contents.officer.showOfficer',compact('officer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contents.officer.createOfficer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $validate = Validator::make($data, [
            'username' => 'required|string|unique:off$officer',
            'password' => 'required|string|min:6',
            'name_officer' => 'required|string|max:255',
            'level' => 'required|in:admin,officer'
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate);
        }

        $username = officer::where('username', $data['username'])->first();

        if ($username) {
            return back()->with(['username' => 'Username sudah digunakan !']);
        }

        officer::create([
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'name_officer' => $data['name_officer'],
            'level' => $data['level'],

        ]);

        return redirect('/content/officer')->with('success', 'Data berhasil ditambahkan');

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
        $officer = officer::where('id_officer', $id_officer)->first();

        return view ('contents.officer.editOfficer',compact('Officer'));
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
        $data = $request->all();

        $officer = officer::find($id_officer);

        $officer->update([
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'nama_officer' => $data['nama_officer'],
            'level' => $data['level'],
        ]);

        return redirect('/officer/showOfficer')->with('success','Data Petugas Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_officer)
    {
        $officer = officer::findOrFail($id_officer);

        $officer->delete();

        return redirect('/officer/showOfficer')->with('success','Petugas berhasil dihapus');
    }

    public function detail($id_officer)
    {
        $officer = officer::where('id_officer',$id_officer)->first();

        return view('contents.officer.detailOfficer',compact('officer'));
    }
}
