<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
include "db_conn.php";
include 'php/User.php';

$user = getUserById($_SESSION['id'], $conn);

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Profile</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <style>
		
    @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap');
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
			bottom:10px;
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
			font-size:60px;
			font-family: 'Roboto Slab', serif;
			position: relative;
			left:100px;
			top:20px;
		}
    img{
      width:250px;
      height:250px;
      border-radius:5px;
    }
	</style>
</head>
<body>
    <?php if ($user) { ?>

    <div class="d-flex justify-content-center align-items-center vh-100">
        
        <form 
              action="php/edit.php" 
              method="post"
              enctype="multipart/form-data">

            <h4 class="topic">Edit Profile</h4><br>
            <!-- error -->
            <?php if(isset($_GET['error'])){ ?>
            <div class="alert alert-danger" role="alert">
              <?php echo $_GET['error']; ?>
            </div>
            <?php } ?>
            
            <!-- success -->
            <?php if(isset($_GET['success'])){ ?>
            <div class="alert alert-success" role="alert">
              <?php echo $_GET['success']; ?>
            </div>
            <?php } ?>
          <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text"
                   name="fname"
                   value="<?php echo $user['fname']?>">
          </div>

          <div class="mb-3">
            <label class="form-label">User name</label>
            <input type="text" 
                   name="uname"
                   value="<?php echo $user['username']?>">
          </div>

          <div class="mb-3">
            <label class="form-label">Profile Picture</label>
            <input type="file"
                   name="pp">
            <img src="upload/<?=$user['pp']?>">
            <input type="text"
                   hidden="hidden" 
                   name="old_pp"
                   value="<?=$user['pp']?>" >
          </div>
          
          <button type="submit" class="btn btn-primary">Update</button>
          <a href="home.php" class="link-secondary">Home</a>
        </form>
    </div>
    <?php }else{ 
        header("Location: home.php");
        exit;

    } ?>
</body>
</html>

<?php }else {
	header("Location: login.php");
	exit;
} ?>