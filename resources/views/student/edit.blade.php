@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ __('crud.edit') . " " .__('students.single') }}</h5>
                {!! Form::open(['route' => ['students.update', $student->id], 'method' => 'patch','enctype'=>'multipart/form-data']) !!}
<div class="row">
                <div class="mb-3 col-6">
                    <label for="inputStudentId" class="form-label"> {{__('students.uid') }}</label>
                    <input value="{{ old('uid', $student->uid) }}" name="uid" type="text" class="form-control"
                        id="inputStudentId" placeholder="{{ __('crud.enter') . " " .__('students.uid') }}">
                </div>
                @error('uid')
                    <div class="alert alert-danger" role="alert">

                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
                <div class="mb-3 col-6">
                    <label for="inputNationalId" class="form-label">{{__('students.national_id') }}</label>
                    <input value="{{ old('national_id', $student->national_id) }}" name="national_id" type="text" class="form-control" id="inputNationalId
                    "
                        placeholder="{{ __('crud.enter') . " " .__('students.national_id') }}">
                </div>
                @error('national_id')
                    <div class="alert alert-danger" role="alert">

                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
                <div class="mb-3 col-6">
                    <label for="inputStudentName" class="form-label">{{ __('students.name') }}</label>
                    <input value="{{ old('name', $student->name) }}" name="name" type="text" class="form-control"
                        id="inputStudentName" placeholder="{{ __('crud.enter') . " " .__('students.name') }}">
                </div>
                @error('name')
                    <div class="alert alert-danger" role="alert">

                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
                <div class="mb-3 col-6">
                    <label for="inputStudentMobile" class="form-label">{{ __('students.mobile') }}</label>
                    <input value="{{ old('mobile', $student->mobile) }}" name="mobile" type="number" class="form-control"
                        id="inputStudentMobile" placeholder="{{ __('crud.enter') . " " .__('students.mobile') }}">
                </div>
                @error('mobile')
                    <div class="alert alert-danger" role="alert">

                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
                <div class="mb-3 col-6">
                    <label for="inputStudentParentMobile" class="form-label">{{ __('students.parent_mobile') }}</label>
                    <input value="{{ old('parent_mobile', $student->parent_mobile) }}" name="parent_mobile" type="number" class="form-control"
                        id="inputStudentParentMobile" placeholder="{{ __('crud.enter') . " " .__('students.parent_mobile') }}">
                </div>
                @error('parent_mobile')
                    <div class="alert alert-danger" role="alert">

                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
                <div class="mb-3 col-6">
                    <label for="inputWhatsApp" class="form-label">{{ __('students.whatsapp') }}</label>
                    <input value="{{ old('whatsapp', $student->whatsapp) }}" name="whatsapp" type="number"
                        class="form-control" id="inputWhatsApp" placeholder="{{ __('crud.enter') . " " .__('students.whatsapp') }}">
                </div>
                @error('whatsapp')
                    <div class="alert alert-danger" role="alert">

                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
                <div class="mb-3 col-6">
                    <label for="inputEmail" class="form-label"> {{ __('students.email') }}</label>
                    <input value="{{ old('email', $student->email) }}" name="email" type="email" class="form-control"
                        id="inputEmail" placeholder="{{ __('crud.enter') . " " .__('students.email') }}">
                </div>
                @error('email')
                    <div class="alert alert-danger" role="alert">

                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
                    
                <div class="mb-3 col-6">
                    <label for="formAddress" class="form-label">{{ __('students.address') }}</label>
                    <textarea name="address" class="form-control" id="formAddress" rows="3">{{ old('address', $student->address) }}</textarea>
                </div>
                <div class="mb-3 col-6">
                    <label for="formStudentNotes" class="form-label">{{__('students.notes') }}</label>
                    <textarea name="notes" class="form-control" id="formStudentNotes" rows="3">{{ old('notes', $student->notes) }}</textarea>
                </div>
                <div class="text-center">
                    <img width="200" height="200" src="{{ $student->image  }}" alt="" srcset="" />
                </div>
                <div class="mb-3 ">
                    <label for="formIdImage" class="form-label">{{__('students.image_id') }}</label>
                    <input name="image" class="form-control" type="file" id="formIdImage" accept="image/*">
                </div>
                @error('id_image')
                    <div class="alert alert-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
                <div class="text-center">
                    <button class="btn btn-light text-primary">{{__('crud.update') }}</button>
                </div>

                {!! Form::hidden('id', $student->id) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
