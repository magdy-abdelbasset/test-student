 @if($item['can'])
    <!-- Begin::Edit -->
    <a
        href="{{ $item['href'] }}"
        class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3"
        title="Edit details"
    >
        <span class="svg-icon svg-icon-md svg-icon-primary">
            <i class="icon-2x text-primary-50 flaticon2-correct"></i>
        </span>
    </a>
    <!-- End::Edit -->
@endif
