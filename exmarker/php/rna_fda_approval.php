<?php
ini_set('memory_limit', '1024M');
$db = new PDO('mysql:host=localhost;dbname=bdlb1_1', 'root', '');
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