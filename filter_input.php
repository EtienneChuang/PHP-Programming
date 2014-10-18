<?php
  if(!isset($_POST)){//if there is no any post data, create a form to input data
		print <<<FORM
		<form method="POST" action="$_SERVER[PHP_SELF]">
		<p>email : <input type="email" name="email"></p>
		<p>float : <input type="text" name="float"></p>
		<p>int : <input type="text" name="int"></p>
		<p>IP : <input type="text" name="IP"></p>
		<p>regexp : <input type="text" name="regexp"></p>
		<p>url : <input type="url" name="url"></p>
		<input type="submit" value="submit">
FORM;
	}
	//ckeck each input with filter_input()
	if(!filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)){
		echo "E-mail is not valid<br/>";
	}
	else{
		echo "E-mail is valid<br/>";
	}
	if(!filter_input(INPUT_POST, "float", FILTER_VALIDATE_FLOAT)){
		echo "float is not valid<br/>";
	}
	else{
		echo "float is valid<br/>";
	}
	if(!filter_input(INPUT_POST, "int", FILTER_VALIDATE_INT)){
		echo "int is not valid<br/>";
	}
	else{
		echo "int is valid<br/>";
	}
	if(!filter_input(INPUT_POST, "IP", FILTER_VALIDATE_IP)){
		echo "IP is not valid<br/>";
	}
	else{
		echo "IP is valid<br/>";
	}
	if(!filter_input(INPUT_POST, "regexp", FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^M(.*)/")))){
		echo "regexp is not valid<br/>";
	}
	else{
		echo "regexp is valid<br/>";
	}
	if(!filter_input(INPUT_POST, "url", FILTER_VALIDATE_URL)){
		echo "url is not valid<br/>";
	}
	else{
		echo "url is valid<br/>";
	}
