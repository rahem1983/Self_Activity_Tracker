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
            .center-rad {
            margin: auto;
             width: 80%;
            padding: 10px;
            border-radius: 15px;
        }

        .pic-btn{
            display: flex;
            justify-content: center;
            align-items: center;  
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 20%;
        }

    </style>

</head>
<body>
    
    <div class="container" style="align-items: center;">

        <div class="p-3 center-rad" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px; width: 80%; max-height: 100%; background: white; margin-top: 70px;">
                   
            <h3 class="text-center pt-2" style="color: #002db3">Edit Profile</h2>
         
                <div class="center mt-5">

                <input style="display:none" id="input-image-hidden" onchange="document.getElementById('image-preview').src = window.URL.createObjectURL(this.files[0])" type="file" accept="image/jpeg, image/png">
                <img id="image-preview"  style="height:200px; width:200px;"  src="" > <br>
                
                <button class="mt-3" onclick="HandleBrowseClick('input-image-hidden');" >UPLOAD IMAGE</button>

                  <div class="pt-4 text-center pb-5">
                    <button type="submit" class="btn btn-primary" style="background-color: #002db3">Submit</button>
                  </div>
                </div>
            
            
            </div>
          








    </div>
 
    <script type="text/javascript">
        function HandleBrowseClick(input_image)
        {
            var fileinput = document.getElementById(input_image);
            fileinput.click();
        }     
    </script>
    
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>