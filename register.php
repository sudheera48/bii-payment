<?php
     $con=mysqli_connect9("127.0.0.1","root","");
     if(!$con){
     	echo "not connected";
     }
     else{
     	echo"connected";
     }
     if(!mysqli_select_db($con,'easypay')){
     	echo"database not selected";
     }
     header('Location:home.html');
     $username=$_POST['username']
     $password=$_POST['password']
     $cpassword=$_POST['cpassword']
     if($cpassword!=cpassword)
     {
     	echo"password not matched";
     }
     $query="INSERT INTO register username,password,cpassword, values ('$username',$password,$cpassword)";
     $result=mysql_query($query);
     if($result)
     {
     	header('Location:home.html');
     	<script text="javascript">
     	echo "sucseefully registered";
     	</script>
     }
     ?>
