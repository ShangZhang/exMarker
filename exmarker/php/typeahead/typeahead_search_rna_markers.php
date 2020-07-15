<?php
ini_set('memory_limit', '1024M');
$db = new PDO('mysql:host=localhost;dbname=bdlb1_1', 'root', 'c90d204689ee9dcf');
$table='BDLB_RNA_markers';
$table2='FDA_approved_RNA_markers';

$msgArray = array('code'=>0, 'data'=>array(), 'message'=>'参数接收错误，请关闭浏览器后重试。');
// $gene_name = isset($_POST['gene_name']) ? trim($_POST['gene_name']) : trim($_GET['gene_name']);

header('content-type:application:json;charset=utf8');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Headers:x-requested-with,content-type');


function gtfinfor($table,$table2){
        global $db ;

        $query = "select RNA_name from ".$table." union select HGNC_Symbol from ".$table2;
        $result = $db->query($query);
        $resultArray = $result->fetchAll();
        return $resultArray;
}
$response=gtfinfor($table,$table2);
echo json_encode($response);
?>
