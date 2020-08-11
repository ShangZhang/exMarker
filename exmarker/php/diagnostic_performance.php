<?php
// ini_set('memory_limit', '1024M');
$db = new PDO('mysql:host=localhost;dbname=bdlb1_2', 'root', '');
$table='Diagnostic_performance_all_diff_datasets';

$msgArray = array('code'=>0, 'data'=>array(), 'message'=>'参数接收错误，请关闭浏览器后重试。');
$RNA_name = isset($_POST['RNA_name']) ? trim($_POST['RNA_name']) : trim($_GET['RNA_name']);
// $Specimen_type = isset($_POST['Specimen_type']) ? trim($_POST['Specimen_type']) : trim($_GET['Specimen_type']);
// $Disease_type = isset($_POST['Disease_type']) ? trim($_POST['Disease_type']) : trim($_GET['Disease_type']);


header('content-type:application:json;charset=utf8');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Headers:x-requested-with,content-type');

function gtfinfor($RNA_name,$table){
        global $db ;
        $query = "select * from ".$table." where RNA_name='".$RNA_name."'";
        $result = $db->query($query);
        $resultArray = $result->fetchAll();
        return $resultArray;
}
$response=gtfinfor($RNA_name,$table);
echo json_encode($response);
?>
