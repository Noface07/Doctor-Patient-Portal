<?php
include_once 'header.php'
?>
    
<section class="signup-form">
<h2>Sign Up</h2>

<form action="includes/signup.inc.php" method="post">

<input type="text" name="name" placeholder="Full Name">
<input type="text" name="email" placeholder="Email">
<input type="text" name="uid" placeholder="Username">
<input type="password" name="pwd" placeholder="Password">
<input type="password" name="pwdrepeat" placeholder="Repeat Password">
<button type="submit" name="submit"> Sign Up</button>

</form>

<?php

if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
        echo "<p>You forgot to fill in all fields</p>";
    }

    elseif ($_GET["error"] == "invalidUid") {
        echo "<p>Choose a proper Username</p>"; 
    }

    elseif ($_GET["error"] == "invalidEmail") {
        echo "<p>Choose a proper Email</p>"; 
    }

    elseif ($_GET["error"] == "passwordsdontmatch") {
        echo "<p>Password doesnt match</p>"; 
    }

    elseif ($_GET["error"] == "stmtfailed") {
        echo "<p>Something went wrong</p>"; 
    }

    elseif ($_GET["error"] == "usernametaken") {
        echo "<p>Username already taken</p>"; 
    }

    elseif ($_GET["error"] == "none") {
        echo "<p>Successfully signed up!</p>"; 
    }
}


?>

</section>

<?php
include_once 'footer.php'
?>