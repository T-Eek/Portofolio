$(document).ready(function(){
$("ul li a").click(function(){
    var Color = $(this).attr("data-color");
    console.log(Color);
    $("body").css("background", Color);
});
$(".box").click(function(){
    alert("Klick op OK om verder te gaan");
});
});