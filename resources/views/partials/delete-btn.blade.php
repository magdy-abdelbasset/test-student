 @if($item['can'])
    <!-- Begin::Delete -->
    <form
        action="{{ $item['action'] }}"
        class=""
        title="Delete"
        method="post"
        style="    margin: 0 !important;
    padding: 0 !important;"
    >
        @csrf
        @method('DELETE')
        <button
            type="submit"
            onclick="return confirm('Are you sure?')"
            class="btn svg-icon ps-2 pe-2 svg-icon-md svg-icon-dange h-100 w-100 btn btn-icon btn-light btn-hover-danger btn-sm d-flex flex-row justify-content-center align-items-center"
        >
        <span class="delete dataTable"><i class="fa-solid fa-trash-can"></i></span>
            {{-- <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="24px"
                height="24px"
                viewBox="0 0 24 24"
                version="1.1"
            >
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24"></rect>
                    <path
                        d="
                            M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22
                            18,21.3284271 18,20.5 L18,8 L6,8 Z
                        "
                        fill="#000000"
                        fill-rule="nonzero"
                    ></path>
                    <path
                        d="
                            M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3
                            10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5
                            L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237
                            19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z
                        "
                        fill="#000000"
                        opacity="0.3"
                    ></path>
                </g>
            </svg> --}}
        </button>
    </form>
    <!-- End::Delete -->
@endif
