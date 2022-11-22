<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stud</title>

    @include('libries.styles')

</head>
<body>
    {{-- @include('components.nav') --}}


    @yield('content')

    @include('libries.scripts')
</body>
</html>
