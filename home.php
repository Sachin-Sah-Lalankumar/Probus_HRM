<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
// Redirect to the login page if not logged in
    header("Location: index.html");
    exit;
}

	$username = $_SESSION['username'];
	$email = $_SESSION['email'];

	$userprofileURL = "userprofile.php?email=" . urlencode($email);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Probus | Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="css/resets.css">
	<link rel="stylesheet" href="css/nav.css">
	<link rel="stylesheet" href="css/hero.css">
	<link rel="stylesheet" href="css/home.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/responsive.css">

	<script src="https://kit.fontawesome.com/4718b98a04.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="bg-img">
	</div>

	<?php
		include 'nav.html';
	?>
	
	<header id="home" class="hero">
		<div class="container flex">
			<div class="hero-text">
				<h1>
					<span>P</span>
					<span>R</span>
					<span>O</span>
					<span>B</span>
					<span>U</span>
					<span>S</span>
				</h1>
				<h2 class="flash">Heyya, <?php echo $username; ?>...!</h2>
				<p>You are now Logged in...!<br>Keep exploring us...!</p>
				<br>
				<a href="<?php echo $userprofileURL; ?>" class="hover-link btn">Your Profile</a><br><br><a href="profile-update.php" class="hover-link btn">Update&nbsp;profile&nbsp;&nbsp;<i class='fa fa-pencil-square-o icon'></i></a>

				<?php
				if($_SESSION['role'] == 'admin')
				{
					echo "
					<br><br>
					<h2 class='flash'>You are an admin</h2>
					<p>Now, you can visit admin panel...!</p>
					<br>
					<a href='adminpanel.php' class='hover-link btn'>Admin Panel</a><br><br>";
				}
				?>
				
			</div>
			<div class="hero-img">
			</div>
		</div>
	</header>
	
	<main>
		<section class="sec container cool-container" id="profiles">
			<div class="sec-head">
				<h2 class="flash">Top profiles</h2>
			</div>
			<div class="sec-area flex">
				<a class="sec-card" href="profiles.php">
					<h3 class="sec-card-text">Unknown</h3>
				</a>
				<a class="sec-card" href="profiles.php">
					<h3 class="sec-card-text">Emma</h3>
				</a>
				<a class="sec-card" href="profiles.php">
					<h3 class="sec-card-text">Raunak</h3>
				</a>
				<a class="sec-card" href="profiles.php">
					<h3 class="sec-card-text">Hinata</h3>
				</a>
			</div>
			<div class="sec-btn">
				<a class="hover-link btn" href="profiles.php">See more profiles&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-right-long"></i></a>
			</div>
		</section>
		
		<section class="sec container cool-container" id="posts">
			<div class="sec-head">
				<h2 class="flash">Top posts</h2>
			</div>
			<div class="sec-area flex">
				<a class="sec-card" href="posts.php">
					<h3 class="sec-card-text">AI in cars</h3>
				</a>
				<a class="sec-card" href="posts.php">
					<h3 class="sec-card-text">Rockets</h3>
				</a>
				<a class="sec-card" href="posts.php">
					<h3 class="sec-card-text">Nano computers</h3>
				</a>
				<a class="sec-card" href="posts.php">
					<h3 class="sec-card-text">Smooth UI</h3>
				</a>
			</div>
			<div class="sec-btn">
				<a class="hover-link btn" href="posts.php">See more posts&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-right-long"></i></a>
			</div>
		</section>		
	</main>

	<?php
		include 'footer.html';
	?>
</body>
</html>