<?php

$conn = mysqli_connect("localhost","root","","home");

?>

<!DOCTYPE html>
<html>
<head>
	<title>self_sky_way</title>
</head>
<body>
        
        <center>

	  <table width="1000px"colspan="1000px"style="background: #46F9F6; ">

	     <tr>

	         <td colspan="500px" width="500px"><center> <h1><u>welcom to Register</u></h1> </center></td>

	     </tr>

	  	<form method="post">

	       <tr>
		      <td width="100px;"><B>Name :</B> </td>
              <td><input name="name"/></td><br>
	       </tr>
	       <tr>
		<td ><B>Father name :</B></td> 
		<td ><input name="father_name"/></td><br>
	       </tr>
	          <tr>
		<td><B> Username :</B></td> 
		<td><input name="user_name"/></td><br>
	       </tr>
	          <tr>
		<td><B>Email id:</B></td> 
		<td><input name="email_id"/></td><br>
	       </tr>
	       <tr>
		<td><B>Date of birth:</B></td>
		<td><input name="date_of_birth"/></td><br>
	       </tr>
	       <tr>
		<td><B>Gender    :</B></td>
		<td> <input type="radio" name="gender" value="male"> Male <input type="radio" value="female" name="gender">Female </td><br>
		   </tr> 
		      <tr>
		<td><B>Password :</B></td> 
		<td><input type="password" name="password"/></td><br>
	       </tr>

           <center>
           
	     <td>  <button name="ok" style="float: right"> submit</button></td>
	       
	       </center>
	       <tr>

		    <td colspan="2"><button><a href="home.php?id=<?php echo $srno; ?>"> HOME </a></button>
              <button> <a href="about.php?id=<?php echo $srno; ?>">ABOUT</a></button>
              <button> <a href="Contact.php?id=<?php echo $srno; ?>">Contact Us</a></button></td>
          </tr>

	  	</form>
	  </table>
	
	</center>

</body>
</html>


 <?php

 if(isset($_POST['ok'])){

 	$date = date("d/m/Y");

 	$name = $_POST['name'];

 	$father = $_POST['father_name'];
 
 	$user_name = mt_rand(); 

 	  echo $user_name;

 	$email_id = $_POST['email_id'];

 	$birth = $_POST['date_of_birth'];

 	$gender = $_POST['gender'];

  	$password = $_POST['password'];

  	$insert = "insert into login_data (date,name,father_name,user_name,email_id,date_of_birth,gender,password) values('$date','$name','$father','$user_name','$email_id','$birth','$gender','$password')";

  	$run = mysqli_query($conn,$insert);

  	if ($run) {
  		echo "<script>alert('its sucessful  Thank you...')</script>";
  	} else {
     	echo "<script>alert('Oops Its not Success Sorry..')</script>";

  	}
  	

  }

  ?>
