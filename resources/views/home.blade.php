@extends('layouts.app')

@section('content')
    {{-- <main class="bmd-layout-content"> --}}
    <div class="container-fluid ">

        <!-- content -->
        <!-- breadcrumb -->

        <div class="row  m-1 pb-4 mb-3 ">
            <div class="col-xs-12  col-sm-12  col-md-12  col-lg-12 p-2">
                <div class="page-header breadcrumb-header ">
                    <div class="row align-items-end ">
                        <div class="col-lg-8">
                            <div class="page-header-title text-left-rtl">
                                <div class="d-inline">
                                    <h3 class="lite-text ">لوحة التحكم</h3>
                                    <span class="lite-text text-gray">تقارير وتحليل</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row m-1 mb-2">
            <div class="col-xl-3 col-md-6 col-sm-6 p-2">
                <div class="box-card mini animate__animated animate__flipInY   "><i class="fab far fa-chart-bar b-first"
                        aria-hidden="true"></i>
                    <span class="c-first">نسبة النجاح</span>
                    <span>{{ ($success / $all) * 100 }}%</span>
                    <p class="mt-3 mb-1 text-center"><i class="far fas fa-wallet mr-1 c-first"></i> يدل على تعلم الطلاب</p>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-6 p-2">
                <div class="box-card mini animate__animated animate__flipInY    "><i class="fab far fa-chart-bar b-first"
                        aria-hidden="true"></i>
                    <span class="c-second">عدد الطلاب</span>
                    <span>{{ $students }}</span>
                    <p class="mt-3 mb-1 text-center"><i class="far fas fa-wallet mr-1 c-first"></i>حجم الطلاب فى الأكاديمية
                    </p>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-6 p-2">
                <div class="box-card mini animate__animated animate__flipInY   "><i class="fab far fa-chart-bar b-first"
                        aria-hidden="true"></i>
                    <span class="c-third">عدد الأمتحانات النجاحة</span>
                    <span>{{ $success }}</span>
                    <p class="mt-3 mb-1 text-center"><i class="far fas fa-wallet mr-1 c-first"></i>
                        يدل على أداء الأكاديمية
                    </p>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-6 p-2">
                <div class="box-card mini animate__animated animate__flipInY   "><i class="fab far fa-chart-bar b-first"
                        aria-hidden="true"></i>
                    <span class="c-forth">عدد الأمتحانات الراسبة</span>
                    <span>{{ $all - $success }}</span>
                    <p class="mt-3 mb-1 text-center"><i class="far fas fa-wallet mr-1 c-first"></i>
                        يدل على أداء الأكاديمية
                    </p>
                </div>
            </div>
        </div>
        <div class="row m-1">
            <div class="col-xs-1 col-sm-1 col-md-8 col-lg-8 p-2">
                <div class="card shade h-100">
                    <div class="card-body">
                        <h5 class="card-title">مجموع الدرجات لأحر طلاب</h5>

                        <hr>
                        @php
                        $labels = [];
                        
                        $parcents =[];
                            foreach ($last_students as $key => $student) {
                                array_push( $labels,$student->name);
                                $parcent = ($student->exam_results->sum('result') /$student->exam_results->sum('max_result'))*100;
                                array_push($parcents,$parcent); 
                            }    
                        @endphp
                        <canvas id="myChart5"
                        data-label="{{json_encode($labels)}}"
                        data-parcent="{{json_encode($parcents)}}"
                        ></canvas>
                        <hr class="hr-dashed">
                        <p class="text-center c-danger">Example of bar chart</p>
                    </div>

                </div>
            </div>
            <div class="col-xs-1 col-sm-1 col-md-4 col-lg-4 p-2">
                <div class="card shade h-100">
                    <div class="card-body" >
                        <h5 class="card-title"> نسبة النجاح</h5>

                        <hr>
                        <canvas data-chart="{{json_encode([$all-$success,$success])}}" id="myChart4" width="10" height="11"></canvas>
                        <hr class="hr-dashed">
                        <p class="text-center c-danger">Example of Doughnut chart</p>
                    </div>

                </div>
            </div>


        </div>

        <div class="row m-1">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-2">
                <div class="card shade h-100">
                    <div class="card-body">
                        <h5 class="card-title"> اخر طلاب من حيث تاريخ التسجيل</h5>

                        <hr>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">اسم الطالب</th>
                                    <th scope="col">تاريخ التسجيل</th>
                                    <th scope="col"> معرف الطالب</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($last_students as $student)
                                    <tr>
                                        <th scope="row">{{ $student->id }}</th>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->created_at }}</td>
                                        <td>{{ $student->uid }}</td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>



    </div>
    {{-- </main> --}}
@endsection
