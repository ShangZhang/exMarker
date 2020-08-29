<?php
ini_set('memory_limit', '1024M');
// lulab.tsinghua.edu.cn/exmarker 上数据库的用户名和密码
// $db = new PDO('mysql:host=localhost;dbname=bdlb1_2', 'root', '929daca0bb41a0c9');
// mac 上 XAMPP 上的用户名和密码
$db = new PDO('mysql:host=localhost;dbname=bdlb1_2', 'root', '');
$table='browse_DNA';

$msgArray = array('code'=>0, 'data'=>array(), 'message'=>'参数接收错误，请关闭浏览器后重试。');
$level = isset($_POST['level']) ? trim($_POST['level']) : trim($_GET['level']);

header('content-type:application:json;charset=utf8');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Headers:x-requested-with,content-type');


function gtfinfor($level){
        global $db ;
        $query = "select * from browse_DNA";
        $result = $db->query($query);
        if(is_object($result)){
                $resultArray = $result->fetchAll();
                return $resultArray;
        }else{
                echo "bu shi dui xiang";
                echo $query;
                echo gettype($result);
        }
}
$response=gtfinfor($level);
echo json_encode($response);
?>
