@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/libries/style.css">

</head>
<body>
    <div class="row">
        <div class="col-lg-12 text-center">
        <h1 class="header">Student Management System</h1>
        </div>
    </div>
<div class="button">
    <div class="vertical-center">
    <a href="{{ route('stud') }}" class="btn btn-primary btn-lg">Enter <i class="fa-solid fa-right-to-bracket"></i> </a>
</div>
</div>
</body>
</html>
@endsection

@push('css')
    <style>
        .header {
        padding: 60px;
        text-align: center;
        background: #1abc9c;
        color: white;
        font-size: 50px;
}
        .button{
            margin: 0;
            position: absolute;
            top: 40%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
 }



        </style>

@endpush



