<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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

</body>
</html>
