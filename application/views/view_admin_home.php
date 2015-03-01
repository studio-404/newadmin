<?php
@include("application/views/parts/header.php");
@include("application/views/parts/top.php");

// echo "<pre>";
// print_r($all_userdata);
// echo "</pre>";
if(empty($all_userdata["username"])){
	@include("application/views/parts/loginform.php");
}else{
	echo "congrats you are logged in !";
}

@include("application/views/parts/footer.php");
?>