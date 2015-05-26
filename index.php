<html>
    <head>
        <meta charset="UTF-8">
        
        <title>Форма добавления товара в каталог</title>
    </head>
    <body>	
<?php

 $host = "localhost";       
$db = new mysqli("localhost", "root", "", "classicmodels");
if (!mysqli_connect_errno()) {
$db->query('SET NAMES utf8');
if ($res = $db->query('SELECT * FROM `customers`')) {
while ($pole = $res->fetch_array()) {
echo $pole[0] .' - ' . $pole[1] .' - ' . $pole[2] .' - '. $pole[3]. ' - '. 
     $pole[4].' - '. $pole[5].' - '. $pole[6].' - '. $pole[7].' - '. $pole[8].'- '.
     $pole[9].' - '. $pole[10].' - '. $pole[11].' - '. $pole[12].'<br>';
}
$res->close();
} 
$db->close();
}
else {
echo "Не удалось установить подключение к базе данных";
}
?>
</body>
</html>