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

      <!-- Chart Js -->
      <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
      </script>

      <!-- Slider JS -->
      <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
      <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
      
    
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
        }

        .bx-1{
          box-shadow: rgba(255, 255, 255, 0.2) 0px 0px 0px 1px inset, #002db3 0px 0px 0px 1px;
          padding: 8px 6px 8px 8px;
          margin-right: 3px;
          margin-top: 3px;
        }
        

    </style>

</head>
<body>
    

    <div class="container">


        <h3 class="text-center pt-3 pb-3">Admin Panel</h3>

    <div class="bx">
        <div class="card-title mt-3 mb-3" style="padding-left: 15px; border-left: 4px solid blue;"><h4>Monthly Work Report (In Hours)</h4>
        </div>
        <!-- Swiper -->
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="bx-1" style="float:right;"><h6 style="color: #002db3;">Total Working Hour &emsp;: 939 hrs <br> 
                                                                                 Avg Working Hour &emsp;&nbsp;&nbsp;: 313 hrs</h6></div>
            <canvas id="monthlyBar3" style="width:100%; padding: 10px;"></canvas>
            <h5 class="text-center pt-3" style="color: #002db3;">November, 2021</h5>
          </div>
          <div class="swiper-slide">
            <canvas id="monthlyBar2" style="width:100%; padding: 10px;"></canvas>
            <h5 class="text-center pt-3" style="color: #002db3;">December, 2021</h5>
          </div>
          <div class="swiper-slide">
            <canvas id="monthlyBar1" style="width:100%; padding: 10px;"></canvas>
            <h5 class="text-center pt-3" style="color: #002db3;">January, 2022</h5>
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
  
   </div>
  </div>
  
  
  
      <!-- Initialize Swiper -->
      <script>
        var swiper = new Swiper(".mySwiper", {
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
          initialSlide: 2, // first active inializied to slide 3
        });
      </script>

    
      
      <!-- Last Month Work Report-->
        <script>
            var xValues = ["Day 1", "Day 2", "Day 3", "Day 4", "Day 5", "Day 6", "Day 7", "Day 8", "Day 9", "Day 10", "Day 11", "Day 12",
            "Day 13", "Day 14", "Day 15", "Day 16", "Day 17", "Day 18", "Day 19", "Day 20", "Day 21", "Day 22", "Day 23", "Day 24", "Day 25", "Day 26", "Day 27", "Day 28", "Day 29", "Day 30", "Day 31" ];
            var yValues = [10, 12, 23, 19, 9, 13, 7, 8, 21, 4, 15, 0, 0, 16, 9, 12, 23, 19, 9, 13, 7, 8, 0, 0, 16, 2, 4, 17, 15, 23, 11];
            var barColors = "#4d4dff";
   
           new Chart("monthlyBar1", {
           type: "bar",
           data: {
           labels: xValues,
           datasets: [{
           backgroundColor: barColors,
           data: yValues,
           barThickness: 20,
           maxBarThickness: 20,
           }]
       },
   
       options:{
       
           legend:{
            display: false,
           },
       
           title: {
               display: false,
               text: "Monthly Work Report (In Hours)",
               fontSize: 20
           },

           scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    suggestedMin: 0, 
                    //suggestedMax: 30,
                    callback: function(value){
                    return value+ " hrs"; //For percentage
                 }
                }
            }]

        },
        tooltips: {
         enabled: true,
         mode: 'single',
         callbacks: {
             label: function(tooltipItems, data) {
                 return  'Total Working Time: ' + tooltipItems.yLabel + ' Hours';
             }
         }
     }
   }
   
       });
        </script>



        <!-- Second Last Month Work Report-->
        <script>
          var xValues = ["Day 1", "Day 2", "Day 3", "Day 4", "Day 5", "Day 6", "Day 7", "Day 8", "Day 9", "Day 10", "Day 11", "Day 12",
          "Day 13", "Day 14", "Day 15", "Day 16", "Day 17", "Day 18", "Day 19", "Day 20", "Day 21", "Day 22", "Day 23", "Day 24", "Day 25", "Day 26", "Day 27", "Day 28", "Day 29", "Day 30", "Day 31" ];
          var yValues = [8, 12, 23, 19, 9, 13, 7, 8, 0, 6, 13, 17, 9, 26, 6, 12, 23, 19, 9, 4, 7, 8, 7, 6, 13, 2, 4, 19, 15, 26, 11];
          var barColors = "#4d4dff";
 
         new Chart("monthlyBar2", {
         type: "bar",
         data: {
         labels: xValues,
         datasets: [{
         backgroundColor: barColors,
         data: yValues,
         barThickness: 20,
         maxBarThickness: 20,
         }]
     },
 
     options:{
     
         legend:{
          display: false,
         },
     
         title: {
             display: false,
             text: "Monthly Work Report (In Hours)",
             fontSize: 20
         },

         scales: {
          yAxes: [{
              ticks: {
                  beginAtZero: true,
                  suggestedMin: 0, 
                  //suggestedMax: 30,
                  callback: function(value){
                  return value+ " hrs"; //For percentage
               }
              }
          }]

      },
      tooltips: {
       enabled: true,
       mode: 'single',
       callbacks: {
           label: function(tooltipItems, data) {
               return  'Total Working Time: ' + tooltipItems.yLabel + ' Hours';
           }
       }
   }
 }
 
     });
      </script>



      <!-- Third Last Month Work Report-->
      <script>
        var xValues = ["Day 1", "Day 2", "Day 3", "Day 4", "Day 5", "Day 6", "Day 7", "Day 8", "Day 9", "Day 10", "Day 11", "Day 12",
        "Day 13", "Day 14", "Day 15", "Day 16", "Day 17", "Day 18", "Day 19", "Day 20", "Day 21", "Day 22", "Day 23", "Day 24", "Day 25", "Day 26", "Day 27", "Day 28", "Day 29", "Day 30", "Day 31" ];
        var yValues = [12, 10, 21, 29, 18, 13, 7, 8, 0, 4, 15, 6, 3, 16, 9, 12, 23, 19, 9, 13, 7, 30, 5, 8, 34, 2, 4, 17, 15, 23, 11];
        var barColors = "#4d4dff";

       new Chart("monthlyBar3", {
       type: "bar",
       data: {
       labels: xValues,
       datasets: [{
       backgroundColor: barColors,
       data: yValues,
       barThickness: 20,
       maxBarThickness: 20,
       }]
   },

   options:{
   
       legend:{
        display: false,
       },
   
       title: {
           display: false,
           text: "Monthly Work Report (In Hours)",
           fontSize: 20
       },

       scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true,
                suggestedMin: 0, 
                //suggestedMax: 30,
                callback: function(value){
                return value+ " hrs"; //For percentage
             }
            }
        }]

    },
    tooltips: {
     enabled: true,
     mode: 'single',
     callbacks: {
         label: function(tooltipItems, data) {
             return  'Total Working Time: ' + tooltipItems.yLabel + ' Hours';
         }
     }
 }
}

   });
    </script>









    
 
    
    
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>