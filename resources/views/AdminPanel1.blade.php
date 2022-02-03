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

      <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
      </script>
      
    
    <style>

        /* .center {
        margin: auto;
        width: 100%;
        padding: 10px;
        } */

        img{
            width: 400px;
            height: 400px;
            object-fit: cover;
        }

    </style>

</head>
<body>
    
    <div class="container">
        
        <h3 class="text-center">Admin Panel</h3>

        
        <div class="card mt-3 m-5" style="padding-right: 20px;">
            <div class="card-title mt-3" style="padding-left: 15px; border-left: 4px solid blue;"><h4>Monthly Work Report (In Hours)</h4>
            </div>
             
            <canvas id="myBarChart" style="width:50%; padding: 40px;"></canvas>
    
            </div>
    </div>


    

        <div class="container">

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
           
          </div>
          <div class="carousel-item">
            
            <img class="d-block w-100" src="https://picsum.photos/id/237/200/300" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://picsum.photos/200/300?grayscales" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
             
           </div>
      

        <script>
            var xValues = ["Day 1", "Day 2", "Day 3", "Day 4", "Day 5", "Day 6", "Day 7", "Day 8", "Day 9", "Day 10", "Day 11", "Day 12",
            "Day 13", "Day 14", "Day 15", "Day 16", "Day 17", "Day 18", "Day 19", "Day 20", "Day 21", "Day 22", "Day 23", "Day 24", "Day 25", "Day 26", "Day 27", "Day 28", "Day 29", "Day 30", "Day 31" ];
            var yValues = [10, 12, 23, 19, 9, 13, 7, 8, 21, 4, 15, 0, 0, 16, 9, 12, 23, 19, 9, 13, 7, 8, 0, 0, 16, 2, 4, 17, 15, 23, 11];
            var barColors = "#0000ff";
   
           new Chart("myBarChart", {
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