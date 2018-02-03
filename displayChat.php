	<?php 
			include('./config.php');

			$query = "SELECT * FROM chatroom";
			$run = mysqli_query($con,$query);
			while($row=mysqli_fetch_array($run)){	
	?>
			<div class="allData">
			<div class="allInfoInChat">
			<span class="nameInChat"style="color:red;float:left;"><?php echo "[".$row['name'] . "]: "; ?> </span>
			<span class="messagesInChat" style="color: blue;float:left;"><?php echo $row['message'];?></span>
			<span style="float:right;color:green;">
			</div>
			<div class="time">
			<?php 
				$timespamp = explode(" ", $row['time']);
				list($hour,$min) = explode(':', $timespamp[1]);
				echo $hour.":".$min; 
			?>
			</span>
			</div>
			</div>
		
	<?php } ?>