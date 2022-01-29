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
      
    
    <style>
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
/* body {
  font-family: "Montserrat";
} */
section {
  min-height: 100vh;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: aliceblue;
}
.container {
  max-width: 900px;
  width: 90%;
  padding: 20px;
  height: 500px;
  box-shadow: 0px 0px 20px #00000020;
  border-radius: 8px;
  background-color: white;
}
.step {
  display: none;
}
.step.active {
  display: block;
}
/* .form-group {
  width: 100%;
  margin-top: 20px;
} */
/* .form-group input {
  width: 100%;
  border: 1.5px solid rgba(128, 128, 128, 0.418);
  padding: 5px;
  font-size: 18px;
  margin-top: 5px;
  border-radius: 4px;
} */

button.next-btn,
button.previous-btn,
button.submit-btn {
  float: right;
  margin-top: 20px;
  padding: 10px 30px;
  border: none;
  outline: none;
  background-color: rgb(180, 220, 255);
  /* font-family: "Montserrat"; */
  font-size: 18px;
  cursor: pointer;
  /* text-align: right; */
}
button.previous-btn {
  float: left;
}
button.submit-btn {
  background-color: aquamarine;
}


    </style>

</head>
<body>
    
    
        <section>
            <div class="container mb-5">
            

                <h3 class="text-center">MYERS-BRIGGS TYPE INDICATOR</h3>
                  <h6 class="text-center">By Katharine C. Briggs & Isabel Briggs Myers</h6>

                  <h4>Directions:</h4>
                    <h5 style="line-height: 0.9cm;">
                      <p>There are no “right“ or “wrong” answers to the questions on this
                        inventory. Your answers will help to show how you like to look at things and
                        how you like to go about deciding things. Knowing your own preferences and
                        learning about other people's can help you understand whether your special
                        strenghts are, what kind of work you might enjoy and be successful doing,
                        and how people with different preferences can relate to each other and be
                        valuable to society. <br></p> 
                      <p>Read each question carefully and select one of the two choices given,
                        which applies to you, by circling to either “A” or “B”.</p></h5>
                    
                  <div class="text-center">
                    <a href="./PersonalityForm"><button type="button" class="btn btn-outline-info btn-lg">Proceed</button></a>
                  </div>
                  
                </div>
          
            </div>
          </section>





 
    
    
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>