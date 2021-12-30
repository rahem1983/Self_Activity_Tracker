const SkillReqDiv = document.querySelector("#SkillReqDiv"); //where skill addition field will be appended
const AddSkillbutton = document.querySelector("#AddSkillbutton"); // add button of add skill

const newSkillReqDiv = document.querySelector("#newSkillReqDiv");//where new skill addition field will be appended
const newAddSkillbutton = document.querySelector("#newAddSkillbutton");// add button of new add skill


//colaboration field and buttons
const colabDiv = document.querySelector("#colab"); 
const button1 = document.querySelector("#inlineRadio1");
const button2 = document.querySelector("#inlineRadio2");


// for adding skill field in the form
var i=2;
AddSkillbutton.addEventListener("click", function(){
    const inputSkill = document.createElement("input");
    inputSkill.id = "skillreq";
    inputSkill.name = "skillreq";
    inputSkill.className = "form-control skillreq";
    inputSkill.placeholder = i + ". Add another (Framework or Language)";
    SkillReqDiv.append(inputSkill);
    i++;
})


// for adding new skill field in the form
var j=2;
newAddSkillbutton.addEventListener("click", function(){
    const inputSkill = document.createElement("input");
    inputSkill.id = "newskillreq";
    inputSkill.name = "newskillreq";
    inputSkill.className = "form-control newskillreq"
    inputSkill.placeholder = j+". Add new another (Framework or Language)"
    newSkillReqDiv.append(inputSkill);
    j++;
})

button1.addEventListener("click", function(){  //if user click yes for colaborator
    colabDiv.innerHTML = `<div class="form-group">
        <label>Collaborators</label>
        <div class="form-control">
            <input class="colab" type="checkbox" id="colab1" name="colab1" value="WebDeveloper">
            <label for="colab1"> Web Developer</label><br>
            <input class="colab" type="checkbox" id="colab2" name="colab2" value="AppDeveloper">
            <label for="colab2"> App Developer</label><br>
            <input class="colab" type="checkbox" id="colab3" name="colab3" value="GraphicDesigner">
            <label for="colab3"> Graphic Designer</label><br>
            <input class="colab" type="checkbox" id="colab4" name="colab4" value="HR">
            <label for="colab4"> HR</label><br>
            <input class="colab" type="checkbox" id="colab5" name="colab5" value="Marketing">
            <label for="colab5"> Marketing</label><br>
            <input class="colab" type="checkbox" id="colab6" name="colab6" value="Sales">
            <label for="colab6"> Sales</label><br>
            <input class="colabOther" type="text" id="colab7" name="colab7" >
            <label for="colab6"> Other</label><br>
        </div>
    </div>`;
})

button2.addEventListener("click", function(){   //if user click no for colaborator
    colabDiv.innerHTML = "";
})


// const submitButton = document.querySelector("#submitButton");

// submitButton.addEventListener("click" , function(){
    
//     console.log("submit button click");
// })


//after submiting the form 
$("#newProjectForm").submit(function(e){
    e.preventDefault();  // prevents page reload

    let skillreq = [];
    let newskillreq = [];
    let colaborator = [];
    let colab;  // colaborators in a string

        $(".skillreq").each(function(){  //saving the skill requirment in an array 
            skillreq.push($(this).val().trim().toUpperCase());
        })

        $(".newskillreq").each(function(){   //saving the new skill requirment in an array
            newskillreq.push($(this).val().trim().toUpperCase());
        })

        var radiocheck = $('input[type="radio"]:checked');   //taking the radio button value that is checked (yes/no)

        if(radiocheck.val() === "yes"){  //if the user checkes the yes radio btn 
            $(".colab").each(function(){
                if($(this).is(":checked")){
                    colaborator.push($(this).val().trim().toUpperCase());
                }
            })
            if ($(".colabOther").val() !== "") {  // if the user put a value in the {others} input field
                colaborator.push($(".colabOther").val().trim().toUpperCase());
            }
        }

        if(colaborator.length <= 0){  // if the user checks YES but selects no options or checkes NO the colab varyable will have [NO] as a value
            colab = "NO";
        }
        else{  // if the user checks YES and selects any oprions then the value of the options will be saved in an string formate "OPTION1,OPTION2,OPTION3, . . . "
            colab = colaborator.toString();
        }

    let title = $("#title").val().trim();
    let shortdesc = $("#shortdesc").val().trim();
    let ProbableFinishDate = $("#ProbableFinishDate").val();
    let projectreq = $("#projectreq").val();
    let skillrequire = skillreq.toString();
    let newskillrequire = newskillreq.toString();
 
    let _token = $("input[name = _token]").val();
 
    $.ajax({
        
        url: "creatProject",
        type: "POST",
        dataType: "json",
        data: {
            title:title,
            shortdesc:shortdesc,
            ProbableFinishDate:ProbableFinishDate,
            projectreq:projectreq,
            skillrequire:skillrequire,
            newskillrequire:newskillrequire,
            colab:colab,
            _token:_token
        },
        success: function (response) {
            
            // const project = JSON.parse(response);
            alert("New project "+ response.project_title +" is created");
            // window.location.replace("weeklyTarget");
        }
    });
})