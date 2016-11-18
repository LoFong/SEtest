<?php
session_start();
require("dbconnect.php");

$_SESSION['uID'] = "";
$a=rand(1,10);
$b=rand(1,10);
?>
<h1>Login Form</h1><hr />
<form method="post" action="loginCheck.php">
User Name: <input type="text" name="id"><br />
Password : <input type="password" name="pwd"><br />
How much is <?php echo "$a + $b";?>: <input type="text" name="answer"><br />
<input type="hidden" name="answer0" value="<?php echo $a+$b;?>">
<input type="submit">
</form>