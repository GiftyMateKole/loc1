<?php
	session_start();
	if(!isset($_SESSION['user']['ID'])){
		header("Location: index.html");
		exit();
	}
	
include_once "../loc1/func.php";
	$id=$_SESSION['user']['ID'];
    $obj= new func();
    $result=$obj->getreq($id);
	if($result==false){
		echo "result is false";
	}else{
		$row=$obj->fetch();
		
		while($row){
			echo "<p>Name: {$row['name']}</p>";
			echo "<p>Web: {$row['web']}</p>";
			echo "<p>Number: {$row['num']}</p>";
			echo "</br>";
			$row=$obj->fetch();
		}
	}
?>