// Initialize evo-calendar in your script file or an inline <script> tag
$(document).ready(function() {
    const mytask = []
    let data = {}
    let today= new Date().toISOString().slice(0,10)
    $.ajax({
        type: "GET",
        url: "GetSessionUserAllTask", 
        dataType: "json",
        success: function (response1) {
            const taskOfSessionUser = response1;
            for (const task of taskOfSessionUser) {
                if(task.status == "incomplete" && task.assigned_date != today){
                    data = {
                        id: task.id, // Event's ID (required)
                        name:"Incomplete task", // Event name (required)
                        date: task.assigned_date, // Event date (required)
                        description: task.todo+" ("+task.project_title+")",
                        type: "event", // Event type (required)
                        color: "red"
                    }
                        mytask.push(data)
                }
                else if(task.status == "incomplete" && task.assigned_date == today){
                    data = {
                        id: task.id, // Event's ID (required)
                        name:"Today's pending task", // Event name (required)
                        date: task.assigned_date, // Event date (required)
                        description: task.todo+" ("+task.project_title+")",
                        type: "event", // Event type (required)
                        color: "yellow"
                    }
                        mytask.push(data)
                }
            
            }
            $.ajax({
                type: "GET",
                url: "GetSessionUserAllProject", 
                dataType: "json",
                success: function (response2) {
                    const projectOfSessionUser = response2;
                    for (const project of projectOfSessionUser) {
                        if(project.status == "Running"){
                            data = {
                                id: project.id, // Event's ID (required)
                                name:"Probable Finish Date", // Event name (required)
                                date: project.probable_finish_date, // Event date (required)
                                description: project.project_title,
                                type: "event", // Event type (required)
                                color: "orange"
                            }
                                mytask.push(data)
                        }                    
                    }
                    $('#calendar').evoCalendar({ 
                        'todayHighlight': true, 
                        calendarEvents: mytask
                    })
                }
            });
            
          }
        
    });
    
    })  