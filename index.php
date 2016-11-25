<!DOCTYPE html>
<html>
	<head>
		<title>PHP OOP</title>
	</head>
	<body>
		<?php include('class_lib.php'); ?>
		
		//instantiation -class dint become object until this is done
		<?php 
			$zaid = new person();
			$queen = new person;
			
			//set object properties
			$zaid->set_name("Zaid Kazi");
			$queen->set_name("Zaid's Wifey");
			
			//Accessing an object's data
			echo "Zaid's Full Name: ".$zaid->get_name();
			echo "Who is Queen: ".$queen->getname();
			//here $zaid becomes a handle/reference to newly created person object
			//handles are use to control and use the person object
			
			//'->' arrow operator and name of the variable to access object properties without use of methods
		?>
		
		
		
	</body>
</html>
