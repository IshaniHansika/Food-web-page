<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign Up</title>
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
			left:100px;
			font-size:70px;
			font-family: 'Dancing Script', cursive;

		}
		form{
			box-shadow: -1px 0 30px #ffffff;
			position: relative;
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
	</style>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
    	
    	<form class="" 
    	      action="php/signup.php" 
    	      method="post"
    	      enctype="multipart/form-data">

    		<h4 class="topicpro ">Create Account</h4><br>
    		<?php if(isset($_GET['error'])){ ?>
    		<div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
			</div>
		    <?php } ?>

		    <?php if(isset($_GET['success'])){ ?>
    		<div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
			</div>
		    <?php } ?>
		  <div class="mb-3">
		    <label class="form-label">Full Name</label>
		    <input type="text" 
		           name="fname"
		           value="<?php echo (isset($_GET['fname']))?$_GET['fname']:"" ?>">
		  </div>

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

		  <div class="mb-3">
		    <label class="form-label">Profile Picture</label>
		    <input type="file" 
		           name="pp">
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Sign Up</button>
		  <a href="login.php" class="link-secondary">Login</a>
		</form>
    </div>
</body>
</html>