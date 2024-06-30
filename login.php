<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap');
		body{
			background-color:#000;
		}
		
		.topicpro{
			color: #fff;
			position: relative;
			left:200px;
			font-size:70px;
			font-family: Time
			
			

		}
		form{
			box-shadow: -1px 0 30px #ffffff;
			position: relative;
			bottom:100px;
			width:600px;
			border-radius:10px;
			
		}
		.form-label{
			color:#fff;
			
		}
		label{
			margin:10px;
		}
		input{
			margin:10px;
			width:550px;
			height:35px;
			border-radius:5px;
		}
		button{
			position: relative;
			bottom:10px;
			left:10px;
		}
		.link-secondary{
			position: relative;
			left:10px;
			color:#fff;
		}
		.topic{
			color: #fff;
			font-size:90px;
			font-family: 'Dancing Script', cursive;
			position: relative;
			left:300px;
			top:20px;
		}
	</style>
</head>
<body>
<h1 class="topic">Welcome to Global Food</h1>
    <div class="d-flex justify-content-center align-items-center vh-100">
    	
    	<form  
    	      action="php/login.php" 
    	      method="post">

    		<h4 class="topicpro">Login</h4><br>
    		<?php if(isset($_GET['error'])){ ?>
    		<div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
			</div>
		    <?php } ?>

		  <div class="mb-3">
		    <label class="form-label">User name</label>
		    <input type="text"
		           name="uname"
		           value="<?php echo (isset($_GET['uname']))?$_GET['uname']:"" ?>">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Password</label>
		    <input type="password" 
		           name="pass">
		  </div>
		  
		  <a href="../home.php"><button type="submit" class="btn btn-primary">Login</button></a>
		  <a href="index.php" class="link-secondary">Sign Up</a>
		</form>
    </div>
</body>
</html>