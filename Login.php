<?php
session_start();
require_once('header.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{	
	include 'user.php';
	$user=new user();
	$user->validate_user($_POST['uname'],$_POST['password']);
}
?>

<h2>Login Form</h2>

<form method="post" >
 

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>


<?php
	require_once('footer.php');
?>


