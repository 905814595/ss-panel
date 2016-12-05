<?php
require_once '../lib/config.php';
$name = $_GET['username'];
$name = strtolower($name);
$passwd = $_GET['passwd'];
$passwd = \Ss\User\Comm::SsPW($passwd);
$c = new \Ss\User\UserCheck();
$q = new \Ss\User\Query();
if($c->UserLogin($name,$passwd)){
    //login success
    $uid = $q->GetUidByUser($name);
    $rs['code'] = '1';
    $rs['msg'] = "欢迎回来";
    $rs['uid'] = $uid;
}else{
    $rs['code'] = '0';
    $rs['msg'] = "用户名或者密码错误";
}
echo json_encode($rs);