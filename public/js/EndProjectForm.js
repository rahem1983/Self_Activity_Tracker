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
            })
        }
        
        const skillRadiosY = document.querySelector("#skillRadiosY");
        const skillRadiosN = document.querySelector("#skillRadiosN");
        const newSkill = document.querySelector(".newSkill");
        skillRadiosY.addEventListener("click", function(){  //if user click No for completion 
    
            newSkill.innerHTML = `<div class="form-row pt-4">
            <div class="form-group">
               <label for="newskill">New skill learned </label>
               <input type="text" class="form-control newskill" id="newskill" name="newskill" placeholder="(Framework or Language)">
               <div class="pt-2" id="SkillDiv">
               </div>
            </div>
            <button type="button" class="btn plus-btn" id="AddSkillbutton"><i class="fas fa-plus"></i> Add</button>
            </div>`
                
            const SkillDiv = document.querySelector("#SkillDiv");
            const AddSkillbutton = document.querySelector("#AddSkillbutton");
            var j=2;
            AddSkillbutton.addEventListener("click", function(){
                const inputSkill = document.createElement("input");
                inputSkill.id = "newskill";
                inputSkill.name = "newskill";
                inputSkill.className = "form-control newskill";
                inputSkill.placeholder = j+". Add another (Framework or Language)";
                SkillDiv.append(inputSkill);
                j++;
            })
        })

        skillRadiosN.addEventListener("click", function(){  

            newSkill.innerHTML = "";
                
        })

        const finishRadioY = document.querySelector("#finishRadiosY");
        const finishRadiosN = document.querySelector("#finishRadiosN");
        const colabDiv = document.querySelector(".notComplete"); 

        finishRadiosN.addEventListener("click", function(){  //if user click No for completion 
            colabDiv.innerHTML = `<input type="text" class="form-control post-text" id="reason" rows="2" cols="2" placeholder="Write the reason of your delay.." required>`
        })

        finishRadiosY.addEventListener("click", function(){  //if user click No for completion 
            colabDiv.innerHTML = "";
        })
         

        $("#endForm").submit(function (e) { 
            e.preventDefault();
            let experience_rate;
            let newskillArray = [];
            let newskillString;
            let finish_date = new Date().toISOString().slice(0,10);
            let reason;
            let experience = document.querySelector('#experience').value.trim();
            console.log(experience);
            let _token = $("input[name = _token]").val();
            let skillRadioY = document.querySelector("#skillRadiosY");
            let finishRadiosY = document.querySelector("#finishRadiosY");
            let finishRadiosN = document.querySelector("#finishRadiosN");
        
            if(finishRadiosY.checked){
                reason = "No Delay";
            }

            if(finishRadiosN.checked){
                reason = $("#reason").val().trim();
            }

            if(skillRadioY.checked){
                $(".newskill").each(function(){
                    newskillArray.push($(this).val().trim().toUpperCase());
                })
                newskillString = newskillArray.toString();
            }
            else{
                newskillString = "NO"
            }
        
            if(newskillString.length <= 0){
                newskillString = "NO"
            }
            
            $(".experience").each(function(){
                if($(this).is(":checked")){
                    experience_rate = this.value;
                }
            })

            $.ajax({
        
                url: "EndProject",
                type: "POST",
                dataType: "json",
                data: {
                    projectId:projectId,
                    experience:experience,
                    delay_reason:reason,
                    new_skill_learned:newskillString,
                    finish_date:finish_date,
                    rate_experience:experience_rate,
                    _token:_token
                },
                success: function (response) {
                    console.log(response);
                    alert("আলহামদুলিল্লাহ শেষ");
                    window.location.replace("Home");
                }
            });
        });
    }
});        
