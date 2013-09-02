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
$email = $_POST["email"];

$_SESSION['lname'] = $username;
$_SESSION['password'] = $password;
$_SESSION['email'] = $email;

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


//perform sql insert
$result = mysql_query("INSERT INTO profile_tbl (user_name, user_password, user_email) VALUES ('" . $username . "' , '" . $password . "' , '" . $email . "')" ) or die(mysql_error());


if ($result == 1)
{
    header("Location: index.php?login=created"); 
}
else
{
    header("Location: index.php?login=createfailed");
}


//close mysql connection
mysql_close($con);

?>

</body>
</html>


