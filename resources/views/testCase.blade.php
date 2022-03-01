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
    <time class="output" id="la"> lalal</time>
    <div class="inputOnProject">
        <input type="checkbox" id="CBproject" >
        <label for="CBproject"> project 1</label><br>
        <div id="inputProject"></div>
        <input type="checkbox" id="CBproject2" >
        <label for="CBproject2"> project 2</label><br>
        <div id="inputProject2"></div>
        <button class=""></button>

</body>
</html>