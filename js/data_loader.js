var req = new XMLHttpRequest();
req.open("GET", "Achivements.json", true);
req.onreadystatechange = myCode;   
req.send(null);

function myCode()
{
   if (req.readyState == 4)
   {
        var doc = eval('(' + req.responseText + ')');
        var achivSection = document.getElementById('myachievements');   // ищем поле
        var anchivData = "<p>Достижение в познании языков программирования:</p><ul>";
        for (var key in doc)
        {
            anchivData +='<li class="achiv-item">Знание языка - ' + doc[key].achivName + ". Уровень: " + doc[key].level + "</li>";
        }
        anchivData += "</ul>";
        achivSection.innerHTML = anchivData;
   }
}

