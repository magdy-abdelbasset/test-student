@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ __('crud.create') . ' ' . 'نتيجة' }}</h5>
                {!! Form::open(['route' => 'exam_result.store', 'enctype' => 'multipart/form-data']) !!}
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="inputStudentId" class="form-label">إسم الطالب</label>
                            <select class="select2-basic-single w-100" name="student_id">
                                @foreach ($students as $student)
                                    <option value="{{ $student->id }}">{{ $student->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('student_id')
                            <div class="alert alert-danger" role="alert">

                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="inputmax_result" class="form-label">أفصى درجة</label>
                            <input value="{{ old('max_result', null) }}" name="max_result" min="0"
                                class="form-control" id="inputmax_result"  type="number" 
                    "
                                placeholder="{{ __('crud.enter') . ' ' . 'اقصى درجة' }}">
                        </div>
                        @error('max_result')
                            <div class="alert alert-danger" role="alert">

                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="inputStudentresult" class="form-label">درجة الطالب</label>
                            <input value="{{ old('result', null) }}" name="result" type="number" class="form-control"
                          min="0"      id="inputStudentresult"   placeholder="{{ __('crud.enter') . ' ' . 'درجة الطالب' }}">
                        </div>
                        @error('result')
                            <div class="alert alert-danger" role="alert">

                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="inputsuccess_result" class="form-label">درجة النجاح</label>
                            <input value="{{ old('success_result', null) }}" name="success_result" type="number" class="form-control"
                              min="0"  id="inputsuccess_result" placeholder="{{ __('crud.enter') . ' ' . 'درجة النجاح' }}">
                        </div>
                        @error('success_result')
                            <div class="alert alert-danger" role="alert">

                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="inputsubject"
                                class="form-label">موضوع الأمتحان</label>
                            <input value="{{ old('subject', null) }}" name="subject" type="text"
                                class="form-control" id="inputsubject"
                                placeholder="{{ __('crud.enter') . ' ' . 'موضوع الأمتحان' }}">
                        </div>
                        @error('subject')
                            <div class="alert alert-danger" role="alert">

                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
            </div>
            <div class="text-center">
                <button class="btn btn-dark">{{ __('crud.create') }}</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    </div>
@endsection
