let projectOfSessionUser;

const selectProject = document.querySelector(".selectProject")

$.ajax({
    type: "GET",
    url: "GetSessionUserActiveProject",
    dataType: "json",
    success: function (response) {
        projectOfSessionUser = response;

        for (const project of projectOfSessionUser) {
            const projectTarget = document.createElement("div");
            projectTarget.className = "form-check"
            projectTarget.innerHTML = `
            <input class="form-check-input" type="radio" name="project" id="project" value="`+project.id+`">
            <label class="form-check-label" for="project">`+project.project_title+`</label>`
            selectProject.append(projectTarget);
        }

        const projects = document.querySelectorAll("#project");
        var projectId;
        for (const project of projects) {
            console.log(project);
            project.addEventListener("click", function(){  //if user click No for completion 
                 projectId = project.value;
                 console.log(projectId);
            })
        }
        $("#endForm").submit(function (e) { 
            e.preventDefault();
            let experience;
            
            $(".experience").each(function(){
                console.log("okka lokka ");
                if($(this).is(":checked")){
                    experience = this.value;
                }
            })
            
        });
    }
});        
