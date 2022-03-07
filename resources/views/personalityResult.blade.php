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

      <script src="./js/personalityResult.js" defer></script>
      
    
    <style>

        .test-btn{ 
            color: #002db3; 
            background:white;
            border: #4064cfb0 1px solid;
           
        }

        .test-btn:hover{
            background: #002db3; 
            color:white;
        }


    </style>

</head>
<body>
    
    <div class="container">

    <div class="row">
      <div class="col-lg-6">

        <img src="image/personality.svg" style="padding-top:30%; width: 100%;" alt="">

      </div>
      <div class="col-lg-6">
        <h4 class="text-center pt-5 ">Your Personality is <span class="text-primary personality_type"></span></h4>
        <h5 class="text-center pt-2">To learn more- <a class="youtube_link" href="" target="_blank">Click here</a></h5>


        <h5 class="text-center pt-3 fw-bold">Personality traits explained:</h5>
        <span class="fw-bolder text-primary">Mind:</span> <br>
        <span class="fw-bold">Introverted (I) -</span> prefer solitary activities, think before speaking, get
          exhausted by social interaction. <br>
          <span class="fw-bold">Extraverted (E) -</span> prefer group activities, think while speaking, get energized
          by social interaction. <br> <br> 
          <span class="fw-bolder text-primary">Energy: </span><br>
          <span class="fw-bold">Intuitive (N) -</span>  imaginative, rely on their intuition, absorbed in ideas, focus
          on what might happen. <br>
          <span class="fw-bold">Sensing (S) -</span>  down-to-earth, rely on their senses, absorbed in practical
          matters, focus on what has happened. <br> <br>
          <span class="fw-bolder text-primary">Nature: </span> <br>
          <span class="fw-bold">Thinking (T) - </span>tough, follow their minds, focus on objectivity and rationality. <br>
          <span class="fw-bold">Feeling (F) - </span> sensitive, follow their hearts, focus on harmony and
          cooperation. <br> <br>
          <span class="fw-bold text-primary">Tactics: </span><br>
          <span class="fw-bold">Judging (J) -</span> decisive, prefer clear rules and guidelines, see deadlines as
          sacred, seek closure. <br>
          <span class="fw-bold">Perceiving (P) -</span> very good at improvising, prefer keeping their options open,
          relaxed about their work, seek freedom. <br>

          <div class="text-center">
          <a href=""><button class="btn btn-lg test-btn mt-5 mb-5">Test Again</button></a>
          </div>
      </div>

      
    </div>
   








    </div>
 
    
    
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>