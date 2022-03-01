@include('header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"></script>
      
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

      <!-- Chart Js -->
      <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
      </script>

      <!-- Swiper JS -->
      <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
      <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
      <script src="./js/admin_1.js" defer></script>
    
    <style>

        /* .center {
        margin: auto;
        width: 100%;
        padding: 10px;
        } */

        .bx{
          box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
          padding: 5px 10px 10px 0px;
          border-radius: 15px;
          width: 90%;
          align-items: center;
          margin: auto;
        }

        .bx-1{
          box-shadow: rgba(255, 255, 255, 0.2) 0px 0px 0px 1px inset, #002db3 0px 0px 0px 1px;
          padding: 8px 8px 4px 8px;
          margin-right: 3px;
          margin-top: 3px;
        }

        .bx-2{
        
          float: center;
          text-align: center;
          font-size: 10px;
          padding: 5px 5px 0px 5px;
          margin-bottom: -10px;
          margin-top: -5px;
          margin-right: 2px;
          font-weight: bold;
          
        }
        
        .bx-2-txt{
          border: #002db3 1px solid;
          float: right;
          padding: 3px;
        }
        

    </style>

</head>
<body>
    

    <div class="container">

        <h3 class="text-center pt-3 pb-3">Admin Panel</h3>

    <div class="bx mb-5">
        <div class="card-title mt-3" style="padding-left: 15px; border-left: 4px solid blue;"><h4>Monthly Work Report (In Hours)</h4>
        </div>
      <!-- Swiper -->
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="bx-1" style="float:right;"><h6 style="color: #002db3;">Total Working Hour &emsp;: <span>939</span> hrs <br> 
                                                                                 Avg Working Hour &emsp;&nbsp;&nbsp;: <span>31.3</span> hrs</h6></div>
            <canvas id="monthlyBar3" style="width:50%; padding: 15px;"></canvas>
            <h5 class="text-center pt-3" style="color: #002db3;">November, 2021</h5>
          </div>
          <div class="swiper-slide">
            <div class="bx-1" style="float:right;"><h6 style="color: #002db3;">Total Working Hour &emsp;: <span>1007</span> hrs <br> 
              Avg Working Hour &emsp;&nbsp;&nbsp;: <span>33.6</span> hrs</h6></div>
              
            <canvas id="monthlyBar2" style="width:50%; padding: 15px;"></canvas>
            <h5 class="text-center pt-3" style="color: #002db3;">December, 2021</h5>
          </div>
          <div class="swiper-slide">
            <div class="bx-1" style="float:right;"><h6 style="color: #002db3;">Total Working Hour &emsp;: <span>784</span> hrs <br> 
              Avg Working Hour &emsp;&nbsp;&nbsp;: <span>26.13</span> hrs</h6></div>
            <canvas id="monthlyBar1" style="width:50%; padding: 15px;"></canvas>
            <h5 class="text-center pt-3" style="color: #002db3;">January, 2022</h5>
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
  
   </div>

     


   <div class="bx mb-5">
    <div class="card-title mt-3" style="padding-left: 15px; border-left: 4px solid blue;"><h4 class="mb-4">Individual Team Report (<span>January, 2022</span>)</h4>
    </div>
    <div class="row p-2">
      <div class="col-4">
        <div class="card">
          <div class="card-title text-center pt-3" style="color:#002db3;"><h6>Web</h6></div>
          <div class="bx-2"> <p  class="bx-2-txt"style="color: #002db3;">Total Working Hour &emsp;: <span>333</span> hrs<br> 
            &nbsp;Avg Working Hour &emsp;&nbsp;&nbsp;: <span>11.1</span> hrs</p></div>
          <canvas id="webBar" style="width:100%;"></canvas>
        </div>
      </div>
      <div class="col-4">
        <div class="card">
          <div class="card-title text-center pt-3" style="color:#002db3;"><h6>Apps</h6></div>
          <div class="bx-2"> <p  class="bx-2-txt"style="color: #002db3;">Total Working Hour &emsp;: <span>339</span> hrs<br> 
            &nbsp;Avg Working Hour &emsp;&nbsp;&nbsp;: <span>11.3</span> hrs</p></div>
          <canvas id="appBar" style="width:100%;"></canvas>
        </div>
      </div>
      <div class="col-4">
        <div class="card">
          <div class="card-title text-center pt-3" style="color:#002db3;"><h6>Graphic Design</h6></div>
          <div class="bx-2"> <p  class="bx-2-txt"style="color: #002db3;">Total Working Hour &emsp;: <span>465</span> hrs<br> 
            &nbsp;Avg Working Hour &emsp;&nbsp;&nbsp;&nbsp;: <span>15.5</span> hrs</p></div>
          <canvas id="graphicBar" style="width:100%;"></canvas>
        </div>
      </div>
    </div>
</div>



        <div class="bx mb-5">
          <div class="card-title mt-3 mb-4" style="padding-left: 15px; border-left: 4px solid blue;"><h4>Work Overview</h4>
          </div>
          <canvas id="overviewBar" style="width:100%;"></canvas>
        

        </div>


  </div>
  
  
 



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>