
const CBproject1 = document.querySelector("#CBproject");
// const CBproject2 = document.querySelector("#CBproject2");

const inputProject1 = document.querySelector("#inputProject");
// const inputProject2 = document.querySelector("#inputProject2");

// day = new Date(Date.now() - 864e5);   //day object of current date
// var d = day.toLocaleDateString()
// console.log(day);
// console.log(d);



// for (let i = 0; i < 7; i++) {
//   let first = curr.getDate() - curr.getDay() + i 
//   let day = new Date(curr.setDate(first))
//   week.push(day)
// }
// console.log(week);
 let today = new Date;

 let curr = new Date
$.ajax({
    type: "GET",
    url: "GetSessionUserActiveProject",
    dataType: "json",
    success: function (response) {
        const projectOfSessionUser = response
        
         
        let week = []
        for (let i = 0; i < 5; i++) {
            let first = curr.getDate() - curr.getDay() + i 
            let day = new Date(curr.setDate(first))
            week.push(day)
        }

        var dayindex = 0;

        const day = document.querySelectorAll(".daily")

        const monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "June","July", "Aug", "Sep", "Oct", "Nov", "Dec"];
        const dayName = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

        for (const d of day) {
            
            if(today.getDay() <= week[dayindex].getDay()){
                d.children[0].innerHTML = "Day-" + (dayindex+1) +": "+ week[dayindex].getDate() + " "+ monthNames[week[dayindex].getMonth()] +" "+ week[dayindex].getFullYear()+ "-" +  dayName[week[dayindex].getDay()];
                d.children[0].style.fontWeight = "600";
                for (const project of projectOfSessionUser) {
                    const projectTarget = document.createElement("div");
                    projectTarget.className = "inputOnProject"
                    projectTarget.innerHTML = `
                        <input type="checkbox" class="projectCBox" id="CBproject`+week[dayindex].getDate()+``+project.id+`" >
                        <label for="CBproject`+week[dayindex].getDate()+``+project.id+`">`+project.project_title+`</label>
                        <br>
                        <input type="date" name="assignedDate" id="assignedDate" value="`+week[dayindex].getFullYear()+`-`+zeroAdder(week[dayindex].getMonth()+1)+`-`+zeroAdder(week[dayindex].getDate())+`" hidden >
                        <input type="number" name="proId" id="proId" value="`+project.id+`" hidden >
                        <input type="text" name="proTitle" id="proTitle" value="`+project.project_title+`" hidden >
                        <div id="inputProject`+week[dayindex].getDate()+``+project.id+`"></div>`
    
                    d.children[1].append(projectTarget);
                    
                    const CBproject1 = document.querySelector("#CBproject"+week[dayindex].getDate()+""+project.id+"");
                    const inputProject1 = document.querySelector("#inputProject"+week[dayindex].getDate()+""+project.id+"");
    
    
                    CBproject1.addEventListener("click", function(){
                        if($(this).is(":checked")){
                        const inputproject = document.createElement("input");
                        inputproject.type = "text"
                        inputproject.id = "day"+CBproject1.id+"";
                        inputproject.className = "form-control post-text"
                        inputproject.placeholder = "Write your target for this specific day"
                        inputProject1.append(inputproject);
                        }
                        else{
                            const inputproject = document.querySelector("#day"+CBproject1.id+"");
                            inputproject.remove();
                        }    
                    })
                }
            }
            
            if(today.getDay() > week[dayindex].getDay()){
                const projectTarget = document.createElement("div");
                d.children[0].innerHTML = "Day-" + (dayindex+1) +": "+ week[dayindex].getDate() + " "+ monthNames[week[dayindex].getMonth()] +" "+ week[dayindex].getFullYear()+ "-" +  dayName[week[dayindex].getDay()];
                d.children[0].style.fontWeight = "600";
                for (const project of projectOfSessionUser) {
                    const projectTarget = document.createElement("div");
                    projectTarget.className = "inputOnProject"
                    projectTarget.innerHTML = `
                        <input type="checkbox" class="projectCBox" id="CBproject`+week[dayindex].getDate()+``+project.id+`" disabled>
                        <label for="CBproject`+week[dayindex].getDate()+``+project.id+`">`+project.project_title+`</label>
                        <br>
                        <input type="date" name="assignedDate" id="assignedDate" value="`+week[dayindex].getFullYear()+`-`+zeroAdder(week[dayindex].getMonth()+1)+`-`+zeroAdder(week[dayindex].getDate())+`" hidden >
                        <input type="number" name="proId" id="proId" value="`+project.id+`" hidden >
                        <input type="text" name="proTitle" id="proTitle" value="`+project.project_title+`" hidden >
                        <div id="inputProject`+week[dayindex].getDate()+``+project.id+`"></div>`
    
                    d.children[1].append(projectTarget);
                    
                    const CBproject1 = document.querySelector("#CBproject"+week[dayindex].getDate()+""+project.id+"");
                    const inputProject1 = document.querySelector("#inputProject"+week[dayindex].getDate()+""+project.id+"");
    
    
                    CBproject1.addEventListener("click", function(){
                        if($(this).is(":checked")){
                        const inputproject = document.createElement("input");
                        inputproject.type = "text"
                        inputproject.id = "day"+CBproject1.id+"";
                        inputproject.className = "form-control post-text"
                        inputproject.placeholder = "Write your target for this specific day"
                        inputProject1.append(inputproject);
                        }
                        else{
                            const inputproject = document.querySelector("#day"+CBproject1.id+"");
                            inputproject.remove();
                        }    
                    })
                }
            }
            dayindex++;
        }
        
        function zeroAdder(zero){
            if(zero<10){
                return ("0"+zero)
            }
            else{
                return zero
            }
        }

        $("#weekForm").submit(function (e) { 
            e.preventDefault();
            // console.log($("input[name = _token]").val());
            $(".inputOnDate").each(function () { 
                // console.log(this.children[1]);
                $(this.children).each(function(){
                    if($(this.children[0]).is(":checked")){
                        
                        $.ajax({
                            type: "post",
                            url: "postWeeklyTarget",
                            data: {
                                assignedDate:this.children[3].value,
                                projectId:this.children[4].value,
                                projectTitle:this.children[5].value,
                                todo:this.children[6].children[0].value,
                                _token:$("input[name = _token]").val()
                            },
                            dataType: "json",
                            success: function (response) {
                                console.log(response);
                            }
                        });
                    }
                });
            });
            // window.location.replace("./Home");
        });
    }
});        


// var temp = 0;
// CBproject1.addEventListener("click", function(){
//     if(temp===0){
//     const inputproject = document.createElement("input");
//     inputproject.id = "day1";
//     inputproject.className = "form-control post-text"
//     inputproject.placeholder = "Write your target for this specific day"
//     inputProject1.append(inputproject);
//     temp = 1;
//     }
//     else{
//         const inputproject = document.querySelector("#day1");
//         inputproject.remove();
//         temp = 0;
//     }    
// })
// var temp2 = 0;
// CBproject2.addEventListener("click", function(){
//     if(temp2===0){
//     const inputproject = document.createElement("textarea");
//     inputproject.id = "day2";
//     inputproject.className = "form-control post-text"
//     inputproject.placeholder = "Write your target for this specific day"
//     inputProject2.append(inputproject);
//     temp2 = 1;
//     }
//     else{
//         const inputproject = document.querySelector("#day2");
//         inputproject.remove();
//         temp2 = 0;
//     }    
// })