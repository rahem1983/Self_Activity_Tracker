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
            height: 150px;
        }

    </style>

</head>
<body>
    
    <div class="container pb-3">

        <div class="col-lg-12" style="align-items: center;">
            <div class="container" style="width: 600px; height: 700px; background: white; box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px; margin-top: 70px;">
         
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
              <label for="ProbableFinishDate">Estimated Finishing Date:</label>
                <input type="date" id="ProbableFinishDate" name="ProbableFinishDate">
                </div>
              </div>

              <div class="form-row pt-4">
                <div class="form-group">
                <label for="projectreq">Project Requirements</label>
                <textarea class="form-control post-text" id="projectreq" rows="2" cols="2" placeholder="Technologies required in this project"></textarea>
                  </div>
              </div>


              

              <div class="pt-5 text-center">
                <button type="submit" class="btn btn-primary" style="background-color: #002db3">Done</button>
              </div>
            
          </form>









    </div>
    </div>
    </div>
 
    
    
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>