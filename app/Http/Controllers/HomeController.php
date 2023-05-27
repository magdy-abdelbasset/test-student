<?php

namespace App\Http\Controllers;

use App\Models\ExamResult;
use App\Models\Student;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Builder\Stub;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $success = ExamResult::whereRaw('success_result  <= result')->count();
        $all = ExamResult::count();
        $students = Student::count();
        $last_students = Student::orderBy('created_at','DESC')->take(8)->get();

        return view('home' ,compact('all','success','students','last_students'));
    }
}
