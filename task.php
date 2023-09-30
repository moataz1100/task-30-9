php
<?php
session_start();

if(isset($_SESSION['username'])){
    header("Location: welcome.php");
}

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "admin" && $password == "password"){
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
    }else{
        echo "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <form method="post" action="">
        <label>Username:</label>
        <input type="text" name="username" required>
        <br>
        <label>Password:</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>
php
session_start();
html
<form method="post" action="">
    <label>Username:</label>
    <input type="text" name="username" required>
    <br>
    <label>Password:</label>
    <input type="password" name="password" required>
    <br>
    <button type="submit" name="login">Login</button>
</form>
<?php
if(isset($_POST['login'])){
    // Get the username and password from the form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate the username and password
    if($username == "admin" && $password == "password"){
        // Set the session variable 'username' to the username entered by the user
        $_SESSION['username'] = $username;

        // Redirect the user to the welcome page
        header("Location: welcome.php");
    }else{
        // Display an error message if the username or password is incorrect
        echo "Invalid username or password";
    }
}

session_start();

if(isset($_SESSION['username'])){
    echo "Welcome, " . $_SESSION['username'];
}else{
    
    header("Location: login.php"); 
}
?>
