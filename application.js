$(document).ready(function() {
	
	$('#aboutme').mouseenter(function() {
		$('#aboutme').stop().animate({ fontSize : '20px', color:'red'});
		$('#aboutme').mouseleave(function() {
			$('#aboutme').stop().animate({ fontSize : '15px', color:'black'  });
		});
	});
});