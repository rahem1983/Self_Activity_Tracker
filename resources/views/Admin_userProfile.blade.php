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

      <!--Chart JS link-->
      <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
      </script>
      
    
    <style>


    </style>

</head>
<body>
    
    <div class="container">
      <!-- Attendance Graph -->
      <div class="card mt-3 mb-2">
        <div class="card-header text-center"><h5>Monthly Attendance Report</h5></div>
        <div class="card-body">

            <canvas id="myPieChart" style="width:100%; max-width:900px; display: block;margin-left: auto; margin-right: auto;"></canvas>
       
        </div>
    </div>


     <!-- Mood Graph -->
     <div class="card mt-3 mb-2">
      <div class="card-header text-center"><h5>Mood Graph</h5></div>
      <div class="card-body">
        <canvas id="myDonutChart" style="width:100%; max-width:900px; display: block;margin-left: auto; margin-right: auto;"></canvas>      
      </div>

      </div>


  </div>








    </div>




    <!-- Mood Graph JS -->
    <script>
      var xValues = ["Angry😡", "Depressed😥", "Neutral😐", "Relieved😌", "Very Happy😃"];
      var yValues = [5, 7, 9, 5, 4];
      var barColors = [
                      "#ff0000",
                      "#fe7f00",
                      "#ffff00",
                      "#36f",
                      "#63d867"
                      
    ];
       
    new Chart("myDonutChart", {
    type: "doughnut",
    data: {
      labels: xValues,
      datasets: [{
        backgroundColor: barColors,
        data: yValues,
      }]
    },
    options: { 
      legend: {
      display: true,
      position: 'bottom',
      },
      title: {
        display: false,
      },
    
    },
    
       
    });
    
    
       
     </script>



  <!--Monthy Attendance Report-->
  <script>
       var xValues = ["Absent", "Present"];
       var yValues = [8, 15];
       var barColors = ["#ff0000", "#0000ff"];
      
      new Chart("myPieChart", {
      type: "pie",
      data: {
      labels: xValues,
      datasets: [{
      backgroundColor: barColors,
      data: yValues
      }]
},
      options: {
      legend: {
      display: true,
      position: 'bottom',
      },
      title: {
      display: false,
      }
  }
  });
   
 </script>
 
    
    
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>