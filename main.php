<html>
<head>
<style type="text/css">
a:link {text-decoration:none;color:white;}
a:visited {text-decoration:none;color:white;}
a:hover {color:#8DB6CD}
</style>



<script type="text/javascript" src="changeprofile.js"></script>
<script type="text/javascript" src="editprofile.js"></script>        
<script type="text/javascript" src="birthdayfunc.js"></script>
 <title>Project Alexander: Welcome</title>


<script language="javascript" type="text/javascript">

function checkAJAX()
{
alert('running check AJAX');
var submission = "";
<?php
if ($_GET['submission'] != "")
{
echo "var submission = \"" . $_GET['submission'] . "\"";
}
?>

  if (submission == 'success')
  {
    sndReq('works');
  }

  else if (submission == 'fail')
  {
    sndReq('works');
  }
  
//PHP code to display works in page

<?

$work_number = $_GET['displayWork'];


if ($_GET['displayWork'] != "")
{

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
  $result = mysql_query("SELECT text FROM works_tbl WHERE work_number = " .     work_number) or die(mysql_error());


  //sort data from sql query
  while ($row = mysql_fetch_array($result))
  {
   echo "sndReq('works');";
   //echo "document.getElementById('worksDiv').innerHTML = '<textarea name='work' rows='50' cols='80'>" . $row['text'] . "</textarea>'";        
   echo "document.getElementById('worksDiv').innerHTML = '<b>HELLO</b>'";

   }

  //close mysql connection
  mysql_close($con);


}


  ?>


}

function logout()
{
window.location="http://www.twilightraven.com/alexander/logout.php";

}
function sndReq(action)
{

	var http = null;
	if (window.XMLHttpRequest)
	{

  	http = new XMLHttpRequest();
	}
	else if (window.ActiveXObject)
	{
  	http = new ActiveXObject("Microsoft.XMLHTTP");
	}


    //assign anonymous function to onreadystatechange
    http.onreadystatechange = function()
    {
        if (http.readyState == 4)
        {
           el = document.getElementById('workDiv');
           el.innerHTML=http.responseText;
        }
   };   
  
  if (action=='profile')
  {
       http.open('GET', 'myprofile.php', true);
  }

  else if (action == 'works')
  {
       http.open('GET', 'works.php', true);
  }


  http.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  http.send(null);



}

function displayWork(work_number)
{
alert('display work running. work number: ' + work_number);
window.location("http://www.twilightraven.com/alexander/main.php?displayWork=" + work_number);

}






</script>









</head>

<body style="background-image:url('background.png');background-color:white;color:black" onLoad="javascript:checkAJAX()" >


<p style="text-align:left;font-family:arial;font-weight:bold;background-color:#8DB6CD;color:white;">
Project Alexander &nbsp; 

<br/> 
<div style="margin-right:0;margin-left:auto;background-color:blue;font-family:cursive;font-weight:bold;color:white;">
<img src="curl.png" height="30" width="30">
HomeFeed &nbsp; 
<a href="javascript:sndReq('works')">Works</a> &nbsp; 
Fans &nbsp;
<a href="javascript:sndReq('profile')">Profile</a>&nbsp; 
Inbox &nbsp; 
<a href="javascript:logout()">Logout</a> &nbsp;
</div>
</p>
</br>



<div id="workDiv"></div>



</body>
</html>



