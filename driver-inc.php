<?php
$username = $_POST['username']; 
$carnumber = $_POST['carnumber'];
$gender = $_POST['gender'];
$nid = $_POST['nid'];
$phoneCode = $_POST['phoneCode'];
$phone = $_POST['phone'];
$havedriver = $_POST['havedriver'];


if(!empty($username) || !empty($gender) || !empty($nid) || !empty($phoneCode) || !empty($phone) || !empty($havedriver)){
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "youtube";

	//create connection
	$conn = new mysqli($host,$dbUsername, $dbPassword, $dbname);

	if(mysqli_connect_error()){
		die('Connect Error('.mysqli_connect_errno().')'. mysqli_connect_error());
	}else{
		$SELECT = "SELECT nid From register Where nid = ? Limit 1";
		$INSERT = "INSERT Into register (username,carnumber,gender,nid,phoneCode,phone,havedriver) values(?, ?, ?, ?, ?, ?, ?)";

		//Prepare statement
		$stmt = $conn->prepare($SELECT);
		$stmt ->bind_param("s",$nid);
		$stmt ->execute();
		$stmt ->bind_result($nid);
		$stmt ->store_result();
		$rnum = $stmt->num_rows;

		if($rnum == 0){
			$stmt -> close();

			$stmt = $conn ->prepare($INSERT);
			$stmt ->bind_param("ssssiis",$username,$carnumber, $gender,$nid,$phoneCode, $phone, $havedriver);
			$stmt-> execute();
			echo "New record inserted sucessfully";
		}else{
			echo "Someone already registered using this National-ID or Passport";
		}
		$stmt -> close();
		$conn -> close();


	}



}else{
	echo "All fields are required";
	die();
}
?>