@if($item['can'])
<!-- Begin::Edit -->
<a style="display: inline;"
    href="{{ $item['href'] }}"
    class="btn btn-icon btn-light btn-hover-danger btn-sm mx-3"
    title="Hidden And Delete"
>
    <span class="svg-icon m-auto svg-icon-md svg-icon-primary">
        <i class="mt-2 flaticon2-cross"></i>
    </span>
</a>
<!-- End::Edit -->
@endif 