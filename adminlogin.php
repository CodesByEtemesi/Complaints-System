<?php
// Define correct admin credentials (preferably load these from a secure config file)
$admin_username = 'admin';
$admin_password = 'admin'; // Replace with a secure password

// Get the username and password from POST request
$name = $_POST['name'] ?? '';
$pass = $_POST['passw'] ?? '';

// Check credentials
if ($name === $admin_username && $pass === $admin_password) {
    // Redirect to afteradminlogin.php if credentials are correct
    header("Location: afteradminlogin.php");
    exit();
} else {
    // If credentials are incorrect, include the login form with an error message
    echo "<p style='color:red;'>Incorrect username or password. Please try again.</p>";
    include 'adminlogin2.html';
}
?>


<?php
// $name=$_POST['name'];
// $pass=$_POST['passw'];

// if($name==$pass)
// {
	// echo "<script>window.location.assign('afteradminlogin.php');</script>";
// }
// else
// {
	// readfile('adminlogin2.html');
// }




// ?>