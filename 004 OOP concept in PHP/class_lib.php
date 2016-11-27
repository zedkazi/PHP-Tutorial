<?php
	class person{
		//variable in class is called property(ies)
		var $name;
		
		//properties with access modifiers
		public $travels;
		protected $travel_exp;
		private $pics_url;
		
		
		
		/* NOT REQUIRED AS WE CALL SETTER IN INDEX.PHP
		
		Contsructor - Special built-in method called a 'constructor'. 
		//Allows you to initialize properties 
		//is optional as automatically called whrn creating an object
		However, creating a constructor will save you from calling setter method when object is created
		function __construct($persons_name){
			$this->name = $persons_name;
		}*/
		
		//Function is class is called method
		//after defining properties in class, we define Getter and Setter methods
		/*getter and setter methods should match property names
		so as other programmers easily recognise the properties associated with them*/
		function set_name($new_name){
			$this->name = $new_name;
		}
		
		/* $this is built-in variable built into all objects which points to the current object
		i.e. it is a self referencing variable 
		use $this to access properties and call other functions of current class
		*/
		function get_name(){
			echo 'Hi, '.$this->name.'<br/>';
			echo 'Hope you having a good time.';
		}
		
		
		private function get_pics_url(){
			return $this->pinn_number.
		}
	}
?>