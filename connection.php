

<?php 


$db = 'mysql:host=localhost;dbname=hope;';
$username = 'root';
$password =''; 
// ClassNam  var = new ClassName(); 


$conn = new PDO($db , $username, $password);


echo "Connected";


?>
