<?php
$username = $_POST['username']; 
$email = $_POST['email'];
$questiona = $_POST['questiona'];
$questionb = $_POST['questionb'];
$questionc = $_POST['questionc'];
$feedback = $_POST['feedback'];


if(!empty($username) || !empty($email) || !empty($questiona) || !empty($questionb) || !empty($feedback)){
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "youtube";

	//create connection
	$conn = new mysqli($host,$dbUsername, $dbPassword, $dbname);

	if(mysqli_connect_error()){
		die('Connect Error('.mysqli_connect_errno().')'. mysqli_connect_error());
	}else{
		$SELECT = "SELECT email From feedback Where email = ? Limit 1";
		$INSERT = "INSERT Into feedback (username,email,questiona,questionb,questionc,feedback) values(?, ?, ?, ?, ?, ?)";

		//Prepare statement
		$stmt = $conn->prepare($SELECT);
		$stmt ->bind_param("s",$email);
		$stmt ->execute();
		$stmt ->bind_result($email);
		$stmt ->store_result();
		$rnum = $stmt->num_rows;

		if($rnum == 0){
			$stmt -> close();

			$stmt = $conn ->prepare($INSERT);
			$stmt ->bind_param("ssssss",$username,$email, $questiona,$questionb,$questionc, $feedback);
			$stmt-> execute();
			echo "Your feedback has been recorded and will be inspected by our admins.";
		}else{
			echo 'Someone already feedbacked using this email';
		}
		$stmt -> close();
		$conn -> close();


	}



}else{
	echo "All fields are required";
	die();
}
?>