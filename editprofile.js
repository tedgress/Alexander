
function editProfile(action)
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
           if (action=='basicinfo')
           {
               el = document.getElementById('basicDiv');
           }
          else if (action=='personalinfo')
           {
               el = document.getElementById('personalDiv');
           }
          else if (action=='contactinfo')
           {
               el = document.getElementById('contactDiv');
           }

           el.innerHTML=http.responseText;
        }
   };   
  
  if (action=='basicinfo')
  {
       http.open('GET', 'basicinformation.php', true);
  }

  else if (action=='personalinfo')
  {
       http.open('GET', 'personalinformation.php', true);
  }

  else if (action=='contactinfo')
  {
       http.open('GET', 'contactinformation.php', true);
  }



  http.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  http.send(null);



}
