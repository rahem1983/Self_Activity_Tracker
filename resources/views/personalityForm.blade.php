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
  max-width: 600px;
  width: 90%;
  padding: 20px;
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
  font-family: "Montserrat";
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
            <div class="container">
              <form>
          
                <div class="step step-1 active">
                  <h6 style="text-decoration: underline;">PART 1: Which answer comes closer to telling how you usually feel or act?</h6>
                  <div class="form-group pt-3">
                    <h6><label for="firstName">1. WHEN YOU GO SOMEWHERE FOR THE DAY, WOULD YOU RATHER-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q1" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">PLAN WHAT YOU WILL DO AND WHEN</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q1" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">JUST GO!!</label>
                      </div>
                  </div>

                  <div class="form-group pt-3">
                    <h6><label for="firstName">2. IF YOU WERE A TEACHER, WOULD YOU RATHER TEACH-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q2" id="2op1" value="option1">
                        <label class="form-check-label" for="2op1">FACTS-BASED COURSES</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q2" id="2op2" value="option2">
                        <label class="form-check-label" for="2op2">COURSES INVOLVING OPINION OR THEORY!</label>
                      </div>
                  </div>

                  <div class="form-group pt-3">
                    <h6><label for="firstName">3. ARE YOU USUALLY-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q3" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">A “GOOD MIXER” WITH GROUPS OF PEOPLE</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q3" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">RATHER QUIET AND RESERVED</label>
                      </div>
                  </div>
                  <div class="form-group pt-3">
                    <h6><label for="firstName">4. DO YOU MORE OFTEN LET-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q4" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">YOUR HEART RULE YOUR HEAD</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q4" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">YOUR HEAD RULE YOUR HEART</label>
                      </div>
                  </div>


                  <div class="form-group pt-3">
                    <h6><label for="firstName">5.IN DOING SOMETHING THAT MANY OTHER PEOPLE DO, WOULD YOU
                      RATHER-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q5" id="1op1" value="1op1">
                        <label class="form-check-label" for="1op1">INVENT A WAY OF YOUR OWN</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q5" id="1op2" value="1op2">
                        <label class="form-check-label" for="1op2">DO IT IN THE ACCEPTED WAY?</label>
                      </div>
                  </div>

                  


                  <button type="button" class="next-btn">Next</button>
                
                
                </div>
          
                <div class="step step-2">
                  <div class="form-group pt-3">
                    <h6><label for="firstName">6. AMONG YOUR FRIENDS ARE YOU-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q6" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">FULL OF NEWS ABOUT EVERYBODY</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q6" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">ONE OF THE LAST TO HEAR WHAT IS GOING ON?</label>
                      </div>
                  </div>

                  <div class="form-group pt-3">
                    <h6><label for="firstName">7. DOES THE IDEA OF MAKING A LIST OF WHAT YOU SHOULD GET DONE
                      OVER A WEEKEND-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q7" id="2op1" value="option1">
                        <label class="form-check-label" for="2op1">HELP YOU</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q7" id="2op2" value="option2">
                        <label class="form-check-label" for="2op2">STRESS YOU</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q7" id="2op7" value="option3">
                        <label class="form-check-label" for="2op7">POSITIVELY DEPRESS YOU</label>
                      </div>
                  </div>

                  <div class="form-group pt-3">
                    <h6><label for="firstName">8. WHEN YOU HAVE A SPECIAL JOB TO DO, DO YOU LIKE TO-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q8" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">ORGANIZE IT CAREFULLY BEFORE YOU START</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q8" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">FIND OUT WHAT IS NECESSARY AS YOU GO ALONG</label>
                      </div>
                  </div>
                  <div class="form-group pt-3">
                    <h6><label for="firstName">9. DO YOU TEND TO HAVE-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q9" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">BROAD FRIENDSHIPS WITH MANY DIFFERENT PEOPLE</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q9" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">DEEP FRIENDSHIP WITH VERY FEW PEOPLE</label>
                      </div>
                  </div>


                  <div class="form-group pt-3">
                    <h6><label for="firstName">10.DO YOU ADMIRE MORE THE PEOPLE WHO ARE-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q10" id="1op1" value="1op1">
                        <label class="form-check-label" for="1op1">NORMAL-ACTING TO NEVER MAKE THEMSELVES THE CENTER OF ATTENTION,</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q10" id="1op2" value="1op2">
                        <label class="form-check-label" for="1op2">TOO ORIGINAL AND INDIVIDUAL TO CARE WHETHER THEY
                          ARE THE CENTER OF ATTENTION OR NOT </label>
                      </div>
                  </div>
                 
                  <button type="button" class="previous-btn">Prev</button>
                  <button type="button" class="next-btn">Next</button>
                </div>
          
                <div class="step step-3">
                  <div class="form-group pt-3">
                    <h6><label for="firstName">11. DO YOU PREFER TO-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q1" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">ARRANGE PICNICS, PARTIES ETC, WELL IN ADVANCE</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q1" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">BE FREE TO DO WHATEVER TO LOOKS LIKE FUN WHENTHE TIME COMES?</label>
                      </div>
                  </div>

                  <div class="form-group pt-3">
                    <h6><label for="firstName">12. DO YOU USUALLY GET ALONG BETTER WITH-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q2" id="2op1" value="option1">
                        <label class="form-check-label" for="2op1">REALISTIC PEOPLE</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q2" id="2op2" value="option2">
                        <label class="form-check-label" for="2op2">IMAGINATIVE PEOPLE</label>
                      </div>
                  </div>

                  <div class="form-group pt-3">
                    <h6><label for="firstName">13. WHEN YOU ARE WITH THE GROUP OF PEOPLE, WOULD YOU USUALLY RATHER-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q3" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">JOIN IN THE TALK OF THE GROUP</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q3" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">STAND BACK AND LISTEN FIRST</label>
                      </div>
                  </div>
                  <div class="form-group pt-3">
                    <h6><label for="firstName">14. IS IT A HIGHER COMPLIMENT TO BE CALLED-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q4" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">A PERSON OF REAL FEELING</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q4" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">A CONSISTENTLY REASONABLE PERSON</label>
                      </div>
                  </div>


                  <div class="form-group pt-3">
                    <h6><label for="firstName">15. IN READING FOR PLEASURE, DO YOU-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q5" id="1op1" value="1op1">
                        <label class="form-check-label" for="1op1">ENJOY ODD OR ORIGINAL WAYS OF SAYING THINGS</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q5" id="1op2" value="1op2">
                        <label class="form-check-label" for="1op2">LIKE WRITERS TO SAY EXACTLY WHAT THEY MEAN</label>
                      </div>
                  </div>
                  
                  <button type="button" class="previous-btn">Prev</button>
                  <button type="button" class="next-btn">Next</button>
                </div>



                <div class="step step-4">
                  <div class="form-group pt-3">
                    <h6><label for="firstName">16. DO YOU-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q1" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">TALK EASILY TO ALMOST ANYONE FOR AS LONG AS YOU
                          HAVE TO</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q1" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">FIND A LOT TO SAY ONLY TO CERTAIN PEOPLE OR UNDER
                          CERTAIN CONDITIONS</label>
                      </div>
                  </div>

                  <div class="form-group pt-3">
                    <h6><label for="firstName">17. DOES FOLLOWING A SCHEDULE-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q2" id="2op1" value="option1">
                        <label class="form-check-label" for="2op1">APPEAL TO YOU</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q2" id="2op2" value="option2">
                        <label class="form-check-label" for="2op2">CRAMP YOU</label>
                      </div>
                  </div>

                  <div class="form-group pt-3">
                    <h6><label for="firstName">18. WHEN IT IS SETTLED WELL IN ADVANCE THAT YOU WILL DO A
                      CERTAIN THING AT A CERTAIN TIME,DO YOU FIND IT-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q3" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">NICE TO BE ABLE TO PLAN ACCORDINGLY</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q3" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">A LITTLE UNPLEASANT TO BE TIED DOWN</label>
                      </div>
                  </div>
                  <div class="form-group pt-3">
                    <h6><label for="firstName">19. ARE YOU MORE SUCCESSFUL-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q4" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">AT FOLLOWING A CAREFULLY WORKED OUT PLAN</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q4" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">AT DEALING WITH THE UNEXPECTED AND SEEING
                          QUICKLY WHAT SHOULD BE DONE</label>
                      </div>
                  </div>


                  <div class="form-group pt-3">
                    <h6><label for="firstName">20. WOULD YOU RATHER BE CONSIDERED-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q5" id="1op1" value="1op1">
                        <label class="form-check-label" for="1op1">A PRACTICAL PERSON</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q5" id="1op2" value="1op2">
                        <label class="form-check-label" for="1op2">AN OUT-OF-THE-BOX-THINKING PERSON</label>
                      </div>
                  </div>
                  
                  <button type="button" class="previous-btn">Prev</button>
                  <button type="button" class="next-btn">Next</button>
                </div>


                <div class="step step-5">
                  <div class="form-group pt-3">
                    <h6><label for="firstName">21. IN A LARGE GROUP, DO YOU MORE OFTEN-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q6" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">INTRODUCE OTHERS</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q6" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">GET INTRODUCED</label>
                      </div>
                  </div>

                  <div class="form-group pt-3">
                    <h6><label for="firstName">22. DO YOU USUALLY-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q7" id="2op1" value="option1">
                        <label class="form-check-label" for="2op1">VALUE EMOTION MORE THAN LOGIC</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q7" id="2op2" value="option2">
                        <label class="form-check-label" for="2op2">SVALUE LOGIC MORE THAN FEELINGS</label>
                      </div>
                  </div>

                  <div class="form-group pt-3">
                    <h6><label for="firstName">23. WOULD YOU RATHER HAVE AS A FRIEND-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q8" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">SOMEONE WHO IS ALWAYS COMING UP WITH NEW IDEAS</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q8" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">SOMEONE WHO HAS BOTH FEET ON THE GROUND</label>
                      </div>
                  </div>
                  <div class="form-group pt-3">
                    <h6><label for="firstName">24. CAN THE NEW PEOPLE YOU MEET TELL WHAT YOU ARE INTERESTED IN-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q9" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">RIGHT AWAY</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q9" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">ONLY AFTER THEY REALLY GET TO KNOW YOU</label>
                      </div>
                  </div>


                  <div class="form-group pt-3">
                    <h6><label for="firstName">25. (IF TWO ANSWERS ARE TRUE, CHECK BOTH BOXES) IN YOUR DAILY WORK, DO YOU-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input single-checkbox" type="checkbox" name="q10" id="1op1" value="1op1">
                        <label class="form-check-label" for="1op1">USUALLY PLAN YOUR WORK SO YOU WON’T NEED TOWORK UNDER PRESSURE,</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input single-checkbox" type="checkbox" name="q10" id="1op2" value="1op2">
                        <label class="form-check-label" for="1op2">RATHER ENJOY AN EMERGENCY THAT MAKES YOU WORK
                          AGAINST TIME </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input single-checkbox" type="checkbox" name="q10" id="1op3" value="1op3">
                        <label class="form-check-label" for="1op3">HATE TO WORK UNDER PRESSURE</label>
                      </div>
                  </div>


                  
                  <button type="button" class="previous-btn">Prev</button>
                  <button type="button" class="next-btn">Next</button>
                </div>




                <div class="step step-6">
                  <div class="form-group pt-3">
                    <h6><label for="firstName">26. DO YOU USUALLY-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q6" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">SHOW YOUR FEELINGS FREELY</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q6" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">KEEP YOUR FEELINGS TO YOURSELF</label>
                      </div>
                  </div>


                  <h6 class="pt-3 text-center"style="text-decoration: underline;">Part 2: Which word in each pair appeals to you more?</h6>
                   <p class="text-center"style="text-decoration: none;">(Think what the word means, not how they look or how they sound)</p>
                  
                   <div class="row">
                     <div class="col-3">
                        <div class="form-group pt-2">
                          <h6><label for="firstName">27. </label></h6>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="27" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">SCHEDULED</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="27" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">UNPLANNED</label>
                          </div>
                        </div>

                        <div class="form-group pt-2">
                          <h6><label for="firstName">28. </label></h6>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="28" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">FACTS</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="28" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">IDEAS</label>
                          </div>
                        </div>

                        <div class="form-group pt-2">
                          <h6><label for="firstName">27. </label></h6>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="27" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">SCHEDULED</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="27" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">UNPLANNED</label>
                          </div>
                        </div>

                        <div class="form-group pt-2">
                          <h6><label for="firstName">27. </label></h6>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="27" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">SCHEDULED</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="27" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">UNPLANNED</label>
                          </div>
                        </div>

                        <div class="form-group pt-2">
                          <h6><label for="firstName">27. </label></h6>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="27" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">SCHEDULED</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="27" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">UNPLANNED</label>
                          </div>
                        </div>

                        <div class="form-group pt-2">
                          <h6><label for="firstName">27. </label></h6>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="27" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">SCHEDULED</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="27" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">UNPLANNED</label>
                          </div>
                        </div>
                      </div>
                     <div class="col-3">
                       B
                    </div>

                    <div class="col-3">
                       C
                    </div>
                   
                   </div>


                  
                  <button type="button" class="previous-btn">Prev</button>
                  <button type="submit" class="submit-btn">Submit</button>
                </div>
                
              </form>
            </div>
          </section>



            <script>
const steps = Array.from(document.querySelectorAll("form .step"));
const nextBtn = document.querySelectorAll("form .next-btn");
const prevBtn = document.querySelectorAll("form .previous-btn");
const form = document.querySelector("form");

nextBtn.forEach((button) => {
  button.addEventListener("click", () => {
    changeStep("next");
  });
});
prevBtn.forEach((button) => {
  button.addEventListener("click", () => {
    changeStep("prev");
  });
});

form.addEventListener("submit", (e) => {
  e.preventDefault();
  const inputs = [];
  form.querySelectorAll("input").forEach((input) => {
    const { name, value } = input;
    inputs.push({ name, value });
  });
  console.log(inputs);
  form.reset();
});

function changeStep(btn) {
  let index = 0;
  const active = document.querySelector(".active");
  index = steps.indexOf(active);
  steps[index].classList.remove("active");
  if (btn === "next") {
    index++;
  } else if (btn === "prev") {
    index--;
  }
  steps[index].classList.add("active");
}

            </script>


            <script>
              var limit = 2;
              $('input.single-checkbox').on('click', function (evt) {
              if ($('.single-checkbox:checked').length > limit) {
              this.checked = false;
              }
            });
            </script>
    
    
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>