function changeProfile(action)
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
           el = document.getElementById('profileDiv');
           el.innerHTML=http.responseText;
        }
   };   
  
  if (action=='profile')
  {
       http.open('GET', 'editprofile.php', true);
  }

  http.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  http.send(null);



}

function profilePage(action)
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
           el = document.getElementById('profileDiv');
           el.innerHTML=http.responseText;
        }
   };   
  
  if (action=='profile')
  {
       http.open('GET', 'viewprofile.php', true);
  }

  http.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  http.send(null);



}
