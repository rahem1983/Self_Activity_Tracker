console.log("connected");
const outputt = document.querySelector(".output");
console.log(outputt.id);
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
var dt = new Date();
 var month = dt.getMonth();
 var year = dt.getFullYear();
daysInMonth = new Date(year, month, 0).getDate();
console.log(daysInMonth);
// <<<<<<< HEAD


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
// =======
// $.ajax({
//     type: "GET",
//     url: "test",
//     dataType: "json",
//     success: function (response) {
// <<<<<<< HEAD
//         // console.log(response);
//         // console.log(response[0].start_time);
//         // console.log(response[0].end_time);
//         // // var diff =  response[0].end_time - response[0].start_time ;
//         // // var diffInHours = diff/1000/60/60;  
        
//         // var valuestart = response[0].start_time;
//         // var valuestop = response[0].end_time

//         // //create date format          
//         // var timeStart = new Date("01/01/2007 " + valuestart);
//         // var timeEnd = new Date("01/01/2007 " + valuestop);

//         // var difference = timeEnd - timeStart;             

//         // difference = difference / 60 / 60 / 1000;

//         // // var diff = Math.abs(response.end_time - response.start_time) / 3600000;
//         // outputt.innerHTML = difference.toFixed(2)
//         // // console.log(diff);

// =======
//         console.log(response);
//         // for (const work of response) {
//         //     // if () {
// >>>>>>> deea142cb41e062db03bf9bdcc98969b5338d651
                
// //         //     // }
// //         //     console.log(work);
// //         //     console.log(work.start_time);
// //         //     console.log(work.end_time);
// //         //     // var diff =  response[0].end_time - response[0].start_time ;
// //         //     // var diffInHours = diff/1000/60/60;  
            
// //         //     var valuestart = work.start_time;
// //         //     var valuestop = work.end_time

// //         //     //create date format          
// //         //     var timeStart = new Date("01/01/2007 " + valuestart);
// //         //     var timeEnd = new Date("01/01/2007 " + valuestop);

// //         //     var difference = timeEnd - timeStart;             

// //         //     difference = difference / 60 / 60 / 1000;

// <<<<<<< HEAD
// //         //     // var diff = Math.abs(response.end_time - response.start_time) / 3600000;
// //         //     outputt.innerHTML = difference.toFixed(2)
// //         //     // console.log(diff);
// //         // }
// //     }
// // });
// =======
//         //     // var diff = Math.abs(response.end_time - response.start_time) / 3600000;
//         //     outputt.innerHTML = difference.toFixed(2)
//         //     // console.log(diff);
//         // }
// >>>>>>> 1cc4e9ca6a2d3b7170c8101084fab054ffb5793a
//     }
// });
// >>>>>>> deea142cb41e062db03bf9bdcc98969b5338d651
