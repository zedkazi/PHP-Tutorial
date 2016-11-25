<?php
	class person{
		//variable in class is called property(ies)
		var $name;
		
		//Function is class is called method
		//after defining properties in class, we define Getter and Setter methods
		/*getter and setter methods should match property names
		so as other programmers easily recognise the properties associated with them*/
		function set_name($new_name){
			$this->name = $new_name;
		}
		
		/* $this is builin variable built into all objects which points to the current object
		i.e. it is a self referencing variable 
		use $this to access properties and call other functions of current class
		*/
		function get_name(){
			echo 'Hi, '.$this->name.'<br/>';
			echo 'Hope you having a good time.';
		}
	}
?>