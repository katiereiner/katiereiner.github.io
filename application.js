$(document).ready(function() {

	// var font_Size = $("#aboutme").css("fontSize")
	
	$('#aboutme').mouseenter(function() {
		$('#aboutme').stop().animate({ color:'red'});
		$('#aboutme').mouseleave(function() {
			$('#aboutme').stop().animate({ color:'black'  });
		});
	});
});