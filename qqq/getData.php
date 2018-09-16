<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>get data</title>
</head>
<body>
    <?php
    $host = "localhost";
    $username = "root";
    $password = "1a260970";
    $objConnect = mysql_connect($host, $username, $password);

    $objdb = mysql_select_db("batahose_db");

    $strSQL = mysql_query($strSQL) or die (mysql_error());

    ?>
    <table width="600" border="1">
        <tr>
            <th width="91"> <div align="center">CustomerID</div></th>
            <th width="98"> <div align="center">CustomerID</div></th>
            <th width="198"> <div align="center">CustomerID</div></th>
            <th width="97"> <div align="center">CustomerID</div></th>
            <th width="59"> <div align="center">CustomerID</div></th>
            <th width="71"> <div align="center">CustomerID</div></th>
        </tr>
        <?php
        while($objResult = mysql_fetch_array(objQuery))
        {
            ?>
            <tr>
                <td>
                    <div align="center"><?php echo $objResult["bh_users"];?></div>
                </td>
                <td>
                    <?php echo $objResult["usermeta"]?>
                </td>
                
            </tr>
<?php
mysql_close($objConnect);
?>
        }
</body>
</html>