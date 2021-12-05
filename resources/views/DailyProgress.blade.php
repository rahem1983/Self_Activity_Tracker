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
      
    
    <style>
        .post-text{

            resize: none;
            height: 70px;
        }

        .custom-radio input{
          visibility: hidden;
        }

        .custom-radio{
          font-size: 30px;
        } 
    </style>

</head>
<body>  
    
    <div class="container pb-3">

      
            <div class="container" style="width: 600px; max-height: 100%; background: white; box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px; margin-top: 70px;">
         
        <h2 class="text-center pt-2" style="color: #002db3">Daily Progress</h2>

        <form style="color:#002db3">
            
          <div class="form-row pt-4">
            <div class="form-group">
            <label for="project">In which project you worked today?</label>
              <div class="form-check">
               <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
               <label class="form-check-label" for="exampleRadios1">Project 1</label>
             </div>

              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">Project 2</label>
              </div>
            </div>
          </div>


          <div class="form-row pt-4">
            <div class="form-group">
            <label for="target">Did you finish today's target?</label> <br>
              <div class="form-check form-check-inline">
               <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
               <label class="form-check-label" for="exampleRadios1">Yes</label>
             </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">No</label>
              </div>
            </div>

            <div class="form-row pt-4">
              <div class="form-group">
                {{-- IF NO... --}}
              <textarea class="form-control post-text" id="day1" rows="2" cols="2" placeholder="Write the reason why you couldn't finish today's target"></textarea>
                </div>
            </div>
          </div>



          <div class="form-row pt-4">
            <div class="form-group">
            <label for="target">Any new skill learned today?</label> <br>
              <div class="form-check form-check-inline">
               <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
               <label class="form-check-label" for="exampleRadios1">Yes</label>
             </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">No</label>
              </div>
            </div>

            <div class="form-row pt-4">
              <div class="form-group">
                {{-- IF YES... --}}
              <textarea class="form-control post-text" id="day1" rows="2" cols="2" placeholder="Write the skills you have learned today"></textarea>
                </div>
            </div>
          </div>
                  
              <div class="form-row pt-4">
                <div class="form-group">
                   <label for="title">When did you start working today?</label>
                   <input type="text" class="form-control" id="title" placeholder="Time AM/PM">
                </div>
             </div>
            
             <div class="form-row pt-4">
              <div class="form-group">
                 <label for="title">When did you finish working today?</label>
                 <input type="text" class="form-control" id="title" placeholder="Time AM/PM">
              </div>
           </div>


           <div class="form-row pt-4">
            <div class="form-group">
            <label for="target">How did you feel working today?</label> <br>
              <div class="form-check form-check-inline custom-radio">
               <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
               <label class="form-check-label" for="exampleRadios1">😭</label>
             </div>

             <div class="form-check form-check-inline custom-radio">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">😢</label>
            </div>

            <div class="form-check form-check-inline custom-radio">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1"></label>
            </div>

            <div class="form-check form-check-inline custom-radio">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">😭</label>
            </div>

            <div class="form-check form-check-inline custom-radio">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">😭</label>
            </div>

            <div class="form-check form-check-inline custom-radio">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">😭</label>
            </div>

            <div class="form-check form-check-inline custom-radio">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">😭</label>
            </div>

            <div class="form-check form-check-inline custom-radio">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">😭</label>
            </div>

            <div class="form-check form-check-inline custom-radio">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">😭</label>
            </div>

              <div class="form-check form-check-inline custom-radio">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label custom-radio" for="exampleRadios2">😁</label>
              </div>
            </div>
          </div>



              

              <div class="pt-5 text-center" style="padding-bottom: 20px">
                <button type="submit" class="btn btn-primary" style="background-color: #002db3; ">Done</button>
              </div>
            
          </form>









        </div>
    </div>
 
    
    
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>