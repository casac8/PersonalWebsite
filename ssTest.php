<?php
error_reporting(0);
///////  
/////// Script Php for Test Send on Server working or not
///////
/////// By Skimi [Rochdi Assoul]
///////
/////// https://www.facebook.com/3devil.e
///////
?>
<br>
<br>
<b>Join Us : </b>
<b><color><a href='https://www.facebook.com/3devil.e'>https://www.facebook.com/3devil.e</a></color></b>
<br>
<br>
<b>Test Send if it Works Or not ..</b><br>
<form method="post">
<input type="text" name="email" placeholder="Put Your Email ..." value="<?php print $_POST['email']?>"required >
<input type="submit" value="Send test >>">
</form>
<br>
<?php
if (!empty($_POST['email'])){
	$xx = rand();
	mail($_POST['email'],"Test done by SKIMI ".$xx,"SERVER WORKING !| U Can Upload Your Scama Now");
	print "<b>send an report to [".$_POST['email']."] - $xx</b>"; 
}