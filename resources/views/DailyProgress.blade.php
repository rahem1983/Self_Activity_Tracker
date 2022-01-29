@include('headerIDinclude')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Progress</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"></script>
      
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      <Script src="{{url('js/DailyProgress.js')}}" defer></Script>
    
    <style>
        .post-text{

            resize: none;
            height: 70px;
        }

        .rating-container {
	          display: -webkit-box;
          	display: -ms-flexbox;
	          display: flex;
	          -webkit-box-pack: justify;
          	-ms-flex-pack: justify;
          	justify-content: space-between;
          	padding: 0.8rem 0.8rem;
          	width: 100%;
      }

          .rating-text p {
            color: rgba(0, 0, 16, 0.8);
            font-size: 1.3rem;
            padding: 0.3rem;
          }

          .rating {
            /* background-color: rgba(0, 0, 16, 0.8); */
            padding: 0.4rem 0.4rem 0.1rem 0.4rem;
            border-radius: 2.2rem;
          }
          
          .rating-form{
            height: 3rem;
            width: 3rem;
            margin: 0.5rem;
            padding: 15px;
          }

          #radios label {
            position: relative;
          }

          input[name="rating"]{
            position: absolute;
            /* opacity: 0; */
            display: none;
          }

          input[type="radio"] + img {
            -webkit-transition: all 0.2s;
            transition: all 0.2s;
          }

          input + img {
            cursor: pointer;
          }

          input[id=angry] + img,
          input[id=depressed]+img,
          input[id=neutral] + img,
          input[id=relieved]+img,
          input[id=very-happy] + img{
              
              filter: grayscale(100%);
          }

          input[id="angry"]:hover + img,
          input[id=depressed]:hover+img,
          input[id="neutral"]:hover + img,
          input[id="relieved"]:hover+img,
          input[id="very-happy"]:hover+img{
              
              /* transform: scale(1.3); */
              filter: grayscale(0%);
          }
          input[id="angry"]:checked + img,
          input[id="angry"]:focus + img,
          input[id="depressed"]:checked + img,
          input[id="depressed"]:focus + img,
          input[id="neutral"]:checked + img,
          input[id="neutral"]:focus + img,
          input[id="relieved"]:checked + img,
          input[id="relieved"]:focus + img,
          input[id="very-happy"]:checked + img,
          input[id="very-happy"]:focus + img{
            
              filter: grayscale(0%);
              transform: scale(1.3);

          }

          .emo{
             
            padding-left: 20px;
            width: 95px;

          }

 
    </style>

</head>
<body>  
    
    <div class="container pb-3">

      
            <div class="container" style="width: 600px; max-height: 100%; background: white; box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px; margin-top: 70px;">
         
        <h2 class="text-center pt-2" style="color: #002db3">Daily Progress</h2>

        <form id="dailyProgress" style="color:#002db3">
            @csrf
          {{-- <div class="form-row pt-4">
            <div class="form-group">
            <h5><label for="project">In which project you worked today?</label></h5>
        
            <div class="form-check">
               <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1" checked>
               <h6><label class="form-check-label" for="exampleRadios1">Project 1</label></h6>
             </div>

              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios2" value="option2">
                <h6><label class="form-check-label" for="exampleRadios2">Project 2</label></h6>
              </div>
            </div>
          </div> --}}

          <input type="number" value="{{$id}}" id="Tid" hidden>
 
          <div class="form-row pt-4">
            <div class="form-group">
            <h5><label for="target">Did you finish today's target?</label></h5>
              <div class="form-check form-check-inline">
               <input class="form-check-input" type="radio" name="finishRadios" id="finishRadiosY" value="Yes">
               <h6><label class="form-check-label" for="finishRadios">Yes</label></h6>
             </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="finishRadios" id="finishRadiosN" value="No">
                <h6><label class="form-check-label" for="finishRadios">No</label></h6>
              </div>
            </div>

            <div class="form-row pt-4">
              <div class="form-group notComplete">
                {{-- IF NO... --}}
              
                </div>
            </div>
          </div>



          <div class="form-row pt-4">
            <div class="form-group">
            <h5><label for="target">Any new skill learned today?</label></h5>
              <div class="form-check form-check-inline">
               <input class="form-check-input skillRadios" type="radio" name="skillRadios" id="skillRadiosY" value="Yes">
               <h6><label class="form-check-label" for="skillRadios">Yes</label></h6>
             </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input skillRadios" type="radio" name="skillRadios" id="skillRadiosN" value="No">
                <h6><label class="form-check-label" for="skillRadios">No</label></h6>
              </div>
            </div>

            <div class="form-row pt-2">
              <div class="form-group newSkill">
                {{-- IF YES... --}}
              
              </div>
            </div>
          </div>
                  
              <div class="form-row pt-4">
                <div class="form-group">
                   <h5><label for="title">When did you start working today? (hh:mm AM/PM)</label></h5>
                   <input type="time" class="form-control" id="startTime" placeholder="Time AM/PM" required>
                </div>
             </div>
            
             <div class="form-row pt-4">
              <div class="form-group">
                 <h5><label for="title">When did you finish working today? (hh:mm AM/PM)</label></h5>
                 <input type="time" class="form-control" id="endTime" placeholder="Time AM/PM" required>
              </div>
           </div>


           <div class="form-row pt-4">
            <div class="form-group">
            <h5><label for="target">How did you feel working today?</label></h5> <br>
            
            <div class="rating">

                <label for="angry">
                    <input type="radio" name="rating" class="mood" id="angry" value="1" /> 
                    <img class="emo" title="Angry" src="https://img.icons8.com/emoji/96/000000/pouting-face.png"/>
                    </label>
                    
                    <label for="depressed">
                      <input type="radio" name="rating" class="mood" id="depressed" value="2" />
                      <img class="emo" title="Depressed" src="https://img.icons8.com/emoji/96/000000/sad-but-relieved-face.png"/>
                      </label>
  
                      <label for="neutral">
                        <input type="radio" name="rating" class="mood" id="neutral" value="3"/>
                        <img class="emo" title="Neutral" src="https://img.icons8.com/emoji/96/000000/slightly-smiling-face.png"/>
                        </label>
  
                    <label for="relieved">
                      <input type="radio" name="rating" class="mood" id="relieved" value="4"/>
                      <img class="emo" title="Relieved" src="https://img.icons8.com/emoji/96/000000/relieved-face.png"/>
                    </label>
  
                <label for="very-happy">
                    <input type="radio" name="rating" class="mood" id="very-happy" value="5" />
                    <img class="emo" title="Very Happy" src="https://img.icons8.com/emoji/96/000000/grinning-face-emoji.png"/>
                    </label>
  
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