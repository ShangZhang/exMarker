<?php
ini_set('memory_limit', '1024M');
// lulab.tsinghua.edu.cn/exmarker 上数据库的用户名和密码
// $db = new PDO('mysql:host=localhost;dbname=bdlb1_2', 'root', '929daca0bb41a0c9');
// mac 上 XAMPP 上的用户名和密码
$db = new PDO('mysql:host=localhost;dbname=bdlb1_2', 'root', '');
$table='FDA_approved_RNA_markers';

$msgArray = array('code'=>0, 'data'=>array(), 'message'=>'参数接收错误，请关闭浏览器后重试。');
$gene_name = isset($_POST['gene_name']) ? trim($_POST['gene_name']) : trim($_GET['gene_name']);

header('content-type:application:json;charset=utf8');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Headers:x-requested-with,content-type');


function gtfinfor($gene_name,$table){
        global $db ;
        $query = "select * from ".$table." where HGNC_Symbol='".$gene_name."'";
        $result = $db->query($query);
        if(is_object($result)){
            // echo "shi dui xiang";
            $resultArray = $result->fetchAll();
            return $resultArray;
        }else{
            echo "bu shi dui xiang";
        }
        
}
$response=gtfinfor($gene_name,$table);
echo json_encode($response);
?>