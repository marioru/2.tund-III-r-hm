<?php
	$first_name= "Marianne";
	$last_name= "Orusalu";
	
	echo $first_name." ".$last_name;
?>
<br>
<?php

	$age = 5;
	
	//testib loogikat,juhul kui vanus on väiksem 
	//kui 18 siis kirjuta "alaealine", muul juhul "täisealine"
	
	//if'i sisse loogikatehe
	if($age <18) {
		//tõde
		echo "alaealine";
	} else {
		//väär
		echo "täisealine"
	}
?>