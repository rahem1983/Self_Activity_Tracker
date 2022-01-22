const finishRadioY = document.querySelector("#finishRadiosY");
const finishRadiosN = document.querySelector("#finishRadiosN");
const colabDiv = document.querySelector(".notComplete"); 

finishRadiosN.addEventListener("click", function(){  //if user click No for completion 
    colabDiv.innerHTML = `<input type="text" class="form-control post-text" id="reason" rows="2" cols="2" placeholder="Write the reason why you couldn't finish today's target" required>`
})

finishRadiosY.addEventListener("click", function(){  //if user click No for completion 
    colabDiv.innerHTML = "";
})


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


$("#dailyProgress").submit(function(e){
    e.preventDefault();  // prevents page reload

    let newskillArray = [];
    let newskillString;
    let mood;
    let status;
    let reason;
    let _token = $("input[name = _token]").val();
    let taskId = $("#Tid").val();
    console.log(taskId);
    let skillRadioY = document.querySelector("#skillRadiosY");
    let finishRadiosY = document.querySelector("#finishRadiosY");
    let finishRadiosN = document.querySelector("#finishRadiosN");

    if(finishRadiosY.checked){
        status = "complete";
    }

    if(finishRadiosN.checked){
        status = "incomplete";
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


        $(".mood").each(function(){
            if($(this).is(":checked")){
                mood = this.value;
            }
        })
        


    $.ajax({
        
        url: "../dailyProgress",
        type: "POST",
        dataType: "json",
        data: {
            taskId:taskId,
            reason:reason,
            status:status,
            new_skill:newskillString,
            start_time:$("#startTime").val(),
            end_time:$("#endTime").val(),
            mood:mood,
            _token:_token
        },
        success: function (response) {
            window.location.replace("../Home");
        }
    });
})