<?php
include("func.php");
login_system::$url = "http://".$_SERVER['HTTP_HOST']."/login/";
$status = login_system::status();
?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>TFcis Login - PHP SDK example</title>
</head>

<body>
	<?php if($status->login===false){ ?>
		You haven't login yet. <br>
		<a href="<?=$status->url?>">Login</a>
	<?php } else { ?>
		Id: <?=$status->data->id?> <br>
		User Name: <?=$status->data->account?> <br>
		E-mail: <?=$status->data->email?> <br>
		Nickname: <?=$status->data->nickname?> <br>
		<a href="<?=$status->url?>">Logout</a>
	<?php } ?>
	
	<br><br><br><br>
	Raw Data:
	<pre><?php var_dump($status); ?></pre>
</body>

</html>