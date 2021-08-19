<?php 
	$pageTitle = "Sign Up";
	include_once "includes/header.php"; 
?>

<section class="signup-form">
    <h2>Log In</h2>
    <form action="includes/login.inc.php" method="post"> 
        <input type="text" name="name" placeholder="Username/Email..." required>
        <input type="password" name="pwd" placeholder="Password...">
        <button type="submit" name="submit">Log in</button>
        <button type="button" class="cancelbtn">Cancel</button>

        <label><input type="checkbox" checked="checked" name="remember">Remember me</label> 
    
    </form>

</section>



<?php 
	include_once "includes/footer.php"; 
?>
