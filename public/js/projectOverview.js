title = document.querySelector('.title')
projectId = document.querySelector('.projectId')
description = document.querySelector('.description')
projectReq = document.querySelector('.projectReq')
skillRiq = document.querySelector('.skillRiq')
newSkillRiq = document.querySelector('.newSkillRiq')
colab = document.querySelector('.colab')
projectStatus = document.getElementById('status')
proFinishDate = document.getElementById('proFinishDate')
startDate = document.getElementById('startDate')
finishDate = document.querySelector('.finishDate')

function HumanRead(date){
    var time = new Date(date);
    return time.toDateString();
}

$.ajax({
    type: "post",
    url: "../oneProject",
    data: {
        projectId:projectId.value,
        _token:$("input[name = _token]").val()
    },
    dataType: "json",
    success: function (response) {

        title.innerHTML = response.project_title 
        description.innerHTML = response.description
        projectReq.innerHTML = response.requirement
        startDate.innerHTML = HumanRead( response.created_at) 

        var skill_require = response.skill_require.split(',');
        skill_require.forEach( function(value) {
            li = document.createElement('li');
            li.innerHTML = value;
            skillRiq.append(li);
        });

        var newskill_require = response.new_skill_require .split(',');
        newskill_require.forEach( function(value) {
            li = document.createElement('li');
            li.innerHTML = value;
            newSkillRiq.append(li);
        });
        
        var collaborator = response.collaborator .split(',');
        collaborator.forEach( function(value) {
            li = document.createElement('li');
            li.innerHTML = value;
            colab.append(li);
        });

        if(response.status=="Complete"){
            projectStatus.className = "text-success"
            projectStatus.innerHTML = response.status
            finishDate.innerHTML = `<h6 class="pb-3"><b>Project Finishing Date:</b> <span>`+HumanRead(response.finish_date)+`</span></h6>`
        }
        if(response.status=="Running"){
            projectStatus.className = "text-warning"
            projectStatus.innerHTML = response.status
        }

        if(response.status=="Incomplete"){
            projectStatus.className = "text-danger"
            projectStatus.innerHTML = response.status
        }

        proFinishDate.innerHTML = HumanRead( response.probable_finish_date) 
        
    }
});