<?php   
	if(isset($_POST['send'])) {
		$name = filter_input(INPUT_POST, 'name' , FILTER_SANITIZE_STRING);
		$email = filter_input(INPUT_POST, 'email' , FILTER_SANITIZE_STRING);
		$password = filter_input(INPUT_POST, 'password' , FILTER_SANITIZE_STRING);
		addslashes($name);
		addslashes($email);
		addslashes($password);
		$rec = md5($password);
		if(!empty($name) or !empty($email)) {
			if(!empty($password)) {
			$cmd ="INSERT INTO (the name of table hire) (name, email, password) VALUES (?,?,?)";
			$stmt = $con->prepare($cmd);
			$stmt->bindVAlue(1,$name);
			$stmt->bindVAlue(2,$email);
			$stmt->bindVAlue(3,$rec);
			$stmt->execute();
		if(isset($stmt) > 0) {
		   # header('login');
		}
		}else{
		#	echo "Write name and email";
		}
		}else{
		#	echo "Write name and email";
		}
	}

?>
		