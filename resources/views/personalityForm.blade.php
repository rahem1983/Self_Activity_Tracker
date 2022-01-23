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
                        <label class="form-check-label" for="inlineRadio1">A. PLAN WHAT YOU WILL DO AND WHEN</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q1" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">B. JUST GO!!</label>
                      </div>
                  </div>

                  <div class="form-group pt-3">
                    <h6><label for="firstName">2. IF YOU WERE A TEACHER, WOULD YOU RATHER TEACH-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q2" id="2op1" value="option1">
                        <label class="form-check-label" for="2op1">A. FACTS-BASED COURSES</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q2" id="2op2" value="option2">
                        <label class="form-check-label" for="2op2">B. COURSES INVOLVING OPINION OR THEORY!</label>
                      </div>
                  </div>

                  <div class="form-group pt-3">
                    <h6><label for="firstName">3. ARE YOU USUALLY-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q3" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">A. A “GOOD MIXER” WITH GROUPS OF PEOPLE</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q3" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">B. RATHER QUIET AND RESERVED</label>
                      </div>
                  </div>
                  <div class="form-group pt-3">
                    <h6><label for="firstName">4. DO YOU MORE OFTEN LET-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q4" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">A. YOUR HEART RULE YOUR HEAD</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q4" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">B. YOUR HEAD RULE YOUR HEART</label>
                      </div>
                  </div>


                  <div class="form-group pt-3">
                    <h6><label for="firstName">5.IN DOING SOMETHING THAT MANY OTHER PEOPLE DO, WOULD YOU
                      RATHER-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q5" id="1op1" value="1op1">
                        <label class="form-check-label" for="1op1">A. INVENT A WAY OF YOUR OWN</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q5" id="1op2" value="1op2">
                        <label class="form-check-label" for="1op2">B. DO IT IN THE ACCEPTED WAY?</label>
                      </div>
                  </div>

                  


                  <button type="button" class="next-btn">Next</button>
                
                
                </div>
          
                <div class="step step-2">
                  <div class="form-group pt-3">
                    <h6><label for="firstName">6. AMONG YOUR FRIENDS ARE YOU-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q6" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">A. FULL OF NEWS ABOUT EVERYBODY</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q6" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">B. ONE OF THE LAST TO HEAR WHAT IS GOING ON?</label>
                      </div>
                  </div>

                  <div class="form-group pt-3">
                    <h6><label for="firstName">7. DOES THE IDEA OF MAKING A LIST OF WHAT YOU SHOULD GET DONE
                      OVER A WEEKEND-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q7" id="2op1" value="option1">
                        <label class="form-check-label" for="2op1">A. HELP YOU</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q7" id="2op2" value="option2">
                        <label class="form-check-label" for="2op2">B. STRESS YOU</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q7" id="2op3" value="option3">
                        <label class="form-check-label" for="2op3">C. POSITIVELY DEPRESS YOU</label>
                      </div>
                  </div>

                  <div class="form-group pt-3">
                    <h6><label for="firstName">8. WHEN YOU HAVE A SPECIAL JOB TO DO, DO YOU LIKE TO-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q8" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">A. ORGANIZE IT CAREFULLY BEFORE YOU START</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q8" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">B. FIND OUT WHAT IS NECESSARY AS YOU GO ALONG</label>
                      </div>
                  </div>
                  <div class="form-group pt-3">
                    <h6><label for="firstName">9. DO YOU TEND TO HAVE-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q9" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">A. BROAD FRIENDSHIPS WITH MANY DIFFERENT PEOPLE</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q9" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">B. DEEP FRIENDSHIP WITH VERY FEW PEOPLE</label>
                      </div>
                  </div>


                  <div class="form-group pt-3">
                    <h6><label for="firstName">10.DO YOU ADMIRE MORE THE PEOPLE WHO ARE-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q10" id="1op1" value="1op1">
                        <label class="form-check-label" for="1op1">A. NORMAL-ACTING TO NEVER MAKE THEMSELVES THE CENTER OF ATTENTION,</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q10" id="1op2" value="1op2">
                        <label class="form-check-label" for="1op2">B. TOO ORIGINAL AND INDIVIDUAL TO CARE WHETHER THEY
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
                        <input class="form-check-input" type="radio" name="q11" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">A. ARRANGE PICNICS, PARTIES ETC, WELL IN ADVANCE</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q11" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">B. BE FREE TO DO WHATEVER TO LOOKS LIKE FUN WHENTHE TIME COMES?</label>
                      </div>
                  </div>

                  <div class="form-group pt-3">
                    <h6><label for="firstName">12. DO YOU USUALLY GET ALONG BETTER WITH-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q12" id="2op1" value="option1">
                        <label class="form-check-label" for="2op1">A. REALISTIC PEOPLE</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q12" id="2op2" value="option2">
                        <label class="form-check-label" for="2op2">B. IMAGINATIVE PEOPLE</label>
                      </div>
                  </div>

                  <div class="form-group pt-3">
                    <h6><label for="firstName">13. WHEN YOU ARE WITH THE GROUP OF PEOPLE, WOULD YOU USUALLY RATHER-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q13" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">A. JOIN IN THE TALK OF THE GROUP</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q13" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">B. STAND BACK AND LISTEN FIRST</label>
                      </div>
                  </div>
                  <div class="form-group pt-3">
                    <h6><label for="firstName">14. IS IT A HIGHER COMPLIMENT TO BE CALLED-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q14" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">A. A PERSON OF REAL FEELING</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q14" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">B. A CONSISTENTLY REASONABLE PERSON</label>
                      </div>
                  </div>


                  <div class="form-group pt-3">
                    <h6><label for="firstName">15. IN READING FOR PLEASURE, DO YOU-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q15" id="1op1" value="1op1">
                        <label class="form-check-label" for="1op1">A. ENJOY ODD OR ORIGINAL WAYS OF SAYING THINGS</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q15" id="1op2" value="1op2">
                        <label class="form-check-label" for="1op2">B. LIKE WRITERS TO SAY EXACTLY WHAT THEY MEAN</label>
                      </div>
                  </div>
                  
                  <button type="button" class="previous-btn">Prev</button>
                  <button type="button" class="next-btn">Next</button>
                </div>



                <div class="step step-4">
                  <div class="form-group pt-3">
                    <h6><label for="firstName">16. DO YOU-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q16" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">A.TALK EASILY TO ALMOST ANYONE FOR AS LONG AS YOU
                          HAVE TO</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q16" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">B. FIND A LOT TO SAY ONLY TO CERTAIN PEOPLE OR UNDER
                          CERTAIN CONDITIONS</label>
                      </div>
                  </div>

                  <div class="form-group pt-3">
                    <h6><label for="firstName">17. DOES FOLLOWING A SCHEDULE-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q17" id="2op1" value="option1">
                        <label class="form-check-label" for="2op1">A. APPEAL TO YOU</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q17" id="2op2" value="option2">
                        <label class="form-check-label" for="2op2">B. CRAMP YOU</label>
                      </div>
                  </div>

                  <div class="form-group pt-3">
                    <h6><label for="firstName">18. WHEN IT IS SETTLED WELL IN ADVANCE THAT YOU WILL DO A
                      CERTAIN THING AT A CERTAIN TIME,DO YOU FIND IT-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q18" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">A. NICE TO BE ABLE TO PLAN ACCORDINGLY</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q18" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">B. A LITTLE UNPLEASANT TO BE TIED DOWN</label>
                      </div>
                  </div>
                  <div class="form-group pt-3">
                    <h6><label for="firstName">19. ARE YOU MORE SUCCESSFUL-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q19" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">A. AT FOLLOWING A CAREFULLY WORKED OUT PLAN</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q19" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">B. AT DEALING WITH THE UNEXPECTED AND SEEING
                          QUICKLY WHAT SHOULD BE DONE</label>
                      </div>
                  </div>


                  <div class="form-group pt-3">
                    <h6><label for="firstName">20. WOULD YOU RATHER BE CONSIDERED-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q20" id="1op1" value="1op1">
                        <label class="form-check-label" for="1op1">A. A PRACTICAL PERSON</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q20" id="1op2" value="1op2">
                        <label class="form-check-label" for="1op2">B. AN OUT-OF-THE-BOX-THINKING PERSON</label>
                      </div>
                  </div>
                  
                  <button type="button" class="previous-btn">Prev</button>
                  <button type="button" class="next-btn">Next</button>
                </div>


                <div class="step step-5">
                  <div class="form-group pt-3">
                    <h6><label for="firstName">21. IN A LARGE GROUP, DO YOU MORE OFTEN-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q21" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">A. INTRODUCE OTHERS</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q21" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">B. GET INTRODUCED</label>
                      </div>
                  </div>

                  <div class="form-group pt-3">
                    <h6><label for="firstName">22. DO YOU USUALLY-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q22" id="2op1" value="option1">
                        <label class="form-check-label" for="2op1">A. VALUE EMOTION MORE THAN LOGIC</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q22" id="2op2" value="option2">
                        <label class="form-check-label" for="2op2">B. VALUE LOGIC MORE THAN FEELINGS</label>
                      </div>
                  </div>

                  <div class="form-group pt-3">
                    <h6><label for="firstName">23. WOULD YOU RATHER HAVE AS A FRIEND-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q23" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">A. SOMEONE WHO IS ALWAYS COMING UP WITH NEW IDEAS</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q23" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">B. SOMEONE WHO HAS BOTH FEET ON THE GROUND</label>
                      </div>
                  </div>
                  <div class="form-group pt-3">
                    <h6><label for="firstName">24. CAN THE NEW PEOPLE YOU MEET TELL WHAT YOU ARE INTERESTED IN-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q24" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">A. RIGHT AWAY</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q24" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">B. ONLY AFTER THEY REALLY GET TO KNOW YOU</label>
                      </div>
                  </div>


                  <div class="form-group pt-3">
                    <h6><label for="firstName">25. (IF TWO ANSWERS ARE TRUE, CHECK BOTH BOXES) IN YOUR DAILY WORK, DO YOU-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input single-checkbox" type="checkbox" name="q25" id="1op1" value="1op1">
                        <label class="form-check-label" for="1op1">A. USUALLY PLAN YOUR WORK SO YOU WON'T NEED TOWORK UNDER PRESSURE</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input single-checkbox" type="checkbox" name="q25" id="1op2" value="1op2">
                        <label class="form-check-label" for="1op2">B. RATHER ENJOY AN EMERGENCY THAT MAKES YOU WORK
                          AGAINST TIME </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input single-checkbox" type="checkbox" name="q25" id="1op3" value="1op3">
                        <label class="form-check-label" for="1op3">C. HATE TO WORK UNDER PRESSURE</label>
                      </div>
                  </div>


                  
                  <button type="button" class="previous-btn">Prev</button>
                  <button type="button" class="next-btn">Next</button>
                </div>




                <div class="step step-6">
                  <div class="form-group pt-3">
                    <h6><label for="firstName">26. DO YOU USUALLY-</label></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q26" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">A. SHOW YOUR FEELINGS FREELY</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q26" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">B. KEEP YOUR FEELINGS TO YOURSELF</label>
                      </div>
                  </div>


                  <h6 class="pt-3 text-center"style="text-decoration: underline;">Part 2: Which word in each pair appeals to you more?</h6>
                   <p class="text-center"style="text-decoration: none;">(Think what the word means, not how they look or how they sound)</p>
                  
                   <div class="row">
                     <div class="col-6">
                        <div class="form-group pt-2">
                          <h6><label for="firstName">27. </label></h6>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="q27" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">A. SCHEDULED</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="q27" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">B. UNPLANNED</label>
                          </div>
                        </div>

                        <div class="form-group pt-2">
                          <h6><label for="firstName">28. </label></h6>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="q28" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">A. FACTS</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="q28" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">B. IDEAS</label>
                          </div>
                        </div>

                        <div class="form-group pt-2">
                          <h6><label for="firstName">29. </label></h6>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="q29" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">A. QUIET</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="q29" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">B. HEARTY</label>
                          </div>
                        </div>

                        <div class="form-group pt-2">
                          <h6><label for="firstName">30. </label></h6>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="q30" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">A. CONVINCING</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="q30" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">B. TOUCHING</label>
                          </div>
                        </div>

                        <div class="form-group pt-2">
                          <h6><label for="firstName">31. </label></h6>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="q31" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">A. IMAGINATIVE</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="q31" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">B. MATTER-OF-FACT</label>
                          </div>
                        </div>

                        <div class="form-group pt-2">
                          <h6><label for="firstName">32. </label></h6>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="q32" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">A. BENEFITS</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="q32" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">B. BLESSINGS</label>
                          </div>
                        </div>
                      </div>

                   


                   <div class="col-6">
                      <div class="form-group pt-2">
                        <h6><label for="firstName">33. </label></h6>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="q33" id="inlineRadio1" value="option1">
                          <label class="form-check-label" for="inlineRadio1">A. PEACEMAKER</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="q33" id="inlineRadio2" value="option2">
                          <label class="form-check-label" for="inlineRadio2">B. JUDGE</label>
                        </div>
                      </div>
                    

                    <div class="form-group pt-2">
                      <h6><label for="firstName">34. </label></h6>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q34" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">A. SYSTEMATIC</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="q34" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">B. SPONTANEOUS</label>
                      </div>
                    </div>

                  
                     
                      
                        <div class="form-group pt-2">
                          <h6><label for="firstName">35. </label></h6>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="q35" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">A. STATEMENT</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="q35" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">B. CONCEPT</label>
                          </div>
                        </div>

                        <div class="form-group pt-2">
                          <h6><label for="firstName">36. </label></h6>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="q36" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">A. RESERVED</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="q36" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">B. TALAKATIVE</label>
                          </div>
                        </div>

                        <div class="form-group pt-2">
                          <h6><label for="firstName">37. </label></h6>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="q37" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">A. ANALYZE</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="q37" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">B. SYMPATHIZE</label>
                          </div>
                        </div>

                        <div class="form-group pt-2">
                          <h6><label for="firstName">38. </label></h6>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="q38" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">A. CREATE</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="q38" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">B. MAKE</label>
                          </div>
                        </div>

                      </div>
                </div>
                
                <button type="button" class="previous-btn">Prev</button>
                <button type="button" class="next-btn">Next</button>
              </div>
                   


              <div class="step step-7">
                
                <h6 class="pt-1 text-center"style="text-decoration: none;">Which word in each pair appeals to you more? <br>
                  (Think what the word means, not how they look or how they sound)</h6>
                
                 <div class="row">
                   <div class="col-6">
                    <div class="form-group pt-2">
                      <h6><label for="firstName">39. </label></h6>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="39" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">A. DETERMINED</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="39" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">B. DEVOTED</label>
                      </div>
                    </div>

                    <div class="form-group pt-2">
                      <h6><label for="firstName">40. </label></h6>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="40" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">A. GENTLE</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="40" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">B. FIRM</label>
                      </div>
                    </div>

                      <div class="form-group pt-2">
                        <h6><label for="firstName">41. </label></h6>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="41" id="inlineRadio1" value="option1">
                          <label class="form-check-label" for="inlineRadio1">A. SYSTEMATIC</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="41" id="inlineRadio2" value="option2">
                          <label class="form-check-label" for="inlineRadio2">B. CASUAL</label>
                        </div>
                      </div>

                      <div class="form-group pt-2">
                        <h6><label for="firstName">42. </label></h6>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="42" id="inlineRadio1" value="option1">
                          <label class="form-check-label" for="inlineRadio1">A. CERTAINTY</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="42" id="inlineRadio2" value="option2">
                          <label class="form-check-label" for="inlineRadio2">B. THEORY </label>
                        </div>
                      </div>

                      <div class="form-group pt-2">
                        <h6><label for="firstName">43. </label></h6>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="43" id="inlineRadio1" value="option1">
                          <label class="form-check-label" for="inlineRadio1">A. CALM</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="43" id="inlineRadio2" value="option2">
                          <label class="form-check-label" for="inlineRadio2">B. LIVELY</label>
                        </div>
                      </div>

                      <div class="form-group pt-2">
                        <h6><label for="firstName">44. </label></h6>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="44" id="inlineRadio1" value="option1">
                          <label class="form-check-label" for="inlineRadio1">A. JUSTICE</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="44" id="inlineRadio2" value="option2">
                          <label class="form-check-label" for="inlineRadio2">B. MERCY</label>
                        </div>
                      </div>
                    </div>

                 


                 <div class="col-6">
                    <div class="form-group pt-2">
                      <h6><label for="firstName">45. </label></h6>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="45" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">A. FASCINATING</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="45" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">B. SENSIBLE</label>
                      </div>
                    </div>
                  

                  <div class="form-group pt-2">
                    <h6><label for="firstName">46. </label></h6>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="46" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1">A. FIRM-MINDED</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="46" id="inlineRadio2" value="option2">
                      <label class="form-check-label" for="inlineRadio2">B. WARM HEARTED</label>
                    </div>
                  </div>
                    
                      <div class="form-group pt-2">
                        <h6><label for="firstName">47. </label></h6>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="47" id="inlineRadio1" value="option1">
                          <label class="form-check-label" for="inlineRadio1">A. FEELING</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="47" id="inlineRadio2" value="option2">
                          <label class="form-check-label" for="inlineRadio2">B. THINKING</label>
                        </div>
                      </div>

                      <div class="form-group pt-2">
                        <h6><label for="firstName">48. </label></h6>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="48" id="inlineRadio1" value="option1">
                          <label class="form-check-label" for="inlineRadio1">A. LITERAL</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="48" id="inlineRadio2" value="option2">
                          <label class="form-check-label" for="inlineRadio2">B. FIGURATIVE</label>
                        </div>
                      </div>

                      <div class="form-group pt-2">
                        <h6><label for="firstName">49. </label></h6>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="49" id="inlineRadio1" value="option1">
                          <label class="form-check-label" for="inlineRadio1">A. ANTICIPATION</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="49" id="inlineRadio2" value="option2">
                          <label class="form-check-label" for="inlineRadio2">B. COMPASSION</label>
                        </div>
                      </div>

                      <div class="form-group pt-2">
                        <h6><label for="firstName">50. </label></h6>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="50" id="inlineRadio1" value="option1">
                          <label class="form-check-label" for="inlineRadio1">A. HARD</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="50" id="inlineRadio2" value="option2">
                          <label class="form-check-label" for="inlineRadio2">B. SOFT</label>
                        </div>
                      </div>

                      
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