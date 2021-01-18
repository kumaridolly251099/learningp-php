<?php

$conn = mysqli_connect("localhost","root","","home");

?>
<!DOCTYPE html>
<html>
<head>
	<title>sing up</title>
</head>
<body>
	<center>
	<table colspan="5000px" width="500px" style="background: #47E7EE  ">

		 <tr>

	         <td colspan="100px" width="100px"><center> <h1><u>welcom to login</u></h1> </center></td>

	     </tr>

		<form method="post">

		<tr>
		<td><B><h3> Username :</h3></B></td> 
		<td><input name="user_name"/></td><br>
	    </tr>

	      <tr>
		      <td><B><h3>Password :</h3></B></td> 
		      <td><input type="password" name="password"/></td><br>
	      </tr>
	       
           <tr>
	         <td colspan="4px"><button style="background: #1717EC" name="ok"><h4> submit</h4></button></td>
	       
	       
	      </tr>
	  </form>
		
	</table>
</center>
</body>
</html>


 <?php

 if(isset($_POST['ok'])){

    $user_name = $_POST['user_name'];

 	$password = $_POST['password'];

  echo $select = "select * from login_data where user_name='$user_name' AND password='$password'";
  $query = mysqli_query($conn,$select);
  $check = mysqli_num_rows($query);

  if ($check==1) {

  	echo "<script>alert('its sucessful  Thank you...')</script>";
       
  } else {
  	
   	echo "<script>alert('Oops Its not Success Sorry..')</script>";

 
  }
  




    }

 	?>