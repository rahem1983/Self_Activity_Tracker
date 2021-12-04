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
    inputSkill.id = "skillreq"+i;
    inputSkill.className = "form-control"
    inputSkill.placeholder = i + ". Add another skill"
    SkillReqDiv.append(inputSkill);
    i++;
})


// for adding new skill field in the form
var j=2;
newAddSkillbutton.addEventListener("click", function(){
    const inputSkill = document.createElement("input");
    inputSkill.id = "newskillreq"+j;
    inputSkill.className = "form-control"
    inputSkill.placeholder = j+". Add new another skill"
    newSkillReqDiv.append(inputSkill);
    j++;
})

button1.addEventListener("click", function(){  //if user click yes for colaborator
    colabDiv.innerHTML = `<div class="form-group">
        <label>Collaborators</label>
        <div class="form-control">
            <input type="checkbox" id="colab1" value="WebDeveloper">
            <label for="colab1"> Web Developer</label><br>
            <input type="checkbox" id="colab2" value="AppDeveloper">
            <label for="colab2"> App Developer</label><br>
            <input type="checkbox" id="colab3" value="GraphicDesigner">
            <label for="colab3"> Graphic Designer</label><br>
            <input type="checkbox" id="colab4" value="HR">
            <label for="colab4"> HR</label><br>
            <input type="checkbox" id="colab5" value="Marketing">
            <label for="colab5"> Marketing</label><br>
            <input type="checkbox" id="colab6" value="Sales">
            <label for="colab6"> Sales</label><br>
            <input type="text" id="colab7" >
            <label for="colab6"> Other</label><br>
        </div>
    </div>`;
})

button2.addEventListener("click", function(){   //if user click no for colaborator
    colabDiv.innerHTML = "";
})
