<?php
header("Content-Type: text/html; charset=UTF-8");
$db = new DB($serverName, $uid, $pwd, 'sun');
$key = 'c96ed45fc183fd9fb73a6bac0c0a3a18';
$ac = $_GET['action'];
$user = $_GET['user'];
$pass = $_GET['pass'];
$money = $_GET['money'];
$zhuanhuan = $_GET['zhuanhuan'];
$keys = $_GET['key'];
$rs = $db->getRow("select 账号 from 人员表 where 账号='1111'");
		print_r($rs);
		exit;
if(in_array($ac, array('adduser', 'zhuanhuan'))) {
	if ($key!=$keys) exit('Module not found!');
	if ($ac=='adduser'){
		
		exit('Module not found!');
		}
		elseif($ac=='zhuanhuan'){
			exit('Module not found!');
		}else{
		exit('Module not found!');
			}
} else {
	exit('Module not found!');
}
?>
<?php
class DB {
    var $con = null;
    function __construct($dbhost,$dbuser,$dbpass,$dbname) {
        $connectionInfo =  array("UID"=>$dbuser,"PWD"=>$dbpass,"Database"=>$dbname);
        $this->con = sqlsrv_connect($dbhost,$connectionInfo);
    }
    function query($sql){
        $result = sqlsrv_query($this->con, $sql);
    }
    function getRow($sql){
        $result = sqlsrv_query($this->con, $sql);
        $arr = array();
        while($row = sqlsrv_fetch_array($result))
        {
            $arr[] = $row;
        }
        return $arr[0];
    }
    function getAll($sql){
        $result = sqlsrv_query($this->con, $sql);
        $arr = array();
        while($row = sqlsrv_fetch_array($result))
        {
            $arr[] = $row;
        }
        return $arr;
    }
    function __destruct() {
        unset($con);
    }
}
?>