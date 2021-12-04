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
      <Script src="./js/Newproject.js" defer></Script>
      <style>
         .post-text{
         resize: none;
         height: 150px;
         }
         .input-css{
         border: 1px solid #ced4da;
         border-radius: 0.25rem;
         }
         .mid-box{
         width: 600px; 
         max-height: 100%; 
         background: white; 
         box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px; 
         margin-top: 70px;
         }
         .plus-btn{
         background: white;
         color:#002db3;
         width: 100px;
         height: 30px;
         padding: 5px;
         margin-top: 7px;
         }
         .plus-btn:hover{
         background: #002db3;
         color: white;
         }
      </style>
   </head>
   <body>
      <div class="container pb-3">
         <div class="col-lg-12" style="align-items: center;" >
            <div class="container p-2 mid-box">
               <h2 class="text-center pt-2" style="color: #002db3"> Start New Project</h2>
               <form style="color:#002db3 ">
                  <div class="form-row pt-4">
                     <div class="form-group">
                        <label for="title">Project Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Name of your project">
                     </div>
                  </div>
                  <div class="form-row pt-4">
                     <div class="form-group">
                        <label for="shortdesc">Short Description</label>
                        <textarea class="form-control post-text" id="shortdesc" rows="2" cols="2" placeholder="Short Description about your project"></textarea>
                     </div>
                  </div>
                  <div class="form-row pt-4">
                     <div class="form-group">
                        <label for="ProbableFinishDate">Estimated Finishing Date:</label><br>
                        <input type="date" id="ProbableFinishDate" name="ProbableFinishDate" class="input-css">
                     </div>
                  </div>
                  <div class="form-row pt-4">
                     <div class="form-group">
                        <label for="projectreq">Project Requirements</label>
                        <textarea class="form-control post-text" id="projectreq" rows="2" cols="2" placeholder="Technologies required in this project"></textarea>
                     </div>
                  </div>

                  {{-- skill req --}}
                  <div class="form-row pt-4">
                     <div class="form-group">
                        <label for="skillreq">Skills Requirements</label>
                        <input type="text" class="form-control" id="skillreq1" placeholder="Skill required in this project">
                        <div class="pt-2" id="SkillReqDiv">
                           
                        </div>
                     </div>
                     <button type="button" class="btn plus-btn" id="AddSkillbutton"><i class="fas fa-plus"></i> Add</button>
                  </div>

                  {{-- new skill req --}}
                  <div class="form-row pt-4">
                     <div class="form-group">
                        <label for="newskillreq">New skills Requirements</label>
                        <input type="text" class="form-control" id="newskillreq1" placeholder="New skill required in this project">
                        <div class="pt-2" id="newSkillReqDiv">
                        </div>
                     </div>
                     <button type="button" class="btn plus-btn" id="newAddSkillbutton"><i class="fas fa-plus"></i> Add</button>
                  </div>

                  <div class="form-row pt-4">
                     <div class="form-group">
                        <label>Add Collaborators</label>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="yes">
                           <label class="form-check-label  text-dark" for="inlineRadio1"> Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="no">
                           <label class="form-check-label  text-dark" for="inlineRadio2"> No</label>
                        </div>
                     </div>
                  </div>
                  <div class="form-row pt-4" id="colab">
                     
                  </div>
                  <div class="pt-5 text-center">
                     <button type="submit" class="btn btn-primary" style="background-color: #002db3">Done</button>
                  </div>
               </form>
            </div>
            <div id="SkillReqDiv">
            </div>
         </div>
      </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
   </body>
</html>