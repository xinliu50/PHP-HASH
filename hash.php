<?php
$password = "xinliu1111";
$hash = password_hash($password, PASSWORD_BCRYPT);


echo $hash;
$options = array("cost"=>11);

if(password_verify("xinliu1111", $hash)){
	echo "<br/><br/> Password is valid";
	if(password_needs_rehash($hash, PASSWORD_DEFAULT, $options)){
		$newHash = password_hash($password, PASSWORD_DEFAULT,$options);
		echo "<br/><br/> New Hash: " . $newHash;
	}
}else{
	echo "<br/><br/> Password is not valid";
}



if(password_verify("xinliu1111", $newHash)){
	echo "<br/><br/> Password is valid";
	
}else{
	echo "<br/><br/> Password is not valid";
}
?>