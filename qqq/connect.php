
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