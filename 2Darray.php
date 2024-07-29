<!DOCTYPE html>
<html lang="en">
<body>
    <?php
    $flowers = array("Rose"=array("20.00","Red","7 items"),
                    "Daisy" = array("15.00","White","10 items")
                    "Orchid" = array("10.00","Violet","3 items")
                    "Tulip" = array("25.00","Blue","5 items"))

    echo $flowers['Rose'][1]." Rose costs Rs.".$flowers['Rose'][0]." and you get".$flowers['Rose'][2]."<br><br>";
    echo $flowers['Daisy'][1]." Daisy costs Rs.".$flowers['Daisy'][0]." and you get".$flowers['Daisy'][2]."<br><br>";
    echo $flowers['Orchid'][1]." Orchid costs Rs.".$flowers['Orchid'][0]." and you get".$flowers['Orchid'][2]."<br><br>";
    echo $flowers['Tulip'][1]." Tulip costs Rs.".$flowers['Tulip'][0]." and you get".$flowers['Tulip'][2]."<br><br>";
    ?>
</body>
</html>