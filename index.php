<?php
ob_start();
session_start();
require_once 'db_connect.php';

// it will never let you open index(login) page if session is set
// !!!!CHANGE LOCATION FOR HOME.php admin/user
// if (isset($_SESSION['user'])!="") {
// 	header("Location: dashboard.php");
// 	exit;
// }

$error = false;

if(isset($_POST['btn-login'])) {

	// prevent sql injections/ clear user invalid inputs
	$email = trim($_POST['email']);
	$email = strip_tags($email);
	$email = htmlspecialchars($email);

	$pass = trim($_POST[ 'pass']);
	$pass = strip_tags($pass);
	$pass = htmlspecialchars($pass);

	if(empty($email)) {
		$error = true;
		$emailError = "Please enter your email address.";
	} else if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		$error = true;
		$emailError = "Please enter valid email address.";
	}

	if (empty($pass)) {
		$error = true;
		$passError = "Please enter your password." ;
	}

	// if there's no error, continue to login
	if (!$error) {
		$password = hash('sha256', $pass); 
		$sql_query = mysqli_query($connect, "SELECT userID, username, userpass FROM users WHERE useremail='$email'" );
		$result = mysqli_fetch_array($sql_query, MYSQLI_ASSOC);
		$count = mysqli_num_rows($sql_query); 

		if ($count == 1 && $result['userpass']==$password) {
			$_SESSION['user'] = $result['userID'];
			header("Location: dashboard.php");
		} else {
			$errMSG = "Email and Password don't match. Please try again..." ;
		}
	}
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" href ="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"  crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/index_style.css">
	</head>

	<body>
		<form class="login-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete= "off">
			<h3>ACCOUNT LOGIN</h3>
			<br>
			<!-- outputs message from error line 49 (back end) -->
			<?php
			if (isset($errMSG)) {
				echo $errMSG;
			}
			?>
			<input type="email" name="email" class="login-input" placeholder="email" value="<?php echo $email; ?>"  maxlength="40"/>
			<span class="text-danger"><?php echo $emailError; ?></span>
			<input type="password" name="pass" class="login-input" placeholder="password" maxlength="15" />
			<span class="text-danger"><?php  echo $passError; ?></span>
			<button type="submit" name="btn-login" class="login-button">LOGIN</button>	
			<p>Not registered yet?  <a href="register.php">Create an account</a></p>
		</form>
	</body>
</html>
<?php ob_end_flush(); ?>