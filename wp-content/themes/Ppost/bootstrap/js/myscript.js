$(document).ready(function()
{
    
function rotate()
{
	$('#logo').css("transform", "rotateY(360deg)");
    $('#logo').css("clear","both");
	//alert("jog");
}

//function drotate()
//    {
//       	$('#logo').css("transform", "rotateX(360deg)");
// 
//    }
setInterval(rotate,2000);
//setInterval(drotate,4000);




    // $('marquee').mouseover(function() {
    //     $(this).attr('scrollamount',0);
    // }).mouseout(function() {
    //      $(this).attr('scrollamount',5);
    // });

   function setLatestNews()
   {
       //console.log("working");
       $('.inactive').hide("slow");
       var active = $('.active');
       active.addClass("inactive");
       active.hide("slow");

       active.next().addClass('active');
       active.removeClass('active').addClass('active');
       $('.active').removeClass('active').show("slow").addClass("inactive");
   }

    //setInterval(setLatestNews,2000);
    // setLatestNews();
});