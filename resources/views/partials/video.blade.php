 @if($item['can'])

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-id="{{$row->id}}" data-bs-whatever="{{$row->name}}">
<i class='bx bxs-videos'></i>
</button>
@endif
