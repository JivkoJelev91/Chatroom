<?php include('./config.php'); ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Live Chat</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <link rel="stylesheet" type="text/css" href="style.css" />
  
  <script>
	$(document).ready(function(e){
		
		function displayChat(){	
			$.ajax({
				url: 'displayChat.php',
				type: 'POST',
				success: function(data){
					$('#chatDisplay').html(data);
				}
			});
		}
		setInterval(function() { displayChat();}, 500);
		

		
		$('#sendMessageButton').click(function(e){
			$("#chatBox").animate({ scrollTop: $(document).height() }, "slow");
			var name = $("#user_name").val();
			var message = $("#message").val();
			$('#myChatForm')[0].reset();
			e.preventDefault();
		
			$.ajax({
				url: 'sendChat.php',
				type: 'POST',
				data: {
					uname: name,
					umessage: message
				}
			});
		});

		
	});
  </script>

</head>
<body>

<div class="container">
	<div class="well" id="chatBox">
		<h3 style="color:white;">Mirc is back OR JIRC</h3>
		<div id="chatDisplay"></div>
	</div>
	<form id="myChatForm" method="POST">
		<input  type="text" name="name" id="user_name" placeholder="Enter your name!" ><br />
		<input type="text" name="message" id="message" placeholder="Enter your message here!"><br />
		<button  type="submit" id="sendMessageButton">Send Message</button>
	</form>
</div>
	
</body>
</html>
