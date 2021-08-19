<?php 
	$pageTitle = "Sign Up";
	include_once "includes/header.php"; 
?>

<section class="signup-form">
    <h2>Sign Up</h2>
    <form action="includes/signup.inc.php" method="post"> 
        <input type="text" name="name" placeholder="Full name..." required>
        <input type="text" name="emails" placeholder="Email...">
        <input type="text" name="uid" placeholder="Username...">
        <input type="password" name="pwd" placeholder="Password...">
        <input type="password" name="pwdrepeat" placeholder="Repeat password...">
        <button type="submit" name="submit">Sign up</button>
        <button type="button" class="cancelbtn">Cancel</button>

        <label><input type="checkbox" checked="checked" name="remember">Remember me</label> 
    
        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
    </form>

</section>



<?php 
	include_once "includes/footer.php"; 
?>