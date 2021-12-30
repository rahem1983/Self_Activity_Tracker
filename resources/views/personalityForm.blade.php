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
                  <button type="button" class="previous-btn">Prev</button>
                  <button type="button" class="next-btn">Next</button>
                </div>

                <div class="step step-4">
                  <div class="form-group">
                    <label for="country">country</label>
                    <input type="text" id="country" name="country">
                  </div>
                  <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" id="city" name="city">
                  </div>
                  <div class="form-group">
                    <label for="postCode">Post Code</label>
                    <input type="text" id="postCode" name="post-code">
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


 
    
    
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>