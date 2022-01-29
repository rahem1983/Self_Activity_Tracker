@include('header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"></script>
      
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      <Script src="./js/WeeklyTarget.js" defer></Script>
      
    
    <style>
        .post-text{

            resize: none;
            height: 70px;
        }

    </style>

</head>
<body>
    
    <div class="container pb-3">

      
            <div class="container" style="width: 600px; max-height: 100%; background: white; box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px; margin-top: 70px;">
         
        <h2 class="text-center pt-2" style="color: #002db3">Set Weekly Target</h2>

        <form id="weekForm" style="color:#002db3">
            @csrf
           
            {{-- <h5 class="text-center pt-2">Sample Project Name</h5> --}}
               
              <div class="form-row pt-4">
                <div class="daily">
                  <div class="day"> </div>
                  <div class="form-group inputOnDate">
                    {{-- <div class="inputOnProject">
                    <input type="checkbox" id="CBproject" >
                    <label for="CBproject"> project 1</label><br>
                    <div id="inputProject"></div>
                    </div> --}}
                    {{-- <input type="checkbox" id="CBproject2" >
                    <label for="CBproject2"> project 2</label><br>
                    <div id="inputProject2"></div> --}}
                    {{-- <textarea class="form-control post-text" id="day1" rows="2" cols="2" placeholder="Write your target for this specific day"></textarea> --}}
                  </div><br>
                </div>
                <div class="daily">
                  <div class="day"> </div>
                  <div class="form-group inputOnDate">
                    {{-- <div class="inputOnProject">
                    <input type="checkbox" id="CBproject" >
                    <label for="CBproject"> project 1</label><br>
                    <div id="inputProject"></div>
                    </div> --}}
                    {{-- <input type="checkbox" id="CBproject2" >
                    <label for="CBproject2"> project 2</label><br>
                    <div id="inputProject2"></div> --}}
                    {{-- <textarea class="form-control post-text" id="day1" rows="2" cols="2" placeholder="Write your target for this specific day"></textarea> --}}
                  </div><br>
                </div>

                <div class="daily">
                  <div class="day"> </div>
                  <div class="form-group inputOnDate">
                    {{-- <div class="inputOnProject">
                    <input type="checkbox" id="CBproject" >
                    <label for="CBproject"> project 1</label><br>
                    <div id="inputProject"></div>
                    </div> --}}
                    {{-- <input type="checkbox" id="CBproject2" >
                    <label for="CBproject2"> project 2</label><br>
                    <div id="inputProject2"></div> --}}
                    {{-- <textarea class="form-control post-text" id="day1" rows="2" cols="2" placeholder="Write your target for this specific day"></textarea> --}}
                  </div><br>
                </div>

                <div class="daily">
                  <div class="day"> </div>
                  <div class="form-group inputOnDate">
                    {{-- <div class="inputOnProject">
                    <input type="checkbox" id="CBproject" >
                    <label for="CBproject"> project 1</label><br>
                    <div id="inputProject"></div>
                    </div> --}}
                    {{-- <input type="checkbox" id="CBproject2" >
                    <label for="CBproject2"> project 2</label><br>
                    <div id="inputProject2"></div> --}}
                    {{-- <textarea class="form-control post-text" id="day1" rows="2" cols="2" placeholder="Write your target for this specific day"></textarea> --}}
                  </div><br>
                </div>

                <div class="daily">
                  <div class="day"> </div>
                  <div class="form-group inputOnDate">
                    {{-- <div class="inputOnProject">
                    <input type="checkbox" id="CBproject" >
                    <label for="CBproject"> project 1</label><br>
                    <div id="inputProject"></div>
                    </div> --}}
                    {{-- <input type="checkbox" id="CBproject2" >
                    <label for="CBproject2"> project 2</label><br>
                    <div id="inputProject2"></div> --}}
                    {{-- <textarea class="form-control post-text" id="day1" rows="2" cols="2" placeholder="Write your target for this specific day"></textarea> --}}
                  </div><br>
                </div>
              </div>

              <div class="pt-5 pb-5 text-center">
                <button type="submit" class="btn btn-primary" style="background-color: #002db3">Done</button>
              </div>
            
          </form>

        </div>
    </div>
 
    
    
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>