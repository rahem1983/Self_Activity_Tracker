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
    <h1 class="output" id="la"> lalal</h1>
    <div class="inputOnProject">
        <div>
            <p>hello : <%= Session("Name").ToString%> </p>
          
            </div>
        <input type="checkbox" id="CBproject" >
        <label for="CBproject">{{Session("Name")}} </label><br>
        <div id="inputProject"></div>
        <input type="checkbox" id="CBproject2" >
        @if (session('Name'))
        <label for="CBproject2">olla lokka</label><br>
        @endif
        
        <div id="inputProject2"></div>
        <button class=""></button>

</body>
</html>