@include('header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"></script>
      
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      
    
    <style>

        /* .login-btn{
         
        background-color: #543c52;
        color: #f1e8e6;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
      }

      .login-btn:hover{

        background-color: #f55951;
        color: white;
      }  */
      
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
<body style="background-color: #ccccff;">
    
    
    
        <div class="row pt-5 pb-3" style="align-items: center;">
            
            <div class="col-lg-6" style="align-items: center;">
                <img src="{{url('./image/undraw_online_ad_re_ol62.svg')}}" style="width: 100%;" alt="">
            </div>

            <div class="col-lg-6" style="align-items: center;">
                <div class="p-3" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px; width: 90%; max-height: 100%; background: white; margin-top: 70px; margin-left: 10px;">
                   
                    <h2 class="text-center pt-2" style="color: #002db3">Signup</h2>

                    <form style="color:#002db3 " action="{{url('signup')}}" method="post">
                      @csrf
                        <div class="form-row pt-4">
                          <div class="form-group">
                            <span style="color:#ff0000 ">@error('name'){{$message}}@enderror</span>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                          </div>
                        </div>

                        <div class="form-row pt-4">
                            <div class="form-group">
                              <span style="color:#ff0000 ">@error('email'){{$message}}@enderror</span>
                              <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                          </div>

                          <div class="form-row pt-4">
                            <div class="form-group">
                              <span style="color:#ff0000 ">@error('phone'){{$message}}@enderror</span>
                              <input type="number" class="form-control" id="mobile" name="phone" placeholder="Mobile No.">
                            </div>
                          </div>

                          <div class="form-row pt-4">
                            <div class="form-group">
                              <span style="color:#ff0000 ">@error('gender'){{$message}}@enderror</span>
                            <label for="gender" class="text-dark">Gender</label> &nbsp;
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">
                            <label class="form-check-label" for="inlineRadio1"> Male</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
                            <label class="form-check-label" for="inlineRadio2"> Female</label>
                          </div>

                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="Others">
                            <label class="form-check-label" for="inlineRadio2"> Others</label>
                          </div>
                        </div>
                      </div>

                          <div class="form-row pt-4">
                            <div class="form-group">
                              <span style="color:#ff0000 ">@error('password'){{$message}}@enderror</span>
                              <input type="password" class="form-control" id="pass" name="password" placeholder="Password">
                            </div>
                          </div>
                          

                          <div class="form-row pt-4">
                            <div class="form-group">
                              <span style="color:#ff0000 ">@error('designation'){{$message}}@enderror</span>
                              <input type="text" class="form-control" id="designation" name="designation" placeholder="Designation e.g: Web/App Developer, Graphic Designer, HR..">
                            </div>
                          </div>

                          <div class="form-check pt-4">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="agree">
                            <label class="form-check-label text-dark" for="exampleCheck1">I Agree to <small><a href="#"> Terms and Conditions</a></small></label><span style="color:#ff0000 ">@error('agree'){{$message}}@enderror</span>
                          </div>

                          <div class="pt-4 text-center pb-5">
                            <button type="submit" class="btn btn-primary" style="background-color: #002db3">Submit</button>
                          </div>
                        </div>
                        
                      </form>
            
            
                    
                </div>
            </div>

 
    
    
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>