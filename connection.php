

<?php
//change mysqli_connect(host_name,username, password); 
$connection = mysqli_connect("127.0.0.1", "root", "");
$db = mysqli_select_db($connection, 'demo');
?>
