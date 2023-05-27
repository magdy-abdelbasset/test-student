 @if($item['can'])

<button type="button" class="btn btn-primary" data-bs-id="{{$row->id}}"  data-bs-toggle="modal" data-bs-target="#exampleModal2" data-bs-whatever="{{$row->name}}"><i class='bx bxs-file-pdf'></i></button>
@endif