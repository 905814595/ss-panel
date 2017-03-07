<?php
require_once '../lib/config.php';
if($_GET['uid'] != ''){
    $uid = $_GET['uid'];
    $node = new Ss\Node\Node();
    $nodes = $node->NodesArray(0);
    $oo = new Ss\User\Ss($uid); 
    $rs['port'] = $oo->get_port();
    $rs['pass'] = $oo->get_pass();
    $rs['nodes'] = $nodes;
}
echo json_encode($rs);