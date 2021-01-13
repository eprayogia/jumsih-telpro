<?php
session_start();



if($_SESSION){

	header("Location: /app/app/index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>JUMSIH TELKOMPROPERTY</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<style>
		body {
			background-color:#eee;
		}
		.row {
			margin:100px auto;
			width:300px;
			text-align:center;
		}
		.login {
			background-color:#fff;
			padding:20px;
			margin-top:20px;
		}
	</style>
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	
	<div class="container">
		<div class="row">
			<h2>Log In</h2>
			<div class="login">
				
				<?php
				if(isset($_POST['login'])){
					include("koneksi.php");
					
					$username	= $_POST['username'];
					$password	= md5($_POST['password']);
					$level		= $_POST['level'];
					
					
					$query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username' AND password='$password'");
					if(mysqli_num_rows($query) == 0){
						echo '<div class="alert alert-danger">Upss...!!! Login gagal.</div>';
					}else{
						$row = mysqli_fetch_assoc($query);
						
						if($row['level'] == 1 && $level == 1){
							$_SESSION['username']=$username;
							$_SESSION['level']='PUSAT';
							$_SESSION['nama'] = $row['nama'];
							header("Location: ./app/index.php");
						}else if($row['level'] == 2 && $level == 2){
							$_SESSION['username']=$username;
							$_SESSION['level']='AREA1';
							$_SESSION['nama'] = $row['nama'];
							header("Location: ./app/inputdata.php");
						}elseif($row['level'] == 3 && $level == 3){
							$_SESSION['username']=$username;
							$_SESSION['level']='AREA2';
							$_SESSION['nama'] = $row['nama'];
							header("Location: ./app/inputdata.php");
						}elseif($row['level'] == 4 && $level == 4){
							$_SESSION['username']=$username;
							$_SESSION['level']='AREA3';
							$_SESSION['nama'] = $row['nama'];
							header("Location: ./app/inputdata.php");
						}elseif($row['level'] == 5 && $level == 5){
							$_SESSION['username']=$username;
							$_SESSION['level']='AREA4';
							$_SESSION['nama'] = $row['nama'];
							header("Location: ./app/inputdata.php");
						}elseif($row['level'] == 6 && $level == 6){
							$_SESSION['username']=$username;
							$_SESSION['level']='AREA5';
							$_SESSION['nama'] = $row['nama'];
							header("Location: ./app/inputdata.php");
						}elseif($row['level'] == 7 && $level == 7){
							$_SESSION['username']=$username;
							$_SESSION['level']='AREA6';
							$_SESSION['nama'] = $row['nama'];
							header("Location: ./app/inputdata.php");
						}elseif($row['level'] == 8 && $level == 8){
							$_SESSION['username']=$username;
							$_SESSION['level']='AREA7';
							$_SESSION['nama'] = $row['nama'];
							header("Location: ./app/inputdata.php");
						}else{
							echo '<div class="alert alert-danger">gagal.</div>';
						}
					}
				}
				?>
				
				<form role="form" action="" method="post">
					<div class="form-group">
						<input type="text" name="username" class="form-control" placeholder="Username" required autofocus />
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control" placeholder="Password" required autofocus />
					</div>
					<div class="form-group">
						<select name="level" class="form-control" required>
							<option value="">Select user</option>
							<option value="1">PUSAT</option>
							<option value="2">AREA1</option>
							<option value="3">AREA2</option>
							<option value="4">AREA3</option>
							<option value="5">AREA4</option>
							<option value="6">AREA5</option>
							<option value="7">AREA6</option>
							<option value="8">AREA7</option>
						</select>
					</div>
					<div class="form-group">
						<input type="submit" name="login" class="btn btn-primary btn-block" value="Log me in" />
					</div>
				</form>
			</div>
			Copyright &copy; 2020 Eprayogia
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>