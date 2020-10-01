<?php 
require_once("db.php");
require_once("components.php");
Createdb();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   <style>
   .d-flex button{
	   margin:1.5em 0.6em;
	   padding:0.5em 2.4em;
   }
   
   </style>
</head>
<body>

<div class="container text-center">
  
  <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Basic</h1>
  <div class="d-flex justify-content-center">
     <form class="w-50"  method="post" action="operations.php">
	 <?php //inputElement($type,$icon,$placeholder,$name,$value)?>
	         <div class="pt-2">
			  <?php inputElement("text","<i class='fas fa-id-badge'></i>","id","book_id","");?>
			  </div>
			  <div class="pt-2">
			  <?php inputElement("text","<i class='fas fa-book'></i>","Book Name","book_name","");?>
			  </div>
			  <div class="row pt-2">
			  <div class="col">
			  <?php inputElement("text","<i class='fas fa-people-carry'></i>","Book publisher","book_publisher","");?>
			  </div>
			  <div class="col">
			  <?php inputElement("text","<i class='fas fa-dollar-sign'></i>","Book price","book_price","");?>
			  </div>
			  </div>
        <div class="d-flex justify-content-center">
    <?php//buttonElement($styleclass,$btnname,$btnid,$btnvalue,$attr)?>
			  <?php buttonElement("btn btn-success","create","btn-create","<i class='fas fa-plus '></i>","data-toggle='tooltip'  data-placement='bottom' title='create'");?>
			  <?php buttonElement("btn btn-primary","read","btn-read","<i class='fas fa-sync '></i>","data-toggle='tooltip' data-placement='bottom' title='read'");?>
			  <?php buttonElement("btn btn-light border","update","btn-update","<i class='fas fa-pen-alt'></i>","data-toggle='tooltip' data-placement='bottom' title='update'");?>
			  <?php buttonElement("btn btn-danger","btn_delete","delete","<i class='fas fa-trash-alt'></i>","data-toggle='tooltip' data-placement='bottom' title='delete'");?>
			  
		</div>
	  </form>
    </div>
	 <div class="d-flex table-data">
		<table class="table table-striped table-dark">
		  <thead class="table-dark">
			<tr>
			  <th scope="col">ID</th>
			  <th scope="col">Book Name</th>
			  <th scope="col">Publisher</th>
			  <th scope="col">Book Price</th>
			  <th scope="col">Edit</th>
			</tr>
		  </thead>
		  <tbody >
			<tr>
			  <th scope="row">1</th>
			  <td>Mark</td>
			  <td>Otto</td>
			  <td>@mdo</td>
			</tr>
		   
		  </tbody>
		</table>
   </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</body>
</html>

