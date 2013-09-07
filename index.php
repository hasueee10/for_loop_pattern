<?php

##########################
#  Problem 2 Goes Here   #
##########################

	for($line = 10; $line > 0; $line--){
		for($star = $line; $star > 0; $star--){
			echo ("* ");
			}
		echo "</br>";
		}
		
	echo '<hr>';
##########################
#  Problem 2 Goes Here   #
##########################

	for($line = 1; $line < 11; $line++){
		for($star = $line; $star > 0; $star--){
			echo ("* ");
			}
		echo "<br>";
		}
		
	echo '<hr>';
	
##########################
#  Problem 3 Goes Here   #
##########################

	for($line = 10; $line > 0; $line--){
		for($space = $line; $space > 0; $space--){
			echo ("&nbsp &nbsp");
			}
		for($star = $line; $star <11; $star++){
			echo ("* ");
			}
			
	/* echo ("* "); */       
			 
	echo "</br>";
		}
		
	echo '<hr>';
	
##########################
#  Problem 4 Goes Here   #
##########################

	for($line = 10; $line > 0; $line--){
		for($space = $line; $space <11; $space++){
			echo ("&nbsp &nbsp");
				}
		for($star = $line; $star > 0; $star--){
			echo ("* ");
				}

	/* echo ("* "); */ 
				
	echo "</br>";
	}

	echo '<hr>';
?>




