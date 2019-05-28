<?php
$conn = mysqli_connect('localhost','root','','thapelo');
$sql = "SELECT * FROM login";
$result = mysqli_query($conn, $sql);
if(!$result){
	echo "Error sending sql";
}

?>

<!DOCTYPE HTML>
<html>
	<head> 
		<title>Login To </title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="makhaya, v4d3r, PRO4">
		<meta name="author" content="Sbusiso | PRO4">
		<!--<meta http-equiv="refresh" content="2">-->
		<link rel='stylesheet' href='main.css' type='text/css'>
		<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
	</head>
	
	<header> 
	<!--Navigation bar
			<div class='nav-bar'>
				<p> Sbusiso </p>
			</div> -->
		</header>

  
<body>
    
    <div class='mydiv'>
	<a href="#">
	<img title="James in the maze" id='logo' src='icon.png' />
	</a>
	<br><br>
    <h3>  Login to Makhaya Group</h3> 
    <form action='login.php' method='POST' ><br>
		<div class="lab">
		<label for='Username' >Username</label>		
		<input type='text' name='username' placeholder='   Enter username' required /><br> <br>
		<label for='Password'>Password</label>
		<input type='password' name='password' placeholder='   Enter password' required /> <br> <br>
		<hr>
		<input type="submit" id='submit' value='Login'>

		<br><br>
		<a href='#'>Forgot Password?</a><br><br>
        <a href='register.html'>Register Here</a><br><br>
		</div>
	</form>
        
    </div>
    <div class="footer">
		<p>&copy;MakhayaGroup | 2019</p>
	</div>
   
  </body>
</html>
<!--<table>
    <tr>
            <th>First Name</th>
            <th> Last Name</th>
            <th> Email</th>  
    </tr>
	<?php //while ($row = mysqli_fetch_assoc($result)){
	
	?>
    <tr>
            <td> <?php //echo $row['first']; ?></td>
            <td> <?php //echo $row['last']; ?></td>
            
			td> <?php //echo $row['email']; ?></td>

    </tr> -->
