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
          
          const projectTarget = document.createElement("div");
          projectTarget.className = "col-4 pb-3"
          projectTarget.innerHTML = `
          <div class="card" style="height:180px">
            <div class="card-body">
              <a href="ProjectOverview/`+ project.id +`"><h6 class="text-dark">`+ project.project_title +`</h6></a>
              <p>`+project.description.slice(0,80)+`...</p>
              <small><p class="text-muted" style="vertical-align:bottom">`+HumanRead(project.created_at)+`</p></small>
            </div>
          </div>`
          projectCard.append(projectTarget);  
          
      }
    }
});