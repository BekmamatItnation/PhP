<html>
<head>
    <meta http-equiv="Content-Type" content="text/html: charset=utf-8" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="image/1.ico" rel="shortcut icon" type="image/x-icon"/>
    <title>Лабораторная работа №1</title>
</head>
<body>
<?php
$a=10;
$b=20;
echo "<br>1-упражнения <br> a=$a  b=$b";
$c=$a+$b;
echo "<br><br><br>2-упражнения<br>c=a+b=$c";
$c=$c*3;
echo "<br><br><br>3-упражнения<br>c=$c";
$c=$c/($b-$a);
echo "<br><br><br>4-упражнения<br>c=c/(b-a)=$c";
$p="Программа";
$d="работает";
echo"<br><br><br>5-упражнения<br>p=$p d=$d";
$result="$p\n$d";
echo "<br><br><br>6-упражнения<br>result=$result";
$result.=" хорошо";
echo "<br><br><br>7-упражнения<br>c=$result";
$z=4;
$x=5;
echo "<br><br><br>z=$z x=$x";
$z = $z ^ $x;
$x = $x ^ $z;
$z = $z ^ $x;
echo "<br>8-упражнения<br> z=$z x=$x";
?>

</body>
</html>
