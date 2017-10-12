<html>
   <head>
      <title>Online PHP Script Execution</title>      
   </head>
   
   <body>
      
      <?php
//         echo "<h1>Hello, PHP!</h1>";
      	class MyClass
		{
  			public $prop1 = "I'm a class property!";
		}
		class YourClass
		{
			public $prop1 = "You are a class property!";
		}
 
		$obj = new MyClass;
		$obj2 = new YourClass;
 
		var_dump($obj,$obj2);
      ?>
   
   </body>
</html>
