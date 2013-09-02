<html>
<head>
        
 <title>Untitled</title>

</head>
<body onload="birthdayfunc()">



<div style="background-color:white;color:black;width:50%;">

<form name="myForm" action="updateProfile.php" method="get">

<div style="float:left;">
Sex:</div><div style="float:right;">
<select style="background-color: #666699;color: #ffffff;font-size:10px;font-style:cursive;">
       <option selected>Male</option>
       <option>Female</option>
</select>
</div>

<br/>

<div style="clear:both;float:left;">
Birthday:</div><div style="clear:both;float:right;">
<select id="monthSelect" onchange="javascript:birthdayfunc()" style="background-color: #666699;color: #ffffff; font-size:10px;font-style:cursive;">
      <option selected>Jan</option>
      <option>Feb</option>
      <option>Mar</option>
      <option>Apr</option>
      <option>May</option>
      <option>Jun</option>
      <option>Jul</option>
      <option>Aug</option>
      <option>Sep</option>
      <option>Oct</option>
      <option>Nov</option>
      <option>Dec</option>
</select>
</div> 
<div style="float:right;">
<select style="background-color: #666699;color: #ffffff; font-size:10px;font-style:cursive;">
<? for ($i = 0; $i<31; $i++)
   {
     echo "<option>" . ($i+1) . "</option>";
   }
?>

</select>
</div>
<div style="float:right;">

<? echo "<select style='background-color: #666699;color: #ffffff; font-size:10px;font-style:cursive;'>";
   for ($i = 2009; $i>1900; $i--)
   {
    echo "<option>" . $i . "</option>";
   }
   echo "</select>";
?>

</div>
<br/>

<div style="clear:left;float:left;">
Hometown:</div><div style="float:right;">
<input type="text" size="25" style="background-color: #666699;color: #ffffff; font-size:10px;font-style:cursive;">
</div>
<br/>

<div style="clear:both;float:left;">
Relationship Status:</div><div style="clear:both;float:right;">
<select style="background-color: #666699;color: #ffffff;font-size:10px;font-style:cursive;float:right;">
       <option selected>Single</option>
       <option>In a Relationship</option>
       <option>Engaged</option>
       <option>Married</option>
       <option>It's Complicated</option>
       <option>In an Open Relationship</option>
       <option>Widowed</option>
</select>
</div>
<br/>

<div style="clear:both;float:left;">
Interested In:</div><div style="clear:both;float:right;">
<input type="checkbox" style="background-color: #666699;color: #ffffff; font-size:10px;font-style:cursive;">Men</input>
<input type="checkbox" style="background-color: #666699;color: #ffffff; font-size:10px;font-style:cursive;">Women</input>
</div>
<br/>

<div style="clear:both;float:left;">
Looking For:</div><div style="clear:both;float:right;">
<input type="checkbox" style="background-color: #666699;color: #ffffff; font-size:10px;font-style:cursive;">Friendship</input>
<input type="checkbox" style="background-color: #666699;color: #ffffff; font-size:10px;font-style:cursive;">Dating</input>
<input type="checkbox" style="background-color: #666699;color: #ffffff; font-size:10px;font-style:cursive;">Networking</input>
</div>
<br/>

<div style="clear:both;float:left;">
Political Views:</div><div style="clear:both;float:right;">
<input type="text" size="25" style="background-color: #666699;color: #ffffff; font-size:10px;font-style:cursive;">
</div>
<br/>


<div style="clear:both;float:left;">
Religious Views:</div><div style="clear:both;float:right;">
<input type="text" size="25" style="background-color: #666699;color: #ffffff; font-size:10px;font-style:cursive;">
</div>
<br/>

</div>

<a href="javascript:document.myForm.submit();" style="clear:both;color:white;text-align:center;">submit</a>
</form>

<?



?>

</body>
</html>



