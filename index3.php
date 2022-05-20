<html>
<head>
<title>test</title>
</head>

<body>
<?php
$connect = new mysqli('localhost','root','','crud');
if($connect->connect_error)
 echo 'connection error:'.$connect->connect_error;
else
 echo 'connection is successful';
?>
</body>
</html>
