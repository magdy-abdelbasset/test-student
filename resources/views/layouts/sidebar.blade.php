<div id="dw-s1" class="bmd-layout-drawer bg-faded">

    <div class="container-fluid side-bar-container">
        <header class="pb-0">
            <a class="navbar-brand">
                <object class="side-logo" data="./svg/logo-8.svg" type="image/svg+xml">
                </object>
            </a>
        </header>
        <p class="side-comment">القائمة</p>

        <ul class="side a-collapse ">
            <a class="ul-text"><i class="fas fa-tachometer-alt mr-1"></i> صفحاتى
                <!-- <span class="badge badge-info">4</span> -->
                <i class="fas fa-chevron-down arrow"></i></a>
            <div class="side-item-container ">
                <li class="side-item selected"><a href="{{route('home')}}"><i class="fas fa-angle-right mr-2"></i>لوحة التحكم</a>
                </li>
                <li class="side-item"><a href="{{route('students.index')}}"><i class="fas fa-angle-right mr-2"></i> الطلاب </a></li>
                <li class="side-item"><a href="{{ route('exam_result.index') }}"><i class="fas fa-angle-right mr-2"></i>نتائج الأمتحانات</a>
                </li>
  
            </div>
        </ul>
        <p class="side-comment">support</p>
        <li class="side a-collapse short ">
            <a href="https://github.com/magdy-abdelbasset" class="side-item  "><i
                    class=" fab fa-github mr-1"></i>GitHub</a>
        </li>
        
    </div>

</div>