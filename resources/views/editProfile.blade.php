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

        .gol-img
        {
            border-radius: 50%;
            width: 200px;
            height: 200px;
        }

        .upload-btn
        {   
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid;
            border-color: grey;
            background: white;
        }
        
        .upload-btn:hover
        {
            background: #002db3;
            color: white;
        }

    </style>

</head>
<body>
    
    <div class="container mb-5" style="align-items: center;">

        <div class="p-3 center-rad" style="box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;; width: 60%; max-height: 100%; background: white; margin-top: 70px;">
                   
            <h3 class="text-center pt-2" style="color: #002db3">Edit Profile</h2>
                
            <form action="{{url('./EditProfile')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="center mt-5">
                <input style="display:none" name="image" id="input-image-hidden" onchange="document.getElementById('image-preview').src = window.URL.createObjectURL(this.files[0])" type="file" accept="image/jpeg, image/png">
                <img id="image-preview" class="gol-img" style="height: 100%; width:100%;"  src="{{session('user')->image}}" > <br>
                    <div class="pic-btn mt-3">
                    <button type="button" class="btn upload-btn form-control" onclick="HandleBrowseClick('input-image-hidden');"><i class="far fa-edit">&nbsp;</i>UPLOAD</button>
                    </div>                        
                </div>

                
                  <div class="form-row pt-5">
                    <h5><label for="title">Change Mobile No.</label></h5>
                    <p class="pt-1 text-secondary">Your Current Mobile No. is: <span>{{session('user')->phone}}</span></p>
                    <span style="color:#ff0000 ">@error('phone'){{$message}}@enderror</span>
                    <div class="form-group">                     
                      <input type="number" class="form-control" id="phone" name="phone" value="null" placeholder="New Mobile No." min="0">
                    </div>
                  </div>


                  <div class="form-row pt-5">
                    <div class="form-group">
                      <h5><label for="title">Change Password</label></h5>
                      @if(session('passwordError'))
                      <span style="color:#ff0000 ">{{session('passwordError')}}</span>
                      @endif
                      <input type="password" class="form-control mt-4" id="currentPass" name="currentPass" placeholder="Current Password">
                    </div>

                    <div class="form-group pt-3">
                        <input type="password" class="form-control" id="newPass" name="newPass" placeholder="New Password">
                      </div>
                  </div>


                  <div class="pt-5 pb-3 pic-btn">
                    <button type="submit" class="btn btn-primary" style="background-color: #002db3">Save Changes</button>
                </div>

            </form> 
            
            </div>
          

    </div>


   <!-- Image JS--> 
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