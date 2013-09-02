<html>
<head>
        
 <title>Project Alexander</title>

<script type="text/javascript">

function validate_form(thisform)
{
  var error = "false";

  if (document.getElementById("lname").value == "")
  {
    document.getElementById("loginvalidate").innerHTML =
    "<b>Please enter a" + " valid user name</b>";
    error = "true";
  }
  else
  {
    document.getElementById("loginvalidate").innerHTML = "";
  }

  if (document.getElementById("password").value == "")
 {
    document.getElementById("passwordvalidate").innerHTML = 
     "<b>Please enter a valid password</b>";
    error = "true";
  }
  else 
  {
    document.getElementById("passwordvalidate").innerHTML = "";

  }


 if (document.getElementById("verifypassword").value == "")
 {
    document.getElementById("verifypasswordvalidate").innerHTML = 
    "<b>Please enter a valid password</b>";
    error = "true";
  }
  else 
  {
    document.getElementById("verifypasswordvalidate").innerHTML = "";

  }


 if (document.getElementById("password").value != document.getElementById("verifypassword").value)
 {
    document.getElementById("passwordvalidate").innerHTML = 
    "<b>Please enter matching passwords</b>";
    error = "true";
  }
  else 
  {
    document.getElementById("passwordvalidate").innerHTML = "";

  }

  if (document.getElementById("email").value == "")
 {
    document.getElementById("emailvalidate").innerHTML = 
    "<b>Please enter a valid email</b>";
    error = "true";
  }
  else 
  {
    document.getElementById("emailvalidate").innerHTML = "";

  }
 
  if (error != "true")
  {
   document.createform.submit();
  }

}

</script>

</head>

<body style="background-image:url('background.png');color:black;font-family:cursive;">

<div style="filter:alpha(opacity=60);">

<p style="text-align:left;font-family:arial;font-weight:bold;background-color:#8DB6CD;color:white;">
Project Alexander <br/>
<div style="margin-right:0;margin-left:auto;background-color:blue;font-family:cursive;color:white;">

<img src="curl.png" height="30" width="30">
Write. Share. Discover.
</div>
</p>


<p style="text-align:left;background-color:blue;color:white;width:50px;border-style:dotted;border-width:1px;border-color:#8DB6CD;">
<form name="createform" action="createaccount.php" method="post">
Enter your login:&nbsp <input type="text" name="lname" id="lname" size="20"/><br/>
<div id="loginvalidate"></div>
Enter your password:&nbsp <input type="password" name="password" id = "password" size="20"/><br/>
<div id="passwordvalidate"></div>
Verify password:&nbsp <input type="password" name="verifypassword" id="verifypassword" size="20"/><br/>
<div id="verifypasswordvalidate"></div>
Enter your email:&nbsp <input type="text" name="email" id="email" size="30"/><br/>
<div id="emailvalidate"></div>
<input type='button' onclick='validate_form(this)' value='Submit' />
</form>
</p>




</p>
</br>


</div>

</body>
</html>






