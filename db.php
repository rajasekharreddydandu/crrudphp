<?php
function Createdb(){
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "bookstore";
 //create connection
 $conn = mysqli_connect($servername ,$username ,$password ,$dbname);
 
 if(!$conn){
	     
   die("Connection failed:".mysqli_connect_error());
 
  }
  $sql = "CREATE DATABASE  IF NOT EXISTS $dbname";
  if(mysqli_query($conn,$sql)){
	  $conn = mysqli_connect($servername ,$username ,$password ,$dbname);
	  
	  $sql = "
	   CREATE TABLE IF NOT EXISTS books(
	   id INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	   book_name VARCHAR(25) NOT NULL,
	   book_publisher VARCHAR(20),
	   book_price FLOAT)
	   ";
	   if(mysqli_query($conn,$sql)){
		   echo "Table created successfully";
	   }else{
		   echo "Error while creating table".mysqli_error($conn);
	   }
  }else{
	  echo "Error in creating database".mysqli_error($conn);
  }
}
 /* $conn = mysqli_connect($servername ,$username ,$password);
 
 if(!$conn){   
   die("Connection failed:".mysqli_connect_error());
  }
  else{
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname ";
	if($conn,$sql){
		$conn = mysqli_connect($servername ,$username ,$password ,$dbname );
	    
        $sql = "CREATE TABLE IF NOT EXISTS books(
		id INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
		book_name VARCHAR(20) NOT NULL,
		book_publisher VARCHAR(25),
		book_price FLOAT
		)";
        if(mysqli_query	($conn,$sql)){
			echo "Table created !";
		}else{
			echo "Table not created..!";
		}	
	}else{
		echo "while error creating database";
	}
  }
     */
    
     // ----create------
	 
	 
       
 


       
	 
       
 
?>
