$(document).ready(function()
{
function rotate()
{
	$('#logo').css("transform", "rotateY(360deg)");
	//alert("jog");
}
setInterval(rotate,2000);


    // $('marquee').mouseover(function() {
    //     $(this).attr('scrollamount',0);
    // }).mouseout(function() {
    //      $(this).attr('scrollamount',5);
    // });
});