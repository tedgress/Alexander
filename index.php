<html>
<head>
        
 <title>Wrtr.net</title>


</head>

<body style="background-image:url('background.png');color:black;font-family:cursive;">

<div style="filter:alpha(opacity=60);">

<p style="text-align:left;font-family:arial;font-weight:bold;background-color:#8DB6CD;color:white;">
Wrtr.net <br/>
<div style="margin-right:0;margin-left:auto;background-color:blue;font-family:cursive;color:white;">

<img src="curl.png" height="30" width="30">
Write. Share. Discover.
</div>
</p>


<?

if ($_GET["login"] == 'failed')
{
    echo "Login failed";
}

else if ($_GET["login"] == 'created')
{
    echo "Login created";
}

else if ($_GET["login"] == 'createfailed')
{
    echo "New Account creation failed";
}

else if ($_GET["logout"] == 'logout')
{
    echo "Logged out.";
}

?>


<p style="text-align:left;background-color:blue;color:white;width:50px;border-style:dotted;border-width:1px;border-color:#8DB6CD;">
<form action="login.php" method="post">
Login:&nbsp <input type="text" name="lname" size="25"/><br/>
Password:&nbsp <input type="password" name="password" size="25"/><br/>
<input type="submit" value="Logon" />
</form>
</p>
Don't have an account?<a href="newaccount.php">Click here</a>



</p>
</br>

<p style="text-align:left;background-color:blue;color:white;width:50px;border-style:dotted;border-color:#8DB6CD;border-width:1px;">
New Entries:

</p>

</div>

</body>
</html>



