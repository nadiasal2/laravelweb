<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; //Mengimpor kelas Request
use App\Models\Student; //mengimpor model Students
use App\Models\Kelas;

class StudentsController extends Controller
{
    // Fungsi baru bernama index
    public function index()
    {
        return view('student.all', [
            "title" => "Students",
            "student" => Student::all()
        ]);
    }

    public function show(Student $student)
    {
        return view('student.detail', [ 
            "title" => "detail-student",
            "student" => $student
        ]);
    }

    public function create()
    {
        return view('student.create', [
            "title" => "create",
            "kelas" => Kelas::all()
        ]);
    }

    public function update(Request $request, Student $student)
    {
        $validateData = $request->validate([
            'nis'       => 'required',
            'nama'      => 'required|max:225',
            'kelas_id'  => 'required',
            'tgl_lahir' => 'required',
            'alamat'    => 'required',
        ]);

        echo $student->id;

        $result = Student::where('id', $student->id)->update($validateData);
        if ($result) {
            return redirect('/student/all')->with('success', 'Data Siswa berhasil diubah !');
        }
       
    }


    public function store(Request $request)

    {
        $validateData = $request->validate ([
            'nis'       => 'required|max:255',
            'nama'      => 'required|max:255',
            'kelas_id'     => 'required',
            'tgl_lahir' => 'required',
            'alamat'    => 'required',

            
        ]);

        $result = Student::create($validateData);
        if ($result){
            return redirect('/student/all')->with('success','Data siswa berhasil ditambahkan!');

        }
    }

    public function destroy(Student $student)
    {
        $result = Student::destroy($student->id);

        if ($result) {
            return redirect('/student/all')->with('success', 'Data berhasil dihapus !');
        }
    }

    public function edit(Student $student)
    {
        return view('student.edit', [
            "title" => "edit-data",
            "kelas" => Kelas::all(),
            "student" => $student
        ]);
    }
}
