	<?php 
			include('./config.php');

			$query = "SELECT * FROM chatroom";
			$run = mysqli_query($con,$query);
			while($row=mysqli_fetch_array($run)){	
	?>
			<div class="allData">
			<div class="allInfoInChat">
			<div class="time">
			<?php 
				$timespamp = explode(" ", $row['time']);
				list($hour,$min) = explode(':', $timespamp[1]);
				echo "[".$hour.":".$min."]"; 
			?>
			</div>
			<div class="nameInChat"style="color:red;"><?php echo '***'.$row['name'] . ":"; ?> </div>
			<div class="messagesInChat" style="color: blue;;"><?php echo $row['message'];?></div>
			
			</div>
			</div>
		
	<?php } ?>