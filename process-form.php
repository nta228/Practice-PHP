<?php
$fullname  = $age = $address = $telephone = '';
if(!empty($_POST)){
    if(isset($_POST['fullname'])){
        $fullname = $_POST['fullname'];
    }
    if(isset($_POST['age'])){
        $age = $_POST['age'];
    }
    if(isset($_POST['address'])){
        $address = $_POST['address'];}
    if(isset($_POST['telephone'])){
        $telephone = $_POST['telephone'];}

    }

if($fullname != '' && $age != ''&& $address != '' && $telephone != ''){
        $sql = 'insert into student(fullname, age, address, telephone )
	         values ("'.$fullname.'", "'.$age.'","'.$address.'","'.$telephone.'")';
        execute($sql);
    }
?>
