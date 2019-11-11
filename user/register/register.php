<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Register</title>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign Up</h3>
			</div>
			<div class="card-body">
				<form action="" method="POST" class="form-signup">

                    <!-- username -->
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" id="userRegister" name="userRegister" class="form-control" placeholder="username">
                    </div>

                    <!-- email -->
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						</div>
						<input type="email" id="emailRegister" name="emailRegister" class="form-control" placeholder="example@example.com">
                    </div>
                    
                    <!-- password -->
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" id="passRegister" name="passRegister" class="form-control" placeholder="password">
                    </div>

                    <!-- comfirm Password -->
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password comfirm">
                    </div>
                    
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
                    </div>
                    
					<div class="form-group">
						<input type="submit" id="button" name='submit' value="Register" class="btn float-right registerButton">
                    </div>
                    <?php
						if(isset($_POST['submit']))
						{
							$i = 1;
							require_once("../conn.php");
							$sqlSize = "SELECT * FROM user";
							$result = $conn->query($sqlSize);
							if($result->num_rows > 0)
								while($row = $result->fetch_assoc())
									$i++;

							$userRegister = $_POST['userRegister'];
							$passRegister = $_POST['passRegister'];
							$emailRegister = $_POST['emailRegister'];
							$image = "https://picsum.photos/id/" . (100+$i) . "/600/600";
							$subscribers = 0;

							$userId = "user" . $i;

							$sql = "INSERT INTO user(userId, username,password,email, userImage ,subscribers) 
									VALUES ('$userId','$userRegister','$passRegister','$emailRegister','$image', $subscribers)"; 
							

							if ($conn->query($sql) === FALSE) {
								die("Error: " . $sql . $conn->error);
							} else {
								header('Location: ../login/login.php');
							}
						}
					?>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>