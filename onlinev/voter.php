<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 
?>
<h4> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h4>
<h3>Make a Vote </h3>
<form action="submit_vote.php" name="vote" method="post" id="myform" >
<center><font size='6'> WHICH IS YOUR FAVOURITE PROGRAMMING LANGUAGE?<BR>
<input type="radio" name="lan" value="JAVA">  JAVA<BR>
<input type="radio" name="lan" value="PYTHON">PYTHON<BR>
<input type="radio" name="lan" value="C++">   C++<BR>
<input type="radio" name="lan" value="PHP">  PHP<BR>
<input type="radio" name="lan" value=".NET">  .NET<BR>
</font></center><br>
<?php global $msg; echo $msg; ?>
<?php global $error; echo $error; ?>
<center><input type="submit" value="Submit Vote" name="submit" style="height:30px; width:100px" /></center>
</form>
