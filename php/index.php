<<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo 'Hello World!<br /><br />';
        $pokus=true; 
$nazev="Michal Honek"; 
$cislo=18; 
$cena=30.4;
$hop = $nazev . $cena;
echo $pokus;
echo '<br /><br />';
echo $nazev;
echo '<br /><br />';
echo $cislo;
echo '<br /><br />';
echo $cena;
echo '<br /><br />';
echo '<strong>odstavec</strong>';
echo '<br /><br />';

print 'Hello World!';
print $pokus;
print '<br /><br />';
print $nazev;
print'<br /><br />';
print $cislo;
print '<br /><br />';
print $cena;
print '<br /><br />';
echo '<img src="bart.jpg" alt"pokus">';

print '<br /><br />';
echo '<strong>\\</strong>';
print '<br /><br />';

$b = 8;
$a = 16;

var_dump ($a+$b);
var_dump ($a-$b);
var_dump ($a/$b);
var_dump ($a*$b);
var_dump ($a++);
var_dump ($a--);
var_dump ($a+=$b);
var_dump ($a-=$b);
var_dump ($a*=$b);
var_dump ($a/=$b);
var_dump ($a==$b);
var_dump ($a!=$b);
var_dump ($a>$b);
var_dump ($a<$b);
var_dump ($a||$b);
var_dump ($a&&$b);
var_dump (!$a);





echo "<br /><br />";
echo "<strong>\Druhý úkol\</strong>";
echo "<br /><br />";

 $MichalHonek1 = 1;
        $MichalHonek2 = 2;
        
        if ($MichalHonek1 < $MichalHonek2) {
            echo "Michal Honek";
        }
        
        echo "<br /><br />";
        
        if($MichalHonek1 < $MichalHonek2) {
            echo "Michal";
        }
        else {
            echo "Honek";
        }
        
        echo "<br /><br />";
        
        
        if ($MichalHonek1 > 14) {
            echo "Michal";
        }
           if ($MichalHonek2 < 10) {
               echo "Honek";
           }
           
        echo "<br /><br />";
        
        switch ($MichalHonek2) {
            case 1:
                echo "1";
                break;
            case 2:
                echo "2";
                break;
            case 3:
                echo "3";
                break;
            case 4:
                echo "4";
                break;
            case 5:
                echo "5";
                break;
            case 6:
                echo "6";
                break;
            default:
                echo "neplatí";              
        }
           














        ?>
    </body>
</html>
