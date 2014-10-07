$(document).ready(function() {

	var font_Size = $("#aboutme").css("fontSize")
	
	$('#aboutme').mouseenter(function() {
		$('#aboutme').stop().animate({fontSize: "20px", color:'red'});
		$('#aboutme').mouseleave(function() {
			$('#aboutme').stop().animate({ fontSize : font_Size , color:'black'  });
		});
	});
});