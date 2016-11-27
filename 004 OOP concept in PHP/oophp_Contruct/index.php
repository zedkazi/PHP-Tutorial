<!DOCTYPE html>
<html>
	<head>
		<title>PHP OOP</title>
	</head>
	<body>
		<?php include('class_lib.php'); ?>
		
		//instantiation -class dont become object until this is done
		<?php 
			$zaid = new person("Zaid Kazi");
			$queen = new person("Zaid's Wifey");
			
			/* NOT REQUIRED AS CONSTRUCTOR CREATED IN CLASS
			//'->' arrow operator and name of the variable to access object properties without use of methods
			//set object properties
			$zaid->set_name("Zaid Kazi");
			$queen->set_name("Zaid's Wifey");*/
			
			//Accessing an object's data
			echo "Zaid's Full Name: ".$zaid->get_name();
			echo "Who is Queen: ".$queen->getname();
			//here $zaid becomes a handle/reference to newly created person object
			//handles are use to control and use the person object
		?>
	</body>
</html>
