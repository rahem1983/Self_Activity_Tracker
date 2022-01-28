function HumanRead(date){
    var time = new Date(date);
    return time.toDateString();
}

$.ajax({
    type: "GET",
    url: "GetSessionUserAllProject",
    dataType: "json",
    success: function (response) {
        const projectOfSessionUser = response;
        const projectCard = document.querySelector(".allProject")
        for (const project of projectOfSessionUser) {
          if(project.status == "Complete"){
            const projectTarget = document.createElement("div");
          projectTarget.className = "col-4 pb-5"
          projectTarget.innerHTML = `
          <div class="card" style="height:180px;">
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
          projectTarget.className = "col-4 pb-5"
          projectTarget.innerHTML = `
          <div class="card" style="height:180px;">
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
          projectTarget.className = "col-4 pb-5"
          projectTarget.innerHTML = `
          <div class="card" style="height:180px;">
            <div class="card-body">
              <a href="ProjectOverview/`+ project.id +`"><h6 class="text-dark">`+ project.project_title +`</h6></a>
              <p>`+project.description.slice(0,80)+`...</p>
              <h6 class="pb-3" >Project status: <span class="text-danger">`+project.status+`</span></h6>
              <small><p class="text-muted" style="vertical-align:bottom">`+HumanRead(project.created_at)+`</p></small>
            </div>
          </div>`
          projectCard.append(projectTarget);
          }
            
          
      }
    }
});