<html>
<head>
        
 <title>Untitled</title>

</head>
<body>



<b>Logging out...</b>

<?

$_SESSION['lname'] = "";
$_SESSION['password'] = "";


header("Location: index.php?login=logout");

?>

</body>
</html>



