
<?


$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['lname'];


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

Works, listed by date of submission

<p style="color:white">

<?

$result = mysql_query("SELECT * FROM works_tbl") or die(mysql_error());


$found = false;
//sort data from sql query
while ($row = mysql_fetch_array($result))
{
    if ($row['user_name'] == $username)
    {
        echo "<a href='javascript:displayWork(" . $row['work_number'] . ")'>" . $row['name_of_work'] . "<br/><br/></a>";
    } 
 
}

?>


</p>

</td>

<td valign="top" style="background-color:#77ccff">


<div id="worksDiv" style="font-family:cursive;">
<p style="color:white">

<form action="submitwork.php" method="post">

Enter the title of your text:<input type="text" name="title"><br/>
Enter the genre of your text:<input type="text" name="genre"><br/>


<textarea name="work" rows="50" cols="80">Enter text here</textarea>

<input type="submit" value="Submit">



</form>
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



