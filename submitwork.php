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


$title = $_POST["title"];
$genre = $_POST["genre"];
$work = $_POST["work"];



$username = $_SESSION['lname'];
$password = $_SESSION['password'];
$email = $_SESSION['email'];

//store username and password in session

echo $username;
echo $password;
echo $email;

echo "<br/>";

echo $title;
echo $genre;
echo $work;


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


//pull out user id from database

//perform sql query
$result = mysql_query("SELECT * FROM profile_tbl") or die(mysql_error());


$found = false;
//sort data from sql query
while ($row = mysql_fetch_array($result))
{
    if ($row['user_name'] == $username)
    {
       $user_id = $row['user_id'];
       $found = true;
    }
 
}

if ($found == false)
{
   echo "Could not find user...";
   header("Location: works.php");
}

//perform sql insert
$result = mysql_query("INSERT INTO works_tbl (author_id, author_name, name_of_work, genre, text) VALUES ('" . $user_id . "' , '" . $username . "' , '" . $title . "' , '" . $genre . "','" . $work . "')" ) or die(mysql_error());


if ($result == 1)
{
    header("Location: main.php?submission=success"); 
}
else
{
   header("Location: main.php?submission=fail");
}


//close mysql connection
mysql_close($con);

?>

</body>
</html>






