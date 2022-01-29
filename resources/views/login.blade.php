@include('header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
          height: 900px; 
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
    
    <div>
    
        <div class="row pt-5 pb-3 justify-content center" style="align-items: center;">
            
            <div class="col-lg-6" style="align-items: center;">
                <img src="{{url('./image/undraw_online_ad_re_ol62.svg')}}" style="width: 900px;" alt="">
            </div>

            <div class="col-lg-6" style="align-items: center;">
                <div class="container" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px; width: 700px; height: 560px; background: white; margin-top: 70px;">
                   
                    <h2 class="text-center pt-2" style="color: #002db3">Login</h2>
                    @if(session('NoUser'))
                      <div class="title text-center mb-3 pt-4 text-white">
                        <h5 class="font-weight bolder" style="color:  #FF0000;">{{session('NoUser')}}</h5>
                      </div>
                    @endif    

                    <form style="color:#002db3; padding-top: 20px;" action="{{url("./login")}}" method="post">
                      @csrf
                        <div class="form-row pt-4">
                            <div class="form-group">
                              <h5><label for="title">Email</label></h5>
                              <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                              {{-- <span style="color:#ff0000 ">@error('email'){{$message}}@enderror</span> --}}
                            </div>
                          </div>

                                                 
                          <div class="form-row pt-4">
                            <div class="form-group">
                              <h5><label for="title">Password</label></h5>
                              <input type="password" class="form-control" id="pass" name="password" placeholder="Password">
                              {{-- <span style="color:#ff0000 ">@error('password'){{$message}}@enderror</span> --}}
                            </div>
                          </div>
                          

                          {{-- <div class="form-check pt-4">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label text-dark" for="exampleCheck1">Keep me logged in</label>
                          </div> --}}

                          @if(session('PasswordMissmatch'))
                            <div class="title text-center mb-3 pt-4 text-white">
                                <h5 class="font-weight bolder" style="color:  #FF0000;">{{session('PasswordMissmatch')}}</h5>
                            </div>
                          @endif

                          <div class="text-center" style="padding-top: 100px;">
                            <button type="submit" class="btn btn-primary" style="background-color: #002db3">Login</button>
                          </div>
                        </div>
                        
                      </form>
            
            
                    
                </div>
            </div>
        </div>
    </div>
 
    
    
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>