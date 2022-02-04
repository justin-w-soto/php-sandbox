<?php 
    include_once 'header.php';
?>

<section class="signup-form" method="post">
    <form action="includes/signup.inc.php">
        <input type="text"name="name" placeholder="Full Name" class="signup-input">
        <input type="text"name="email" placeholder="Email" class="signup-input">
        <input type="text"name="uid" placeholder="Username" class="signup-input">
        <input type="password"name="pwd" placeholder="Password" class="signup-input">
        <input type="password"name="pwdrepeat" placeholder="Confirm Password" class="signup-input">
        <button type="submit" class="signup-btn">Submit</button>
    </form>
</section>
