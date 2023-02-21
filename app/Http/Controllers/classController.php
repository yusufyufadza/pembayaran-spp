<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Models\classModel;
use Illuminate\Http\Request;

class classController extends Controller
{
    public function index()
    {
        $title = "Daftar Kelas";
        $classes = classModel::get();
        return view('contents.class.showClass', compact('title', 'classes'));
    }

    public function show($id)
    {
        $title = "Detail Kelas";
        $classes = classModel::where('id', $id)->get();
        $students = student::where('id', $id)->get();
        return view('contents.class.detailClass', compact('title', 'classes', 'students'));
    }
}
