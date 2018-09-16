<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>connect</title>
</head>
<body>
    <?php
    $host = "localhost";
    $username = "root";
    $password = "1a260970";
    $objConnect = mysql_connect($host, $username, $password);


    if($objConnect){
        echo "เชื่อมต่อสำเร็จ";
    }else{
        echo "MySQL Connect Failed : Error : ".mysql_error();
    }
    mysql_close($objConnect);
    ?>
</body>
</html>