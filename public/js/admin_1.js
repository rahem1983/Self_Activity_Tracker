//Initialize Swiper JS Start

  var swiper = new Swiper(".mySwiper", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    initialSlide: 2, // first active initialized to slide 3
  });

// Swiper JS end


// Last Month Work Report Graph Start

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
                    return value+ " hrs"; //For unit hrs
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


// Last Month Work Report Graph End


        // Second Last Month Work Report Graph Start

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
                return value+ " hrs"; //For unit hrs
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

        // Second Last Month Work Report Graph End




// Third Last Month Work Report Graph Start

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
                return value+ " hrs"; //For unit hrs
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

// Third Last Month Work Report Graph End




        // <!-- Web Chart Start-->

        var xValues = ["1", "2", "3", "4", "5", "6", "7", " 8", "9", "", "11", "12",
        "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30", "31" ];
        var yValues = [6, 10, 9, 12, 2, 6, 7, 5, 0, 0, 4, 7, 4, 6, 9, 3, 2, 4, 6, 5, 0, 0, 5, 8, 1, 2, 4, 7, 5, 3, 4];
        var barColors = "#4d4dff";

        
        //made the tooltip title blank  
        const Titletooltip = (tooltipItems) => {
            return ""; 
        }

        new Chart("webBar", {
        type: "bar",
        data: {
        labels: xValues,
        datasets: [{
        backgroundColor: barColors,
        data: yValues
        }]
        },

        options:{

        legend:{
        display: false,
        },

        title: {
            display: false,
            text: "Web",
            fontSize: 20
        },

        scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true,
                suggestedMin: 0, 
                suggestedMax: 15,
                //callback: function(value){
                //return value+ " hrs"; //For unit hrs
                //}
                
            }
        }]

        },


        tooltips: {
        enabled: true,
        mode: 'single',
        displayColors:true,
        callbacks: {
        title: Titletooltip,
        label: function(tooltipItems, data) {
        return 'Day '+ tooltipItems.xLabel + ': ' + tooltipItems.yLabel + ' Hrs';
        }
        }           
        }
        },



        });

        // <!-- Web Chart End-->


// <!-- Apps Chart Start-->

            var xValues = ["1", "2", "3", "4", "5", "6", "7", " 8", "9", "", "11", "12",
          "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30", "31" ];
            var yValues = [6, 10, 9, 13, 6, 6, 7, 5, 3, 8, 4, 15, 7, 8, 9, 4, 2, 4, 6, 5, 14, 0, 5, 8, 0, 2, 4, 7, 4, 4, 6];
            var barColors = "#4d4dff";
  
            
           //made the tooltip title blank  
            const Titletooltip1 = (tooltipItems) => {
              return ""; 
            }
  
          new Chart("appBar", {
          type: "bar",
          data: {
          labels: xValues,
          datasets: [{
          backgroundColor: barColors,
          data: yValues
          }]
          },
  
          options:{
  
          legend:{
            display: false,
          },
  
          title: {
              display: false,
              text: "Apps",
              fontSize: 20
          },
  
          scales: {
          yAxes: [{
              ticks: {
                  beginAtZero: true,
                  suggestedMin: 0, 
                  suggestedMax: 15,
                  //callback: function(value){
                  //return value+ " hrs"; //For unit hrs
                  //}
                  
              }
          }]
  
      },
  
          
          tooltips: {
          enabled: true,
          mode: 'single',
          displayColors:true,
          callbacks: {
            title: Titletooltip1,
           label: function(tooltipItems, data) {
           return 'Day '+ tooltipItems.xLabel + ': ' + tooltipItems.yLabel + ' Hrs';
           }
       }
   }
          },
  
          
  
          });

 // <!-- Apps Chart End--> 
 
 

        // <!-- Graphics Chart Start-->

        var xValues = ["1", "2", "3", "4", "5", "6", "7", " 8", "9", "", "11", "12",
        "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30", "31" ];
        var yValues = [9, 7, 5, 15, 3, 8, 9, 5, 2, 0, 0, 7, 3, 6, 9, 4, 3, 7, 9, 5, 2, 0, 5, 0, 1, 2, 4, 7, 5, 3, 4];
        var barColors = "#4d4dff";

        
        //made the tooltip title blank  
        const Titletooltip2 = (tooltipItems) => {
            return ""; 
        }

        new Chart("graphicBar", {
        type: "bar",
        data: {
        labels: xValues,
        datasets: [{
        backgroundColor: barColors,
        data: yValues
        }]
        },

        options:{

        legend:{
        display: false,
        },

        title: {
            display: false,
            text: "Graphics",
            fontSize: 20
        },

        scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true,
                suggestedMin: 0, 
                suggestedMax: 15,
                //callback: function(value){
                //return value+ " hrs"; //For unit hrs
                //}
                
            }
        }]

        },


        tooltips: {
        enabled: true,
        mode: 'single',
        displayColors:true,
        callbacks: {
        title: Titletooltip2,
        label: function(tooltipItems, data) {
        return 'Day '+ tooltipItems.xLabel + ': ' + tooltipItems.yLabel + ' Hrs';
        }
        }
        }
        },



        });


        // <!-- Graphics Chart End-->




        // Work Overview Graph Start
        var config = {
      type: 'bar',
      data: {
          labels: ["Web", "Apps", "Graphic Design"],
          datasets: 
          [{
              label: "General Projects",
              backgroundColor: "#3333ff",
              data: [8, 11, 14],
              //barThickness: 45,
          }, {
              label: "Collabaration Works",
              backgroundColor: "#002db3",
              data: [11, 16, 9],
              //barThickness: 45,
          }, {
              label: "Mega Projects",
              backgroundColor: "#001966",
              data: [4, 7, 5],
              //barThickness: 45,
          },]
      },
      options: {
          legend: {
              display: true,
                position: 'bottom',
                labels: {
                  fontSize: 12,
            }
          },
          // responsive: true,
          scales: {
              xAxes: [{
                  barPercentage: 0.7,
                  //stacked: true,
                  ticks: {
                      min: 0
                  },
              }],
              yAxes: [{
                  //stacked: true,
                  ticks: {
                    suggestedMin: 0,
                       suggestedMax: 20,
                      //max: 100,
                  },
              }]
          },
          tooltips: {
              enabled: true,
              mode: 'single',
          }
      }
      };
      var ctx = document.getElementById("overviewBar").getContext("2d");
      new Chart(ctx, config);

        // Work Overview Graph End

