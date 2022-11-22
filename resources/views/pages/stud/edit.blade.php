<form action="{{ route('stud.update',$task_id) }}" method="post" enctype="multipart/form">
    @csrf
    <div class="form-group">
        <input class="form-control" name="name" value="{{ $task->name }}" type="text" placeholder="Student Name" aria-label="default input example"><br>
        <input class="form-control" name="photo" value="{{ $task->photo }}"  type="file" id="formFile"><br>
        <input class="form-control" name="age" value="{{ $task->age }}"  type="text" placeholder="Student Age" aria-label="default input example"><br>
    </div>
</div>
    <div class="col-lg-4">
        <button type="submit" class="btn btn-success">Update</button>
    </div>
</div>
</form>
