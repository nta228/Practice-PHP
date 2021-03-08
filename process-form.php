<?php 
 $fullname  = $age = $address ='';
  if(!empty($_POST)){
  	if(isset($_POST['fullname'])){
        $fullname = $_POST['fullname'];
  	}
  	if(isset($_POST['age'])){
  		$age = $_POST['age'];
  	}
  	if(isset($_POST['address'])){
  		$address = $_POST['address'];	
     }
     
     if($fullname != '' && $age != ''&& $address != ''){
	$sql = 'insert into student(fullname, age, address)
	         values ("'.$fullname.'", "'.$age.'","'.$address.'")';
	         execute($sql);
       }
  	}
  	if(isset($_GET['id'])){
	$delete_id = $_GET['id'];
	$sql = 'delete from student  where id = ' .$delete_id;
	execute($sql);
      }	
 ?>
