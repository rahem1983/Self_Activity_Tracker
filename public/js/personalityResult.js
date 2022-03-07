
const type = document.querySelector(".personality_type");
console.log(type);
const link = document.querySelector(".youtube_link");
$.ajax({
    type: "get",
    url: "getPersonalityResult",
    dataType: "json",
    success: function (response) {

        type.innerHTML=response.personality_type.toString();
        link.href=response.youtube_link;
    }
});