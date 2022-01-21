<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>End Project</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"></script>
      
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      <Script src="./js/EndProjectForm.js" defer></Script>
    
    <style>
        .post-text{

            resize: none;
            height: 70px;
        }

        input[name="rating"]{
            position: absolute;
            display:none;
          }

  .btn-scale {
  min-width: 44px;
  width: 6%;
  text-align: center;
  font-weight: bold;
  color: black;
  font-family: 'Lato', sans-serif;
  padding: 4px;
  margin: 4px;
}

.btn-scale-asc-1, .btn-scale-desc-10 {
  background-color: #33FF00;
}

.btn-scale-asc-1:hover,
.btn-scale-desc-10:hover {
  background-color: #2CDE00;
  transform: scale(1.1);
}

.btn-scale-asc-2,
.btn-scale-desc-9{
  background-color: #66FF00;
}

.btn-scale-asc-2:hover,
.btn-scale-desc-9:hover{
  background-color: #59DE00;
  transform: scale(1.1);
}

.btn-scale-asc-3,
.btn-scale-desc-8 {
  background-color: #99FF00;
}

.btn-scale-asc-3:hover,
.btn-scale-desc-8:hover {
  background-color: #85DE00;
  transform: scale(1.1);
}

.btn-scale-asc-4,
.btn-scale-desc-7 {
  background-color: #CCFF00;
}

.btn-scale-asc-4:hover,
.btn-scale-desc-7:hover {
  background-color: #B1DE00;
  transform: scale(1.1);
}

.btn-scale-asc-5,
.btn-scale-desc-6 {
  background-color: #FFFF00;
}

.btn-scale-asc-5:hover,
.btn-scale-desc-6:hover {
  background-color: #DEDE00;
  transform: scale(1.1);
}

.btn-scale-asc-6,
.btn-scale-desc-5 {
  background-color: #FFCC00;
}

.btn-scale-asc-6:hover,
.btn-scale-desc-5:hover {
  background-color: #DEB100;
  transform: scale(1.1);
}

.btn-scale-asc-7,
.btn-scale-desc-4 {
  background-color: #FF9900;
}

.btn-scale-asc-7:hover,
.btn-scale-desc-4:hover {
  background-color: #DE8500;
  transform: scale(1.1);
}

.btn-scale-asc-8,
.btn-scale-desc-3 {
  background-color: #FF6600;
}

.btn-scale-asc-8:hover,
.btn-scale-desc-3:hover {
  background-color: #DE5900;
  transform: scale(1.1);
}

.btn-scale-asc-9,
.btn-scale-desc-2 {
  background-color: #FF3300;
}

.btn-scale-asc-9:hover,
.btn-scale-desc-2:hover {
  background-color: #DE2C00;
  transform: scale(1.1);
}

.btn-scale-asc-10,
.btn-scale-desc-1 {
  background-color: #FF0000;

}

.btn-scale-asc-10:hover,
.btn-scale-desc-1:hover {
  background-color: #DE0000;
  transform: scale(1.1);
}

input[class="btn-scale-desc-1"]:checked{
    transform: scale(1.3);
}

.frm-chck-custom{
    margin: 2px;
    padding: 2px;
}

          input[id="1"]:checked + div,
          input[id="2"]:checked + div,
          input[id="3"]:checked + div,
          input[id="4"]:checked + div,
          input[id="5"]:checked + div,
          input[id="6"]:checked + div,
          input[id="7"]:checked + div,
          input[id="8"]:checked + div,
          input[id="9"]:checked + div,
          input[id="10"]:checked + div{
            
              transform: scale(1.3);
              /* filter: grayscale(50%); */

          }

    </style>

</head>
<body>  
    
    <div class="container pb-3">

      
            <div class="container" style="width: 600px; max-height: 100%; background: white; box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px; margin-top: 70px;">
         
        <h2 class="text-center pt-2" style="color: #002db3">Project Completion Form</h2>

        <form id="endForm" style="color:#002db3">
            @csrf
          <div class="form-row pt-4">
            <div class="form-group">
            <h6><label for="project">Choose a Running project to end</label></h6>
            <div class="selectProject">
              {{-- <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label" for="exampleRadios1">Project 1</label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">Project 2</label>
              </div> --}}
            </div>
            </div>
          </div>



          <div class="form-row pt-4">
            <div class="form-group">
            <h6><label for="target">How was your experience?</label></h6>
            
            <textarea class="form-control post-text" id="experience" rows="2" cols="2" placeholder="Please review your experience and any recommendation" required></textarea>
            </div>
          </div>



          <div class="form-row pt-4">
            <div class="form-group">
            <h6><label for="target">Did you learn any new skill while doing this project?</label></h6>
              <div class="form-check form-check-inline">
               <input class="form-check-input" type="radio" name="exampleRadios3" id="skillRadiosY" value="Yes">
               <h6><label class="form-check-label" for="skillRadiosY">Yes</label></h6>
             </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="exampleRadios3" id="skillRadiosN" value="No" checked>
                <h6><label class="form-check-label" for="skillRadiosN">No</label></h6>
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
            <h6><label for="target">Did you finish the project within time?</label></h6>
              <div class="form-check form-check-inline">
               <input class="form-check-input" type="radio" name="exampleRadios4" id="finishRadiosY" value="Yes" checked>
               <h6><label class="form-check-label" for="finishRadiosY">Yes</label></h6>
             </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="exampleRadios4" id="finishRadiosN" value="No">
                <h6><label class="form-check-label" for="finishRadiosN">No</label></h6>
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
            <h6><label for="target">How was your overall experience?</label></h6>
            <div class="row">
                <div class="col-xs-12 pt-1">
                    <div class="chart-scale">
                        
                      <label>
                          <input class="form-check-input experience frm-chck-custom" type="radio" name="rating" id="1" value="1">
                          <div class="btn-scale btn-scale-desc-1" for="rating">1</div>
                        </label>

                        <label>
                            <input class="form-check-input experience frm-chck-custom" type="radio" name="rating" id="2" value="2">
                            <div class="btn-scale btn-scale-desc-2" for="rating">2</div>
                          </label>

                          <label>
                            <input class="form-check-input experience frm-chck-custom" type="radio" name="rating" id="3" value="3">
                            <div class="btn-scale btn-scale-desc-3" for="rating">3</div>
                          </label>

                          <label>
                            <input class="form-check-input experience frm-chck-custom" type="radio" name="rating" id="4" value="4">
                            <div class="btn-scale btn-scale-desc-4" for="rating">4</div>
                          </label>
                          
                          <label>
                            <input class="form-check-input experience frm-chck-custom" type="radio" name="rating" id="5" value="5">
                            <div class="btn-scale btn-scale-desc-5" for="rating">5</div>
                          </label>

                          <label>
                            <input class="form-check-input experience frm-chck-custom" type="radio" name="rating" id="6" value="6">
                            <div class="btn-scale btn-scale-desc-6" for="rating">6</div>
                          </label>
                          
                          <label>
                            <input class="form-check-input experience frm-chck-custom" type="radio" name="rating" id="7" value="7">
                            <div class="btn-scale btn-scale-desc-7" for="rating">7</div>
                          </label>

                          <label>
                            <input class="form-check-input experience frm-chck-custom" type="radio" name="rating" id="8" value="8">
                            <div class="btn-scale btn-scale-desc-8" for="rating">8</div>
                          </label>

                          <label>
                            <input class="form-check-input experience frm-chck-custom" type="radio" name="rating" id="9" value="9">
                            <div class="btn-scale btn-scale-desc-9" for="rating">9</div>
                          </label>

                          <label>
                            <input class="form-check-input experience frm-chck-custom" type="radio" name="rating" id="10" value="10">
                            <div class="btn-scale btn-scale-desc-10" for="rating">10</div>
                          </label>
                  </div>
        
            </div>
           </div>
            </div>
           </div>
            
           <div class="pt-5 text-center" style="padding-bottom: 20px">
            <button type="submit" class="btn btn-primary" style="background-color: #002db3; ">Done</button>
          </div>
        
      </form>
    </div>


              
            </div>
          </div>



              

              








        </div>
    </div>
 
    
    
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>