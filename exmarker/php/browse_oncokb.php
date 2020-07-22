<?php
ini_set('memory_limit', '1024M');
$db = new PDO('mysql:host=localhost;dbname=bdlb1_1', 'root', '');
$table='oncokb_biomarker_drug_associations_FDA_approved_norm';

$msgArray = array('code'=>0, 'data'=>array(), 'message'=>'参数接收错误，请关闭浏览器后重试。');
// $level = isset($_POST['level']) ? trim($_POST['level']) : trim($_GET['level']);

header('content-type:application:json;charset=utf8');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Headers:x-requested-with,content-type');


function gtfinfor(){
        global $db ;
        $query = "select * from oncokb_biomarker_drug_associations_FDA_approved_norm";
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
$response=gtfinfor();
echo json_encode($response);
