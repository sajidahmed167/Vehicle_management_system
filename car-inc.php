<?php
$vmodel= $_POST['vmodel']; 
$vcolour = $_POST['vcolour'];
$vtype = $_POST['vtype'];
$oname = $_POST['oname'];
$vnumber = $_POST['vnumber'];


if(!empty($vmodel) || !empty($vtype) || !empty($oname) || !empty($vnumber)){
	$host = "localhost";
	$dbUsername= "root";
	$dbPassword = "";
	$dbname = "database";

	//create connection
	$conn = new mysqli($host,$dbUsername, $dbPassword, $dbname);

	if(mysqli_connect_error()){
		die('Connect Error('.mysqli_connect_errno().')'. mysqli_connect_error());
	}else{
		$SELECT = "SELECT vnumber From driver Where vnumber = ? Limit 1";
		$INSERT = "INSERT Into driver (vmodel,vcolour,vtype,oname,vnumber) values(?, ?, ?, ?, ?)";

		//Prepare statement
		$stmt = $conn->prepare($SELECT);
		$stmt ->bind_param("s",$vnumber);
		$stmt ->execute();
		$stmt ->bind_result($vnumber);
		$stmt ->store_result();
		$rnum = $stmt->num_rows;

		if($rnum == 0){
			$stmt -> close();

			$stmt = $conn ->prepare($INSERT);
			$stmt ->bind_param("ssssi",$vmodel,$vcolour, $vtype,$oname, $vnumber);
			$stmt-> execute();
			echo "New record inserted sucessfully";
		}else{
			echo "Someone already is register under this vehicle number";
		}
		$stmt -> close();
		$conn -> close();


	}



}else{
	echo "All fields are required";
	die();
}
?>