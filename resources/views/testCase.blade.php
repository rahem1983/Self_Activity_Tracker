@php
    $user = Cookie::get('attend');
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <Script src="{{url('js/testCase.js')}}" defer></Script>
</head>
<body>
    <time class="output"> lalal {{$user}} </time>
</body>
</html>