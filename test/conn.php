    <?php
     date_default_timezone_set('PRC'); 
    $dbms='mysql';
    $host  ='127.0.0.1:3306';
   $dbname= '泡面';
   $db_user = 'root'; 
   $db_pwd  ='123456'; 
   $dsn="$dbms:host=$host;dbname=$dbname";
try{
	$pdo=new pdo($dsn,$db_user,$db_pwd);
}catch(Exception $exc){
echo $exc->getMessage();
}
?>