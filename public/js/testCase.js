console.log("connected");
const outputt = document.querySelector(".output");

function calculateTime() {
    //get values
    var valuestart = $("select[name='timestart']").val();
    var valuestop = $("select[name='timestop']").val();

     //create date format          
     var timeStart = new Date("01/01/2007" + valuestart);
     var timeEnd = new Date("01/01/2007" + valuestop);

     var difference = timeEnd - timeStart;             

     difference = difference / 60 / 60 / 1000;


    return difference

}


// $.ajax({
//     type: "GET",
//     url: "attendance",
//     dataType: "json",
//     success: function (response) {
//         console.log(response);
//         // let cookie = document.cookie;
//         // console.log(getCookie("name"));
       
//         // for (const work of response) {
//         //     // if () {
                
//         //     // }
//         //     console.log(work);
//         //     console.log(work.start_time);
//         //     console.log(work.end_time);
//         //     // var diff =  response[0].end_time - response[0].start_time ;
//         //     // var diffInHours = diff/1000/60/60;  
            
//         //     var valuestart = work.start_time;
//         //     var valuestop = work.end_time

//         //     //create date format          
//         //     var timeStart = new Date("01/01/2007 " + valuestart);
//         //     var timeEnd = new Date("01/01/2007 " + valuestop);

//         //     var difference = timeEnd - timeStart;             

//         //     difference = difference / 60 / 60 / 1000;

//         //     // var diff = Math.abs(response.end_time - response.start_time) / 3600000;
//         //     outputt.innerHTML = difference.toFixed(2)
//         //     // console.log(diff);
//         // }
//     }
// });