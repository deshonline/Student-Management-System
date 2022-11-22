@extends('layouts.app')
@section('content')

    <div class="col-lg-12 text-center">
        <h1 class="header">List Students</h1>
<div class="container">
    <div class="col-lg-12">
        <form action="{{ route('stud.store') }}" method="post" enctype="multipart/form">
            @csrf
            <div class="form-group">
                <input class="form-control" name="name" type="text" placeholder="Student Name" aria-label="default input example"><br>
                <input class="form-control" name="photo" type="file" id="formFile"><br>
                <input class="form-control" name="age" type="text" placeholder="Student Age" aria-label="default input example"><br>
            </div>
    </div>
</div>
            <div class="col-lg-4">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
     </form>
</div>
<div class="col-lg-10">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Photo</th>
                <th scope="col">Age</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $key => $task)
              <tr>
                <th scope="row">{{ $key++ }}</th>
                <td>{{ $task->name }}</td>
                <td><img src="{{$task->photo}}"   class="img-thumbnail"></td>
                <td>{{ $task->age }}</td>
                <td>
                    @if ($task-> status == 1)
                    <span class="badge bg-success">Active</span>
                    @else
                    <span class="badge bg-warning">Inactive</span>
                    @endif
                </td>
                    <td>
                        <a href="{{ route('stud.delete',$task->id) }}" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                        <a href="{{ route('stud.status',$task->id) }}" class="btn btn-warning"><i class="fas fa-user-slash"></i></a>
                        <a href="javascript:void(0)" class="btn btn-info"><i class="fas fa-edit" onclick="studEditModal {{ $task->id }}"></i></a>
                    </td>
                </tr>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>

<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#stuEdit">
    Launch static backdrop modal
  </button> --}}

  <!-- Modal -->
  <div class="modal fade" id="stuEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="stuEditLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="stuEditLabel">Edit Student</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="stuEdit">
          ...
        </div>
        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div> --}}
      </div>
    </div>
  </div>

@endsection

@push('js')
<script>
    function studEditModal(task_id){
        var data = {
            task_id: task_id,
        };
        $.ajax({
            url:"{{ 'stud.edit' }}",
            headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')}
        type: 'GET',
        dataType: '',
        data: data,
        success: function(response){
            $('#studEdit').modal('show');
            $('#studEditContent').html(response);
        }
    });

    }
</script>

@endpush

@push('css')
    <style>
        .header {
        padding: 40px;
        text-align: center;
        background: #1abc9c;
        color: white;
        font-size: 50px;
}
.col-lg-10 {
  margin-left: auto;
  margin-right: auto;

}



        </style>

@endpush

