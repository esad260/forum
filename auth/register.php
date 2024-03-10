<?php require "../includes/header.php"; ?>
<?php require "../config/config.php"; ?>
<?php

if(isset($_SESSION['username'])){
	header("location:".APPURL."");
  }

  
//making sure no box is left empty
if(isset($_POST['submit'])){
	if(empty($_POST['name']) OR empty($_POST['email']) OR empty($_POST['username']) 
OR empty($_POST['password']) OR empty($_POST['about'])){
	echo "<script>alert('one or more inputs are empty');</script>";
} else {
	$name = $_POST['name'];
	$email = $_POST['email'];
	//limiting registration to qmul domain emails
	$domain = explode('@',$email)[1];
	if ($domain != 'qmul.ac.uk') {
		// Display an alert and stop the script
		echo "<script>alert('This domain is not allowed to register. Only @qmul.ac.uk domain is allowed to register please go to registration page again');</script>";
		// Refreshes the current page
		header("Refresh:0");
	exit;
	}

	$username = $_POST['username'];
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$about = $_POST['about'];
	$avatar = $_FILES['avatar']['name'];

	$dir = "img/" . basename($avatar);

	$insert = $conn->prepare("INSERT INTO users (name, email, username, password,
	about, avatar) VALUES (:name, :email, :username, :password, :about, :avatar)");

	$insert->execute([
		":name" => $name,
		":email" => $email,
		":username" => $username,
		":password" => $password,
		":about" => $about, 
		":avatar" => $avatar,
	]);

	header("location: login.php");

}
}

?>
    <div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="main-col">
					<div class="block">
						<h1 class="pull-left"><img src="/forum/img/qmul.png" alt="Logo" width="50" height="40">Register</h1>
						<h4 class="pull-right">QMUL Students Forum</h4>
						<div class="clearfix"></div>
						<hr>
						<form role="form" enctype="multipart/form-data" method="post" action="register.php">
							<div class="form-group">
								<label>Name*</label> 
								<input type="text" class="form-control"
							name="name" placeholder="Enter Your Name">
							</div>
							<div class="form-group">
							<label>Email Address*</label> <input type="email" class="form-control"
							name="email" placeholder="Enter Your Email Address">
							</div>
						<div class="form-group">
					<label>Choose Username*</label> <input type="text"
							class="form-control" name="username" placeholder="Create A Username">
						</div>
					<div class="form-group">
					<label>Password*</label> <input type="password" class="form-control"
				name="password" placeholder="Enter A Password">
				</div>
				
				<div class="form-group">
					<label>Upload Avatar</label>
				<input type="file" name="avatar">
				<p class="help-block"></p>
					</div>
					<div class="form-group">
					<label>About Me</label>
					<textarea id="about" rows="6" cols="80" class="form-control"
					name="about" placeholder="Tell us about yourself (Optional)"></textarea>
			</div>
			<input name="submit" type="submit" class="color btn btn-default" value="Register" />
</form>
					</div>
				</div>
			</div>
<?php require "../includes/footer.php"; ?>
					
