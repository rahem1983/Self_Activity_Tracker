<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Self Activity Tracker</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"></script>
      
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      
    
    <style>
      .navbar-rght{
        margin-left: 700px;
        float: right;
        align-items: right;
      }


    .blink-1{
		animation: blink 1s linear infinite;
    color: #002db3;
    }
    @keyframes blink{
    0%{opacity: 0;}
    50%{opacity: .5;}
    100%{opacity: 1;}
    }

    </style>

</head>
<body>
    
  <nav class="px-5 container-fluid navbar navbar-expand-lg navbar-dark navbar-light" style="background-color: #70afdd;">
    <a class="navbar-brand" href="./">
      <img src="{{url('./image/SAT.png')}}" width="30" height="30" class="d-inline-block align-top" alt="">
      Self Activity Tracker
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      @if (session('user'))
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="./Home">Home <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./AllPtoject">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./Calendar">Calendar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./PersonalityTest">Personality</a>
        </li>

        @if (session('user') && session('user')->type == "admin")
        <li class="nav-item">
          <a class="nav-link" href="./AdminPanel_1">Admin</a>
        </li>
        @endif

        @if (!Cookie::get('attend'))
        <li class="nav-item">
          <a class="nav-link" href="{{url('attendance?id'.session('user')->id)}}"><span class="blink-1 blink"> Attendance  </span></a>
        </li>
        @endif

      </ul>
      @endif
      
      <span class="navbar-rght">
        <ul class="navbar-nav">
          @if (session('user'))
          <li class="nav-item">
            <a class="nav-link" href="./Logout">Logout</a>
          </li>
          @else
            <li class="nav-item">
              <a class="nav-link" href="./Login">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./Signup">Signup</a>
            </li>
          @endif
        </ul>
      </span>
    </div>
  </nav>
    
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>