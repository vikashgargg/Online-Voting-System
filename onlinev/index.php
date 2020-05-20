<?php include "header.php";
session_start();
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<?php global $msg; echo $msg;?>
<p><center><legend><font color='#000000'size='8'>This system allows all registered users to vote for their favorite PROGRAMMING LANGUAGE!</p>
<p>In order to make a vote you have to register first and then login.</p></font></legend></center>
<p>&nbsp;&nbsp;</p>
