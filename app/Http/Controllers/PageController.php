<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $menu = 'home';
        return view('home', compact('menu'));
    }

    public function mahasiswa()
    {
        $menu = 'mahasiswa';
        return view('mahasiswa', compact('menu'));
    }

    public function proses(Request $request)
    {
        $nim = $request->nim;
        $nama= $request->nama;

        return view('proses', compact('nim', 'nama'));
    }

    public function courses()
    {
        $menu = 'courses';
        return view('courses', compact('menu'));
    }

    public function students()
    {
        $menu = 'students';
        return view('students', compact('menu'));
    }

    public function grades()
    {
        $menu = 'grades';
        return view('grades', compact('menu'));
    }

    public function assignments()
    {
        $menu = 'assignments';
        return view('assignments', compact('menu'));
    }
}
