<?php include "header.php"; 
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<style>
body {
  background-image: url('https://thumbs.dreamstime.com/b/indian-voter-hand-voting-sign-ink-pointing-vote-india-behind-election-commission-background-212400412.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
<br>
<center>
<legend> <h3>Login for Voting </h3></legend> 
<br>
</center>
<?php global $nam; echo $nam; ?>
<?php global $error; echo $error; ?>
<br>
<center><font size="4" >
<form action="login_action.php" method="post" id="myform" >
Username : 
<input type="text" name="username" value="" > 
<br>
<br>
Password : 
<input type="password" name="password" value="" >
<br>
<br>
<input type="submit" name="login" value="login" > 
</form></font>
</center>

<script type="text/javascript" > 
var frmvalidator = new Validator("myform");
frmvalidator.addValidation("username" , "req" , "Please Enter Username");
frmvalidator.addValidation("username", "maxlen=50");
frmvalidator.addValidation("password", "req" , "Please Enter Password");
</script>

<?php include "footer.php"; ?>