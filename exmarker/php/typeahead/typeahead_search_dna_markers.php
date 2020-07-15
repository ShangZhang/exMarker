<?php
ini_set('memory_limit', '1024M');
$db = new PDO('mysql:host=localhost;dbname=bdlb1_1', 'root', '');
$table='BDLB_DNA_markers';
$table2='FDA_approved_DNA_markers';
$table3='oncokb_biomarker_drug_associations_FDA_approved_norm';

$msgArray = array('code'=>0, 'data'=>array(), 'message'=>'参数接收错误，请关闭浏览器后重试。');
// $gene_name = isset($_POST['gene_name']) ? trim($_POST['gene_name']) : trim($_GET['gene_name']);

header('content-type:application:json;charset=utf8');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Headers:x-requested-with,content-type');


function gtfinfor($table,$table2,$table3){
        global $db ;
        // $query = "select HGNC_Symbol from ".$table."";
        $query = "select HGNC_Symbol from ".$table." union select HGNC_Symbol from ".$table2." union select Gene from ".$table3;
        $result = $db->query($query);
        $resultArray = $result->fetchAll();
        return $resultArray;
}
$response=gtfinfor($table,$table2,$table3);
echo json_encode($response);
?>
