
<?

$user_id = $_SESSION['user_id'];



//make sql connection
$con = mysql_connect("mysql", "ted_gress", "1Abcdefg");
if (!$con)
{
    die('Could not connect: ' . mysql_error());

}


//set active database

$db_selected = mysql_select_db('alexander', $con);
if (!$db_selected) {
    die ('Can\'t use alexander : ' . mysql_error());
}

?>

<div style="background-color:#3366ff;font-family:cursive;color:white;">
<table style="table-layout:fixed;" width="100%">
<tr>
<td valign="top">
<img src="placeholder.jpg"/><br/>
View Photos of Me <br/>
Edit Photos <br/>
</td>

<td valign="top" style="background-color:#77ccff">



<div id="profileDiv" style="font-family:cursive;">

<p style="text-align:right;">
<a href="javascript:changeProfile('profile')">Edit Info</a></p>


<p style="text-align:left;background-color:blue;color:white;width:50%;font-weight: bold;">

Basic Information <br/>

</p>

<div style="text-align:left;background-color:white;color:black;width:35%;">

<?
//perform sql query
$result = mysql_query("SELECT * FROM basic_info_tbl WHERE user_id = " . user_id) or die(mysql_error());


//sort data from sql query
$row = mysql_fetch_array($result) or die(mysql_error());
?>



<div style="clear:both;float:left;font-weight:bold;">
Sex:
</div><div style="clear:both;float:right;">
<? 
if ($row['sex'] == 0)
{   echo "Male";}
else if ($row['sex'] == 1)
{   echo "Female";}
?>
<br/>
</div>

<div style="clear:both;float:left;font-weight:bold;">
Birthday:</div><div style="clear:both;float:right;">
 
<?
echo $row['birthday']; 
?>
</div>


<br/>

<div style="clear:both;float:left;font-weight:bold;">
Hometown:</div><div style="clear:both;float:right;">
<? echo $row['hometown']; ?>
</div>
<br/>


<div style="clear:both;float:left;font-weight:bold;">
Relationship Status:</div><div style="clear:both;float:right;">
<? if ($row['rel_status'] == 0)
{     echo "Single";}
   else if ($row['rel_status'] == 1)
{     echo "In A Relationship";}
   else if ($row['rel_status'] == 2)
{     echo "Engaged";}
   else if ($row['rel_status'] == 3)
{     echo "Married";}
   else if ($row['rel_status'] == 4)
{     echo "It's Complicated";}
   else if ($row['rel_status'] == 5)
{     echo "In An Open Relationship";}
   else if ($row['rel_status'] == 6)
{     echo "Widowed";}
?>
</div>
<br/>

<div style="clear:both;float:left;font-weight:bold;">
Interest In:</div><div style="clear:both;float:right;">
<? 
  if ($row['interest_in'] == 0)
{   echo "Women";}
  if ($row['interest_in'] == 1)
 {  echo "Men";}
  if ($row['interest_in'] == 2)
{   echo "Men and Women";}
?>
</div>
<br/>

<div style="clear:both;float:left;font-weight:bold;">
Looking For:</div><div style="clear:both;float:right;">

<?
   if ($row['looking_for'] == 0)
     echo "Friendship";
   else if ($row['looking_for'] == 1)
     echo "Dating";
   else if ($row['looking_for'] == 2)
     echo "Networking";
   else if ($row['looking_for'] == 3)
     echo "Friendship & Dating";
   else if ($row['looking_for'] == 4)
     echo "Dating & Networking";
   else if ($row['looking_for'] == 5)
     echo "Friendship & Networking";
   else if ($row['looking_for'] == 6)
     echo "Friendship, Dating, and Networking";
?>
</div>
<br/>


<div style="clear:both;float:left;font-weight:bold;">
Political Views:</div><div style="clear:both;float:right;">

<? echo $row['pol_view']; ?>
</div>
<br/>

<div style="clear:both;float:left;font-weight:bold;">
Religious Views:</div><div style="clear:both;float:right;">
<? echo $row['rel_view']; ?>
</div>
</div>

<p style="clear:both;text-align:left;background-color:blue;color:white;width:50%;font-weight: bold;">


Personal Information<br/>

</p>

<p style="text-align:left;background-color:white;color:black;width:35%;">


Activities:<br/>

Interests:<br/>

Favorite Music:<br/>

Favorite TV Shows:<br/>

Favorite Movies:<br/>

Favorite Quotations:<br/>

Literary Interests<br/>

Favorite Authors:<br/>

Favorite Books:<br/>

Favorite Genre:<br/>

</p>

<p style="text-align:left;background-color:blue;color:white;width:50%;font-weight: bold;">


Contact Information<br/>

</p>

<p style="text-align:left;background-color:white;color:black;width:35%;">


Grad School:<br/>

College:<br/>

High School:<br/>

Employer:<br/>

Position:<br/>

Time Period: <br/>

Location:<br/>

</p>

</div>

</td>
</tr>
</table>
</div>

<?

//close mysql connection
mysql_close($con);

?>




