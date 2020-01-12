<?php
$password = "xinliu1111";
$hash = password_hash($password, PASSWORD_BCRYPT,array("cost"=>11));


echo $hash;
$options = array("cost"=>11);

if(password_verify($password, $hash)){
	echo "<br/><br/> Password is valid";
}else{
	echo "<br/><br/> Password is not valid";
}
if(password_needs_rehash($hash, PASSWORD_DEFAULT, $options)){
		$newHash = password_hash($password, PASSWORD_DEFAULT,$options);
		echo "<br/><br/> New Hash: " . $newHash;
	}
?>