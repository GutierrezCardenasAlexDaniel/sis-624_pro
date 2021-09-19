<?php
$conexion = new mysqli('mysql', $_ENV['MYSQL_USER'], $_ENV['MYSQL_PASSWORD'], $_ENV['MYSQL_DATABASE']/*, 3306 */);
/*$conexion = mysqli_connect("127.0.0.1","mysql-username","mysql-password","mysql-database");
/*mysqli_set_charset($conexion,"utf8");
/*if(!$conexion){
    echo "error crack sigue";
}else{
    echo "si crack pudiste";
}*/
?>
