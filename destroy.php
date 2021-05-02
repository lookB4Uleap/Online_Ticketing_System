<?php

	setcookie("User",time()-(86400),"/");
	setcookie("Name",time()-(86400),"/");
	//echo "deleted";
	header("Location: index.html");

?>