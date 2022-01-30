let mood = [];
var currentDate = new Date().toISOString().slice(0,10);

const todayTaskDiv = document.querySelector(".todayTaskDiv");
const incompleteTaskDiv = document.querySelector(".incompleteTaskDiv");
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
          i=0
          const projectCard = document.querySelector(".allProject")
          for (const project of projectOfSessionUser) {
            if(project.status == "Complete"){
              const projectTarget = document.createElement("div");
              projectTarget.className = "col-sm-6 pb-5"
              projectTarget.innerHTML = `
              <div class="card"  style="width:100%; height:100%;">
                <div class="card-body">
                  <a href="ProjectOverview/`+ project.id +`"><h6 class="text-dark">`+ project.project_title +`</h6></a>
                  <p>`+project.description.slice(0,80)+`...</p>
                  <h6 class="pb-3" >Project status: <span class="text-success">`+project.status+`</span></h6>
                  <small><p class="text-muted" style="vertical-align:bottom">`+HumanRead(project.created_at)+`</p></small>
                </div>
              </div>`
              projectCard.append(projectTarget);
            }
            else if(project.status == "Running"){
              const projectTarget = document.createElement("div");
              projectTarget.className = "col-sm-6 pb-5"
              projectTarget.innerHTML = `
              <div class="card"  style="width:100%; height:100%;">
                <div class="card-body">
                  <a href="ProjectOverview/`+ project.id +`"><h6 class="text-dark">`+ project.project_title +`</h6></a>
                  <p>`+project.description.slice(0,80)+`...</p>
                  <h6 class="pb-3" >Project status: <span class="text-warning">`+project.status+`</span></h6>
                  <small><p class="text-muted" style="vertical-align:bottom">`+HumanRead(project.created_at)+`</p></small>
                </div>
              </div>`
              projectCard.append(projectTarget);
            }
            else if(project.status == "Incomplete"){
              const projectTarget = document.createElement("div");
              projectTarget.className = "col-sm-6 pb-5"
              projectTarget.innerHTML = `
              <div class="card"  style="width:100%; height:100%;">
                <div class="card-body">
                  <a href="ProjectOverview/`+ project.id +`"><h6 class="text-dark">`+ project.project_title +`</h6></a>
                  <p>`+project.description.slice(0,80)+`...</p>
                  <h6 class="pb-3" >Project status: <span class="text-danger">`+project.status+`</span></h6>
                  <small><p class="text-muted" style="vertical-align:bottom">`+HumanRead(project.created_at)+`</p></small>
                </div>
              </div>`
              projectCard.append(projectTarget);
            }
              
            i++;
            if(i==4){
              break;
            }
        }
      }
  });

  $.ajax({
    type: "GET",
    url: "GetSessionUserTodayTask",
    dataType: "json",
    success: function (response) {
        const taskOfSessionUser = response;
        for (const task of taskOfSessionUser) {
          if(task.status == "incomplete"){
            const taskAt = document.createElement("a");
            taskAt.className = "text-danger"
            taskAt.style = "text-decoration: none"
            taskAt.href = "./dailyProgerssForm/"+task.id
            taskAt.id = task.project_id
            taskAt.innerHTML =`<h6>
            • `+task.todo+`  ( `+ task.project_title +` )</h6>
          `
          todayTaskDiv.append(taskAt);
          }
          if(task.status == "complete"){
            const taskAt = document.createElement("h6");
            taskAt.className = "text-success"
            taskAt.id = task.project_id
            taskAt.innerHTML = `
            • `+task.todo+`  ( `+ task.project_title +` )
          `
          todayTaskDiv.append(taskAt);
          }
      }
    }
});

$.ajax({
  type: "GET",
  url: "GetSessionUserincompleteTask",
  dataType: "json",
  success: function (response) {
      const taskOfSessionUser = response;
      for (const task of taskOfSessionUser) {
        if (currentDate >= task.assigned_date) {
          const taskAt = document.createElement("h6");
            taskAt.className = "text-danger" 
            taskAt.id = task.project_id
            taskAt.innerHTML = `
            • `+task.todo+` (`+ task.project_title +`) <small>`+ HumanRead(task.assigned_date)+`</small>`
            incompleteTaskDiv.append(taskAt);
        }
        
    }
  }
});