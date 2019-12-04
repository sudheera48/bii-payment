<?php
  $con = mysqli_connect('127.0.0.1','root',"");
  if(!$con){
  		echo "not connected";
  	}
  if(!mysqli_select_db($con,'easypay')){
  	echo "database not selected";
  }
  $username=$_POST["username"];
  $password=$_POST["password"];
  $sql="SELECT password FROM register WHERE username=$username";
  $result=$con->query($sql)
  while($row=$result->fetch_assoc()){
  	$final=$row['pasword'];
  if($final==$password){
  	header('Location:electricity1.html')
  	return True;
  }
}
if(!$row){
	header('Location:home.html');
	<script type="javascript">
	     echo"alert('invalid password or user id')";
	     </script>
	 }
	 $con->close();
	 ?>

             