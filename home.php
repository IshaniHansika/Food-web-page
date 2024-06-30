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
	<title>GLOBAL FOOD</title>
	<link rel="stylesheet" type="text/css" href="styleF.css">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap');
		.track {
			color: #ffffff;
			position: absolute;
			right: 200px;
			width: 25px;
			height: 25px;
			top: 30px;
			transition: 0.5s;
		}

		.track:hover {
			color: red;
			transform: scale(1.2);
		}
		.logOutB{
               
               position: relative;
			   bottom: 1px;
               left:1245px;
               width:100px;
               height:30px;
               background-color:darkred;
               border:solid ;
               border-radius:5px;
               font-size:20px ;
               font-family: 'Dancing Script', cursive;
               font-family: 'Playfair', serif;
               transition:1s;
               margin:20px;
               z-index: 1;
          }
          .logOutB:hover{
               transform:scale(1.2)
          }
          .logOutB a{
               color:#fff;
			   text-decoration: none;
          }
		  .proimg{
            width:70px;
            height:70px;
			position: absolute;
			left:1375px;
			border:solid #000;
			border-radius:50% ;

        }
		.display-4{
			color:#fff;
			font-family: 'Dancing Script', cursive;
			font-size:50px;
			position: absolute;
			margin:10px;
			left:30px;


		}
		  
	</style>
</head>

<body>
	<!---------------------------------------header------------------------------------------>
	<header>
		<!-----1 header------>

		<?php if ($user) { ?>
    <div class="d-flex justify-content-center align-items-center vh-100">
    	
    	<div class="shadow w-350 p-3 text-center">
        <a href="edit.php"><img class="proimg" src="https://img.freepik.com/free-icon/user_318-159711.jpg"
    		     class="img-fluid rounded-circle"></a>
            <h3 class="display-4 ">Welcome <?=$user['fname']?></h3>
            
             
		</div>
    </div>
    <?php }else { 
     header("Location: login.php");
     exit;
    } ?>

		<h1 class="he1">GLOBAL FOOD</h1>
		<a href="track.html"><svg class="track" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
				fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
				<path
					d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
				<path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
			</svg></a>
		<button class="logOutB"><a href="logout.php">Logout</a></button>
		

		<hr> <!-----2 header------>

		<div class="backi">
			<nav class="navgar">


				<ul>
					<li><a href="home.html">HOME</a></li>
					<li><a href="sriLCart.html">SRILANKAN FOOD</a></li>
					<li><a href="koreanCart.html">KOREAN FOOD</a></li>
					<li><a href="indianCart.html">INDIAN FOOD</a></li>
					<li><a href="cheneCart.html">CHINESE FOOD</a></li>
					<li><a href="ItalicCart.html">ITALIAN FOOD</a></li>
					<li><a href="FastCart.html">FAST FOOD</a></li>
					<li><a href="desertCart.html">DESSERT</a></li>
					<li><a href="ContactUs.html">CONTACT US</a></li>

				</ul>

			</nav>

			<h2 class="topic1">Welcome to the world of <br> testy & fresh food.</h2>
			<p class="par1">Good food basically that we have in our plate is a result of immense amount <br> of hard
				work that is put at various stages.... <br> Consume it with utmost respect .....</p>

			<button class="ser">SEARCH</button>
			<input class="seari" type="search" name="" placeholder="..search you want food items..">


		</div>
	</header>
	<!---------------------------------------content1------------------------------------------>

	<div>
		<h2 class="topic2">BEST SELLER</h2>

		<div class="bestI">
			<ul>
				<div>
					<h2 class="topic3">Rogan Josh</h2>
					<div class="I1">
						<a class="active" href="##"><svg class="heart" xmlns="http://www.w3.org/2000/svg" width="35"
								height="35" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
								<path fill-rule="evenodd"
									d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
							</svg></a>
						<div class="Price">
							<p class="par2"> Price = $ 3.03 </p>
							<a href="pay.html"><button class="buy">Buy Now</button></a>
						</div>

					</div>
				</div>
				<div>
					<h2 class="topic3">Ma Po Tofu</h2>
					<div class="I2">
						<a class="active" href="##"><svg class="heart" xmlns="http://www.w3.org/2000/svg" width="35"
								height="35" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
								<path fill-rule="evenodd"
									d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
							</svg></a>


						<div class="Price">
							<p class="par2"> Price = $ 2.89 </p>
							<a href="pay.html"><button class="buy">Buy Now</button></a>
						</div>

					</div>
				</div>
				<div>
					<h2 class="topic3">Bibimbap</h2>
					<div class="I3">

						<a class="active" href="##"><svg class="heart" xmlns="http://www.w3.org/2000/svg" width="35"
								height="35" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
								<path fill-rule="evenodd"
									d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
							</svg></a>
						<div class="Price">
							<p class="par2"> Price = $ 4.87 </p>
							<a href="pay.html"><button class="buy">Buy Now</button></a>
						</div>

					</div>



				</div>
				<div>
					<h2 class="topic3">Burger</h2>
					<div class="I4">

						<a class="active" href="##"><svg class="heart" xmlns="http://www.w3.org/2000/svg" width="35"
								height="35" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
								<path fill-rule="evenodd"
									d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
							</svg></a>
						<div class="Price">
							<p class="par2"> Price = $ 5.45 </p>
							<a href="pay.php"><button class="buy">Buy Now</button></a>
						</div>

					</div>



				</div>


			</ul>


		</div>

	</div>
	<!---------------------------------------content2------------------------------------------>
	<div class="content2">
		<h2>Discount Coupon</h2>
		<div class="discount">


			<p class="par5">VALID FROM : 20 APRIL TO 10 DECEMBER, 2023 </p>
			<div class="Box">
				<img src="img4.jpg" width="450px" height="450px">
				<p class="par6">UP <br> TO</p>
				<p class="par7">45%</p>
				<p class="par8">OFF</p>
				<p class="par9">Get discount ehen you spent max $ 1000</p>
			</div>

		</div>

		<div class="backimage2">
			<p class="par10">Free bottle of pepsi or coca cola for everyone who availed the discount </p>
		</div>

	</div>

	<!---------------------------------------footer------------------------------------------>

	<footer>
		<div class="container">
			<div class="row">
				<div class="footerL">
					<div class="col">
						<h2 class="he2">Quik Links</h2>
						<li><a href="##">HOME</a></li>
						<li><a href="##">SRILANKAN FOOD</a></li>
						<li><a href="##">KOREAN FOOD</a></li>
						<li><a href="##">INDIAN FOOD</a></li>
						<li><a href="##">CHINESE FOOD</a></li>
						<li><a href="##">ITALIAN FOOD</a></li>
						<li><a href="##">FAST FOOD</a></li>
						<li><a href="##">DESERT</a></li>
						<li><a href="##">CONTACT US</a></li>
					</div>
					<div class="col">
						<h2 class="he2">Branch</h2>
						<li><a href="##">Kurunegal</a></li>
						<li><a href="##">Colombo</a></li>
						<li><a href="##">Kandy</a></li>
						<li><a href="##">Jaffna</a></li>
					</div>
					<div class="col">
						<h2 class="he2">Contact Us</h2>
						<li><a href="##">E-mail</a></li>
						<li><a href="##">+94764968988</a></li>
						<li><a href="##">+94773042726</a></li>

					</div>
					<div class="col">
						<h2 class="he2">Follow Us</h2>
						<li><a href="##"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
									fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
									<path
										d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
								</svg></a></li>
						<li><a href="##"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
									fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
									<path
										d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
								</svg></a></li>
						<li><a href="##"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
									fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
									<path
										d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
								</svg></a></li>
						<li><a href="##"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
									fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
									<path
										d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
								</svg></a></li>
						<li><a href="##"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
									fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
									<path
										d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z" />
								</svg></a></li>


					</div>
				</div>
			</div>
			<img src="img3.jpg" width="350px" height="520px">
		</div>


	</footer>


</body>

</html>
<?php }else {
	header("Location: login.php");
	exit;
} ?>