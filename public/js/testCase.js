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

$.ajax({
    type: "get",
    url: "lastMonthAttendance",
    dataType: "json",
    success: function (response) {
        
        alert(sessionStorage.getItem('user'))
    }
});