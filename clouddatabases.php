<html> 
<head><title>Connecting to Cloud Databases</title></head> 
<body><pre> 
<?php 
    // phpinfo(); 
    $THE_HOST = "16a0a55126ff9135dbad07358966e4c1bf1ed58a.rackspaceclouddb.com"; 
    $THE_USER = "wgres101"; 
    $THE_PWD = "sn0wball"; 
    $THE_DB = "alexander"; 

    // 
    // Get "e" 
    // 
    $arg_expr = trim($_POST["e"]); 
    if($arg_expr == "") { 
        $arg_expr = "PI()"; 
    } 
    else { 
        if(get_magic_quotes_gpc()) { 
         $arg_expr = stripslashes($arg_expr); 
        } 
        
        // 
        // Connect to the database 
        // 
        $connection = mysql_connect($THE_HOST, $THE_USER, $THE_PWD); 
        if (!$connection) { 
             die('I could not connect to the database. The error is: ' . mysql_error()); 
        } 
        mysql_select_db($THE_DB, $connection); 
        // 
        // Calculation 
        // 
        $result = mysql_query("SELECT (" . $arg_expr . ");", $connection); 
        $row = mysql_fetch_array($result, MYSQL_NUM); 
        $eValue = $row[0]; 
        printf("The database connection worked, and MySQL says that %s = %s<BR>%s", $arg_expr, $eValue, mysql_error());
        mysql_free_result($result); 
        mysql_close($connection); 
    } 
?> 
    <FORM ACTION='clouddatabases.php' METHOD='POST'> 
        Enter a MySQL expression: 
        <INPUT TYPE="TEXT" NAME="e" VALUE="<? echo $arg_expr; ?>"/> 
        <INPUT TYPE="SUBMIT"> 
    </FORM> 
    This is a simple PHP example to test your connection to Rackspace Cloud Databases. 
    It does not require your database to have any tables. 
    It doubles as a handy way to calculate simple MySQL expressions from the browser. 
    <BR> 
    Because this sample uses string concatenation to compose SQL statements, only use this in your development environment in your password-protected site. 
    <BR>  
    EXAMPLES: 
        PI()*3*3 
        curdate() 
        3=3 AND 4>4 
        MID('Rackspace',1,4) 
        SIN(PI()/2) 
        SHA1('Rackspace Cloud Databases') 
    </pre></body> 
</html>