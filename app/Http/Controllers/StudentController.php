<?php

namespace App\Http\Controllers;

use App\DataTables\StudentDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use App\Models\Branch;
use App\Models\Student;
use App\Utils\FileTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Html\Builder;

class StudentController extends Controller
{
    //
    use FileTrait;
    public function index( StudentDataTable $dataTable)
    {
        return $dataTable->render('partials.index-dataTable',['title'=>__('sideMenu.students')]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {
  
        $student =Student::create($this->handleData($request));
        $this->setImage('students/images/',$request->image,$student);

        toast(  __('messages.success'),'success');
        return redirect(route('students.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        
        return view('student.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentRequest $request,Student $student)
    {
         
        $student->update($this->handleData($request));
        $this->setImage('students/images/',$request->image,$student);
        toast(  __('messages.successU'),'success');

        return redirect(route('students.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        
        $student->delete();
        toast(  __('messages.successD'),'success');

        return redirect(route('students.index'));

    }
    private function handleData($request): array
    {

        /** Handle Data For Create And Update. **/
        $data = $request->only("uid","name","mobile","notes","national_id","whatsapp","email","address","parent_mobile");
        return $data;
    }

}
