<?php

namespace App\Http\Controllers;
use App\DataTables\ExamResultDataTable;
use App\Http\Requests\ExamResultRequest;
use App\Models\ExamResult;
use App\Models\Student;
use App\Utils\FileTrait;

class ExamResultController extends Controller
{
    use FileTrait;
    public function index( ExamResultDataTable $dataTable)
    {
        return $dataTable->render('partials.index-dataTable',['title'=>'درجات الأمتحانات']);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $students = Student::all();
        return view('exam_result.create',compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExamResultRequest $request)
    {
  
        ExamResult::create($this->handleData($request));
        toast(  __('messages.success'),'success');
        return redirect(route('exam_result.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ExamResult $exam_result)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ExamResult $exam_result)
    {
        
        $students = Student::all();
        return view('exam_result.edit',compact('exam_result','students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ExamResultRequest $request,ExamResult $exam_result)
    {
         
        $exam_result->update($this->handleData($request));

        toast(  __('messages.successU'),'success');
        return redirect(route('exam_result.index'));
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
        return redirect(route('exam_result.index'));

    }
    private function handleData($request): array
    {

        /** Handle Data For Create And Update. **/
        $data = $request->only("student_id","max_result","result","success_result","subject");
        return $data;
    }

}
