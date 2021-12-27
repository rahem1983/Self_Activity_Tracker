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

          input[class=angry] + img,
          input[class=depressed]+img,
          input[class=neutral] + img,
          input[class=relieved]+img,
          input[class=very-happy] + img{
              
              filter: grayscale(100%);
          }

          input[class="angry"]:hover + img,
          input[class=depressed]:hover+img,
          input[class="neutral"]:hover + img,
          input[class="relieved"]:hover+img,
          input[class="very-happy"]:hover+img{
              
              /* transform: scale(1.3); */
              filter: grayscale(0%);
          }
          input[class="angry"]:checked + img,
          input[class="angry"]:focus + img,
          input[class="depressed"]:checked + img,
          input[class="depressed"]:focus + img,
          input[class="neutral"]:checked + img,
          input[class="neutral"]:focus + img,
          input[class="relieved"]:checked + img,
          input[class="relieved"]:focus + img,
          input[class="very-happy"]:checked + img,
          input[class="very-happy"]:focus + img{
            
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

        <form style="color:#002db3">
            
          <div class="form-row pt-4">
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
          </div>



          <div class="form-row pt-4">
            <div class="form-group">
            <h5><label for="target">Did you finish today's target?</label></h5>
              <div class="form-check form-check-inline">
               <input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios3" value="option1" checked>
               <h6><label class="form-check-label" for="exampleRadios1">Yes</label></h6>
             </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios4" value="option2">
                <h6><label class="form-check-label" for="exampleRadios2">No</label></h6>
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
            <h5><label for="target">Any new skill learned today?</label></h5>
              <div class="form-check form-check-inline">
               <input class="form-check-input" type="radio" name="exampleRadios3" id="exampleRadios5" value="option1" checked>
               <h6><label class="form-check-label" for="exampleRadios1">Yes</label></h6>
             </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="exampleRadios3" id="exampleRadios6" value="option2">
                <h6><label class="form-check-label" for="exampleRadios2">No</label></h6>
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
                   <h5><label for="title">When did you start working today?</label></h5>
                   <input type="text" class="form-control" id="title" placeholder="Time AM/PM">
                </div>
             </div>
            
             <div class="form-row pt-4">
              <div class="form-group">
                 <h5><label for="title">When did you finish working today?</label></h5>
                 <input type="text" class="form-control" id="title" placeholder="Time AM/PM">
              </div>
           </div>


           <div class="form-row pt-4">
            <div class="form-group">
            <h5><label for="target">How did you feel working today?</label></h5> <br>
            
            <div class="rating">
              <form class="rating-form">
        
                <label for="angry">
                    <input type="radio" name="rating" class="angry" id="angry" value="angry" /> 
                    <img class="emo" title="Angry" src="https://img.icons8.com/emoji/96/000000/pouting-face.png"/>
                    </label>
                    
                    <label for="depressed">
                      <input type="radio" name="rating" class="depressed" id="depressed" value="depressed" />
                      <img class="emo" title="Depressed" src="https://img.icons8.com/emoji/96/000000/sad-but-relieved-face.png"/>
                      </label>
  
                      <label for="neutral">
                        <input type="radio" name="rating" class="neutral" id="neutral" value="neutral"/>
                        <img class="emo" title="Neutral" src="https://img.icons8.com/emoji/96/000000/slightly-smiling-face.png"/>
                        </label>
  
                    <label for="relieved">
                      <input type="radio" name="rating" class="relieved" id="relieved" value="relieved"/>
                      <img class="emo" title="Relieved" src="https://img.icons8.com/emoji/96/000000/relieved-face.png"/>
                    </label>
  
                <label for="very-happy">
                    <input type="radio" name="rating" class="very-happy" id="very-happy" value="very-happy" />
                    <img class="emo" title="Very Happy" src="https://img.icons8.com/emoji/96/000000/grinning-face-emoji.png"/>
                    </label>
        
              </form>
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