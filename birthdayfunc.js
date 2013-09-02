function birthdayfunc()
{
      var innerDayData;

      var numberOfDays = 31;
      var selectedIndex = document.getElementById('monthSelect').selectedIndex;

      if (selectedIndex==1)
      {
        numberOfDays = 28;
      }
      else if ((selectedIndex==4)||(selectedIndex==6)||(selectedIndex==8)||(selectedIndex==10))
      {
        numberOfDays = 30;
      }

      innerDayData = '<select style="background-color: #666699;color: #ffffff; font-size:10px;font-style:cursive;">';

      for (var i=0;i<numberOfDays;i++)
      {
         innerDayData = innerDayData + '<option>' + (i+1) + '</option>';
      }

      innerDayData = innerDayData + '</select>';

      document.getElementById('dayDiv').innerHTML = innerDayData;
}
