<style type="text/css">
    body
  {
    font-family: Times New Roman;
   
    position: absolute;
        margin: 0px;
        width: 100%;


  }
  {
 font-size: 40;

  }
  
  table
{
width: 90%;
      
}
 
  
   
     
      
        
        #text2
    {
        height: 55px;
        width: 853px;
        border:2px solid;
        border-color:rgb(157,0,0);
        border-top-style: opx;
        border-left-style:  1px;
        border-right-style:  1px;
        font-size:30px;
         margin-top: :0;
      
		text-align: left;
    }
	      #text1
    {
        height: 85px;
        width: 587px;
       
        border:2px solid;
        border-color:rgb(157,0,0);
        border-top-style: 1px;
        border-left-style:  1px;
        border-right-style:  1px;
        font-size:30px;
       
		text-align: left;
    }
	
  
  </style>

<?php
include ('db.php');
if(isset($_POST['submit'])){
#$selected_val = $_POST['scn'];  // Storing Selected Value In Variable
#$selected_val1 = $_POST['exam']; 
#$selected_val2 = $_POST['monthyear'];  // Storing Selected Value In Variable
//$selected_val3 = $_POST['sem'];; 
//$selected_val4= $_POST['programme'];// Storing Selected Value In Variable
#$selected_val5 = $_POST['semester'];
//$selected_val6= $_POST['course_title'];// Storing Selected Value In Variable
#$selected_val7 = $_POST['marks'];
$selected_val8= $_POST['course_code']; // Storing Selected Value In Variable
#$selected_val9 = $_POST['exam']; 

   // Displaying Selected Value

}
?>
 





<?php
	include 'db.php';
	$pageTitle = "View Question Paper";
		?>
	<style>
	@page { margin: 2cm 2cm 2cm 2cm; font-size: 40px,font-family:Times New Roman;} 
	</style>
	

	
	<br><br>
	<div id="qp-content">
	<div align="center">

	

          <td> <img src="\svcs\science\qpg\svcs.png" size="70"></td><td><p><font size ='4'><b>एस. वी. सेंट्रल स्कूल 
</b></font></p></td>
			
<b><p> विद्यानगर -बैंगलोर -५६२१५७ 
</p></b>
<b><p>वार्षिक - परीक्षा  (  २०१९ -२०२०  )
</p></b></p>
	  
</table>	
  	
 
<table>
	<tr align="center">
	
	<td>
  	  <b> <font size= '2'><b> विषय --हिंदी  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;          कक्षा --आठवीं </b>
 </font> </b> 


	
	
	</td>
	
</tr>

</table>
  
  
  <table>
	<tr>
	
	
	<td></td>
	<td><b> समय  --२ घंटे</b></td>
	<td align="middle">
            
           		<b>पूर्णाक --४०  </b></td>	
            
        </tr>
 
</td>

</tr>

	


 <div class="bodyc">
<br>
 <div id="container">


    <table  align="center" >
	<tr>
		<td valign="top">
	<b>नोट:</b></td> <td colspan="15" valign="top">
		

प्रश्न पत्र को ध्यानपूर्वक पढ़ कर उत्तर लिखे | <br>
         सभी प्रश्नो के अंको की जाँच कर लीजिए |

	</td>
	</tr>


   <tr>

<td class="header"><br><br><b><span id="content">S.No</span></b></td>

<td class="header"><br><br><b><span id="content">Question</span></b></td>	
<td class="header"><br><br><b><span id="content">Marks</span></b></td>


</tr>
 
<tr>
		<td align="center" colspan="4"> <b>Section A</b></td></tr>
	<tr>
<td valign="top">
 

<?php
if(isset($_POST['course_code']))
{
	$i=0;
	$course_code=$_POST['course_code'];
	//echo $course_code;
	 #$marks=$_POST['marks'];
	 $r1='X';
	// $mo=$_POST['mo'];
    $query="SELECT  * FROM question_master2 WHERE course_code='$course_code' AND final='$r1' AND qno='2441'and marks='8' order by rand() LIMIT 1";
    $result=mysql_query($query);
	//echo mysql_errno($link) . ": " . mysql_error($link). "\n";
	
} 
	while($rows=mysql_fetch_array($result)){
		$i++;
?>

<tr>

<td class="text1" valign="top"><?php echo $i; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>


<td class="text2" valign="top"><?php echo $rows['question']; ?></td>
<td class="text1" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows['marks']; ?></td>



</tr>
<?php
}

?>

<tr>
		<td align="center" colspan="4"> <b>Section B</b></td></tr>
	<tr>
<td valign="top">

<?php
if(isset($_POST['course_code']))
{
	$i=1;
	$course_code=$_POST['course_code'];
	//echo $course_code;
	 #$marks=$_POST['marks'];
	 $r1='X';
	// $mo=$_POST['mo'];
    $query="SELECT  * FROM question_master2 WHERE course_code='$course_code' AND final='$r1' AND qno='2447'and marks='3' order by rand() LIMIT 1";
    $result=mysql_query($query);
	//echo mysql_errno($link) . ": " . mysql_error($link). "\n";
	
} 
	while($rows=mysql_fetch_array($result)){
		$i++;
?>

<tr>

<td class="text1" valign="top"><?php echo $i; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>


<td class="text2" valign="top"><?php echo $rows['question']; ?></td>
<td class="text1" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows['marks']; ?></td>



</tr>
<?php
}

?>

<?php
if(isset($_POST['course_code']))
{
	$i=2;
	$course_code=$_POST['course_code'];
	//echo $course_code;
	 #$marks=$_POST['marks'];
	 $r1='X';
	// $mo=$_POST['mo'];
    $query="SELECT  * FROM question_master2 WHERE course_code='$course_code' AND final='$r1' AND qno='2449'and marks='3' order by rand() LIMIT 1";
    $result=mysql_query($query);
	//echo mysql_errno($link) . ": " . mysql_error($link). "\n";
	
} 
	while($rows=mysql_fetch_array($result)){
		$i++;
?>

<tr>

<td class="text1" valign="top"><?php echo $i; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>


<td class="text2" valign="top"><?php echo $rows['question']; ?></td>
<td class="text1" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows['marks']; ?></td>



</tr>
<?php
}

?>

<?php
if(isset($_POST['course_code']))
{
	$i=3;
	$course_code=$_POST['course_code'];
	//echo $course_code;
	 #$marks=$_POST['marks'];
	 $r1='X';
	// $mo=$_POST['mo'];
    $query="SELECT  * FROM question_master2 WHERE course_code='$course_code' AND final='$r1' AND qno='2451'and marks='3' order by rand() LIMIT 1";
    $result=mysql_query($query);
	//echo mysql_errno($link) . ": " . mysql_error($link). "\n";
	
} 
	while($rows=mysql_fetch_array($result)){
		$i++;
?>

<tr>

<td class="text1" valign="top"><?php echo $i; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>


<td class="text2" valign="top"><?php echo $rows['question']; ?></td>
<td class="text1" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows['marks']; ?></td>



</tr>
<?php
}

?>

<?php
if(isset($_POST['course_code']))
{
	$i=4;
	$course_code=$_POST['course_code'];
	//echo $course_code;
	 #$marks=$_POST['marks'];
	 $r1='X';
	// $mo=$_POST['mo'];
    $query="SELECT  * FROM question_master2 WHERE course_code='$course_code' AND final='$r1' AND qno='2453'and kl='Understanding' and marks='2' order by rand() LIMIT 1";
    $result=mysql_query($query);
	//echo mysql_errno($link) . ": " . mysql_error($link). "\n";
	
} 
	while($rows=mysql_fetch_array($result)){
		$i++;
?>

<tr>

<td class="text1" valign="top"><?php echo $i; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>


<td class="text2" valign="top"><?php echo $rows['question']; ?></td>
<td class="text1" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows['marks']; ?></td>



</tr>
<?php
}

?>



<?php
if(isset($_POST['course_code']))
{
	$i=5;
	$course_code=$_POST['course_code'];
	//echo $course_code;
	 #$marks=$_POST['marks'];
	 $r1='X';
	// $mo=$_POST['mo'];
    $query="SELECT  * FROM question_master2 WHERE course_code='$course_code' AND final='$r1' AND qno='2445'and marks='3' order by rand() LIMIT 1";
    $result=mysql_query($query);
	//echo mysql_errno($link) . ": " . mysql_error($link). "\n";
	
} 
	while($rows=mysql_fetch_array($result)){
		$i++;
?>

<tr>

<td class="text1" valign="top"><?php echo $i; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>


<td class="text2" valign="top"><?php echo $rows['question']; ?></td>
<td class="text1" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows['marks']; ?></td>



</tr>
<?php
}

?>

<?php
if(isset($_POST['course_code']))
{
	$i=6;
	$course_code=$_POST['course_code'];
	//echo $course_code;
	 #$marks=$_POST['marks'];
	 $r1='X';
	// $mo=$_POST['mo'];
    $query="SELECT  * FROM question_master2 WHERE course_code='$course_code' AND final='$r1' AND qno='2455'and marks='2' order by rand() LIMIT 1";
    $result=mysql_query($query);
	//echo mysql_errno($link) . ": " . mysql_error($link). "\n";
	
} 
	while($rows=mysql_fetch_array($result)){
		$i++;
?>

<tr>

<td class="text1" valign="top"><?php echo $i; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>


<td class="text2" valign="top"><?php echo $rows['question']; ?></td>
<td class="text1" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows['marks']; ?></td>



</tr>
<?php
}

?>

<?php
if(isset($_POST['course_code']))
{
	$i=7;
	$course_code=$_POST['course_code'];
	//echo $course_code;
	 #$marks=$_POST['marks'];
	 $r1='X';
	// $mo=$_POST['mo'];
    $query="SELECT  * FROM question_master2 WHERE course_code='$course_code' AND final='$r1' AND qno='2457'and marks='2' order by rand() LIMIT 1";
    $result=mysql_query($query);
	//echo mysql_errno($link) . ": " . mysql_error($link). "\n";
	
} 
	while($rows=mysql_fetch_array($result)){
		$i++;
?>

<tr>

<td class="text1" valign="top"><?php echo $i; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>


<td class="text2" valign="top"><?php echo $rows['question']; ?></td>
<td class="text1" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows['marks']; ?></td>



</tr>
<?php
}

?>

<?php
if(isset($_POST['course_code']))
{
	$i=8;
	$course_code=$_POST['course_code'];
	//echo $course_code;
	 #$marks=$_POST['marks'];
	 $r1='X';
	// $mo=$_POST['mo'];
    $query="SELECT  * FROM question_master2 WHERE course_code='$course_code' AND final='$r1' AND qno='2461'and marks='2' order by rand() LIMIT 1";
    $result=mysql_query($query);
	//echo mysql_errno($link) . ": " . mysql_error($link). "\n";
	
} 
	while($rows=mysql_fetch_array($result)){
		$i++;
?>

<tr>

<td class="text1" valign="top"><?php echo $i; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>


<td class="text2" valign="top"><?php echo $rows['question']; ?></td>
<td class="text1" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows['marks']; ?></td>



</tr>
<?php
}

?>

<?php
if(isset($_POST['course_code']))
{
	$i=9;
	$course_code=$_POST['course_code'];
	//echo $course_code;
	 #$marks=$_POST['marks'];
	 $r1='X';
	// $mo=$_POST['mo'];
    $query="SELECT  * FROM question_master2 WHERE course_code='$course_code' AND final='$r1' AND qno='2459'and marks='2' order by rand() LIMIT 1";
    $result=mysql_query($query);
	//echo mysql_errno($link) . ": " . mysql_error($link). "\n";
	
} 
	while($rows=mysql_fetch_array($result)){
		$i++;
?>

<tr>

<td class="text1" valign="top"><?php echo $i; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>


<td class="text2" valign="top"><?php echo $rows['question']; ?></td>
<td class="text1" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows['marks']; ?></td>



</tr>
<?php
}

?>

<tr>
		<td align="center" colspan="4"> <b>Section C</b></td></tr>
	<tr>
<td valign="top">

<tr>
		<td align="center" colspan="4"> <b>निम्नलिखित प्रश्नों के उत्तर लिखिए।</b></td></tr>
	<tr>
<td valign="top">


<?php
if(isset($_POST['course_code']))
{
	$i=10;
	$course_code=$_POST['course_code'];
	//echo $course_code;
	 #$marks=$_POST['marks'];
	 $r1='X';
	// $mo=$_POST['mo'];
    $query="SELECT  * FROM question_master2 WHERE course_code='$course_code' AND final='$r1' AND qno='2229'and marks='2' order by rand() LIMIT 1";
    $result=mysql_query($query);
	//echo mysql_errno($link) . ": " . mysql_error($link). "\n";
	
} 
	while($rows=mysql_fetch_array($result)){
		$i++;
?>

<tr>

<td class="text1" valign="top"><?php echo $i; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>


<td class="text2" valign="top"><?php echo $rows['question']; ?></td>
<td class="text1" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows['marks']; ?></td>



</tr>
<?php
}

?>

<?php
if(isset($_POST['course_code']))
{
	$i=11;
	$course_code=$_POST['course_code'];
	//echo $course_code;
	 #$marks=$_POST['marks'];
	 $r1='X';
	// $mo=$_POST['mo'];
    $query="SELECT  * FROM question_master2 WHERE course_code='$course_code' AND final='$r1' AND qno='2409'and marks='2' order by rand() LIMIT 1";
    $result=mysql_query($query);
	//echo mysql_errno($link) . ": " . mysql_error($link). "\n";
	
} 
	while($rows=mysql_fetch_array($result)){
		$i++;
?>

<tr>

<td class="text1" valign="top"><?php echo $i; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>


<td class="text2" valign="top"><?php echo $rows['question']; ?></td>
<td class="text1" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows['marks']; ?></td>



</tr>
<?php
}

?>

<?php
if(isset($_POST['course_code']))
{
	$i=12;
	$course_code=$_POST['course_code'];
	//echo $course_code;
	 #$marks=$_POST['marks'];
	 $r1='X';
	// $mo=$_POST['mo'];
    $query="SELECT  * FROM question_master2 WHERE course_code='$course_code' AND final='$r1' AND qno='2412'and marks='2' order by rand() LIMIT 1";
    $result=mysql_query($query);
	//echo mysql_errno($link) . ": " . mysql_error($link). "\n";
	
} 
	while($rows=mysql_fetch_array($result)){
		$i++;
?>

<tr>

<td class="text1" valign="top"><?php echo $i; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>


<td class="text2" valign="top"><?php echo $rows['question']; ?></td>
<td class="text1" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows['marks']; ?></td>



</tr>
<?php
}

?>

<?php
if(isset($_POST['course_code']))
{
	$i=13;
	$course_code=$_POST['course_code'];
	//echo $course_code;
	 #$marks=$_POST['marks'];
	 $r1='X';
	// $mo=$_POST['mo'];
    $query="SELECT  * FROM question_master2 WHERE course_code='$course_code' AND final='$r1' AND qno='2413'and marks='2' order by rand() LIMIT 1";
    $result=mysql_query($query);
	//echo mysql_errno($link) . ": " . mysql_error($link). "\n";
	
} 
	while($rows=mysql_fetch_array($result)){
		$i++;
?>

<tr>

<td class="text1" valign="top"><?php echo $i; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>


<td class="text2" valign="top"><?php echo $rows['question']; ?></td>
<td class="text1" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows['marks']; ?></td>



</tr>
<?php
}

?>

<?php
if(isset($_POST['course_code']))
{
	$i=14;
	$course_code=$_POST['course_code'];
	//echo $course_code;
	 #$marks=$_POST['marks'];
	 $r1='X';
	// $mo=$_POST['mo'];
    $query="SELECT  * FROM question_master2 WHERE course_code='$course_code' AND final='$r1' AND qno='2415'and marks='2' order by rand() LIMIT 1";
    $result=mysql_query($query);
	//echo mysql_errno($link) . ": " . mysql_error($link). "\n";
	
} 
	while($rows=mysql_fetch_array($result)){
		$i++;
?>

<tr>

<td class="text1" valign="top"><?php echo $i; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>


<td class="text2" valign="top"><?php echo $rows['question']; ?></td>
<td class="text1" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows['marks']; ?></td>



</tr>
<?php
}

?>

<?php
if(isset($_POST['course_code']))
{
	$i=15;
	$course_code=$_POST['course_code'];
	//echo $course_code;
	 #$marks=$_POST['marks'];
	 $r1='X';
	// $mo=$_POST['mo'];
    $query="SELECT  * FROM question_master2 WHERE course_code='$course_code' AND final='$r1' AND qno='2419'and marks='2' order by rand() LIMIT 1";
    $result=mysql_query($query);
	//echo mysql_errno($link) . ": " . mysql_error($link). "\n";
	
} 
	while($rows=mysql_fetch_array($result)){
		$i++;
?>

<tr>

<td class="text1" valign="top"><?php echo $i; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>


<td class="text2" valign="top"><?php echo $rows['question']; ?></td>
<td class="text1" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows['marks']; ?></td>



</tr>
<?php
}

?>

<?php
if(isset($_POST['course_code']))
{
	$i=16;
	$course_code=$_POST['course_code'];
	//echo $course_code;
	 #$marks=$_POST['marks'];
	 $r1='X';
	// $mo=$_POST['mo'];
    $query="SELECT  * FROM question_master2 WHERE course_code='$course_code' AND final='$r1' AND qno='2423'and marks='2' order by rand() LIMIT 1";
    $result=mysql_query($query);
	//echo mysql_errno($link) . ": " . mysql_error($link). "\n";
	
} 
	while($rows=mysql_fetch_array($result)){
		$i++;
?>

<tr>

<td class="text1" valign="top"><?php echo $i; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>


<td class="text2" valign="top"><?php echo $rows['question']; ?></td>
<td class="text1" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows['marks']; ?></td>



</tr>
<?php
}

?>

<?php
if(isset($_POST['course_code']))
{
	$i=17;
	$course_code=$_POST['course_code'];
	//echo $course_code;
	 #$marks=$_POST['marks'];
	 $r1='X';
	// $mo=$_POST['mo'];
    $query="SELECT  * FROM question_master2 WHERE course_code='$course_code' AND final='$r1' AND qno='2420'and marks='2' order by rand() LIMIT 1";
    $result=mysql_query($query);
	//echo mysql_errno($link) . ": " . mysql_error($link). "\n";
	
} 
	while($rows=mysql_fetch_array($result)){
		$i++;
?>

<tr>

<td class="text1" valign="top"><?php echo $i; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>


<td class="text2" valign="top"><?php echo $rows['question']; ?></td>
<td class="text1" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows['marks']; ?></td>



</tr>
<?php
}

?>

<?php
if(isset($_POST['course_code']))
{
	$i=18;
	$course_code=$_POST['course_code'];
	//echo $course_code;
	 #$marks=$_POST['marks'];
	 $r1='X';
	// $mo=$_POST['mo'];
    $query="SELECT  * FROM question_master2 WHERE course_code='$course_code' AND final='$r1' AND qno='2232'and marks='3' order by rand() LIMIT 1";
    $result=mysql_query($query);
	//echo mysql_errno($link) . ": " . mysql_error($link). "\n";
	
} 
	while($rows=mysql_fetch_array($result)){
		$i++;
?>

<tr>

<td class="text1" valign="top"><?php echo $i; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>


<td class="text2" valign="top"><?php echo $rows['question']; ?></td>
<td class="text1" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows['marks']; ?></td>



</tr>
<?php
}

?>

<?php
if(isset($_POST['course_code']))
{
	$i=19;
	$course_code=$_POST['course_code'];
	//echo $course_code;
	 #$marks=$_POST['marks'];
	 $r1='X';
	// $mo=$_POST['mo'];
    $query="SELECT  * FROM question_master2 WHERE course_code='$course_code' AND final='$r1' AND qno='2416'and marks='3' order by rand() LIMIT 1";
    $result=mysql_query($query);
	//echo mysql_errno($link) . ": " . mysql_error($link). "\n";
	
} 
	while($rows=mysql_fetch_array($result)){
		$i++;
?>

<tr>

<td class="text1" valign="top"><?php echo $i; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>


<td class="text2" valign="top"><?php echo $rows['question']; ?></td>
<td class="text1" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows['marks']; ?></td>



</tr>
<?php
}

?>

<?php
if(isset($_POST['course_code']))
{
	$i=20;
	$course_code=$_POST['course_code'];
	//echo $course_code;
	 #$marks=$_POST['marks'];
	 $r1='X';
	// $mo=$_POST['mo'];
    $query="SELECT  * FROM question_master2 WHERE course_code='$course_code' AND final='$r1' AND qno='2444'and marks='3' order by rand() LIMIT 1";
    $result=mysql_query($query);
	//echo mysql_errno($link) . ": " . mysql_error($link). "\n";
	
} 
	while($rows=mysql_fetch_array($result)){
		$i++;
?>

<tr>

<td class="text1" valign="top"><?php echo $i; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>


<td class="text2" valign="top"><?php echo $rows['question']; ?></td>
<td class="text1" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows['marks']; ?></td>



</tr>
<?php
}

?>

<tr>
		<td align="center" colspan="4"> <b>Section D</b></td></tr>
	<tr>
<td valign="top">

<?php
if(isset($_POST['course_code']))
{
	$i=21;
	$course_code=$_POST['course_code'];
	//echo $course_code;
	 #$marks=$_POST['marks'];
	 $r1='X';
	// $mo=$_POST['mo'];
    $query="SELECT  * FROM question_master2 WHERE course_code='$course_code' AND final='$r1' AND qno='2463'and marks='5' order by rand() LIMIT 1";
    $result=mysql_query($query);
	//echo mysql_errno($link) . ": " . mysql_error($link). "\n";
	
} 
	while($rows=mysql_fetch_array($result)){
		$i++;
?>

<tr>

<td class="text1" valign="top"><?php echo $i; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>


<td class="text2" valign="top"><?php echo $rows['question']; ?></td>
<td class="text1" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows['marks']; ?></td>



</tr>
<?php
}

?>


<?php
if(isset($_POST['course_code']))
{
	$i=22;
	$course_code=$_POST['course_code'];
	//echo $course_code;
	 #$marks=$_POST['marks'];
	 $r1='X';
	// $mo=$_POST['mo'];
    $query="SELECT  * FROM question_master2 WHERE course_code='$course_code' AND final='$r1' AND qno='2465'and marks='5' order by rand() LIMIT 1";
    $result=mysql_query($query);
	//echo mysql_errno($link) . ": " . mysql_error($link). "\n";
	
} 
	while($rows=mysql_fetch_array($result)){
		$i++;
?>

<tr>

<td class="text1" valign="top"><?php echo $i; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>


<td class="text2" valign="top"><?php echo $rows['question']; ?></td>
<td class="text1" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows['marks']; ?></td>



</tr>
<?php
}

?>

<?php
if(isset($_POST['course_code']))
{
	$i=23;
	$course_code=$_POST['course_code'];
	//echo $course_code;
	 #$marks=$_POST['marks'];
	 $r1='X';
	// $mo=$_POST['mo'];
    $query="SELECT  * FROM question_master2 WHERE course_code='$course_code' AND final='$r1' AND qno='2466'and marks='5' order by rand() LIMIT 1";
    $result=mysql_query($query);
	//echo mysql_errno($link) . ": " . mysql_error($link). "\n";
	
} 
	while($rows=mysql_fetch_array($result)){
		$i++;
?>

<tr>

<td class="text1" valign="top"><?php echo $i; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>


<td class="text2" valign="top"><?php echo $rows['question']; ?></td>
<td class="text1" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows['marks']; ?></td>



</tr>
<?php
}

?>


<?php
if(isset($_POST['course_code']))
{
	$i=24;
	$course_code=$_POST['course_code'];
	//echo $course_code;
	 #$marks=$_POST['marks'];
	 $r1='X';
	// $mo=$_POST['mo'];
    $query="SELECT  * FROM question_master2 WHERE course_code='$course_code' AND final='$r1' AND mo='Chapter 11' and kl='Understanding' and marks='5' order by rand() LIMIT 1";
    $result=mysql_query($query);
	//echo mysql_errno($link) . ": " . mysql_error($link). "\n";
	
} 
	while($rows=mysql_fetch_array($result)){
		$i++;
?>

<tr>

<td class="text1" valign="top"><?php echo $i; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>


<td class="text2" valign="top"><?php echo $rows['question']; ?></td>
<td class="text1" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows['marks']; ?></td>



</tr>
<?php
}

?>

<?php
if(isset($_POST['course_code']))
{
	$i=25;
	$course_code=$_POST['course_code'];
	//echo $course_code;
	 #$marks=$_POST['marks'];
	 $r1='X';
	// $mo=$_POST['mo'];
    $query="SELECT  * FROM question_master2 WHERE course_code='$course_code' AND final='$r1' AND qno='2468'and marks='5' order by rand() LIMIT 1";
    $result=mysql_query($query);
	//echo mysql_errno($link) . ": " . mysql_error($link). "\n";
	
} 
	while($rows=mysql_fetch_array($result)){
		$i++;
?>

<tr>

<td class="text1" valign="top"><?php echo $i; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>


<td class="text2" valign="top"><?php echo $rows['question']; ?></td>
<td class="text1" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows['marks']; ?></td>



</tr>
<?php
}

?>


</td></tr></table></div>
<div id="editor"></div>

<!--Add External Libraries - JQuery and jspdf 
check out url - https://scotch.io/@nagasaiaytha/generate-pdf-from-html-using-jquery-and-jspdf
-->
<script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
  
  

    <script  src="js/index.js"></script>




</body>

</html>
		

	
	</div>
	
	
		
