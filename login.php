<html>
<head>
        
 <title>Untitled</title>

</head>
<body>

<?
//echo $_POST["lname"];
//echo $_POST["password"];


//make sure sesson is started
@session_start();


$username = $_POST["lname"];
$password = $_POST["password"];


$_SESSION['lname'] = $username;
$_SESSION['password'] = $password;

//store username and password in session



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


//perform sql query
$result = mysql_query("SELECT * FROM profile_tbl") or die(mysql_error());

$authorized = false;
//sort data from sql query
while ($row = mysql_fetch_array($result))
{
    //echo $row['user_name']. " - ". $row['user_password'];

    if (($row['user_name'] == $username) and ($row['user_password'] == $password))
    {
       echo "User name and password accepted";
       header("Location: main.php");
       $authorized = true;
    }
 
}

if ($authorized == false)
{
       echo "User name and password incorrect";
       header("Location: index.php?login=failed"); 
}
//grab user id and store in session
$user_id = $row['user_id'];
$_SESSION['user_id'] = $user_id;

//close mysql connection
mysql_close($con);

?>

</body>
</html>



