<?php
require_once '../lib/config.php';
if($_GET['uid'] != ''){
    $uid = $_GET['uid'];
    $oo = new Ss\User\Ss($uid); 
    
    //计算流量并保留2位小数
    $all_transfer = $oo->get_transfer_enable()/$togb;
    $unused_transfer =  $oo->unused_transfer()/$togb;
    $used_100 = $oo->get_transfer()/$oo->get_transfer_enable();
    $used_100 = round($used_100,2);
    $used_100 = $used_100*100;
    //计算流量并保留2位小数
    $transfers = $transfers/$tomb;
    $transfers = round($transfers,2);
    $all_transfer = round($all_transfer,2);
    $unused_transfer = round($unused_transfer,2);

    $rs['username'] = $oo->get_user_name();
    $rs['sspass'] = $oo->get_pass();
    $rs['ssport'] = $oo->get_port();
    $rs['sstime'] = date('Y-m-d H:i:s', $oo->get_last_unix_time());
    $rs['transfer'] = $transfers;
    $rs['transfer_all'] = $all_transfer;
    $rs['transfer_unused'] = $unused_transfer;
}
echo json_encode($rs);