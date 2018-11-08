<?php

for($i=2005;$i<=2010;$i++){
    $date1 = date("$i-5-1");

    setlocale(LC_TIME, "fr_FR","French");
    echo strftime("%A %d %B %Y", strtotime($date1));
   $j= strftime("%A", strtotime($date1));
   if(($j=="samedi")|| ($j=="dimanche")) {
       echo "desole";
    }
    if(($j=="vendredi")|| ($j=="lundi")) {
        echo "Week-end prolongé";
    }

    echo  "<br>" ;
}