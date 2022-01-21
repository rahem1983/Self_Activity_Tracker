let mood = [];

function HumanRead(date){
  var time = new Date(date);
  return time.toDateString();
}

    $.ajax({
        type: "get",
        url: "MoodGraph",
        dataType: "json",
        success: function (response) {
          var xValues = ["Angry😡", "Depressed😥", "Neutral😐", "Relieved😌", "Very Happy😃"];
          var yValues = response;
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
        }
    });
    

         var xValues = ["Absent", "Present"];
         var yValues = [8, 15];
         var barColors = ["#ff0000", "#63d867"];
        
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

    $.ajax({
      type: "GET",
      url: "GetSessionUserAllProject",
      dataType: "json",
      success: function (response) {
          const projectOfSessionUser = response;
          console.log(projectOfSessionUser);
          for (const project of projectOfSessionUser) {
            console.log(project.id);
            const projectCard = document.querySelector(".allProject")
            const projectTarget = document.createElement("div");
            projectTarget.className = "col-sm-6 pb-3"
            projectTarget.innerHTML = `
            <div class="card"  style="width:260px; height:180px">
              <div class="card-body">
                <a href=""><h6 class="text-dark">`+ project.project_title +`</h6></a>
                <p>`+project.description.slice(0,80)+`...</p>
                <small><p class="text-muted" style="vertical-align:bottom">`+HumanRead(project.created_at)+`</p></small>
              </div>
            </div>`
            projectCard.append(projectTarget);
            
        }
      }
  });

     