<?php
		include('dbcon.php');
		// server should keep session data for AT LEAST 1 hour
		ini_set('session.gc_maxlifetime', 3600);

		// each client should remember their session id for EXACTLY 1 hour
		session_set_cookie_params(3600);
		
		session_start();
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = mysqli_query($conn,"SELECT * FROM users WHERE username='$username' AND password='$password'")or die(mysqli_error());
		$count = mysqli_num_rows($query);
		$row = mysqli_fetch_array($query);


		if ($count > 0){
		
		$_SESSION['id']=$row['user_id'];
		
		echo 'true';
		
		mysqli_query($conn,"insert into user_log (username,login_date,user_id)values('$username',NOW(),".$row['user_id'].")")or die(mysqli_error());
		 }else{ 
		echo 'false';
		}	
				
		?>