@include('header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"></script>
      
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

      <!-- EVO Calendar CSS -->
      <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.2/evo-calendar/css/evo-calendar.min.css"/> -->
      <!-- <link rel="stylesheet" href="evo-calendar.min.css">
      <link rel="stylesheet" href="evo-calendar.midnight-blue.css"> -->
      
      <link rel="stylesheet" href="./css/evo-calendar.min.css">
      <link rel="stylesheet" href="./css/evo-calendar.midnight-blue.css">
      <Script src="{{url('js/calendar.js')}}" defer></Script>
    
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .hero
        {
           width: 100%;
        }

        .center{

                margin: auto;
                width: 100%;
                padding: 100px;
        }

        .yellow-dot{

            height: 10px;
            width: 10px;
            background-color: yellow;
            border-radius: 50%;
            display: inline-block;
            border: 1px solid gray;
        }

        .txt{
            font-size: 15px;
        }

        .red-dot{
            
            height: 10px;
            width: 10px;
            background-color: red;
            border-radius: 50%;
            display: inline-block;
            border: 1px solid gray;
        }

        .green-dot{
            
            height: 10px;
            width: 10px;
            background-color: #63d867;
            border-radius: 50%;
            display: inline-block;
            border: 1px solid gray;
        }


        .orange-dot{
            
            height: 10px;
            width: 10px;
            background-color: orange;
            border-radius: 50%;
            display: inline-block;
            border: 1px solid gray;
        }

    </style>
    

</head>
<body>

          <div class="container" style="margin-top: -20px;">         
            <div class="hero center">
                <h2 class="text-center pb-4" style= "color:#002db3;">Calendar</h2>
                <div class="text-center">
                    <p class="txt"><span class="green-dot"></span> Offdays &nbsp; <span class="yellow-dot"></span> Pending Daily Tasks &nbsp; <span class="red-dot"></span> Incomplete Tasks &nbsp; 
                        <span class="orange-dot"></span> Probable Finish Dates &nbsp;</p>
                 </div>
                <div id="calendar"></div>
                
            </div>
          </div>
 
          <!-- EVO calendar JS -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
        <!-- <script src="evo-calendar.min.js"></script> -->
        <script src="./js/evo-calendar.min.js" defer></script>

        
        <script>
                
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>