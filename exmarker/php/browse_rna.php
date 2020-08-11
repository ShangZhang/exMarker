<?php
ini_set('memory_limit', '1024M');
$db = new PDO('mysql:host=localhost;dbname=bdlb1_2', 'root', '');
$table = 'browse_RNA';

$msgArray = array('code' => 0, 'data' => array(), 'message' => '参数接收错误，请关闭浏览器后重试。');
$disease = isset($_POST['disease']) ? trim($_POST['disease']) : trim($_GET['disease']);
$level = isset($_POST['level']) ? trim($_POST['level']) : trim($_GET['level']);
$rna_type = isset($_POST['rna_type']) ? trim($_POST['rna_type']) : trim($_GET['rna_type']);

header('content-type:application:json;charset=utf8');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Headers:x-requested-with,content-type');


function gtfinfor($disease, $level, $rna_type, $table)
{
        global $db;
        $query = "select * from browse_RNA limit 1655";
        $result = $db->query($query);
        if (is_object($result)) {
                $resultArray = $result->fetchAll();
                return $resultArray;
        } else {
                echo "bu shi dui xiang";
                echo $query;
                echo gettype($result);
        }
}
$response = gtfinfor($disease, $level, $rna_type, $table);
echo json_encode($response);
